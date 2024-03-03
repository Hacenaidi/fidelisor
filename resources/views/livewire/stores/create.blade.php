<x-app>
    <title>FIDELISOR - Add Store</title>

    <div class="card card-body border-0 shadow mb-5 mt-5 mx-auto rounded" style="width: 60%;">
        <h3 class="text-info">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon icon-3x"><path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
            </svg>
            ADD NEW STORE        
            </h3>
            <div class="divider py-1 bg-gray-800"></div>
            <form action="{{route("stores.store")}}" method="post" enctype="multipart/form-data" class="d-flex mt-2 mx-2">
                @csrf
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
                            value="{{old("nomStore")}}"
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
                            value="{{old("location")}}"
                        />
                        @error('location') <div  class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class=" mb-3">
                        <label for=" ">Store URL<span class="text-danger">*</span></label>
                        <div class="input-group">
                        <span class="input-group-text" id="basic-addon2">https://</span>
                        <input name="url" type="text" class="form-control" placeholder="Enter Sto" aria-label="Recipient's username" aria-describedby="basic-addon2"    value="{{old("url")}}">
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
                        <label for="">Phone Number Country Code : </label>

                        <select
                            class="form-select form-select-lg"
                            name="countryCode"
                            id=""
                        >
                        
                          <option value="" selected>Sélectionnez un pays</option>
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
                <button class="btn btn-success" type="submit">save</button>

            </div>
                </div>  
            </form>
    </div>
</x-app>