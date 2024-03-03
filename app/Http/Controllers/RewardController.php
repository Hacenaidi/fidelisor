<?php

namespace App\Http\Controllers;

use App\Http\Requests\rewardRequest;
use App\Models\purchases;
use App\Models\reward;
use App\Models\store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RewardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $store = Auth::user()->stores->find($id);
        
        $rewards = $store->rewards;
       
        
        return view("livewire.rewards.reward",compact("rewards","store"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $store = Auth::user()->stores->find($id);
        return view("livewire.rewards.create",compact("store"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(rewardRequest $request)
    {
        $fromfilds = $request->validated();
        $this->updateimage($request,$fromfilds);
        $fromfilds["id_store"] = $request->id_store;
        reward::create($fromfilds);
        return redirect()->intended(route("rewards.index",$fromfilds["id_store"]))->with("success","your reward is successfully created");
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reward $reward)
    {  
        Auth::user()->stores->find($reward->id_store);
        return view("livewire.rewards.edit", compact("reward"));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(rewardRequest $request, reward $reward)
    {
        $fromfilds = $request->validated();
        $this->updateimage($request,$fromfilds);
        $reward->fill($fromfilds)->save();
        return redirect()->intended(route("rewards.index",$reward->id_store))->with("success",'your reward is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reward $reward)
    {
        $id_store = $reward->id_store;  
        Auth::user()->stores->find($id_store);
        $reward->delete();
        return redirect()->intended(route("rewards.index",$id_store))->with("success","your reward is successfully delete");

    }

    /**
     * display a listing of analytic
     */

     public function analytics($id){
        $store = Auth::user()->stores->find($id);
        $point = 0 ;
        $subscribers = 0;
        $rewardredeem = 0;
        if($store->profiles->first() != null){
        foreach($store->profiles as $profile){
            $point += $profile->comptePoint; 
            if ($profile->commandes->first() != null){
                $subscribers += 1;
            }
            $rewardredeem += $profile->commandes->count(); 

        }
        }
       return view("livewire.rewards.rewared-analytic",compact("store","point","subscribers","rewardredeem"));
     }


     /**
      * dispaly a listing of customer
      */

      public function customer($id){
         $store = Auth::user()->stores->find($id);
         return view("livewire.rewards.rewared-customer",compact("store"));

      }

      private function updateimage(Request $request ,array &$formfilds){
        unset($formfilds["image"]);
        if ($request->hasFile('image')){
          $formfilds["image"] =  $request->file('image')->store("assets/rewards",'public');    
        }
      }

      public function destroyProfile(Request $request){
        $profile = Auth::user()->stores->find($request->store)->profiles->find($request->profile);
        $profile->delete();
        return redirect()->route('rewards.customer',$request->store)->with("success","The profile is successfully delete");
      }

    
}
