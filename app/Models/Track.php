<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
    protected $table = 'track';
    protected $fillable = ['order_id', 'status', 'tracking_number'];
}
