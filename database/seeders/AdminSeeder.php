<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Lapor Pak',
            'email' => 'yoshstd@gmail.com',
            'password' => bcrypt('password'),
        ])->assignRole('admin');
    }
}
