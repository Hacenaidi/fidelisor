<x-app>
  <title>FIDELISOR - Store</title>

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
</head>
<body>
    <div class="card card-body border-0 shadow mb-5 mt-5">
       
       <div class="d-flex flex-row row">
        <div class="p-2 lead col-xl-5 col-md-12">
          <svg class="icon icon-x2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 616 512"> 
            <path d="M602 118.6L537.1 15C531.3 5.7 521 0 510 0H106C95 0 84.7 5.7 78.9 15L14 118.6c-33.5 53.5-3.8 127.9 58.8 136.4 4.5 .6 9.1 .9 13.7 .9 29.6 0 55.8-13 73.8-33.1 18 20.1 44.3 33.1 73.8 33.1 29.6 0 55.8-13 73.8-33.1 18 20.1 44.3 33.1 73.8 33.1 29.6 0 55.8-13 73.8-33.1 18.1 20.1 44.3 33.1 73.8 33.1 4.7 0 9.2-.3 13.7-.9 62.8-8.4 92.6-82.8 59-136.4zM529.5 288c-10 0-19.9-1.5-29.5-3.8V384H116v-99.8c-9.6 2.2-19.5 3.8-29.5 3.8-6 0-12.1-.4-18-1.2-5.6-.8-11.1-2.1-16.4-3.6V480c0 17.7 14.3 32 32 32h448c17.7 0 32-14.3 32-32V283.2c-5.4 1.6-10.8 2.9-16.4 3.6-6.1 .8-12.1 1.2-18.2 1.2z"/>
          </svg>
        STORE LIST
        <span
        class="border bg-info rounded p-2 text-dark "
        >Total : {{auth()->user()->stores->count()}}</span >
      </div>
       
        
        </div>
   
       <div class="row">
    <div class="col-md-6 col-sm-6 col-xl-4 mb-3 ">
       <a href="{{route("stores.create")}}">
          <div class=" row card d-block d-xl-flex mt-3 py-5 bg-gray-800 text-white rounded box-red">
            <svg class=" col-12 icon icon-xl" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 616 512"> 
              <path d="M602 118.6L537.1 15C531.3 5.7 521 0 510 0H106C95 0 84.7 5.7 78.9 15L14 118.6c-33.5 53.5-3.8 127.9 58.8 136.4 4.5 .6 9.1 .9 13.7 .9 29.6 0 55.8-13 73.8-33.1 18 20.1 44.3 33.1 73.8 33.1 29.6 0 55.8-13 73.8-33.1 18 20.1 44.3 33.1 73.8 33.1 29.6 0 55.8-13 73.8-33.1 18.1 20.1 44.3 33.1 73.8 33.1 4.7 0 9.2-.3 13.7-.9 62.8-8.4 92.6-82.8 59-136.4zM529.5 288c-10 0-19.9-1.5-29.5-3.8V384H116v-99.8c-9.6 2.2-19.5 3.8-29.5 3.8-6 0-12.1-.4-18-1.2-5.6-.8-11.1-2.1-16.4-3.6V480c0 17.7 14.3 32 32 32h448c17.7 0 32-14.3 32-32V283.2c-5.4 1.6-10.8 2.9-16.4 3.6-6.1 .8-12.1 1.2-18.2 1.2z"/>
            </svg>
            <div class="card-body col-xl-12  d-flex justify-content-center pt-4">
               <h4 class="card-title ">
                <span class="fas fa-plus me-2"></span></h4>
                <h4 class="card-text "> Create New store</h4>            
              </div>
            </div>
          </a> 
        </div>
        @if($stores->first() !== null)
        @foreach ($stores as $store)
        <div class="col-md-6 col-sm-6 col-xl-4 mb-3 ">
          <div class=" card mt-3  bg-gray-800 text-white rounded box-orange" >
            <div class="container pt-2">
              <div class="row d-block d-xl-flex align-items-center">
                
                  <div class="col-md-12 col-xl-12  mb-1 mb-1 me-auto">
                      <div class="row">
                        <h3 class="text-info col-xl-8 col-md-7 col-sm-7" >{{$store->nomStore}}</h3>
                        <div class="col-xl-2 col-md-3 col-sm-3 ">
                          <div class="btn-group">
                            <div class="dropdown">
                              <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                              </button>
                              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item " href="{{route("stores.visit",$store->id)}}">Visit</a></li>
                                <li><a class="dropdown-item" href="{{route("stores.edit",$store->id)}}">Edit</a></li>
                                <li><a class="dropdown-item" href="{{route("rewards.create",$store->id)}}">Add Reward </a></li>
                                <li><a class="dropdown-item" href="{{route("gifts.create",$store->id)}}">Add Gift </a></li>
                                <li><a class="dropdown-item" href="{{route("stores.reset",$store->id)}}"> code reset</a></li>
                                <li><form action="{{route("stores.destroy",$store->id)}}" method="post">
                                  @csrf
                                  @method("DELETE")
                                  <button class="dropdown-item" type="submit">Delete</button>
                                </form>
                              </li>
                                  
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class=" col-xl-12 col-sm-12 col-md-12">
                      <p><span class="px-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="icon icon-x1">
                        <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                      </svg></span><small>{{$store->location}}</small>,<span class="px-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon"><path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/>
                      </svg></span><small>{{$store->created_at->format('d-M-Y')}}</small></p>
                    </div>
                </div>
              <div class="col-12">
                <img class="rounded mx-auto d-block " src="{{asset("storage/".$store->logo)}}" alt="" width="100%" height="105rem" >
              </div>
              <div class="col-12  align-items-center  my-2">
                <div class="d-flex justify-content-center ">
                  <div class="collapse px-4 " id="contentId{{$store->id}}">{{$store->codeScurite}}</div>
                  <div class="ml-3"><a class="" data-bs-toggle="collapse" href="#contentId{{$store->id}}" aria-expanded="false" aria-controls="contentId" >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="icon blur-sm"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                    </svg> 
                </a>
              </div>
              
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