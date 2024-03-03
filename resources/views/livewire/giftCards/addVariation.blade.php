<x-app>
    <title>FIDELISOR - Add Variation</title>

    <div class="card card-body border-0 shadow mb-4 mt-4 mx-auto rounded" style="width: 50%;">
        <h3 class="text-info">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="icon icon-x3" >
                <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
              </svg>
            ADD VARIATION      
            </h3>
            <div class="divider py-1 bg-gray-800"></div>
            <form action="{{route("gifts.variations.store")}}" method="post" class="d-flex mt-3 mx-2">
                @csrf
                <div class="col mb-2">
                    <div class="mb-3">
                        <label for="">Gift Card Name</label>
                        <select
                            class="form-select form-select-lg"
                            name="id_gift"
                            id=""
                        >
                            <option selected value="{{$gift->id}}">{{$gift->namecard}}</option>
                            
                        </select>
                       </div>
                   
                    <div class="mb-3">
                        <label for="">Variation Name<span class="text-danger">*</span></label>

                        <input
                            type="text"
                            name="variation_name"
                            id=""
                            class="form-control"
                            placeholder="Enter Variation Name "
                            aria-describedby="helpId"
                            value="{{old("variation_name")}}"
                            required
                        />
                        @error('variation_name') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class=" mb-3">
                        <label for=" ">Variation Short Description <span class="text-danger">*</span></label>
                        
                            <textarea class="form-control" name="description" id="" rows="3" required>
                                {{old("description")}}
                            </textarea>
                        
                        @error('description') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class=" mb-3">
                        <label for=" ">Amount <span class="text-danger">*</span></label>
                        <div class="input-group">
                        <span class="input-group-text" id="basic-addon2">{{$gift->currency}}</span>
                        <input name="new_price" type="number" class="form-control" placeholder="Enter Amount" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{old("new_price")}}" required>
                        @error('new_price') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    </div>
                    <div class=" mb-3">
                        <label for="">Value <span class="text-danger">*</span></label>
                        <div class="input-group">
                        <span class="input-group-text" id="basic-addon2">{{$gift->currency}}</span>
                        <input name="old_price" type="number" class="form-control" placeholder="Enter Value" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{old("old_price")}}" required>
                        @error('old_price') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    </div>
                    <div class="mb-3 float-end">
                        <a href="{{route("gifts.index",$gift->id_store)}}" class="btn btn-gray-800" >back</a>
                        <button class="btn btn-success" type="submit">save</button>
        
                    </div>
                </div>


            </form>
       
    </div>
</x-app>