<x-app>
    <title>FIDELISOR - Dashboard Client</title>

@if(session()->has("success"))
<div class="position-absolute top-50 start-50 translate-middle">
    <div class="alert alert-info alert-dismissible fade show " style="width: 25rem" role="alert">
        <span class="fas fa-bullhorn me-1 my-3 mx-4" ></span>
      {{session("success")}}
        <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
@endif

    <div class="borber borber bg-info pt-2 w-100" style="height: 6rem;color:black">
        <div class="d-flex ">
            <div class="p-2 ">
                <img src="{{asset("storage/".$profile->store->logo)}}" alt="" width="50rem" height="50rem">
            </div>
            <div class="p-2 ">
                <span class="display-3 ">Rewards</span>
            </div>
            <div class="py-4">
                <span  class=" bg-danger rounded p-2 text-dark display-5" >
                    Point : {{$profile->comptePoint}}</span >
            </div>
        </div>
       
    </div>
    <div class="row ">
        @if ($profile->store->rewards->where("nb_quota",">","0")->first() != null)
            @foreach ($profile->store->rewards->where("nb_quota",">","0") as $reward)
            <div class="col-md-4 col-sm-6 col-xl-4 mb-3 ">
                <div class="border mt-2  m-3 " >
               
                <div class="borber rounded-top text-white py-3" style="background-color: #bc6c25">
                   <span class="display-5 p-3 ">{{$reward->nbPoint}} Point</span>
                </div>
                <div class="img">
                    <img src="{{asset("storage/".$reward->image)}}" alt="" height="135rem" width="100%">
                </div>
                <div class="borber rounded-bottom  text-center text-white py-3" >
                   <div class="d-flex mx-2">
                    @if ($reward->nbPoint > $profile->comptePoint)
                    <div class="me-auto">
                        <button type="button" class="btn btn-outline-danger " disabled>Not Enough Point</button>
                    </div>
                    @else
                    <div class="me-auto">
                        <a href="{{route("clients.commande",[$profile->id,$reward->id])}}" class="btn btn-outline-info " disabled>Redeem</a>
                    </div>          
                    @endif
                   
                    <div class="p-2">
                    <span class="display-5 text-danger" >{{$reward->name}}</span>
                    </div>
        
                   </div>
                </div>
               
            </div>
        </div>
            @endforeach
            @else
            <div class="col-12 text-center mt-4">
                <h2>There is no reward now</h2>
            </div>
        @endif
   
    </div>
      
</x-app>