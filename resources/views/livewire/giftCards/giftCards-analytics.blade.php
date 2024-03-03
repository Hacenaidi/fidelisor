<x-app>
    <title>FIDELISOR - Analytics Gift</title>

    <style>
        .box:hover {
     border : solid 3px red;
     box-shadow: 0px 1px 8px 1px  rgb(224, 3, 3);
 }
     </style>
    <div class="card card-body border-0 shadow mb-5 mt-5">
       
        <div class="d-flex flex-row mb-3 row">
            <div class="p-2 lead me-auto col-xl-6 col-md-12 col-sm-12">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 616 512 " class="icon icon-x2">
                    <path d="M97.1 362.6c-8.7-8.7-4.2-6.2-25.1-11.9-9.5-2.6-17.9-7.5-25.4-13.3L1.2 448.7c-4.4 10.8 3.8 22.5 15.4 22l52.7-2L105.6 507c8 8.4 22 5.8 26.4-5l52.1-127.6c-10.8 6-22.9 9.6-35.3 9.6-19.5 0-37.8-7.6-51.6-21.4zM382.8 448.7l-45.4-111.2c-7.6 5.9-15.9 10.8-25.4 13.3-21.1 5.6-16.5 3.2-25.1 11.9-13.8 13.8-32.1 21.4-51.6 21.4-12.4 0-24.5-3.6-35.3-9.6L252 502c4.4 10.8 18.4 13.4 26.4 5l36.3-38.3 52.7 2c11.6 .4 19.8-11.3 15.4-22zM263 340c15.3-15.6 17-14.2 38.8-20.1 13.9-3.8 24.8-14.8 28.5-29 7.5-28.4 5.5-25 26-45.8 10.2-10.4 14.1-25.4 10.4-39.6-7.5-28.4-7.5-24.4 0-52.8 3.7-14.1-.3-29.2-10.4-39.6-20.4-20.8-18.5-17.4-26-45.8-3.7-14.1-14.6-25.2-28.5-29-27.9-7.6-24.5-5.6-45-26.4-10.2-10.4-25-14.4-38.9-10.6-27.9 7.6-24 7.6-51.9 0-13.9-3.8-28.7 .3-38.9 10.6-20.4 20.8-17.1 18.8-44.9 26.4-13.9 3.8-24.8 14.8-28.5 29-7.5 28.4-5.5 25-26 45.8-10.2 10.4-14.2 25.4-10.4 39.6 7.5 28.4 7.5 24.4 0 52.8-3.7 14.1 .3 29.2 10.4 39.6 20.4 20.8 18.5 17.4 26 45.8 3.7 14.1 14.6 25.2 28.5 29C104.6 326 106.3 325 121 340c13.2 13.5 33.8 15.9 49.7 5.8a39.7 39.7 0 0 1 42.5 0c15.9 10.1 36.5 7.7 49.7-5.8zM97.7 176c0-53 42.2-96 94.3-96s94.3 43 94.3 96-42.2 96-94.3 96-94.3-43-94.3-96z"/>
                  </svg>
            GIFT CARD ANALYTICS
                </div>
                <div class="p-2 mt-2 col-xl-1 col-md-2 col-sm-2">
                    <h6> Store :</h6>
                 </div>
                   <div class="p-2 col-xl-2 col-md-3 col-sm-10">
                     <div class="dropdown">
                       <button class=" border btn btn-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="width: 10rem">
                         {{$store->nomStore}}
                       </button>
                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                         @foreach (Auth()->user()->stores as $s)
                     <li><a class="dropdown-item" href="{{route("gifts.analytics",$s->id)}}">{{$s->nomStore}}</a></li>
                     @endforeach
                       </ul>
                     </div>
                 </div>  
             </div>
        <div class="row ">
            <div class="col-md-4 col-sm-6 col-xl-4 mb-3 ">
                    <div class="card-body  bg-gray-800 text-white rounded box">
                        <div class="row d-block d-xl-flex align-items-center ">
                            <div class="col-5 col-xl-5 text-xl-center mb-1 mb-xl-1  ">
                                <div class="icon-shape ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="icon icon-xl"><path d="M353.8 54.1L330.2 6.3c-3.9-8.3-16.1-8.6-20.4 0L286.2 54.1l-52.3 7.5c-9.3 1.4-13.3 12.9-6.4 19.8l38 37-9 52.1c-1.4 9.3 8.2 16.5 16.8 12.2l46.9-24.8 46.6 24.4c8.6 4.3 18.3-2.9 16.8-12.2l-9-52.1 38-36.6c6.8-6.8 2.9-18.3-6.4-19.8l-52.3-7.5zM256 256c-17.7 0-32 14.3-32 32V480c0 17.7 14.3 32 32 32H384c17.7 0 32-14.3 32-32V288c0-17.7-14.3-32-32-32H256zM32 320c-17.7 0-32 14.3-32 32V480c0 17.7 14.3 32 32 32H160c17.7 0 32-14.3 32-32V352c0-17.7-14.3-32-32-32H32zm416 96v64c0 17.7 14.3 32 32 32H608c17.7 0 32-14.3 32-32V416c0-17.7-14.3-32-32-32H480c-17.7 0-32 14.3-32 32z"/>
                                    </svg> </div>
                            </div>
                            <div class="col-12 col-xl-7  card-titre">
                                <div class="row">
                                <div class="col-12 d-none d-sm-block  ">
                                    @if ($client != null)
                                        <h2 class=" mb-1 px-4 float-end">{{$client->nom}}</h2>     
                                        @else
                                            
                                        <h2 class=" mb-1 px-4 float-end">-</h2>  
                                        @endif
                                       
                                </div>
                                <div class="col-xl-12 mt-xl-4 col-md-7 mt-md-3  d-flex mt-0 ">                               
                                    <h5 style="font-size: 24px">Top customer in purchase </h5>
                                </div>
                                </div>
                            </div>
                    </div>
            </div>
        
            </div>
        
            <div class="col-md-4 col-sm-6 col-xl-4 mb-3 ">
                    <div class="card-body  bg-gray-800 text-white rounded box">
                        <div class="row d-block d-xl-flex align-items-center ">
                            <div class="col-5 col-xl-5 text-xl-center mb-1 mb-xl-1  ">
                            <div class="icon-shape ">
                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="icon icon-xl"  >
                                 <path d="M528.1 301.3l47.3-208C578.8 78.3 567.4 64 552 64H159.2l-9.2-44.8C147.8 8 137.9 0 126.5 0H24C10.7 0 0 10.7 0 24v16c0 13.3 10.7 24 24 24h69.9l70.2 343.4C147.3 417.1 136 435.2 136 456c0 30.9 25.1 56 56 56s56-25.1 56-56c0-15.7-6.4-29.8-16.8-40h209.6C430.4 426.2 424 440.3 424 456c0 30.9 25.1 56 56 56s56-25.1 56-56c0-22.2-12.9-41.3-31.6-50.4l5.5-24.3c3.4-15-8-29.3-23.4-29.3H218.1l-6.5-32h293.1c11.2 0 20.9-7.8 23.4-18.7z"/>
                            </svg>
                             </div>
                            </div>
                            <div class="col-12 col-xl-7  card-titre">
                                <div class="row">
                                <div class="col-12 d-none d-sm-block  ">
                                    @if ($store->profiles->count() > 0)
                                    <h2 class=" mb-4 px-4 float-end">{{$store->profiles->count()}}</h2>
                                        
                                    @else
                                    <h2 class=" mb-4 px-4 float-end">-</h2>
                                        
                                    @endif
                                </div>
                                <div class="col-xl-7 col-md-8 col-sm-12 mt-xl-2 mt-md-4 ">                               
                                    <h5 style="font-size: 22px">Visitors Count</h5>
                                </div>
                                </div>
                            </div>
                    </div>
            </div>
        
            </div>
        
           
            <div class="col-md-4 col-sm-6 col-xl-4 mb-3 ">
      
                <div class="card-body  bg-gray-800 text-white rounded box">
                    <div class="row d-block d-xl-flex align-items-center ">
                        <div class="col-5 col-xl-5 text-xl-center mb-1 mb-xl-1  ">
                           <div class="icon-shape ">
                          <svg xmlns="http://www.w3.org/2000/svg"  class="icon icon-xl" viewBox="0 0 512 512">
                         <path d="M190.5 68.8L225.3 128H224 152c-22.1 0-40-17.9-40-40s17.9-40 40-40h2.2c14.9 0 28.8 7.9 36.3 20.8zM64 88c0 14.4 3.5 28 9.6 40H32c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H480c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32H438.4c6.1-12 9.6-25.6 9.6-40c0-48.6-39.4-88-88-88h-2.2c-31.9 0-61.5 16.9-77.7 44.4L256 85.5l-24.1-41C215.7 16.9 186.1 0 154.2 0H152C103.4 0 64 39.4 64 88zm336 0c0 22.1-17.9 40-40 40H288h-1.3l34.8-59.2C329.1 55.9 342.9 48 357.8 48H360c22.1 0 40 17.9 40 40zM32 288V464c0 26.5 21.5 48 48 48H224V288H32zM288 512H432c26.5 0 48-21.5 48-48V288H288V512z"/>
                      </svg> </div>
                        </div>
                        <div class="col-12 col-xl-7  card-titre">
                            <div class="row">
                                <div class="col-12 d-none d-sm-block  ">
                                    @if ($store->gifts->count()>0)
                                    <h2 class=" mb-4 px-4 float-end">{{$store->gifts->count()}}</h2>     
                                    @else
                                        
                                    <h2 class=" mb-4 px-4 float-end">-</h2>  
                                    @endif
                                   
                                </div>
                            <div class="col-sl-12  col-md-8 col-sm-7 mt-xl-1 mt-md-4">                               
                                <h4>Gift Card Created  </h4>
                            </div>
                            </div>
                        </div>
                </div>
        </div>
    
        </div>
    
        
            <div class="col-md-4 col-sm-6 col-xl-4 mb-3 ">
                <div class="card-body  bg-gray-800 text-white rounded box">
                    <div class="row d-block d-xl-flex align-items-center ">
                        <div class="col-5 col-xl-5 text-xl-center mb-1 mb-xl-1  ">
                        <div class="icon-shape ">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="icon icon-xl"  >
                             <path d="M528.1 301.3l47.3-208C578.8 78.3 567.4 64 552 64H159.2l-9.2-44.8C147.8 8 137.9 0 126.5 0H24C10.7 0 0 10.7 0 24v16c0 13.3 10.7 24 24 24h69.9l70.2 343.4C147.3 417.1 136 435.2 136 456c0 30.9 25.1 56 56 56s56-25.1 56-56c0-15.7-6.4-29.8-16.8-40h209.6C430.4 426.2 424 440.3 424 456c0 30.9 25.1 56 56 56s56-25.1 56-56c0-22.2-12.9-41.3-31.6-50.4l5.5-24.3c3.4-15-8-29.3-23.4-29.3H218.1l-6.5-32h293.1c11.2 0 20.9-7.8 23.4-18.7z"/>
                        </svg>
                         </div>
                        </div>
                        <div class="col-12 col-xl-7  card-titre">
                            <div class="row">
                            <div class="col-12 d-none d-sm-block  ">
                                @if ($giftcardredeem > 0)
                                <h2 class=" mb-4 px-4 float-end">{{$giftcardredeem}}</h2>
                                    
                                @else
                                <h2 class=" mb-4 px-4 float-end">-</h2>
                                    
                                @endif
                            </div>
                            <div class="col-12  d-flex mt-1">                               
                                <h5 style="font-size: 22px">Gift Cards Redeemed </h5>
                            </div>
                            </div>
                        </div>
                </div>
        </div>
            </div>
    
   
            <div class="col-md-4 col-sm-6 col-xl-4 mb-3 ">
              
                <div class="card-body  bg-gray-800 text-white rounded box">
                    <div class="row d-block d-xl-flex align-items-center ">
                        <div class="col-5 col-xl-5 text-xl-center mb-1 mb-xl-1  ">
                            <div class="icon-shape ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-xl"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                                </svg> </div>
                        </div>
                        <div class="col-12 col-xl-7  card-titre">
                            <div class="row">
                                <div class="col-12 d-none d-sm-block  ">
                                    @if ($subscribers>0)
                                    <h2 class=" mb-4 px-4 float-end">{{$subscribers}}</h2>     
                                    @else
                                        
                                    <h2 class=" mb-4 px-4 float-end">-</h2>  
                                    @endif
                                   
                                </div>
                            <div class="col-12  d-flex mt-1">                               
                                <h4>Subscribers Count </h4>
                            </div>
                            </div>
                        </div>
                </div>
        </div>
    
        </div>

      
            
        
           
        </div>   

    </div>
    
</x-app>