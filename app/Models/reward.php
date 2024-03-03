<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class reward extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'nbPoint',
        'validity',
        'nb_quota',
        'expiration',
        'image',
        'id_store',
    ];

    public function store(){
        return $this->belongsTo(store::class,"id_store");
    }

    public function commandes(){
        return $this->hasMany(commande::class,"id_reward");
    }
}
