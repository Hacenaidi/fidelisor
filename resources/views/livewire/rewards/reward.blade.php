<x-app>
  <title>FIDELISOR - Reward</title>

    <style>
.box-red:hover {
    border : solid 3px red;
    box-shadow: 0px 1px 8px 1px  rgb(224, 3, 3);
}
.box-orange:hover {
    border : solid 3px orangered;
    box-shadow: 0px 1px 8px 1px  rgb(224, 3, 3);
}
    </style>

    <div class="card card-body border-0 shadow mb-5 mt-5">
       
        <div class="d-flex flex-row row">
            <div class="p-2 lead me-auto col-xl-5 col-md-12">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 616 512 " class="icon icon-x2">
                    <path d="M97.1 362.6c-8.7-8.7-4.2-6.2-25.1-11.9-9.5-2.6-17.9-7.5-25.4-13.3L1.2 448.7c-4.4 10.8 3.8 22.5 15.4 22l52.7-2L105.6 507c8 8.4 22 5.8 26.4-5l52.1-127.6c-10.8 6-22.9 9.6-35.3 9.6-19.5 0-37.8-7.6-51.6-21.4zM382.8 448.7l-45.4-111.2c-7.6 5.9-15.9 10.8-25.4 13.3-21.1 5.6-16.5 3.2-25.1 11.9-13.8 13.8-32.1 21.4-51.6 21.4-12.4 0-24.5-3.6-35.3-9.6L252 502c4.4 10.8 18.4 13.4 26.4 5l36.3-38.3 52.7 2c11.6 .4 19.8-11.3 15.4-22zM263 340c15.3-15.6 17-14.2 38.8-20.1 13.9-3.8 24.8-14.8 28.5-29 7.5-28.4 5.5-25 26-45.8 10.2-10.4 14.1-25.4 10.4-39.6-7.5-28.4-7.5-24.4 0-52.8 3.7-14.1-.3-29.2-10.4-39.6-20.4-20.8-18.5-17.4-26-45.8-3.7-14.1-14.6-25.2-28.5-29-27.9-7.6-24.5-5.6-45-26.4-10.2-10.4-25-14.4-38.9-10.6-27.9 7.6-24 7.6-51.9 0-13.9-3.8-28.7 .3-38.9 10.6-20.4 20.8-17.1 18.8-44.9 26.4-13.9 3.8-24.8 14.8-28.5 29-7.5 28.4-5.5 25-26 45.8-10.2 10.4-14.2 25.4-10.4 39.6 7.5 28.4 7.5 24.4 0 52.8-3.7 14.1 .3 29.2 10.4 39.6 20.4 20.8 18.5 17.4 26 45.8 3.7 14.1 14.6 25.2 28.5 29C104.6 326 106.3 325 121 340c13.2 13.5 33.8 15.9 49.7 5.8a39.7 39.7 0 0 1 42.5 0c15.9 10.1 36.5 7.7 49.7-5.8zM97.7 176c0-53 42.2-96 94.3-96s94.3 43 94.3 96-42.2 96-94.3 96-94.3-43-94.3-96z"/>
                  </svg>
            REWARD LIST
            <span  class="border bg-info rounded p-2 text-dark" >
                Total : {{$rewards->count()  }}</span >
        </div>
       
            <div class="p-2 mt-2 col-xl-1 col-md-2 col-sm-2">
               <h6> Store :</h6>
            </div>
              <div class="p-2 col-xl-2 col-md-3 col-sm-3">
                <div class="dropdown">
                  <button class=" border btn btn-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="width: 10rem">
                    {{$store->nomStore}}
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    @foreach (Auth()->user()->stores as $s)
                <li><a class="dropdown-item" href="{{route("rewards.index",$s->id)}}">{{$s->nomStore}}</a></li>
                @endforeach
                  </ul>
                </div>
            </div>  
        </div>
        
       <div class="row">
        <div class="col-md-6 col-sm-6 col-xl-4 mb-3 ">
          <a href="{{route("rewards.create",$store->id)}}">
          <div class="card mt-3 py-5 bg-gray-800 text-white rounded box-red"  >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 616 512 " class="icon icon-xl">
                <path d="M97.1 362.6c-8.7-8.7-4.2-6.2-25.1-11.9-9.5-2.6-17.9-7.5-25.4-13.3L1.2 448.7c-4.4 10.8 3.8 22.5 15.4 22l52.7-2L105.6 507c8 8.4 22 5.8 26.4-5l52.1-127.6c-10.8 6-22.9 9.6-35.3 9.6-19.5 0-37.8-7.6-51.6-21.4zM382.8 448.7l-45.4-111.2c-7.6 5.9-15.9 10.8-25.4 13.3-21.1 5.6-16.5 3.2-25.1 11.9-13.8 13.8-32.1 21.4-51.6 21.4-12.4 0-24.5-3.6-35.3-9.6L252 502c4.4 10.8 18.4 13.4 26.4 5l36.3-38.3 52.7 2c11.6 .4 19.8-11.3 15.4-22zM263 340c15.3-15.6 17-14.2 38.8-20.1 13.9-3.8 24.8-14.8 28.5-29 7.5-28.4 5.5-25 26-45.8 10.2-10.4 14.1-25.4 10.4-39.6-7.5-28.4-7.5-24.4 0-52.8 3.7-14.1-.3-29.2-10.4-39.6-20.4-20.8-18.5-17.4-26-45.8-3.7-14.1-14.6-25.2-28.5-29-27.9-7.6-24.5-5.6-45-26.4-10.2-10.4-25-14.4-38.9-10.6-27.9 7.6-24 7.6-51.9 0-13.9-3.8-28.7 .3-38.9 10.6-20.4 20.8-17.1 18.8-44.9 26.4-13.9 3.8-24.8 14.8-28.5 29-7.5 28.4-5.5 25-26 45.8-10.2 10.4-14.2 25.4-10.4 39.6 7.5 28.4 7.5 24.4 0 52.8-3.7 14.1 .3 29.2 10.4 39.6 20.4 20.8 18.5 17.4 26 45.8 3.7 14.1 14.6 25.2 28.5 29C104.6 326 106.3 325 121 340c13.2 13.5 33.8 15.9 49.7 5.8a39.7 39.7 0 0 1 42.5 0c15.9 10.1 36.5 7.7 49.7-5.8zM97.7 176c0-53 42.2-96 94.3-96s94.3 43 94.3 96-42.2 96-94.3 96-94.3-43-94.3-96z"/>
              </svg>
            <div class="card-body d-flex justify-content-center pt-4">
               <h4 class="card-title ">
                <span class="fas fa-plus me-2"></span></h4>
                <h4 class="card-text"> Create New Reward</h4>            
              </div>
            </div>
          </a> 
        </div>
        @if ($rewards->first() != null)
        @foreach ($rewards as $reward)
        <div class="col-md-6 col-sm-6 col-xl-4 mb-3 px-1">
          <div class=" card mt-3  bg-gray-800 text-white rounded box-orange" >
            <img src="{{asset("storage/".$reward->image)}}" class="card-img" alt="image" height="257rem">
            <div class="card-img-overlay">               
                    <div class="row align-items-center">
                       <div class="col-xl-12 col-md-12 col-sm-12">
                        <div class="row">
                      <h3 class="text-info col-xl-8 col-md-8 col-sm-8"> {{$reward->name}}</h3>
                      <div class="col-xl-3 col-md-4 col-sm-4">
                        <div class="btn-group">
                          <div class="dropdown">
                            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                              Action
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                              <li><a class="dropdown-item" href="{{route("rewards.edit",$reward->id)}}">Edit</a></li>
                              <li>
                                <form action="{{route("rewards.destroy",$reward->id)}}" method="post">
                                  @csrf
                                  @method("DELETE")
                                <button type="submit" class="dropdown-item">Delete</button>
                                </form>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                        </div>
                  </div>
                  <div class="col-xl-12 col-md-12 col-sm-12">
                    <p><span class="px-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon"><path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/>
                    </svg></span>{{$reward->created_at->format('d-M-Y')}}</p>
                  </div>
              <div class="col-12 mt-2">
                <small>Point : {{$reward->nbPoint}}</small><br>
                <small>Validity :   until :{{$reward->validity}}</small><br>
                <small>Quota  : {{$reward->nb_quota}}</small>
              </div>
            </div>
            </div>
        </div>
        </div>
        @endforeach
        @endif
      
        
</div>
</div>
</x-app>