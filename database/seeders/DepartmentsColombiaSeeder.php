<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsColombiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('departments')->insert([
            ['id' => 3689982, 'country_id' => 3686110, 'name' => 'Amazonas'],
            ['id' => 3689815, 'country_id' => 3686110, 'name' => 'Antioquia'],
            ['id' => 3689717, 'country_id' => 3686110, 'name' => 'Arauca'],
            ['id' => 3689436, 'country_id' => 3686110, 'name' => 'Atlántico'],
            ['id' => 3688685, 'country_id' => 3686110, 'name' => 'Bogotá D.C.'],
            ['id' => 3687951, 'country_id' => 3686110, 'name' => 'Caldas'],
            ['id' => 3687173, 'country_id' => 3686110, 'name' => 'Casanare'],
            ['id' => 3687029, 'country_id' => 3686110, 'name' => 'Cauca'],
            ['id' => 3686880, 'country_id' => 3686110, 'name' => 'Cesar'],
            ['id' => 3685413, 'country_id' => 3686110, 'name' => 'Cundinamarca'],
            ['id' => 3688650, 'country_id' => 3686110, 'name' => 'Bolívar'],
            ['id' => 3688536, 'country_id' => 3686110, 'name' => 'Boyacá'],
            ['id' => 3685889, 'country_id' => 3686110, 'name' => 'Córdoba'],
            ['id' => 3687479, 'country_id' => 3686110, 'name' => 'Caquetá'],
            ['id' => 3686431, 'country_id' => 3686110, 'name' => 'Chocó'],
            ['id' => 3666254, 'country_id' => 3686110, 'name' => 'Vaupés'],
            ['id' => 3681652, 'country_id' => 3686110, 'name' => 'Guainía'],
            ['id' => 3681344, 'country_id' => 3686110, 'name' => 'Guaviare'],
            ['id' => 3680692, 'country_id' => 3686110, 'name' => 'Huila'],
            ['id' => 3678847, 'country_id' => 3686110, 'name' => 'La Guajira'],
            ['id' => 3675686, 'country_id' => 3686110, 'name' => 'Magdalena'],
            ['id' => 3674810, 'country_id' => 3686110, 'name' => 'Meta'],
            ['id' => 3674021, 'country_id' => 3686110, 'name' => 'Nariño'],
            ['id' => 3673798, 'country_id' => 3686110, 'name' => 'Norte de Santander'],
            ['id' => 3671178, 'country_id' => 3686110, 'name' => 'Putumayo'],
            ['id' => 3671087, 'country_id' => 3686110, 'name' => 'Quindío'],
            ['id' => 3670698, 'country_id' => 3686110, 'name' => 'Risaralda'],
            ['id' => 3670205, 'country_id' => 3686110, 'name' => 'San Andrés y Providencia'],
            ['id' => 3668578, 'country_id' => 3686110, 'name' => 'Santander'],
            ['id' => 3667725, 'country_id' => 3686110, 'name' => 'Sucre'],
            ['id' => 3666951, 'country_id' => 3686110, 'name' => 'Tolima'],
            ['id' => 3666313, 'country_id' => 3686110, 'name' => 'Valle del Cauca'],
            ['id' => 3666082, 'country_id' => 3686110, 'name' => 'Vichada'],
        ]);
    }
}
