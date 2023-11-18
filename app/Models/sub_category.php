<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_category extends Model
{
    use HasFactory;
    public function CategoryFunc()
    {
        return  $this->belongsTo(Category::class,'category_id');
    }

}
