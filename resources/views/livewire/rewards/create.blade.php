<x-app>
    <title>FIDELISOR - Add Reward</title>

    <div class="card card-body border-0 shadow mb-5 mt-5 mx-auto rounded" style="width: 60%;">
        <h3 class="text-info">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon icon-3x"><path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
            </svg>
            ADD NEW REWARD       
            </h3>
            <div class="divider py-1 bg-gray-800"></div>
            <form action="{{route("rewards.store")}}" method="post" enctype="multipart/form-data" class="d-flex mt-2 mx-2">
                @csrf
                <div class="col mb-2">
                    <div class="mb-3">
                        <label for="">Selected store</label>
                       
                            <select
                                class="form-select form-select-lg"
                                name="id_store"
                                id=""
                            >
                                <option selected value="{{$store->id}}">{{$store->nomStore}}</option>
                    </select>
                    
                    </div>
                    <div class="mb-3">
                        <label for="">Reward Name <span class="text-danger">*</span></label>

                        <input
                            type="text"
                            name="name"
                            id=""
                            class="form-control"
                            placeholder="Enter Reward Name"
                            aria-describedby="helpId"
                            value="{{old("name")}}"
                        />
                        @error('name') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class=" mb-3">
                        <label for=" ">Reward Description</label>
                        <textarea class="form-control" name="description" id="" rows="3">{{old("description")}}</textarea>
                       
                        @error('description') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for=" ">Reward Points <span class="text-danger">*</span></label>
                        <input
                            type="number"
                            name="nbPoint"
                            id=""
                            class="form-control"
                            placeholder="Enter Point Rewards"
                            aria-describedby="helpId"
                            min="1"
                            value="{{old("nbPoint")}}"
                        />
                        @error('nbPoint') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror

                      </div>
                      <div class=" mb-3">
                        <label for="">Reward Validity<span class="text-danger">*</span></label>
                        <input
                            type="date"
                            name="validity"
                            id=""
                            class="form-control"
                            placeholder="Enter validity Rewards"
                            aria-describedby="helpId"
                            value="{{old("validity")}}"
                        />
                        @error('validity') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror

                      </div>
                      <div class="mb-3">
                        <label for="">Reward Quota <span class="text-danger">*</span></label>
                        <input
                            type="number"
                            name="nb_quota"
                            placeholder="Enter Quota Rewards"
                            id=""
                            class="form-control"
                            aria-describedby="helpId"
                            min="1"
                            value="{{old("nb_quota")}}"
                        />
                        @error('nb_quota') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror

                      </div>
                      <div class="mb-3">
                        <label for="">Customer Redeem Validity<span class="text-danger">*</span></label>
                        <input
                            type="number"
                            name="expiration"
                            placeholder="Enter Redeem validity Rewards"
                            id=""
                            class="form-control"
                            aria-describedby="helpId"
                            min="1"
                            value="{{old("expiration")}}"
                        />
                        @error('expiration') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror

                      </div>
                      <div class="input-group mb-3">
                        <label for="">Reward Image <span class="text-danger">*</span></label>
                        <div class="input-group">
                        <input name="image" type="file" class="form-control" id="inputGroupFile02" required>
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        @error('image') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                      </div>
            <div class="mb-3 float-end">
                <a href="{{route("rewards.index",$store->id)}}" class="btn btn-gray-800" >back</a>
                <button class="btn btn-success" type="submit">save</button>

            </div>
                </div>  
            </form>
    </div>
</x-app>