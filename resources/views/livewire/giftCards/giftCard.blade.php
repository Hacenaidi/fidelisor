<x-app>
  <title>FIDELISOR - Gift Card</title>

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
            <div class="p-2 lead me-auto mt-1 col-xl-5 col-md-12">
                <svg xmlns="http://www.w3.org/2000/svg"  class="icon icon-x2 " viewBox="0 0 512 512">
                    <path d="M190.5 68.8L225.3 128H224 152c-22.1 0-40-17.9-40-40s17.9-40 40-40h2.2c14.9 0 28.8 7.9 36.3 20.8zM64 88c0 14.4 3.5 28 9.6 40H32c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H480c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32H438.4c6.1-12 9.6-25.6 9.6-40c0-48.6-39.4-88-88-88h-2.2c-31.9 0-61.5 16.9-77.7 44.4L256 85.5l-24.1-41C215.7 16.9 186.1 0 154.2 0H152C103.4 0 64 39.4 64 88zm336 0c0 22.1-17.9 40-40 40H288h-1.3l34.8-59.2C329.1 55.9 342.9 48 357.8 48H360c22.1 0 40 17.9 40 40zM32 288V464c0 26.5 21.5 48 48 48H224V288H32zM288 512H432c26.5 0 48-21.5 48-48V288H288V512z"/>
                  </svg>
            GIFT CARD LIST
            <span  class="border bg-info rounded p-2 text-dark" >
                Total : {{$gifts->count()  }}</span >
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
              
                <li><a class="dropdown-item" href="{{route("gifts.index",$s->id)}}">{{$s->nomStore}}</a></li>
                @endforeach
                  </ul>
                </div>
            </div>  
        </div>
        
       <div class="row">
        <div class="col-md-6 col-sm-6 col-xl-4 mb-3 ">

          <a href="{{route("gifts.create",$store->id)}}">
          <div class="  card mt-3 py-5 bg-gray-800 text-white rounded box-red" >
            <svg xmlns="http://www.w3.org/2000/svg"  class="icon icon-xl" viewBox="0 0 512 512">
                <path d="M190.5 68.8L225.3 128H224 152c-22.1 0-40-17.9-40-40s17.9-40 40-40h2.2c14.9 0 28.8 7.9 36.3 20.8zM64 88c0 14.4 3.5 28 9.6 40H32c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H480c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32H438.4c6.1-12 9.6-25.6 9.6-40c0-48.6-39.4-88-88-88h-2.2c-31.9 0-61.5 16.9-77.7 44.4L256 85.5l-24.1-41C215.7 16.9 186.1 0 154.2 0H152C103.4 0 64 39.4 64 88zm336 0c0 22.1-17.9 40-40 40H288h-1.3l34.8-59.2C329.1 55.9 342.9 48 357.8 48H360c22.1 0 40 17.9 40 40zM32 288V464c0 26.5 21.5 48 48 48H224V288H32zM288 512H432c26.5 0 48-21.5 48-48V288H288V512z"/>
              </svg>
            <div class="card-body d-flex justify-content-center pt-4">
               <h4 class="card-title ">
                <span class="fas fa-plus me-2"></span></h4>
                <h4 class="card-text "> Create New Gift Card</h4>            
              </div>
            </div>
          </a> 
        </div>
        @if ($gifts->first() != null)
        @foreach ($gifts as $gift)
        <div class="col-md-6 col-sm-6 col-xl-4 mb-3 px-1">
          <div class="card mt-3  bg-gray-800 text-white rounded box-orange"  >
            <img src="{{asset("storage/".$gift->image)}}" class="card-img" alt="image" height="257rem">
            <div class="card-img-overlay">          
                    <div class="row align-items-center">
                      <div class="col-xl-12 col-md-12 col-sm-12">
                        <div class="row">
                          <h4 class="text-info col-xl-8 col-md-8 col-sm-8"> {{$gift->namecard}}</h4>
                          <div class="col-xl-3 col-md-4 col-sm-4">
                            <div class="btn-group">
                              <div class="dropdown">
                                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                  Action
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                  <li><a class="dropdown-item" href="{{route("gifts.variations.create",$gift->id)}}">Add Variation</a></li>
                                  <li><a class="dropdown-item" href="{{route("gifts.variations.index",$gift->id)}}">List variation</a></li>
                                  <li><a class="dropdown-item" href="{{route("gifts.edit",$gift->id)}}">Edit</a></li>
                                  <li><a class="dropdown-item" href="{{route("gifts.launch.index",$gift->id)}}">launch Gift</a></li>
                                  <li> <form action="{{route("gifts.destroy",$gift->id)}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                  <button type="submit" class="dropdown-item">Delete</button>
                                  </form></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-12 col-md-12 col-sm-12">
                          <p><span class="px-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon"><path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/>
                          </svg></span>{{$gift->created_at->format('d-M-Y')}}</p>
                      </div>
                      </div>
                      <div class="col-12  text-center  mt-2" style="overflow:unset">
                    <p class="lead text-dark ">{{$gift->description}}</p>
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