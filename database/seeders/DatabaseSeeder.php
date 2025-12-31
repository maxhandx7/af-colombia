<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ColombiaSeeder::class);
        $this->call(DepartmentsColombiaSeeder::class);
        $this->call(CityColombiaSeeder::class);
    }
}
