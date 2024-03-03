<x-app>
    <title>FIDELISOR - Variation</title>

    <style>
        input , textarea{
            color:black !important;
        }
    </style>
    <div class="card card-body border-0 shadow mb-5 mt-4">
        <h3 class="text-info">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-x3"><path d="M190.5 68.8L225.3 128H224 152c-22.1 0-40-17.9-40-40s17.9-40 40-40h2.2c14.9 0 28.8 7.9 36.3 20.8zM64 88c0 14.4 3.5 28 9.6 40H32c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H480c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32H438.4c6.1-12 9.6-25.6 9.6-40c0-48.6-39.4-88-88-88h-2.2c-31.9 0-61.5 16.9-77.7 44.4L256 85.5l-24.1-41C215.7 16.9 186.1 0 154.2 0H152C103.4 0 64 39.4 64 88zm336 0c0 22.1-17.9 40-40 40H288h-1.3l34.8-59.2C329.1 55.9 342.9 48 357.8 48H360c22.1 0 40 17.9 40 40zM32 288V464c0 26.5 21.5 48 48 48H224V288H32zM288 512H432c26.5 0 48-21.5 48-48V288H288V512z"/>
            </svg>
            LIST VARIATION       
            </h3>
            <div class="divider py-1 bg-gray-800 mb-2" ></div>
        <div class="row mr-2">
            @if ($variations->first() != null)
            @foreach ($variations as $variation)
            <div class="col-3 mb-2 mt-2">
                <div class=" rounded border bg-gray-200 shadow ">
                 <form action="{{route("gifts.variations.destroy",$variation->id)}}" method="post">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="position-relative float-end px-1 rounded" style="border:none">
                         <i class="fa fa-remove" style="font-size:30px;color:red"></i>
                     </button>
                 </form>
                 
                     <form action='{{route("gifts.variations.update",$variation->id)}}' method="POST" class="d-flex mt-2 mx-2">
                        @csrf
                        @method("PUT")
                         <div class="col mb-2">
                             <div class="mb-3">
                                 <label for="">Variation Name<span class="text-danger">*</span></label>
                                 <input
                                     type="text"
                                     name="variation_name"
                                     id=""
                                     class="form-control"
                                     placeholder="Enter Variation Name "
                                     aria-describedby="helpId"
                                     value="{{old("variation_name",$variation->variation_name)}}"
 
                                 />
                                 @error('variation_name') <div  class="invalid-feedback"> {{$message}} </div>
                                 @enderror
                             </div>
                             <div class=" mb-3">
                                 <label for=" ">Variation Short Description <span class="text-danger">*</span></label>                                
                                     <textarea class="form-control" name="description" id="" rows="3">
                                         {{old("description",$variation->description)}}</textarea>                               
                                 @error('description') <div  class="invalid-feedback"> {{$message}} </div>
                                 @enderror
                             </div>
                             <div class=" mb-3">
                                 <label for=" ">Amount <span class="text-danger">*</span></label>
                                 <div class="input-group">
                                 <span class="input-group-text" id="basic-addon2">EUR</span>
                                 <input name="new_price" type="number" class="form-control" placeholder="Enter Amount" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{old("new_price",$variation->new_price)}}">
                                 @error('new_price') <div  class="invalid-feedback"> {{$message}} </div>
                                 @enderror
                             </div>
                             </div>
                             <div class=" mb-3">
                                 <label for="">Value <span class="text-danger">*</span></label>
                                 <div class="input-group">
                                 <span class="input-group-text" id="basic-addon2">EUR</span>
                                 <input name="old_price" type="number" class="form-control" placeholder="Enter Value" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{old("old_price",$variation->old_price)}}">
                                 @error('old_price') <div  class="invalid-feedback"> {{$message}} </div>
                                 @enderror
                             </div>
                             </div>
                             <div class="mb-3 float-end">
                                 <button class="btn btn-success" type="submit">Update</button>               
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
 
 
 
                
            @endforeach
                @else
                <h1 class="text-center">No variations yet</h1>
            @endif



</div>  
 </div>
  

    
</x-app>