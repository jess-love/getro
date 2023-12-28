<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
    protected $table = 'invoice';
    protected $fillable = ['order_id', 'total_product', 'total_price', 'tca'];
}
