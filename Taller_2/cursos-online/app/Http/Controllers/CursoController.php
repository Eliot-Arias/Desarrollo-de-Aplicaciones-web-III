<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = DB::table('cursos')
            ->select(
                'cursos.id',
                'cursos.nombre',
                'cursos.nivel',
                'cursos.horas_academicas',
                'profesores.nombre_apellido as profesor'
            )
            ->leftJoin('profesores', 'profesores.id', '=', 'cursos.profesor_id')
            ->get();
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
        $profesores = Profesor::all();
        $alumnos = Alumno::all();
        return view('cursos.create', ['profesores' => $profesores, 'alumnos' => $alumnos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required | max:75',
            'nivel' => 'required | max:35',
            'profesor_id' => 'required',
            'alumno_ids' => 'required | array'
        ],[
            'nombre.required' => 'Este campo NO puede estar vacio, no seas gil, llenalo !!!!!',
            'nombre.max' => 'Este campo solo acepta hasta un maximo de 75 caracteres, ademas no creo que exista un curso con un nombre tan largo, pndj',
            'nivel.required' => 'Este campo NO puede estar vacio, no seas gil, llenalo !!!!!',
            'nivel.max' => 'Este campo solo acepta hasta un maximo de 35 caracteres, ademas no creo que exista un nivel con un nombre tan largo, pndj',
            'profesor_id.required' => 'Este campo NO puede estar vacio, no seas gil, llenalo !!!!!',
            'alumno_ids.required' => 'Este campo NO puede estar sin seleccionar !!!!!',
        ]);

        $curso = new Curso($request->all());
        $curso->save();
        foreach ($request->alumno_ids as $alumno_id) {
            $curso->alumnos()->attach($alumno_id);
        }
        return redirect()->action([CursoController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $curso = Curso::with(['profesor'])->where('cursos.id', '=', $id)->first();
        $alumno_curso = DB::table('alumno_curso')->select('alumnos.nombre_apellido')->join(
            'alumnos',
            'alumnos.id',
            '=',
            'alumno_curso.alumno_id'
        )->where('curso_id', '=', $id)->get();
        return view('cursos.show', ['curso' => $curso, 'alumno_curso' => $alumno_curso]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $profesores = Profesor::all();
        $alumnos = Alumno::all();
        $curso = Curso::findOrFail($id);
        $alumno_curso = DB::table('alumno_curso')->where('curso_id', '=', $id)->get();
        return view('cursos.edit', ['curso' => $curso, 'alumno_curso' => $alumno_curso, 'profesores'=> $profesores, 'alumnos' => $alumnos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'nombre' => 'required | max:75',
            'nivel' => 'required | max:35',
            'profesor_id' => 'required',
            'alumno_ids' => 'required | array'
        ], [
            'nombre.required' => 'Este campo NO puede estar vacio, no seas gil, llenalo !!!!!',
            'nombre.max' => 'Este campo solo acepta hasta un maximo de 75 caracteres, ademas no creo que exista un curso con un nombre tan largo, pndj',
            'nivel.required' => 'Este campo NO puede estar vacio, no seas gil, llenalo !!!!!',
            'nivel.max' => 'Este campo solo acepta hasta un maximo de 35 caracteres, ademas no creo que exista un nivel con un nombre tan largo, pndj',
            'profesor_id.required' => 'Este campo NO puede estar vacio, no seas gil, llenalo !!!!!',
            'alumno_ids.required' => 'Este campo NO puede estar sin seleccionar !!!!!',
        ]);

        $curso = Curso::findOrFail($id);
        $curso->nombre = $request->nombre;
        $curso->nivel = $request->nivel;
        $curso->horas_academicas = $request->horas_academicas;
        $curso->profesor_id = $request->profesor_id;
        $curso->save();
        $curso->alumnos()->detach();
        foreach ($request->alumno_ids as $alumno_id) {
            $curso->alumnos()->attach($alumno_id);
        }
        return redirect()->action([CursoController::class, 'index']); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $curso = Curso::findOrFail($id);
        $curso->alumnos()->detach();
        $curso->delete();
        return redirect()->action([CursoController::class, 'index']);
    }
}
