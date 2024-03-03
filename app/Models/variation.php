<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class variation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'variation_name',
        'description',
        'new_price',
        'old_price',
        'id_gift',
    ];


    public function gift(){
        return $this->belongsTo(giftCard::class,"id_gift");
    }

    public function purchases(){
        return $this->hasMany(purchases::class,'id_variation');
    }
}
