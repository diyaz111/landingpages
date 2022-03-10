<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\UserDetails;
use App\Models\Accsesrole;
use App\Models\User;
use App\Models\MasterStore;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\WithFileUploads;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Auth;
use App\Models\Provinces;
use App\Models\District;
use App\Models\Cities;

class Wizard extends Component
{
    
    use AuthorizesRequests;
    use WithFileUploads;
    use LivewireAlert;
    
    public $currentStep = 1;
    
    public $id_user;
    public $fullname;
    public $phone;
    public $gender;
    public $foto_user;
    public $province = NULL;
    public $city;
    public $district;
    public $postal_code;
    public $alamat;
    public $password; 
    public $name_site;
    public $logo; 
    public $mini_logo;
    public $foto_ktp;
    public $nik_ktp;
    public $pas_foto;
    public $foto_selfie;
    public $user_id = '';
    public $address;
    public $bio;
    public $provinsi;
    public $kecamatan;
    public $kota;
    public $urban;
    public $contact_phone;
    public $contact_email;
    public $contact_address;
    public $deskripsi;
   
  
   
    public function render()
    {
        $provinsi = Provinces::all();
        return view('livewire.wizard');
    }
  
    public function mount()
    {
        $this->provinsi = Provinces::all();
        $this->kecamatan = District::all();
        $this->cities = Cities::all();
        
    }

    public function firstStepSubmit()
    {

        $validatedData = $this->validate([
          
            'fullname' => 'required',
            'foto_user' => 'image|max:1024',
            'gender'=>'required',
            'province'=>'required',
            'city'=>'required',
            'district'=>'required',
            'postal_code'=>'required',
            'address' =>'',
            'bio'=>'',
            'phone'=>'',
            'urban'=>'',
        ]);
         
        $this->currentStep = 2;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([

            'user_id' =>'',
            'name_site' => 'required',
            'logo.*' => 'image|max:1024',
            'mini_logo.*'=>'image|max:1024',
            'foto_ktp.*'=>'image|max:1024',
            'nik_ktp'=>'required',
            'pas_foto.*'=>'image|max:1024',
            'foto_selfie.*'=>'image|max:1024',
            'contact_phone' => '',
            'contact_address' => '',
            'contact_email' => '',
            'deskripsi' =>'',
        ]); 
            
        $this->currentStep = 3;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm()
    {
        
        $provinsi = Provinces::all();
        $kecamatan = District::all();
        $cities = Cities::all();
       
        $user = User::all();

        $store= Accsesrole::all();

        UserDetails::create([
            'id_user' => Auth::user()->id,
            
            'fullname'=>$this->fullname,
            'foto_user'=>$this->foto_user->store('Foto_userImages', 'public'),
            'gender'=>$this->gender,
           
            'province' => $this->province,
            'city' => $this->city,
            'district'=> $this->district,
            'postal_code'=>$this->postal_code,
            'address'=>$this->address,
            'bio'=>$this->bio,
            'phone'=>$this->phone,
            'urban'=>$this->urban,
            
        ]);
        
        $store = MasterStore::create([
            'user_id' => Auth::user()->id,
            
            'name_site' => $this->name_site,
            
            'logo' => $this->logo->store('LogoImages','public'),
            'mini_logo'=>$this->mini_logo->store('MinilogoImages','public'),
            'foto_ktp'=>$this->foto_ktp->store('Foto_ktpImages','public'),
            'nik_ktp'=>$this->nik_ktp,
            'pas_foto'=>$this->pas_foto->store('Pas_fotoImages','public'),
            'foto_selfie'=>$this->foto_selfie->store('Foto_SelfiImages','public'),
            'contact_phone' =>$this->contact_phone,
            'contact_address'  =>$this->contact_address,
            'contact_email' =>$this->contact_email,
            'deskrpsi' =>$this->deskripsi,
        ]);  
        
        $access = Accsesrole::create([
            'user_id'=>Auth::user()->id,
            'role_id'=>1,
            'id_store' => $store->id
        ]);
        
        return redirect()->to('/pesan');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;    
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function clearForm()
    {
       
        $this->fullname;
        $this->foto_user;
        $this->gende;
       
        $this->province;
        $this->city;
        $this->district;
        $this->postal_code;
        $this->name_site= '';
        $this->logo= '';
        $this->mini_logo= '';
        $this->foto_ktp= '';
        $this->nik_ktp= '';
        $this->pas_foto= '';
        $this->foto_selfie= '';
       
    }

    
}
