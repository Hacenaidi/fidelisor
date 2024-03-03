<x-app>
    <title>FIDELISOR - Purchase Gift</title>

    <div class="border border-white  h-100 mt-6 position-relative" style="width: 39rem;margin:0 auto">
        <div>
        <div class="borber rounded-top px-11" style="background-color: #bc6c25">
            <img src="{{asset("storage/".$variation->gift->store->logo)}}" alt="" height="30rem" width="35rem" class=" mx-5 my-2">
        </div>
        <div class="img">
            <img src="{{asset("storage/".$variation->gift->image)}}" alt="" height="240rem" width="100%">
        </div>
        <div class="borber rounded-bottom  text-center text-white py-3" style="background-color: #dda15e">
           {{$variation->gift->namecard}}
        </div>
        <div class="borber text-center py-4" style="color:#7f4f24;background-color: #ccd5ae;font-size:17px">

{{$variation->gift->description}}       
 </div>

        </div>
    </div>
    <div class="borber borber-info  h-100 position-relative" style="width: 36rem;margin:0 auto;">
        <div class="rounded-bottom" style="color:#7f4f24;border:2px solid #ccd5ae;background-color: #ccd5ae">
            <div class="text-center mt-3">
                <span class="display-3">{{$variation->variation_name}} </span> <br>
                <span class="display-4">{{$variation->new_price." ".$variation->gift->currency}} Carte Cadeau </span>
            <p>For use on a Gift Card {{$variation->gift->store->nomStore}}</p>
            </div>
            <form action="{{route("gifts.launch.store")}}" method="post" class="d-flex mt-2 mx-4">
                @csrf
                <input type="hidden" name="id" value="{{$variation->id}}">
                <div class="col mb-2">
                    <div class="mb-3">
                        <label for="">Quantity</label>

                        <input
                            type="number"
                            name="quantite"
                            id=""
                            class="form-control"
                            step="1"
                            min="1"
                            value="1"
                            aria-describedby="helpId"
                            required
                        />
                        @error('quantite') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Your name</label>

                        <input
                            type="text"
                            name="nom"
                            id=""
                            class="form-control"
                            placeholder="Enter Cleint Name "
                            aria-describedby="helpId"
                            value="{{old("nom")}}"
                            required
                        />
                        @error('nom') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>

                        <input
                            type="text"
                            name="email"
                            id=""
                            class="form-control"
                            placeholder="Enter Client Email "
                            aria-describedby="helpId"
                            value="{{old("email")}}"
                            required
                        />
                        @error('email') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class=" mb-3">
                        <label for=" ">Phone (aptionel)</label>
                        <div class="input-group">
                        <span class="input-group-text" id="basic-addon2">+216</span>
                        <input name="phone" type="number" class="form-control" placeholder="Enter Phone" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{old("phone")}}">
                        @error('phone') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    </div>
                    <div class="mx-6">
                        <button class="btn btn-outline-secondary" type="submit"><span class="display-4">Continue</span> </button>
                        <a href="{{route("gifts.launch.index",$variation->gift->id)}}" class="btn btn-outline-secondary" ><span class="display-4">Back</span></a>
                    </div>
                    
        
                   
                </div>


            </form>
       
            
           

            </div>
           
           

           

        </div>
   
</x-app>