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
            'name' => 'Admin HISFARSI NTB',
            'email' => 'admin@hisfarsintb.com',
            'password' => bcrypt('hisfarsintb@2024'),
            'email_verified_at' => now(),
        ]);
    }
}
