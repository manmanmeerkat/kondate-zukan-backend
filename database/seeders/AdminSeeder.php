<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Admin::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'role' => 'admin',
            // 'password' => bcrypt('password123'),
            'password' => 'password123',

        ]);
    }
}
