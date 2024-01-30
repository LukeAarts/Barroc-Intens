<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company_name',
        'user_id',
        'city',
        'street',
        'house_Number',
        'zipcode',
        'phonenumber',
        'bkr_checked',
        'bkr_checked_at',
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

    public function invoice()
    {
        return $this->hasMany(InstallInvoice::class, 'company_id', 'id');
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
