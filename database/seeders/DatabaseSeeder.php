<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::beginTransaction(); // Iniciar transacción

        $this->call(UserSeeder::class); // Ejecutar Seeder de aplicación
        $this->call(RoleSeeder::class); // Ejecutar Seeder de personas
        $this->call(PermissionSeeder::class); // Ejecutar Seeder de usuarios


        DB::commit(); // Finalizar transacción

    }
}
