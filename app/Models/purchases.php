<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class purchases extends Model
{
    use HasFactory;

    use SoftDeletes;


    protected $fillable = [
        'id_profile',
        'id_variation',
        'quantite',
        'total_price',
        'code'
    ];

    public function variation(){
        return $this->belongsTo(variation::class,'id_variation');
    }
    public function profile(){
        return $this->belongsTo(profile::class,'id_profile');
    }
}
