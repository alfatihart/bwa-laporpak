<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil seeder untuk role dan permission
        $this->call(RolePermissionSeeder::class);

        // Panggil seeder untuk admin
        $this->call(AdminSeeder::class);

        // Panggil seeder untuk user lainnya jika diperlukan
        // $this->call(UserSeeder::class);

        // Panggil seeder untuk data dummy lainnya jika diperlukan
        // $this->call(DummyDataSeeder::class);
    }
}
