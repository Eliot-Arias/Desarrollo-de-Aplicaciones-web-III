<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();

        $this->call(ProfesorSeeder::class);
        $this->call(AlumnoSeeder::class);
        $this->call(CursoSeeder::class);

    }
}
