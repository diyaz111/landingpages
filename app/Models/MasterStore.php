<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterStore extends Model
{
    use HasFactory;
    protected $table = "master_store";
    protected $fillable = [
        'user_id',
        'name_site',
        'logo',
        'mini_logo',
        'foto_ktp',
        'nik_ktp',
        'pas_foto',
        'foto_selfie',
        'contact_phone',
        'contact_address',
        'contact_email',
        'deskripsi',
    ];

    public function user()
        {
            return $this->belongsTo(User::class);
        }

    public function accsesrole()
    {
        return $this->hasMany(Accsesrole::class);
    }
    
    public function provinces()
    {
        return $this->belongsTo(Ec_provinces::class);
    }
}
