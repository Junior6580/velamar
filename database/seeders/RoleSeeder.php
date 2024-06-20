<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Registrar o actualizar rol de SUPERADMINISTRADOR
        $role_super_admin = Role::updateOrCreate(['slug' => 'superadmin'], [
            'name' => 'Super Administrador',
            'description' => 'Rol Superadministrador de VELAMAR',
            'description_english' => 'Role Super administrator of VELAMAR',
            'full_access' => 'Si',
        ]);

           // Consulta de usuarios
           $user_jsm6580 = User::where('name', 'Junior Medina')->first();

           // Asignacion de roles a usuarios
           $user_jsm6580->roles()->syncWithoutDetaching([$role_super_admin->id]);
    }
}
