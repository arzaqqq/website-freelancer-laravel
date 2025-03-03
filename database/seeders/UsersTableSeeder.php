<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@localhost',
            'password' => Hash::make('admin123'),
            // 'password' => bcrypt('admin123'),
            'remember_token' => Str::random(10),
            'cresated_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'name' => 'mirza',
            'email' => 'mirza@localhost',
            'password' => Hash::make('mirza123'),
            // 'password' => bcrypt('admin123'),
            'remember_token' => Str::random(10),
            'cresated_at' => now(),
            'updated_at' => now()
        ]);
    }
}
