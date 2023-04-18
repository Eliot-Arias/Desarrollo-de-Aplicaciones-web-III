<?php

namespace Database\Seeders;

use App\Models\Profesor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Profesor::factory(10)->create();

        // $profesor = new Profesor();
        // $profesor->nombre_apellido = 'Jaime Peredo';
        // $profesor->profesion = 'Ingeniero de Sistemas';
        // $profesor->grado_academico = 'Licenciatura';
        // $profesor->save();

        // $profesor1 = new Profesor();
        // $profesor1->nombre_apellido = 'Daniel Coria';
        // $profesor1->profesion = 'Administracion Empresas';
        // $profesor1->grado_academico = 'Licenciatura';
        // $profesor1->save();

        // $profesor2 = new Profesor();
        // $profesor2->nombre_apellido = 'Pedro Poveda';
        // $profesor2->profesion = 'Ingeniero de Electronico';
        // $profesor2->grado_academico = 'Masterado';
        // $profesor2->save();
        


    }
}
