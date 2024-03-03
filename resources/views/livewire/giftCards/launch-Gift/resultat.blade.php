<x-app>
    <title>FIDELISOR - Resultat Purchase</title>

    <div class="border border-white  h-100 mt-6 position-relative" style="width: 39rem;margin:0 auto">
        <div>
        <div class="borber rounded-top px-11" style="background-color: #bc6c25">
            <img src="{{asset("storage/".$purchases->variation->gift->store->logo)}}" alt="" height="30rem" width="35rem" class=" mx-5 my-2">
        </div>
        <div class="img">
            <img src="{{asset("storage/".$purchases->variation->gift->image)}}" alt="" height="240rem" width="100%">
        </div>
        <div class="borber rounded-bottom  text-center text-white py-3" style="background-color: #dda15e">
            {{$purchases->variation->gift->namecard}}
        </div>
        <div class="borber text-center py-4" style="color:#7f4f24;background-color: #ccd5ae;font-size:17px">

            {{$purchases->variation->gift->description}}

        </div>

        </div>
    </div>
    <div class="borber borber-info  h-100 position-relative" style="width: 36rem;margin:0 auto;">
        <div class="rounded-bottom container" style="color:#7f4f24;border:2px solid #ccd5ae;background-color: #ccd5ae">
            <div class=" mt-3 mb-3 text-center">
                <span class="display-4 ">Summary of your order </span> 
            </div>
            <p class="">{{$purchases->variation->variation_name}}</p>

           <ul type="none" class="mb-4">
            <li>Your name : {{$purchases->profile->nom}}</li>
            <li>By email: {{$purchases->profile->email}}</li>
           </ul>
           <div class="d-flex mb-2">
            <div class="me-auto">
                <span class="display-3">Total</span>
            </div>
            <div class="p-2">
            <span class="display-3">{{$purchases->total_price ." ". $purchases->variation->gift->currency}}</span>
            </div>
           </div>

            <div class=" text-center mb-5">
            <span class="display-5">   Email has been sent with Your Purchase Code </span><br>
            </div>






            </div>
           
           

           

        </div>
   
</x-app>