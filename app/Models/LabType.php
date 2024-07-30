<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabType extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'clinicadmin_id'];

    public function clinicAdmin()
    {
        return $this->belongsTo(ClinicAdmin::class, 'clinicadmin_id');
    }
}
