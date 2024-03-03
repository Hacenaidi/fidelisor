<?php

namespace App\Http\Controllers;

use App\Models\store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class orderController extends Controller
{
    /**
     * diplay a listing of resource 
     */
    public function index($id){
        $store = Auth::user()->stores->find($id);
        $profiles = $store->profiles;
        return view ("livewire.order",compact("profiles","store"));
    }
}
