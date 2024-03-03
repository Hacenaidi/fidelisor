<?php

namespace App\Http\Controllers;
use App\Http\Requests\storeRequest;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\URL;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    
    public function index()
    {

      $stores = auth()->user()->stores;
      return view("livewire.stores.store",compact("stores"));
    }
    public function visit(Request $request){
        $store = Auth::user()->stores->find($request->id);
        $url = URL::signedRoute('clients.register', ['store' => $store->id]);
       return view("livewire.stores.visit",compact("store","url"));
    }
    public function valid(Request $request){
        $store = Auth::user()->stores->find($request->id);
        if ($request->code == $store->codeScurite){
            return redirect()->intended(route("stores.visit",$store->id))->with("success","");
        }
        else{
            return back();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("livewire.stores.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeRequest $request)
    {
        $formfilds = $request->validated();
       
        $this->uplodeimage($request,$formfilds);
        $formfilds["point"] = 1;
        $formfilds['codeScurite'] = random_int(1000,9999);
        $formfilds['id_user'] = Auth::id();
        $formfilds["nb_scan"] = 0;
        store::create($formfilds);
        return redirect()->intended(route("stores.index"))->with("success","your store is successfully created");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(store $store )
    {
        if($store->id_user !== Auth::id()){
            return redirect()->route("404");
        }else{
            return view("livewire.stores.edit", compact("store"));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(storeRequest $request, store $store)
    {
        $formfilds = $request->validated();
        $this->updateimage($request,$formfilds);
        $store->fill($formfilds)->save();
        return redirect()->intended(route("stores.index"))->with("success",'your store is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $store = Auth::user()->stores()->find($id); 
        $store->delete();
        return redirect()->intended(route("stores.index"))->with("success","your store is successfully delet");

    }

    public function reset(Request $request){
        $store = Auth::user()->stores->find($request->id);
        $store->update([
            'codeScurite' => random_int(1000,9999),
        ]);
        return redirect()->intended(route('stores.index'))->with("success","your security code reset");

    }

    private function uplodeimage(Request $request ,array &$formfilds){
        unset($formfilds["logo"]);
        if($request->hasFile('logo')){    
            $formfilds['logo'] = $request->file("logo")->store("assets/stores","public");
        }else{
            $formfilds['logo'] = 'assets/stores/logo-store.png';
        }
      }
      private function updateimage(Request $request ,array &$formfilds){
        unset($formfilds["logo"]);
        if ($request->hasFile('logo')){
          $formfilds["logo"] =  $request->file('logo')->store("assets/stores",'public');    
        }
      }


   
}
