<?php

namespace App\Http\Controllers;

use App\Mail\purchasesMail;
use App\Models\giftCard;
use App\Models\profile;
use App\Models\purchases;
use App\Models\store;
use App\Models\variation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {

        $gift = giftCard::find($id);
        if ($gift->variations->first() == null){
            return redirect()->intended(route("gifts.index",$gift->store->id))->with("fail","you have not created any variation");
        }elseif($gift->nb_max == 0 ){
            return redirect()->intended(route("gifts.index",$gift->store->id))->with("fail","There is no quota for the launch");

        }elseif(strcmp($gift->validite,date("Y-m-d")) == -1){

            return redirect()->intended(route("gifts.index",$gift->store->id))->with("fail","The validity of gift has expired");

        }else{
            return view("livewire.giftCards.launch-Gift.launchGift",compact('gift'));

        }
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $variation = variation::find($id);
        return view("livewire.giftCards.launch-Gift.acheterGift",compact("variation"));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function store(Request $request)
    {
        $formfilds = $request->validate([
            'nom' => 'required|max:30',
            'email' => 'required|email',
            'phone' => 'max:14',
            'quantite' => 'required|numeric',
        ]);
        $variation = variation::find($request->id);
        if($variation->gift->nb_max == 0){
            return redirect()->route("gifts.launch.show",$variation->gift->id)->with("fail","you can't buy this gift because it is finechted");
        }elseif($variation->gift->nb_max < $formfilds['quantite']){
            return redirect()->route("gifts.launch.show",$variation->gift->id)->with("fail","you can't buy this gift Quantite invalid ");
        }
        $id_store = $variation->gift->store->id;
        $profile = profile::where('nom','=',$formfilds["nom"])->where('email','=',$formfilds["email"])->where("id_store",'=',$id_store)->first();
        $code = Str::random(10);
       
        $variation->gift->update([
            'nb_max' => $variation->gift->nb_max -= $formfilds['quantite'],
        ]);

        if ($profile == null){
           $profile =  profile::create([
                'nom' => $formfilds["nom"],
                'email'=> $formfilds["email"],
                'phone'=> $formfilds["phone"],
                'comptePoint' => 0,
                'id_store' => $id_store,
            ]);
        }
        $purchases = purchases::create([
            'id_profile' => $profile->id,
            'id_variation' => $request->id,
            'quantite' => $formfilds['quantite'],
            'total_price' => ($formfilds['quantite']*$variation->new_price),
            'code' => $code,
        ]);
        Mail::to($purchases->profile->email)->send(new purchasesMail($purchases));
        return redirect()->intended(route('gifts.launch.resultat',$purchases->id));

    }

    /**
     * show the resultat de achat.
     */
   public function resultat(purchases $purchases){
    return view("livewire.giftCards.launch-Gift.resultat",compact("purchases"));

}

public function validation(Request $request , store $store){
    // $store = Auth::user()->stores->find($request->store);
    $purchase = null;
    if ($request->id != null){
        $purchase = purchases::withTrashed()->find($request->id);
       
    }
    return view("livewire.giftCards.giftCard-validation",compact("store","purchase"));

}

public function validated(Request $request){
    $code = $request->validate([
        'code' => "required|max:10|min:10"
    ]);
    $purchase = purchases::where('code','=',$code)->first();
    if ($purchase == null || $purchase->profile->id_store != $request->store){
        return redirect()->route("gifts.validation",$request->store)->with("incorrect","The code is incorrect");
    }elseif(strcmp($purchase->created_at->addDays($purchase->variation->gift->expiration)->format("y-m-d"),date("y-m-d")) == -1){
        return redirect()->route("gifts.validation",$request->store)->with("incorrect","The code is invalid");
    }else{
        $id = $purchase->id;
        $purchase->delete();
        return redirect()->route("gifts.validation",[$request->store,$id])->with("valid","");

    }

    
}
}
