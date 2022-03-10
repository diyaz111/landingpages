<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
    use HasFactory;
    protected $table='ec_provinces';
    protected $primaryKey = 'prov_id'; // or null

    public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';
   
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
