<?php

namespace App\Http\Controllers;

use App\Http\Requests\giftsCardRequest;
use App\Models\giftCard;
use App\Models\store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GiftCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $store = Auth::user()->stores->find($id);
        $gifts = $store->gifts;
        return view("livewire.giftCards.giftCard",compact("gifts","store"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $store = Auth::user()->stores->find($id);
        
        return view("livewire.giftCards.create",compact("store"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(giftsCardRequest $request)
    {
       
        $formfilds = $request->validated();
        $this->updateimage($request,$formfilds);
        $formfilds["id_store"] = $request->id_store;
        giftCard::create($formfilds);
        return redirect()->intended(route("gifts.index",$formfilds["id_store"]))->with("success","your gift Card is successfully created");


    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gift = giftCard::find($id);
        Auth::user()->stores->find($gift->id_store);
        return view("livewire.giftCards.edit", compact("gift"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(giftsCardRequest $request, giftCard $giftCard)
    {
        $fromfilds = $request->validated();
        Auth::user()->stores->find($giftCard->id_store);
        $this->updateimage($request,$fromfilds);
        $giftCard->fill($fromfilds)->update();
        return redirect()->intended(route("gifts.index",$giftCard->id_store))->with("success",'your gift Card is successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(giftCard $giftCard)
    {
        $id_store = $giftCard->id_store;
        Auth::user()->stores->find($id_store); 
        $giftCard->delete();
        return redirect()->intended(route("gifts.index",$id_store))->with("success",'your gift Card is successfully delete');

    }


 

      /**
     * display a listing of analiytics
     */

     public function analytics($id){
        $store = Auth::user()->stores->find($id);
        $client = null;
        $subscribers = 0;
        $giftcardredeem = 0;
        if($store->profiles->first() != null){
            $client = $store->profiles->first();
        foreach($store->profiles as $profile){
            if ($profile->purchases->first() != null){
                $subscribers += 1;
                if ($client->purchases->count() < $profile->purchases->count()){
                    $client = $profile;
                }
            }
            $giftcardredeem += $profile->purchases->count(); 
           


        }
        }
        return view("livewire.giftCards.giftCards-analytics",compact("store","client","subscribers","giftcardredeem"));
      }


      /**
       * display a listing of customer 
       */

       public function customer($id){
        $store = Auth::user()->stores->find($id);
        return view("livewire.giftCards.giftCards-customer",compact("store"));
       }
       private function updateimage(Request $request ,array &$formfilds){
        unset($formfilds["image"]);
        if ($request->hasFile('image')){
          $formfilds["image"] =  $request->file('image')->store("assets/gifts",'public');    
        }
      }

      public function destroyProfile(Request $request){
        $profile = Auth::user()->stores->find($request->store)->profiles->find($request->profile);
        $profile->delete();
        return redirect()->route('gifts.customer',$request->store)->with("success","The profile is successfully delete");
      }
      
}
