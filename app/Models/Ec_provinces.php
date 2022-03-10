<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ec_provinces extends Model
{
    use HasFactory;
    protected $primary_key = null;
    public $incrementing = false;
   
    protected $fillable = [
        'prov_id',
        'prov_name'];

    public function masterstore()
    {
        return $this->hasMany(MasterStore::class);
    }  

    public function userdetails()
    {
        return $this->hasMany(UserDetails::class);
    }  
}
