<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart_item extends Model
{

    public function cart(){
        return $this->hasMany(Cart::class);
    }
    protected $fillable =['product_id','cart_id','quantity'];
}
