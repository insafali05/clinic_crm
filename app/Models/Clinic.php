<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;

    protected $fillable = [
        'clinic_name', 'number_of_branches', 'contact_number', 'alternative_contact_number',
        'address', 'password', 'payment', 'payment_date_time', 'payment_mode', 'license_key',
        'start_date_time', 'expiry_date_time', 'logo'
    ];
}
