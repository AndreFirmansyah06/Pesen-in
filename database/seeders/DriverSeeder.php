<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Driver::create([
            'name' => 'Brian Prakoso',
        ]);

        Driver::create([
            'name' => 'Rachmat Robi',
        ]);

        Driver::create([
            'name' => 'Mohan Kurnia',
        ]);

        Driver::create([
            'name' => 'Adri Favian',
        ]);

    }
}
