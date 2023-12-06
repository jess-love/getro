<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function cart_item(){
        return $this->belongsTo(cart_item::class);
    }
    protected $fillable =['user_id'];

}
