<x-app>
    <title>FIDELISOR - Register Client</title>
    <div class="card card-body border-0 shadow mb-10 mt-5 mx-auto rounded" style="width: 60%;">
        <h3 class="text-info text-center">
           Earn Point
            </h3>
            {{-- <div class="divider py-1 bg-gray-800"></div> --}}
            <form action="{{route("clients.store",$store->id)}}" method="POST" class="d-flex mt-2 mx-2">
                @csrf
                <div class="col mb-2">
                    <div class="mb-3">
                        <label for="">Name<span class="text-danger">*</span></label>

                        <input
                            type="text"
                            name="nom"
                            id=""
                            class="form-control"
                            placeholder="Enter Client Name "
                            aria-describedby="helpId"
                            value="{{old("nom")}}"
                            required
                        />
                        @error('nom') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Email<span class="text-danger">*</span></label>

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
                        <span class="input-group-text" id="basic-addon2">{{$store->countryCode}}</span>
                        <input name="phone" type="number" class="form-control" placeholder="Enter Phone" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{old("phone")}}">
                        @error('phone') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    </div>
                    <div class="mb-3 d-grid gap-2">
                  
                        <button class="btn btn-success btn-block" type="submit">Continue</button>
        
                    </div>
                </div>


            </form>
       
    </div>
</x-app>