<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'product_categories';

    public function maintenance()
    {
        return $this->hasOne(Maintenance::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
