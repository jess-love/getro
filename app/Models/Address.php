<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_address', 'address_id', 'user_id');
    }
    protected $table = 'address';

    protected $fillable = [
        'lastname',
        'firstname',
        'street',
        'phone',
        'city',
        'zip_code',
        'country',
    ];
}
