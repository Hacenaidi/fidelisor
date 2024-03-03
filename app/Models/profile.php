<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class profile extends Model
{
    use HasFactory;
    use SoftDeletes;




    protected $fillable = [
        'nom',
        'email',
        'phone',
        'comptePoint',
        'id_store',
    ];


    public function purchases(){
        return $this->hasMany(purchases::class,'id_profile')->withTrashed();
    }

    public function store(){
        return $this->belongsTo(store::class,"id_store");
    }

    public function commandes(){
        return $this->hasMany(commande::class,"id_profile")->withTrashed();
    }
}
