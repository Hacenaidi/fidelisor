<?php

namespace App\Http\Controllers;

use App\Mail\commandeMail;
use App\Models\commande;
use App\Models\profile;
use App\Models\reward;
use App\Models\store;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class CommandeController extends Controller
{
    public function commande(Request $request){
        $profile = profile::find($request->profile);
        $reward = reward::find($request->reward);
        if ($profile->comptePoint < $reward->nbPoint){
            return redirect()->route("clients.index",$profile->id);
        }
        $code = Str::random(10);
        $profile->update([
            'comptePoint' => ($profile->comptePoint - $reward->nbPoint),
        ]);

        $reward->update([
            'nb_quota' => $reward->nb_quota -= 1 ,
        ]);
        $commande = commande::create([
            'id_profile' => $profile->id,
            'id_reward' => $reward->id,
            'expiration' => Carbon::now()->addDays($reward->expiration),
            'code' => $code,
        ]);
       
        Mail::to($profile->email)->send(new commandeMail($commande));
        return redirect()->route("clients.index",$profile->id)->with("success","Visit your email for more details");
        
    }

    public function validation(Request $request){
        $store = Auth::user()->stores->find($request->store);
        $commande = null;
        if ($request->id != null){
            $commande = commande::withTrashed()->find($request->id);
        }
            return view("livewire.rewards.reward-validation",compact("store","commande"));
        }

        public function validated(Request $request){
            $code = $request->validate([
                'code' => "required|max:10|min:10"
            ]);
            $commande = commande::where('code','=',$code)->first();
            if ($commande == null || $commande->profile->id_store != $request->store){
                return redirect()->route("rewards.validation",$request->store)->with("incorrect","The code is incorrect");
            }elseif(strcmp($commande->expiration,date("Y-m-d")) == -1){
                return redirect()->route("rewards.validation",$request->store)->with("incorrect","The code is invalid");
            }else{
                $id = $commande->id;
                $commande->delete();
                return redirect()->route("rewards.validation",[$request->store,$id])->with("valid","");
        
            }
        
            
        }
}
