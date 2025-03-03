<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderStatus::create([
            'name' => 'pending',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        OrderStatus::create([
            'name' => 'Progres',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        OrderStatus::create([
            'name' => 'Approved',
            'cresated_at' => now(),
            'updated_at' => now()
        ]);

        OrderStatus::create([
            'name' => 'Rejected',
            'cresated_at' => now(),
            'updated_at' => now()
        ]);

        OrderStatus::create([
            'name' => 'Loading',
            'cresated_at' => now(),
            'updated_at' => now()
        ]);
    }
}
