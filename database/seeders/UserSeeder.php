<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'pemilik',
            'password' => Hash::make('pemilik123'), // Pastikan menggunakan Hash untuk password
            'role' => 'pemilik',  // Nilai role bisa 'agent' atau 'pemilik'
            'email' => 'pemilik@gmail.com',
            'created_at' => now(),
        ]);

        // Menambahkan pengguna kedua
        DB::table('users')->insert([
            'username' => 'agent1',
            'password' => Hash::make('agent1'),
            'role' => 'agent',
            'email' => 'agent1@gmail.com',
            'created_at' => now(),
        ]);
    }
}
