<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'custom_products';
    protected $fillable = [
        'name',
        'description',
        'image_path',
        'price',
    ];

    public function product()
    {
        return $this->belongsTo(ProductInvoice::class);
    }

    public function quotations()
    {
        return $this->hasMany(Quotation::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'product_category_id');
    }

    public function lease_contracts()
    {
        return $this->hasMany(LeaseContract::class);
    }
}
