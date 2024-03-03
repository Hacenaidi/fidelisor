<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class giftCard extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'namecard',
        'description',
        'currency',
        'validite',
        'nb_max',
        'expiration',
        'image',
        'id_store',
    ];

    public function variations(){
        return $this->hasMany(variation::class,"id_gift");
    }

    public function store(){
        return $this->belongsTo(store::class,"id_store");
    }
}
