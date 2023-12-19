<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    public function product_images(){
        return $this->hasMany(product_images::class);
    }


    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function cart() {
//        return $this->hasOne(Cart::class, 'product_id');
        return $this->hasOne(Cart::class, 'product_id')->where('user_id', Auth::id());
    }


}
