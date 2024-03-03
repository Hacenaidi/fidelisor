<x-app>
    <title>FIDELISOR - Visit</title>

    <style>
        input[type="number"]{
            border:1px solid rgb(7,7,7);
            border-bottom: 2px solid green;
            background-color: rgb(7, 7, 7);
            text-align: center;
            width: 140px;
            font-size: 20px;
            color: green;
            text-decoration: none;

        }
    </style>
    {{$url}}
        <div>
        <div class="border border-white  h-100 mt-6 position-relative" style="width: 28rem;margin:0 auto">
        <div class="position-absolute rounded" style="width: 8rem ; left:35%;top:-30px;background-color:rgb(84, 84, 84)" >
            <img class="rounded mx-auto d-block " src="{{asset("storage/".$store->logo)}}" alt="" width="60px" height="70px">
        </div>

            <div class="bg-info h-50 p-5 rounded-top ">
                <h2 class="text-white text-center">SCAN TO REDEEM A REWARD </h2>
                <hr class="bg-white" style="height: 2px">
                <p  class="text-white text-center mb-5">
                    simple scan the code below to earn points and redeem a reward in the process. 
                </p>
            </div>
            <div class="bg-warning h-50 p-5 rounded-bottom">
                <p class="text-center mt-8">Please use a QR code reader on your device to earn your point</p>
                <p class="text-center">Need help ? Please ask one of our friendly staff and they will be happy to assist</p>
            </div>
          @if (session()->has("success"))
          <div class="text-center text-white rounded-3 position-absolute py-3" style="width:22rem;top:32%;left:11%">
                
           {!!
           QrCode::size(250)->generate($url)
            !!}
                 
            </div>
          @else
          <div class="text-center text-white rounded-3 position-absolute py-3" style="background-color: rgb(7, 7, 7);width:22rem;top:35%;left:12%">
            <h4>Enter your Secret code </h4>
            <p>This is required unlock QR code </p>
            <form action="{{route("stores.validated",$store->id)}}" method="post">
                @csrf
               
            <input type="number" name="code" id="" placeholder="Secret Code" maxlength="4" min="0000" max="9999" > <input type="submit" value="valid" class="btn btn-info">
        </form><br>
            <small>Copy the secret code from the store dashboard </small>
           </div>
          @endif          
        </div>
    </div>
</x-app>