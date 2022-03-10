<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accsesrole extends Model
{
    use HasFactory;
    protected $table = "access_role";
    protected $fillable = [
        'user_id',
        'id_store',
        'role_id',
    ];

    public function user()
        {
            return $this->belongsTo(User::class);
        }

    public function masterstore()
    {
        return $this->belongsTo(MasterStore::class);
    }   
}
