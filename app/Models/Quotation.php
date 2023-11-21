<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'content',
        'created_at',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, "customer_id", "id");
    }


    public function product()
    {
        return $this->belongsTo(Product::class, "products_id");
    }

    // Quotation.php model
    //public $timestamps = true;
}
