<x-app>
    <title>FIDELISOR - Customer Reward</title>

    <div class="card card-body border-0 shadow mb-5 mt-5">
       
        <div class="d-flex flex-row row">
         <div class="p-2 lead me-auto col-xl-5 col-md-12">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 616 512 " class="icon icon-x2">
                <path d="M97.1 362.6c-8.7-8.7-4.2-6.2-25.1-11.9-9.5-2.6-17.9-7.5-25.4-13.3L1.2 448.7c-4.4 10.8 3.8 22.5 15.4 22l52.7-2L105.6 507c8 8.4 22 5.8 26.4-5l52.1-127.6c-10.8 6-22.9 9.6-35.3 9.6-19.5 0-37.8-7.6-51.6-21.4zM382.8 448.7l-45.4-111.2c-7.6 5.9-15.9 10.8-25.4 13.3-21.1 5.6-16.5 3.2-25.1 11.9-13.8 13.8-32.1 21.4-51.6 21.4-12.4 0-24.5-3.6-35.3-9.6L252 502c4.4 10.8 18.4 13.4 26.4 5l36.3-38.3 52.7 2c11.6 .4 19.8-11.3 15.4-22zM263 340c15.3-15.6 17-14.2 38.8-20.1 13.9-3.8 24.8-14.8 28.5-29 7.5-28.4 5.5-25 26-45.8 10.2-10.4 14.1-25.4 10.4-39.6-7.5-28.4-7.5-24.4 0-52.8 3.7-14.1-.3-29.2-10.4-39.6-20.4-20.8-18.5-17.4-26-45.8-3.7-14.1-14.6-25.2-28.5-29-27.9-7.6-24.5-5.6-45-26.4-10.2-10.4-25-14.4-38.9-10.6-27.9 7.6-24 7.6-51.9 0-13.9-3.8-28.7 .3-38.9 10.6-20.4 20.8-17.1 18.8-44.9 26.4-13.9 3.8-24.8 14.8-28.5 29-7.5 28.4-5.5 25-26 45.8-10.2 10.4-14.2 25.4-10.4 39.6 7.5 28.4 7.5 24.4 0 52.8-3.7 14.1 .3 29.2 10.4 39.6 20.4 20.8 18.5 17.4 26 45.8 3.7 14.1 14.6 25.2 28.5 29C104.6 326 106.3 325 121 340c13.2 13.5 33.8 15.9 49.7 5.8a39.7 39.7 0 0 1 42.5 0c15.9 10.1 36.5 7.7 49.7-5.8zM97.7 176c0-53 42.2-96 94.3-96s94.3 43 94.3 96-42.2 96-94.3 96-94.3-43-94.3-96z"/>
              </svg>
         REWARD CUSTOMER
         <span
             class="border bg-info rounded p-2 text-dark"
             >Total : {{$store->profiles->count()}}</span >
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
         <li><a class="dropdown-item" href="{{route("rewards.customer",$s->id)}}">{{$s->nomStore}}</a></li>
         @endforeach
           </ul>
         </div>
     </div>  
 </div>
 

         <table class="table mt-5">
            <thead>
              <tr>
                <th ></th>
                <th >NAME </th>
                <th >EMAIL</th>
                <th >Phone</th>
                <th >Active point </th>
                <th >CREATED </th>
                <th >STATUS </th>
                <th >ACTION </th>

              </tr>
            </thead>
            <tbody >
                @if ($store->profiles->first() != null)
                @foreach ($store->profiles as $profile)
                <tr>
                    <td align="center"> <div  class="bg-danger border border-white rounded-circle mb-2" style="width:2.5rem;">
                        <span class="text-white" style="font-size: 25px">
                            {{strtoupper(substr($profile->nom,0,1))}}
                        </span>
                     </div></td>
                    <td>{{$profile->nom}}</td>
                    <td>
                      {{$profile->email}}
                    </td>
                    <td>
                        @if ($profile->phone == null)
                        Null
                    @else
                        {{$profile->phone}}
                    @endif
                    </td>
                    <td ><div class="borber rounded bg-warning col-2 text-center py-1">
                        {{$profile->comptePoint}}
                        </div></td>
                    <td>{{$profile->created_at->format("Y-m-d")}}</td>
                    <td >
                        @if ($profile->commandes->count()>0)
                       <span class="text-success">Active</span>
                       @else
                       <span class="text-danger">Not Active</span>
                       @endif
                    </td>
                    <td><div class="btn-group">
                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon icon-sm">
                                <span class="fas fa-ellipsis-h icon-dark"></span>
                            </span>
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu py-0">
                            {{-- <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                            <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a> --}}
                            <form action="{{route("rewards.destroyProfile",[$store->id,$profile->id])}}" method="post">
                                @csrf
                                @method("DELETE")
                            <button class="dropdown-item text-danger rounded-bottom" type="submit"><span class="fas fa-trash-alt me-2"></span>Remove</button>

                            </form>
                        </div>
                    </div></td>
                  </tr>
                  <tr>
                @endforeach
           
                @else
                  <tr>
                    <td colspan="8" align="center">No data Found</td>
                    </tr>  
                @endif
               
                
            </tbody>
          </table>
          
    </div>
</x-app>