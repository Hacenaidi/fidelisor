<?php

namespace App\Http\Controllers;

use App\Models\giftCard;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class dashboardController extends Controller
{
    public function index(Request $request){
        $gifts = 0 ;
        $rewards = 0 ;
        $point = 0;
        $commande = 0;
        $purchese = 0 ;
        if(auth()->user()->stores->first() != null){
            
        foreach (auth()->user()->stores as $store) {
            if($store->gifts->first() != null){
                $gifts += $store->gifts->count();
            }
             if($store->rewards->first() != null){
                $rewards += $store->rewards->count();
             }
              foreach($store->profiles as $profile){
                $point += $profile->comptePoint;
                $commande += $profile->commandes->count();
                $purchese += $profile->purchases->count();

              }
        }}
        return view("livewire.dashboard" ,compact("rewards","gifts","point","commande","purchese"));
    }
}
