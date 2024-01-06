<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkOrder extends Model
{
    use HasFactory;

    protected $table = 'work_orders';


    public function materials()
    {
        return $this->hasMany(Material::class);
    }

    public function user()
    {
        return $this->belongsTo(WorkOrder::class);
    }
}
