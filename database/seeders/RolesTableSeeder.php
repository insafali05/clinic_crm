<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            'superadmin',
            'clinicadmin',
            'branchadmin',
            'doctor',
            'staff',
            'treatmentmanager',
            'labmanager',
            'leadmanager',
            'medicinemanager',
            'infrastructuremanager',
        ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
