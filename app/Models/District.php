<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $table = "ec_districts";
    protected $primaryKey = 'dis_id'; // or null

    public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';
    protected $fillable = [
        'dis_id',
        'dis_name',
        'city_id',
        
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
