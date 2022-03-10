<div>

  
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
                <p>Step 1</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                <p>Step 2</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}" disabled="disabled">3</a>
                <p>Step 3</p>
            </div>
        </div>
    </div>
  
    <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Data Lengkap User</h3>
  
              
                <div class="form-group">
                    <label for="title">FullName:</label>
                    <input type="text" wire:model="fullname" class="form-control" id="fullname">
                    @error('fullname') <span class="error">{{ $message }}</span> @enderror
                </div>
                <label for="foto">Foto User</label>
                    <input type="file" wire:model="foto_user" class="form-control" id="foto_user"/>
                    @error('foto_user.*') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                    <label for="province">Provinsi</label>
                    <select name="province" wire:model="province" id="province" class="form-control">

                    @foreach($provinsi as $kt)   
                    <option value="{{$kt->prov_name}}">
                    {{$kt->prov_name}}
                    </option>
                    @endforeach
                    </select>       
                    </div>                
                </div>
                     
               
        <div class="form-group">
            <label for="city">City</label>
                <select class="form-control" wire:model="city" name="city" id="city">
                   
                    @foreach($cities as $city)
                        <option value="{{ $city->city_name}}">{{ $city->city_name }}</option>
                    @endforeach
                </select>
         
        </div>
        <div class="col-md-12">
                <div class="form-group">
                <label for="district">Kecamatan</label>
                <select class="form-control" wire:model="district" name="district" id="district">

                    @foreach($kecamatan as $kt)   
                    <option value="{{$kt->dis_name}}">
                    {{$kt->dis_name}}
                    </option>
                    @endforeach
                    </select>   
                    @error('district') <span class="error">{{ $message }}</span> @enderror
                </div>
                </div>     
                <div class="form-group">
                  
                    <label for="gender">Gender</label>
                    <select class="form-control" wire:model="gender" name="gender" id="gender">
                    <option value="Laki-Laki">Laki-Laki </option>
                    <option value="Perempuan">Perempuan </option>
                    </select>   
                    @error('district') <span class="error">{{ $message }}</span> @enderror
                </div>
                
                <div class="col-md-12">
                <div class="form-group">
                    <label for="postal_code">Kode Pos</label>
                    <input type="text" wire:model="postal_code" class="form-control" id="postal_code">
                    @error('postal_code') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" wire:model="address" class="form-control" id="address">
                    @error('address') <span class="error">{{ $message }}</span> @enderror
                </div>
                </div>
                <div class="col-md-12">
                <div class="form-group">
                    <label for="bio">Bio</label>
                    <input type="text" wire:model="bio" class="form-control" id="bio">
                    @error('bio') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="phone">No Telepon</label>
                    <input type="text" wire:model="phone" class="form-control" id="phone">
                    @error('phone') <span class="error">{{ $message }}</span> @enderror
                </div>
                </div>
                <div class="col-md-12">
                <div class="form-group">
                    <label for="urban">Urban</label>
                    <input type="text" wire:model="urban" class="form-control" id="urban">
                    @error('urban') <span class="error">{{ $message }}</span> @enderror
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Data Store</h3>
                
                <div class="form-group">
                    <label for="description">Nama Toko</label>
                    <input type="text" wire:model="name_site" class="form-control" id="name_site"/>
                    @error('name_site') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                <label for="mini_logo">Mini Logo</label>
                    <input type="file" wire:model="mini_logo" class="form-control" id="mini_logo"/>
                    @error('minilogo.*') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                <label for="foto">Logo</label>
                    <input type="file" wire:model="logo" class="form-control" id="logo"/>
                    @error('logo.*') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                <label for="foto_ktp">Foto KTP</label>
                    <input type="file" wire:model="foto_ktp" class="form-control" id="foto_ktp"/>
                    @error('foto_ktp.*') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="nik_ktp">NIK KTP</label>
                    <input type="nik_ktp" wire:model="nik_ktp" class="form-control" id="nik_ktp"/>
                    @error('nik_ktp') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                <label for="mini_logo">Mini Logo</label>
                    <input type="file" wire:model="logo" class="form-control" id="logo"/>
                    @error('logo.*') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                <label for="foto_selfie">Foto Selfi</label>
                    <input type="file" wire:model="foto_selfie" class="form-control" id="foto_selfie"/>
                    @error('foto_selfie.*') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                <label for="pas_foto">Pas Foto</label>
                    <input type="file" wire:model="pas_foto" class="form-control" id="pas_foto"/>
                    @error('pas_foto.*') <span class="error">{{ $message }}</span> @enderror
                </div>
                
                <div class="form-group">
                    <label for="contact_phone">No Telepon Toko</label>
                    <input type="contact_phone" wire:model="contact_phone" class="form-control" id="contact_phone"/>
                    @error('contact_phone') <span class="error">{{ $message }}</span> @enderror
                </div>
                
                <div class="form-group">
                    <label for="contact_address">Alamat Toko</label>
                    <input type="contact_address" wire:model="contact_address" class="form-control" id="contact_address"/>
                    @error('contact_address') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="contact_email">Email Toko</label>
                    <input type="contact_email" wire:model="contact_email" class="form-control" id="contact_email"/>
                    @error('contact_email') <span class="error">{{ $message }}</span> @enderror
                </div>
                
                <div class="form-group">
                    <label for="deskripsi">Deskripsi Toko</label>
                    <input type="deskripsi" wire:model="deskripsi" class="form-control" id="deskripsi"/>
                    @error('deskripsi') <span class="error">{{ $message }}</span> @enderror
                </div>
                
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="secondStepSubmit">Next</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>
            </div>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
        <div class="container-fuild">
            <div class="row">
                <div class ="col-md-6">
                    <h3> Step 3</h3>
                    <h4> Data Pengguna </h4>
                    <table class="table">
                        <tr>
                            <td>Nama:</td>
                            <td><strong>{{$fullname}}</strong></td>
                        </tr>
                        <tr>
                            <td>No Telepon:</td>
                            <td><strong>{{$phone}}</strong></td>
                        </tr>
                        <tr>
                        <td>Foto User:</td>
                        <td>
                            @if ($foto_user)
                                <img src="{{ $foto_user->temporaryUrl() }}" style="width:128px;height:128px;">
                            @endif
                        </td>
                        </tr>
                        <tr>
                            <td>Kelamin:</td>
                            <td><strong>{{$gender}}</strong></td>
                        </tr>
                        <tr>
                            <td>Alamat :</td>
                            <td><strong>{{$address}} {{$province}} {{$city}} {{$district}} {{$postal_code}}</strong></td>
                        </tr>
                        
                    </table>
                </div>
                <div class ="col-md-6"> 
                    <br>
                    <br>
                <h4> Data Toko </h4>
                    <table class="table">
                        <tr>
                            <td>Nama Toko:</td>
                            <td><strong>{{$name_site}}</strong></td>
                        </tr>
                        <tr>
                            <td>Logo Toko:</td>
                            <td>@if ($logo)
                                <img src="{{ $logo->temporaryUrl() }}" style="width:128px;height:128px;">
                            @endif
                            </td>
                        </tr>
                        <tr>
                        <td>Mini Logo Toko:</td>
                            <td>
                                @if ($mini_logo)
                                    <img src="{{ $mini_logo->temporaryUrl() }}" style="width:128px;height:128px;">
                                @endif
                            </td>
                        </tr>
                        <tr>
                        <td>Foto KTP:</td>
                            <td>
                                @if ($foto_ktp)
                                    <img src="{{ $foto_ktp->temporaryUrl() }}" style="width:128px;height:128px;">
                                @endif
                            </td>
                        </tr>
                        
                        <tr>
                            <td>NIK KTP:</td>
                            <td><strong>{{$nik_ktp}}</strong></td>
                        </tr>
                        <tr>
                        <td>Pas Foto:</td>
                            <td>
                                @if ($pas_foto)
                                    <img src="{{ $pas_foto->temporaryUrl() }}" style="width:128px;height:128px;">
                                @endif
                            </td>
                        </tr>
                        <tr>
                        <td>Foto Selfie:</td>
                            <td>
                                @if ($foto_selfie)
                                    <img src="{{ $foto_selfie->temporaryUrl() }}" style="width:128px;height:128px;">
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>No Telepon Toko :</td>
                            <td><strong>{{$phone}}</strong></td>
                        </tr>
                        <tr>
                            <td>Alamat Toko :</td>
                            <td><strong>{{$contact_address}}</strong></td>
                        </tr>
                        <tr>
                            <td>Email Toko :</td>
                            <td><strong>{{$contact_email}}</strong></td>
                        </tr>
                        <tr>
                            <td>Deskripsi Toko :</td>
                            <td><strong>{{$deskripsi}}</strong></td>
                        </tr>
                    </table>

                </div>
                <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
            </div>  
        </div>
    </div>
</div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10">
    
    </script>
    <script>
        window.addEventListener('swall', function(e){
            swall.fire(e.detail)
        })
    </script>