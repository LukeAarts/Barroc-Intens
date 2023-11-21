<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'city',
        'street',
        'houseNumber',
        'zipcode',
        'phonenumber',
    ];

    protected $table = 'companies';

    public function maintenance()
    {
        return $this->hasOne(Maintenance::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function quotation()
    {
        return $this->belongsTo(Quotation::class);
    }
}
