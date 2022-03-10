<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;
    protected $table = "user_details";
    protected $fillable = [
        'id_user',
        'fullname',
        'foto_user',
        'gender',
        'address',
        'province',
        'city',
        'district',
        'postal_code',
        'address',
        'bio',
        'phone',
        'urban'
    ];

    public function user()
        {
            return $this->belongsTo(User::class);
        }

        public function provinces()
        {
            return $this->belongsTo(Provinces::class);
        }
        
        public function district()
        {
            return $this->belongsTo(District::class);
        }
        
        public function city()
        {
            return $this->belongsTo(Cities::class);
        }
        
        public function postal_code()
        {
            return $this->belongsTo(Postalcode::class);
        }
}
