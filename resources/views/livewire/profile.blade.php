<x-app>
<title>FIDELISOR - Profile</title>
<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
           
            
    </div>
    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4">General information</h2>
                <form  action="{{route("profilesave")}}" method="post" >
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="first_name">First Name</label>
                                <input name="first_name" class="form-control" id="first_name" type="text" value="{{old("first_name",auth()->user()->first_name)}}"">
                            </div>
                            @error('first_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="last_name">Last Name</label>
                                <input name="last_name" class="form-control" id="last_name" type="text"
                               value="{{old("last_name",auth()->user()->last_name)}}">
                            </div>
                            @error('last_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" class="form-control" id="email" type="email"
                                    value="{{auth()->user()->email}}" readonly >
                            </div>
                           
                        </div>
                        
                    </div>
                    <h2 class="h5 my-4">Location</h2>
                    <div class="row">
                        <div class="col-sm-9 mb-3">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input name="address" class="form-control" id="address" type="text"
                                    placeholder="Enter your home address" value="{{old("address",auth()->user()->address)}}">
                            </div>
                            @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-sm-3 mb-3">
                            <div class="form-group">
                                <label for="number">phone</label>
                                <input name="number" class="form-control" id="number" type="number"
                                    placeholder="280389204" value="{{old("number",auth()->user()->number)}}">
                            </div>
                            @error('number') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input name="city" class="form-control" id="city" type="text"
                                    placeholder="City" value="{{old("city",auth()->user()->city)}}">
                            </div>
                            @error('city') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="ZIP">ZIP</label>
                                <input name="ZIP" class="form-control"  type="number" placeholder="ZIP" value="{{old("ZIP",auth()->user()->ZIP)}}">
                            </div>
                        @error('ZIP') <div class="invalid-feedback">{{ $message }}</div> @enderror

                        </div>
                    </div>
                    
                    <div class="mt-3">
                        <button type="submit" class="btn btn-gray-800 mt-2 animate-up-2">Save All</button>
                    </div>
                    
                </form>
            </div>
        </div>
        <div class="col-12 col-xl-4">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card shadow border-0 text-center p-0">
                        <div wire:ignore.self class="profile-cover rounded-top"
                            data-background="../assets/img/profile-cover.jpg"></div>
                        <div class="card-body pb-5">
                                <div  class="avatar-xl py-4 bg-danger border mx-auto mb-2  mt-n6 rounded-circle" >
                                    <span style="font-size: 50px">
                                        {{strtoupper(substr(auth()->user()->first_name,0,1))}}
                                    </span>
                                 </div>
                            <h4 class="h3">
                                {{  auth()->user()->first_name ? auth()->user()->first_name . ' ' . auth()->user()->last_name : 'User Name'}}
                            </h4>
                            <h5 class="fw-normal">Admin</h5>
                            <p class="text-gray mb-4">{{auth()->user()->address ? auth()->user()->address : ""}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app>