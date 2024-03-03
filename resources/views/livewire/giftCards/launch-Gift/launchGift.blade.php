<x-app>
    <title>FIDELISOR - Store Gifts</title>

    <div class="border border-white  h-100 mt-6 position-relative" style="width: 39rem;margin:0 auto">
        <div>
        <div class="borber rounded-top px-11" style="background-color: #bc6c25">
            <img src="{{asset("storage/".$gift->store->logo)}}" alt="" height="30rem" width="35rem" class=" mx-5 my-2">
        </div>
        <div class="img">
            <img src="{{asset("storage/".$gift->image)}}" alt="" height="240rem" width="100%">
        </div>
        <div class="borber rounded-bottom  text-center text-white py-3" style="background-color: #dda15e">
            {{$gift->namecard}}        </div>
        <div class="borber text-center py-4" style="color:#7f4f24;background-color: #ccd5ae;font-size:17px">

            {{$gift->description}}       
        </div>
        </div>
    </div>
    <div class="borber borber-info  h-100 position-relative" style="width: 36rem;margin:0 auto;">
        <div class="rounded-bottom" style="color:#7f4f24;border:2px solid #ccd5ae;border-top:none">
            @foreach ($gift->variations as $variation)
            <div  style="margin-bottom:1px">
                <div class="d-flex py-3 px-3" style="background-color: #ccd5ae">
                    <div class="p-2 me-auto ">
           {{$variation->variation_name}} 
                    </div>
                    <div class="p-2">
                        
                       <s class="mx-2">{{$variation->old_price." ".$gift->currency}} </s>   {{$variation->new_price." ".$gift->currency}}
                    </div>
                    <div class="px-5">
                    <a
                    href="{{route("gifts.launch.show",$variation->id)}}"
                        class="btn btn-outline-secondary"
                    >
                    Buy
                    </a>
                    
                    </div>
                </div>

            </div>
                
            @endforeach
            
          


            <div class="text-center py-2 ">
        Votre Carte Cadeau est Valable Jusqu'au {{$gift->validite}}. Une fois active vous avez {{$gift->expiration}} jours pour l'utilise en le montrant chez {{$gift->store->nomStore}}
            </div>

        </div>
    </div>
</x-app>