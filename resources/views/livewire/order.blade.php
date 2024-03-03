<x-app>
  <title>FIDELISOR - Order</title>

    <div class="card card-body border-0 shadow mb-5 mt-5">
       
        <div class="d-flex flex-row row">
            <div class="p-2 lead me-auto col-xl-5 col-md-12">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="icon icon-x2"  >
                    <path d="M528.1 301.3l47.3-208C578.8 78.3 567.4 64 552 64H159.2l-9.2-44.8C147.8 8 137.9 0 126.5 0H24C10.7 0 0 10.7 0 24v16c0 13.3 10.7 24 24 24h69.9l70.2 343.4C147.3 417.1 136 435.2 136 456c0 30.9 25.1 56 56 56s56-25.1 56-56c0-15.7-6.4-29.8-16.8-40h209.6C430.4 426.2 424 440.3 424 456c0 30.9 25.1 56 56 56s56-25.1 56-56c0-22.2-12.9-41.3-31.6-50.4l5.5-24.3c3.4-15-8-29.3-23.4-29.3H218.1l-6.5-32h293.1c11.2 0 20.9-7.8 23.4-18.7z"/>
                  </svg>
            ORDER
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
           <li><a class="dropdown-item" href="{{route("order.index",$s->id)}}">{{$s->nomStore}}</a></li>
           @endforeach
             </ul>
           </div>
       </div>  
   </div>
   
    <div class="row">
        <div class="col-12">
            <!-- Tab Nav -->
            <div class="nav-wrapper position-relative mb-2">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 d-flex align-items-center justify-content-center" id="tabs-icons-text-2-tab" data-bs-toggle="tab" href="#gift" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">
                            <svg xmlns="http://www.w3.org/2000/svg"  class="icon icon-x2 " viewBox="0 0 512 512">
                                <path d="M190.5 68.8L225.3 128H224 152c-22.1 0-40-17.9-40-40s17.9-40 40-40h2.2c14.9 0 28.8 7.9 36.3 20.8zM64 88c0 14.4 3.5 28 9.6 40H32c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H480c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32H438.4c6.1-12 9.6-25.6 9.6-40c0-48.6-39.4-88-88-88h-2.2c-31.9 0-61.5 16.9-77.7 44.4L256 85.5l-24.1-41C215.7 16.9 186.1 0 154.2 0H152C103.4 0 64 39.4 64 88zm336 0c0 22.1-17.9 40-40 40H288h-1.3l34.8-59.2C329.1 55.9 342.9 48 357.8 48H360c22.1 0 40 17.9 40 40zM32 288V464c0 26.5 21.5 48 48 48H224V288H32zM288 512H432c26.5 0 48-21.5 48-48V288H288V512z"/>
                              </svg>
                       <span class="mx-2"> GIFT CARD ORDER</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End of Tab Nav -->
            <!-- Tab Content -->
            <div class="card border-0">
                <div class="card-body p-0">
                    <div class="tab-content" id="tabcontent2">
                        <div class="tab-pane fade show active" id="gift" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                            <table class="table mt-5">
                                <thead>
                                  <tr>
                                    <th >GIFT CARD  NAME</th>
                                    <th >PAYMENT ID </th>
                                    <th >PAYMENT CODE </th>
                                    <th>Quantite</th>
                                    <th >AMOUNT</th>
                                    <th >ORDER DATE</th>
                                
                                  </tr>
                                </thead>
                                <tbody >
                                  @if ($profiles->first() == null)
                                  <tr>
                                    <td align="center" colspan="6">No Data Found</td>
                                  </tr>      
                                  @else
                                      @foreach ($profiles as $profile)
                                      @foreach ($profile->purchases as $purchases)
                                      <tr>      
                                        <td>{{$purchases->variation->gift->namecard}}</td>
                                        <td>{{$purchases->id}}</td>
                                        <td>{{$purchases->code}}</td>
                                        <td>{{$purchases->quantite}}</td>
                                        <td >{{$purchases->total_price." ".$purchases->variation->gift->currency}} </td>
                                        <td >{{$purchases->created_at->format("Y-m-d : H:m")}} </td>
                                        
                                      </tr>
                                      
                                      @endforeach
                                      @endforeach
                                  @endif
                                 
                                </tbody>
                              </table>   
                            </div>
                    </div>
                </div>
            </div>
            <!-- End of Tab Content -->
        </div>
    </div>
    </div>
</x-app>