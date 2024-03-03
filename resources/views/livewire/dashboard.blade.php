<x-app>
    <style>
       .box:hover {
    border : solid 3px red;
    box-shadow: 0px 1px 8px 1px  rgb(224, 3, 3);
}
    </style>
<title>FIDELISOR - Dashboard</title>
<div class="card-body  bg-gray-800 text-white rounded my-4 p-4">
 <h2>
<span class="px-2 rounded-circle bg-danger border mx-2">{{strtoupper(substr(auth()->user()->first_name,0,1))}}</span>
welcome back <span class="text-success">{{auth()->user()->first_name}}</span>
</h2>
<p class="px-6">Your account setup is completed successfully. Start creating your first store </p>
</div>
<div class="card card-body border-0 shadow mb-5">
   
<div class="row ">
    <div class="col-md-4 col-sm-6 col-xl-4 mb-3 ">
            <div class="card-body  bg-gray-800 text-white rounded box">
                <div class="row d-block d-xl-flex align-items-center ">
                    <div class="col-5 col-xl-5 text-xl-center mb-1 mb-xl-1  ">
                        <div class="icon-shape ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="icon icon-xl ">
                                <path d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z"/></svg> 
                        </div>
                    </div>
                    <div class="col-12 col-xl-7  card-titre">
                        <div class="row">
                        <div class="col-12 d-none d-sm-block  ">
                            @if ($point>0)
                                <h2 class=" mb-4 px-4 float-end">{{$point}}</h2>     
                                @else
                                    
                                <h2 class=" mb-4 px-4 float-end">-</h2>  
                                @endif
                               
                        </div>
                        <div class="col-12  d-flex mt-1">                               
                            <h4>Activity Loyalty Point </h4>
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
                            @if ($purchese>0)
                            <h2 class=" mb-4 px-4 float-end">{{$purchese}}</h2>
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
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-xl"  >
                       <path d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z"/>
                    </svg> </div>
                    </div>
                    <div class="col-12 col-xl-7  card-titre">
                        <div class="row">
                        <div class="col-12 d-none d-sm-block  ">
                            @if($commande >0 )
                            <h2 class=" mb-4 px-4 float-end">{{$commande}}</h2>
                            @else
                            <h2 class=" mb-4 px-4 float-end">-</h2>
                            @endif
                        </div>
                        <div class="col-12  d-flex mt-1">                               
                            <h4>Rewards Redeemed </h4>
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
                       <svg class="icon icon-xl" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 616 512"> 
                     <path d="M602 118.6L537.1 15C531.3 5.7 521 0 510 0H106C95 0 84.7 5.7 78.9 15L14 118.6c-33.5 53.5-3.8 127.9 58.8 136.4 4.5 .6 9.1 .9 13.7 .9 29.6 0 55.8-13 73.8-33.1 18 20.1 44.3 33.1 73.8 33.1 29.6 0 55.8-13 73.8-33.1 18 20.1 44.3 33.1 73.8 33.1 29.6 0 55.8-13 73.8-33.1 18.1 20.1 44.3 33.1 73.8 33.1 4.7 0 9.2-.3 13.7-.9 62.8-8.4 92.6-82.8 59-136.4zM529.5 288c-10 0-19.9-1.5-29.5-3.8V384H116v-99.8c-9.6 2.2-19.5 3.8-29.5 3.8-6 0-12.1-.4-18-1.2-5.6-.8-11.1-2.1-16.4-3.6V480c0 17.7 14.3 32 32 32h448c17.7 0 32-14.3 32-32V283.2c-5.4 1.6-10.8 2.9-16.4 3.6-6.1 .8-12.1 1.2-18.2 1.2z"/>
                    </svg>
                       </div>
                    </div>
                    <div class="col-12 col-xl-7  card-titre">
                        <div class="row">
                        <div class="col-12 d-none d-sm-block  ">
                            @if (auth()->user()->stores->count()>0)
                            <h2 class=" mb-4 px-4 float-end">{{auth()->user()->stores->count()}}</h2>     
                            @else
                                
                            <h2 class=" mb-4 px-4 float-end">-</h2>  
                            @endif
                           
                        </div>
                        <div class="col-sl-12 col-md-10 col-sm-12 mt-xl-1 ">                               
                            <h4>Store Created </h4>
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
                                @if ($gifts>0)
                                <h2 class=" mb-4 px-4 float-end">{{$gifts}}</h2>     
                                @else
                                    
                                <h2 class=" mb-4 px-4 float-end">-</h2>  
                                @endif
                               
                            </div>
                        <div class="col-12  d-flex mt-1">                               
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
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 616 512 " class="icon icon-xl">
                                <path d="M97.1 362.6c-8.7-8.7-4.2-6.2-25.1-11.9-9.5-2.6-17.9-7.5-25.4-13.3L1.2 448.7c-4.4 10.8 3.8 22.5 15.4 22l52.7-2L105.6 507c8 8.4 22 5.8 26.4-5l52.1-127.6c-10.8 6-22.9 9.6-35.3 9.6-19.5 0-37.8-7.6-51.6-21.4zM382.8 448.7l-45.4-111.2c-7.6 5.9-15.9 10.8-25.4 13.3-21.1 5.6-16.5 3.2-25.1 11.9-13.8 13.8-32.1 21.4-51.6 21.4-12.4 0-24.5-3.6-35.3-9.6L252 502c4.4 10.8 18.4 13.4 26.4 5l36.3-38.3 52.7 2c11.6 .4 19.8-11.3 15.4-22zM263 340c15.3-15.6 17-14.2 38.8-20.1 13.9-3.8 24.8-14.8 28.5-29 7.5-28.4 5.5-25 26-45.8 10.2-10.4 14.1-25.4 10.4-39.6-7.5-28.4-7.5-24.4 0-52.8 3.7-14.1-.3-29.2-10.4-39.6-20.4-20.8-18.5-17.4-26-45.8-3.7-14.1-14.6-25.2-28.5-29-27.9-7.6-24.5-5.6-45-26.4-10.2-10.4-25-14.4-38.9-10.6-27.9 7.6-24 7.6-51.9 0-13.9-3.8-28.7 .3-38.9 10.6-20.4 20.8-17.1 18.8-44.9 26.4-13.9 3.8-24.8 14.8-28.5 29-7.5 28.4-5.5 25-26 45.8-10.2 10.4-14.2 25.4-10.4 39.6 7.5 28.4 7.5 24.4 0 52.8-3.7 14.1 .3 29.2 10.4 39.6 20.4 20.8 18.5 17.4 26 45.8 3.7 14.1 14.6 25.2 28.5 29C104.6 326 106.3 325 121 340c13.2 13.5 33.8 15.9 49.7 5.8a39.7 39.7 0 0 1 42.5 0c15.9 10.1 36.5 7.7 49.7-5.8zM97.7 176c0-53 42.2-96 94.3-96s94.3 43 94.3 96-42.2 96-94.3 96-94.3-43-94.3-96z"/>
                              </svg> </div>
                    </div>
                    <div class="col-12 col-xl-7  card-titre">
                        <div class="row">
                            <div class="col-12 d-none d-sm-block  ">
                                @if ($rewards>0)
                                <h2 class=" mb-4 px-4 float-end">{{$rewards}}</h2>     
                                @else
                                    
                                <h2 class=" mb-4 px-4 float-end">-</h2>  
                                @endif
                               
                            </div>
                        <div class="col-xl-12 col-sm-9 d-flex mt-1">                               
                            <h4>Rewards Created </h4>
                        </div>
                        </div>
                    </div>
            </div>
    </div>

    </div>

    

   
</div>   
</div>    

</x-app>                      
