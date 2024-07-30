<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'gender', 'contact_number', 'contact_number_alternative',
        'password', 'address', 'branch_id',
        'photo', 'adhar_card', 'certificate', 'clinicadmin_id'
    ];


    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function clinicadmin()
    {
        return $this->belongsTo(ClinicAdmin::class);
    }
}
