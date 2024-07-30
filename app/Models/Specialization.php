<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'clinicadmin_id'];

    public function clinicAdmin()
    {
        return $this->belongsTo(ClinicAdmin::class);
    }
}
