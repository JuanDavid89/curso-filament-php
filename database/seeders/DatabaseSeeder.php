<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456'),
        ]);
        DB::table('pacientes')->insert([
            'name' => 'David Villalobos',
            'email' => 'david@test.com',
            'password' => Hash::make('123456'),
        ]);
        DB::table('pacientes')->insert([
            'name' => 'Barbara Freites',
            'email' => 'barb@test.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
