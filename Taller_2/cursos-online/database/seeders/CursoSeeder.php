<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Curso::factory(10)->has(Alumno::factory()->count(4))->create();

        //$curso = new Curso();
        //$curso->nombre = 'Laravel 8';
        //$curso->nivel = 'Basico';
        //$curso->horas_academicas = '60 Horas';
        //$curso->profesor_id = 1;
        //$curso->save();
        //$curso1 = new Curso();
        //$curso1->nombre = 'Contabilidad Basica';
        //$curso1->nivel = 'Basico';
        //$curso1->horas_academicas = '40 Horas';
        //$curso1->profesor_id = 2;
        //$curso1->save();
        //$curso2 = new Curso();
        //$curso2->nombre = 'Desarrollo de PHP';
        //$curso2->nivel = 'Intermedio';
        //$curso2->horas_academicas = '80 Horas';
        //$curso2->profesor_id = 3;
        //$curso2->save();


        //$curso->alumnos()->attach(1);
        //$curso->alumnos()->attach(2);
        //$curso1->alumnos()->attach(1);
        //$curso1->alumnos()->attach(3);
        //$curso2->alumnos()->attach(1);
        //$curso2->alumnos()->attach(2);
    }
}
