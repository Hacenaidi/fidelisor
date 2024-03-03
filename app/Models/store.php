<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class store extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'nomStore',
        'location',
        'url',
        'countryCode',
        'codeScurite',
        'point',
        'logo',
        'id_user',
        'nb_scan'
    ];

    public function rewards(){
        return $this->hasMany(reward::class,"id_store");
    } 
    public function gifts(){
        return $this->hasMany(giftCard::class,"id_store");
    }
    public function profiles(){
        return $this->hasMany(profile::class,"id_store");
       }
}
