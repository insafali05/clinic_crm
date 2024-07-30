<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'contact_number',
        'email',
        'password',
        'address',
        'adhar_card',
        'certificate',
        'photo',
        'clinicadmin_id',
        'branch_id',
        'specialization_id'
    ];

    public function clinicAdmin()
    {
        return $this->belongsTo(ClinicAdmin::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }
}
