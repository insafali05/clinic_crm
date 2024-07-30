<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ClinicAdmin extends Authenticatable
{
    use HasFactory;
    protected $table = 'clinic_admins';

    protected $fillable = [
        'clinic_name', 'number_of_branches', 'contact_number', 'alternative_contact_number',
        'address', 'password', 'payment', 'payment_date_time', 'payment_mode', 'license_key',
        'start_date_time', 'expiry_date_time', 'logo'
    ];

    protected $hidden = [
        'password',
    ];
    public function specializations()
    {
        return $this->hasMany(Specialization::class);
    }
    public function staffs()
    {
        return $this->hasMany(Staff::class);
    }
}
