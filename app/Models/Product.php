<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function product_images(){
        return $this->hasMany(product_images::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
