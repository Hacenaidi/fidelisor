<x-app>
    <title>FIDELISOR - Edit Store</title>

    <div class="card card-body border-0 shadow mb-5 mt-5 mx-auto rounded" style="width: 60%;">
        <h3 class="text-info">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-3x"><path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z"/>
            </svg>
            EDIT STORE        
            </h3>
            <div class="divider py-1 bg-gray-800"></div>
            <form action="{{route("stores.update",$store->id)}}" method="post" enctype="multipart/form-data" class="d-flex mt-2 mx-2">
                @csrf
                @method('PUT')
                <div class="col mb-2">
                    <div class="mb-3">
                        <label for="">Store Name <span class="text-danger">*</span></label>
                        <input
                            type="text"
                            name="nomStore"
                            id=""
                            class="form-control"
                            placeholder="Enter Store Name "
                            aria-describedby="helpId"
                            value="{{old("nomStore",$store->nomStore)}}"
                        />
                        @error('nomStore') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Store Location </label>

                        <input
                            type="text"
                            name="location"
                            id=""
                            class="form-control"
                            placeholder="Enter Store Location "
                            aria-describedby="helpId"
                            value="{{old("location",$store->location)}}"
                        />
                        @error('location') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class=" mb-3">
                        <label for=" ">Store URL<span class="text-danger">*</span></label>
                        <div class="input-group">
                        <span class="input-group-text" id="basic-addon2">https://</span>
                        <input name="url" type="text" class="form-control" placeholder="Enter Sto" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{old("url",$store->url)}}">
                        <span class="input-group-text" id="basic-addon2">Simplevendrewards.com</span>
                        @error('url') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    </div>
                    <div class="input-group mb-3">
                        <label for="">Store Logo</label>
                        <div class="input-group">
                        <input name="logo" type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        @error('logo') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                      </div>
                      <div class="mb-3">
                        <label for="">Store Point</label>
                        <input
                            type="number"
                            name="point"
                            id=""
                            class="form-control"
                            placeholder="Enter Store Location "
                            aria-describedby="helpId"
                            min="1";
                            value="{{old("point",$store->point)}}"
                        />
                        @error('point') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Phone Number Country Code : </label>

                        <select
                            class="form-select form-select-lg"
                            name="countryCode"
                            id=""
                        >

                          <option  value="{{old("countryCode",$store->countryCode)}}">Sélectionnez un pays</option>
                          <option value="+216">Tunisia</option>
                          <option value="+93">Afghanista</option>
                          <option value="+27">Afrique du Sud</option>
                          <option value="+355">Albanie</option>
                          <option value="+213">Algérie</option>
                          <option value="+49">Allemagn</option>
                          <option value="+376">Andorre</option>
                          <option value="+244">Angola</option>
                          <option value="+1264">Anguilla </option>
                          <option value="+1268">Antigua-et-Barbuda </option>
                          <option value="+599">Antilles néerlandaises</option>
                          <option value="+966">Arabie saoudite</option>
                          <option value="+54">Argentin</option>
                          <option value="+374">Arménie</option>
                          <option value="+297">Aruba</option>
                          <option value="+61">Australi</option>
                          <option value="+43">Autrich</option>
                          <option value="+994">Azerbaïdjan</option>
                          <option value="+1242">Bahamas </option>
                          <option value="+973">Bahreïn</option>
                          <option value="+880">Bangladesh</option>
                          <option value="+1246">Barbade </option>
                          <option value="+32">Belgiqu</option>
                          <option value="+501">Belize</option>
                          <option value="+229">Bénin</option>
                          <option value="+1441">Bermudes </option>
                          <option value="+975">Bhoutan</option>
                          <option value="+591">Bolivie</option>
                          <option value="+387">Bosnie-Herzégovine</option>
                          <option value="+267">Botswana</option>
                          <option value="+55">Brési</option>
                          <option value="+673">Brunei</option>
                          <option value="+359">Bulgarie</option>
                          <option value="+226">Burkina Faso</option>
                          <option value="+257">Burundi</option>
                          <option value="+855">Cambodge</option>
                          <option value="+237">Cameroun</option>
                          <option value="+1">Cana</option>
                          <option value="+238">Cap-Vert</option>
                          <option value="+1345">Îles Caïmans </option>
                          <option value="+236">République centrafricaine</option>
                          <option value="+56">Chil</option>
                          <option value="+86">Chin</option>
                          <option value="+357">Chypre</option>
                          <option value="+57">Colombi</option>
                          <option value="+269">Comores</option>
                          <option value="+242">Congo</option>
                          <option value="+682">Îles Cook</option>
                          <option value="+850">Corée du Nord</option>
                          <option value="+82">Corée du Su</option>
                          <option value="+506">Costa Rica</option>
                          <option value="+225">Côte d'Ivoire</option>
                          <option value="+385">Croatie</option>
                          <option value="+53">Cub</option>
                          <option value="+45">Danemar</option>
                          <option value="+253">Djibouti</option>
                          <option value="+1767">Dominique </option>
                          <option value="+20">Égypt</option>
                          <option value="+971">Émirats arabes unis</option>
                        </select>
                        @error('countryCode') <div  class="invalid-feedback"> {{$message}}</div>
                        @enderror
                </div>
            <div class="mb-3 float-end">
                <a href="{{route("stores.index")}}" class="btn btn-gray-800" >back</a>
                <button class="btn btn-success" type="submit">Update</button>

            </div>
                </div>  
            </form>
    </div>
</x-app>