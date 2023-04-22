<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = DB::table('cursos')->select('cursos.id', 'cursos.nombre', 'cursos.nivel', 'cursos.horas_academicas', 'profesores.nombre_apellido as profesores')->leftJoin('profesores.nombre_apellido', 'profesores', 'profesores.nombre_apellido.id', '=', 'cursos.profesor_id')->get();
        $aux = 0;
        foreach ($cursos as $curso) {
            $cursos[$aux]->alumnos = DB::table('alumno_curso')
                ->select('alumnos.nombre_apellido as alumno')
                ->leftJoin('alumnos', 'alumnos.id', '=', 'alumno_curso.alumno_id')
                ->where('alumno_curso.curso_id', '=', $curso->id)
                ->get();
            $aux++;
        }
        return view('cursos.index', ['cursos' => $cursos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
