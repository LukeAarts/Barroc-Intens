<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceErrorPlanned extends Model
{
    use HasFactory;

    protected $table = "maintenance_errors_planned";
}
