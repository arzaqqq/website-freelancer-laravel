<?php

namespace Database\Seeders;

use App\Models\DetailUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailUser::create([
            'users_id' => '1',
            'photo' => '',
            'role' => 'Website Deeveloper',
            'contact_number' => '08123456789',
             'biography' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DetailUser::create([
            'users_id' => '2',
            'photo' => '',
            'role' => 'Back end Deeveloper',
            'contact_number' => '08123456744',
             'biography' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
