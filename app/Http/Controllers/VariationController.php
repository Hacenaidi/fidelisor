<?php

namespace App\Http\Controllers;

use App\Http\Requests\variationRequest;
use App\Models\giftCard;
use App\Models\variation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VariationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
       $gift =  giftCard::find($id);
       $variations = $gift->variations;
       return view("livewire.giftCards.variations",compact('variations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $gift = giftCard::find($id);
        Auth::user()->stores->find($gift->id_store);
        return view("livewire.giftCards.addVariation",compact("gift"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(variationRequest $request)
    {
        $fromfilds = $request->validated();
        $fromfilds["id_gift"] = $request->id_gift;
        $variation = variation::create($fromfilds);
        
        return redirect()->intended(route("gifts.index",$variation->gift->store->id))->with("success","your variation is successfully created");
        
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(variationRequest $request, variation $variation)
    {
        $fromfilds = $request->validated();
        $variation->fill($fromfilds)->save();
        return redirect()->intended(route("gifts.variations.index",$variation->id_gift))->with('success',"your variation is successfully update");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(variation $variation)
    {
        $id_gift = $variation->id_gift;
        Auth::user()->stores->find($variation->gift->id_store);
        $variation->delete();
        return redirect()->intended(route("gifts.variations.index",$id_gift))->with('success',"your variation is successfully delete");
    }
}
