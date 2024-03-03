<x-app>
    <title>FIDELISOR - Add Gift</title>

    <div class="card card-body border-0 shadow mb-5 mt-5 mx-auto rounded" style="width: 60%;">
        <h3 class="text-info">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon icon-3x"><path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
            </svg>
            ADD NEW GIFT CARD       
            </h3>

            <div class="divider py-1 bg-gray-800"></div>
            <form action="{{route("gifts.store")}}" method="post" enctype="multipart/form-data" class="d-flex mt-2 mx-2">
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
                        <label for="">Gift Card  Name <span class="text-danger">*</span></label>

                        <input
                            type="text"
                            name="namecard"
                            id=""
                            class="form-control"
                            placeholder="Enter Reward Name"
                            aria-describedby="helpId"
                            value="{{old("namecard")}}"
                            required
                            
                        />
                        @error('namecard') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class=" mb-3">
                        <label for=" ">Gift Card Description</label>
                        <textarea class="form-control" name="description" id="" rows="3">
                          {{old("description")}}
                        </textarea>
                       
                        @error('description') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Default Currency<span class="text-danger">*</span></label>
                        <select  name="currency" class="form-select form-select-lg" required>
                            <option value="USD">USD</option>
                            <option value="EUR">EUR</option>
                            <option value="JPY">JPY</option>
                            <option value="GBP">GBP</option>
                            <option value="AUD">AUD</option>
                            <option value="CAD">CAD</option>
                            <option value="CHF">CHF</option>
                            <option value="CNY">CNY</option>
                            <option value="INR">INR</option>
                            <option value="BRL">BRL</option>
                            <option value="ZAR">ZAR</option>
                            <option value="RUB">RUB</option>
                            <option value="SEK">SEK</option>
                            <option value="NZD">NZD</option>
                            <option value="SGD">SGD</option>
                            <option value="HKD">HKD</option>
                            <option value="TRY">TRY</option>
                            <option value="MXN">MXN</option>
                            <option value="KRW">KRW</option>
                            <option value="NOK">NOK</option>
                            <option value="TND" selected>TND</option>
                        </select>
                    
                        @error('currency') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror

                      </div>
                      <div class=" mb-3">
                        <label for="">Gift Card Validity<span class="text-danger">*</span></label>
                        <input
                            type="date"
                            name="validite"
                            id=""
                            class="form-control"
                            placeholder="Enter validity Gift Card"
                            value="{{old("validite")}}"
                            aria-describedby="helpId"
                            required
                        />
                        @error('validite') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror

                      </div>
                      <div class="mb-3">
                        <label for="">Gift Card Quota <span class="text-danger">*</span></label>
                        <input
                            type="number"
                            name="nb_max"
                            id=""
                            class="form-control"
                            placeholder="Enter Reward Limit"
                            value="{{old("nb_max")}}"
                            aria-describedby="helpId"
                            min="1"
                            required
                        />
                        @error('nb_max') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror

                      </div>
                      <div class="mb-3">
                        <label for="">Customer Redeem Validity<span class="text-danger">*</span></label>
                        <select  name="expiration" class="form-select form-select-lg" required>
                      <option value="1">1 Day</option>
                      <option value="2">2 Day</option>
                      <option value="3">3 Day</option>
                      <option value="4">4 Day</option>
                      <option value="5">5 Day</option>
                      <option value="6">6 Day</option>
                      <option value="7">7 Day</option>
                      <option value="8">8 Day</option>
                      <option value="9">9 Day</option>
                      <option value="10">10 Day</option>
                      <option value="11">11 Day</option>
                      <option value="12">12 Day</option>
                      <option value="13">13 Day</option>
                      <option value="14">14 Day</option>
                      <option value="15">15 Day</option>
                        </select>
                        @error('expiration') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror

                      </div>
                      <div class="input-group mb-3">
                        <label for="">Gift Card Image <span class="text-danger">*</span></label>
                        <div class="input-group">
                        <input name="image" type="file" class="form-control" id="inputGroupFile02" required>
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        @error('image') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                      </div>
            <div class="mb-3 float-end">
                <a href="{{route("gifts.index",$store->id)}}" class="btn btn-gray-800" >back</a>
                <button class="btn btn-success" type="submit">save</button>

            </div>
                </div>  
            </form>
    </div>
</x-app>