<?php

namespace App\Http\Controllers;

use App\Http\Requests\profileRequest;
use App\Models\profile;
use App\Models\reward;
use App\Models\store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register($id)
    {
        $store = store::find($id);
        $store->update([
            'nb_scan' => intval($store->nb_scan) + 1
        ]);
        return view("livewire.Client.register",compact("store"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function index(profile $profile)
    {
        return view("livewire.Client.dashboardClient",compact("profile"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(profileRequest $request)
    {
        $formfilds = $request->validated();
        $profile = profile::where('nom','=',$formfilds["nom"])->where('email','=',$formfilds["email"])->where("id_store",'=',$request->store)->first();
        if ($profile == null){
            $profile =  profile::create([
                 'nom' => $formfilds["nom"],
                 'email'=> $formfilds["email"],
                 'phone'=> $formfilds["phone"],
                 'comptePoint' => 0,
                 'id_store' => $request->store,
             ]);
             $profile->update([
                'comptePoint' => $profile->comptePoint + $profile->store->point,
        ]);
            }else{
        if (strcmp(date("y-m-d"),$profile->updated_at->format("y-m-d")) == 1){
            $profile->update([
                'comptePoint' => $profile->comptePoint + $profile->store->point,
        ]);}
    }
        return redirect()->route("clients.index",$profile->id);
         
    }


   
}
