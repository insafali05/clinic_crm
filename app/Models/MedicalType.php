<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'clinicadmin_id'];

    public function clinicadmin()
    {
        return $this->belongsTo(ClinicAdmin::class, 'clinicadmin_id');
    }
}
