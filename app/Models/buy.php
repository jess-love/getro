<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buy extends Model
{
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
    use HasFactory;
    protected $fillable = ['product_id', 'quantity','order_id'];
}
