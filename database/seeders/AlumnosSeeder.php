<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Alumno::factory()->count(10)->create();
    }
}
