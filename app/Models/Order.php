<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    public function buys()
    {
        return $this->hasMany(buy::class, 'order_id', 'id');
    }
    public function track()
    {
        return $this->hasMany(Track::class, 'order_id', 'id');
    }
    public function invoice()
    {
        return $this->hasMany(Invoice::class, 'order_id', 'id');
    }
    protected $fillable = ['user_id', 'order_id_generate','total'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
