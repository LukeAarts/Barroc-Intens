<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = "maintenance_appointments";

    protected $fillable = [
        'remark'
    ];

    public function product_category()
    {
        return $this->belongsTo(Category::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function ticket()
    {
        return $this->belongsTo(User::class);
    }
}
