<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postalcode extends Model
{
    use HasFactory;

    protected $table = "ec_postalcode";
    protected $primaryKey = 'postal_id'; // or null

    public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';
    protected $fillable = [
        'postal_id',
        'postal_code',
        'city_id',
        'subdis_id',
        'dis_id',
        'prov_id',
        
    ];

    public function masterstore()
    {
        return $this->hasMany(MasterStore::class);
    }  

    public function userdetails()
    {
        return $this->hasMany(UserDetails::class);
    }
}
