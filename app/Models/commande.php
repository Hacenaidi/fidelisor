<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class commande extends Model
{
    use HasFactory;
    use SoftDeletes;



    protected $fillable = [
            'id_profile',
            'id_reward',
            'expiration',
            'code',
    ];

    public function reward(){
        return $this->belongsTo(reward::class,"id_reward");
    }
    public function profile(){
        return $this->belongsTo(profile::class,"id_profile");
    }
}
