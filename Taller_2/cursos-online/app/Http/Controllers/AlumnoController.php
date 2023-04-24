<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', ['alumnos' => $alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_apellido' => 'required | max:75',
            'edad' => 'required | integer',
        ], [
            'nombre_apellido.required' => 'Este campo NO puede estar vacio, no seas gil, llenalo !!!!!',
            'nombre_apellido.max' => 'Este campo solo acepta hasta un maximo de 75 caracteres, ademas no creo que tengas un nombre tan largo, pndj',
            'edad.required' => 'Este campo NO puede estar vacio, no seas gil, llenalo !!!!!',
            'edad.integer' => 'Es obvio que este campo requier un numero entero, piensa pws'
        ]);

        $alumnos = new Alumno($request->all());
        $alumnos->save();
        return redirect()->action([AlumnoController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.show', ['alumno' => $alumno]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.edit', ['alumno' => $alumno]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre_apellido' => 'required | max:75',
            'edad' => 'required | integer',
        ], [
            'nombre_apellido.required' => 'Este campo NO puede estar vacio, no seas gil, llenalo !!!!!',
            'nombre_apellido.max' => 'Este campo solo acepta hasta un maximo de 75 caracteres, ademas no creo que tengas un nombre tan largo, pndj',
            'edad.required' => 'Este campo NO puede estar vacio, no seas gil, llenalo !!!!!',
            'edad.integer' => 'Es obvio que este campo requier un numero entero, piensa pws'
        ]);

        $alumno = Alumno::findOrFail($id);
        $alumno->nombre_apellido = $request->nombre_apellido;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;
        $alumno->save();
        return redirect()->action([AlumnoController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (DB::table('alumno_curso')->where('alumno_id', '=', $id)->first() != null) {
            return redirect()->back()->withErrors(['mensaje' => 'El alumno no puede ser eliminado.']);
        } else {
            $alumno = Alumno::findOrFail($id);
            $alumno->delete();
            return redirect()->action([AlumnoController::class, 'index']);
        }
    }
}
