<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Registrar o actualizar usuario para Junior Stiven Medina Hernandez (NO MODIFICAR)
        User::updateOrCreate(['name' => 'Junior Medina'], [
            'email' => 'jsmedinah5873@gmail.com',
            "password" => Hash::make("j2u0n0i5or")
        ]);

    }
}
