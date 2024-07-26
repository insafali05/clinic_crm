<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create roles
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
            'infrastructuremanager'
        ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
