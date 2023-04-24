<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesores = Profesor::all();
        return view('profesores.index', ['profesores' => $profesores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profesores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nombre_apellido' => 'required | max:75',
            'profesion' => 'required | max:35'
        ], [
            'nombre_apellido.required' => 'Este campo NO puede estar vacio, no seas gil, llenalo !!!!!',
            'nombre_apellido.max' => 'Este campo solo acepta hasta un maximo de 75 caracteres, ademas no creo que tengas un nombre tan largo, pndj',
            'profesion.required' => 'Este campo NO puede estar vacio, no seas gil, llenalo !!!!!',
            'profesion.max' => 'Este campo solo acepta hasta un maximo de 35 caracteres, ademas no creo que exista una profesion con un nombre tan largo, pndj',
        ]);

        $profesor = new Profesor($request->all());
        $profesor->save();
        return redirect()->action([ProfesorController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $profesor = Profesor::findOrFail($id);
        return view('profesores.show',['profesor' => $profesor]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $profesor = Profesor::findOrFail($id);
        return view('profesores.edit', ['profesor' => $profesor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre_apellido' => 'required | max:75',
            'profesion' => 'required | max:35'
        ], [
            'nombre_apellido.required' => 'Este campo NO puede estar vacio, no seas gil, llenalo !!!!!',
            'nombre_apellido.max' => 'Este campo solo acepta hasta un maximo de 75 caracteres, ademas no creo que tengas un nombre tan largo, pndj',
            'profesion.required' => 'Este campo NO puede estar vacio, no seas gil, llenalo !!!!!',
            'profesion.max' => 'Este campo solo acepta hasta un maximo de 35 caracteres, ademas no creo que exista una profesion con un nombre tan largo, pndj',
        ]);

        $profesor = Profesor::findOrFail($id);
        $profesor->nombre_apellido = $request->nombre_apellido;
        $profesor->profesion = $request->profesion;
        $profesor->grado_academico = $request->grado_academico;
        $profesor->telefono = $request->telefono;
        $profesor->save();
        return redirect()->action([ProfesorController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Curso::where('profesor_id', '=', $id)->first() != null) {
            return redirect()->back()->withErrors(['mensaje' => 'El profesor no puede ser eliminado.']);
        } else {
            $profesor = Profesor::findOrFail($id);
            $profesor->delete();
            return redirect()->action([ProfesorController::class, 'index']);
        } 
    }
}
