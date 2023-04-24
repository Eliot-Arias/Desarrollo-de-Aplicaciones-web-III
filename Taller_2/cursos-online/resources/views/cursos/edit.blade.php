<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Profesores</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="container">
        <div class="row align-items-md-stretch mt-3">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card h-100 bg-light text-center border rounded-3">
                    <div class="card-header">
                        <h2>Editar Curso</h2>
                        <a name="" id="" class="btn btn-light btn-outline-secondary"
                            href=" {{ route('cursos.index') }} " role="button">Ver Tabla</a>
                    </div>
                    <div class="card-body">
                        <form action=" {{ route('cursos.update', $curso->id) }} " method="POST">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="mb-3 row">
                                <label for="nombre" class="col-sm-4 col-form-label">Nombre Curso</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nombre" id="nombre"
                                        placeholder="nombre" value="{{ $curso->nombre }}">
                                </div>
                            </div>
                            <div class="mb-3
                                        row">
                                <label for="nivel" class="col-sm-4 col-form-label">Nivel</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nivel" id="nivel"
                                        placeholder="nivel" value="{{ $curso->nivel }}"">
                                </div>
                            </div>
                            <div class="mb-3
                                            row">
                                <label for="horas_academicas" class="col-sm-4 col-form-label">Horas
                                    Academicas</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="horas_academicas"
                                        id="horas_academicas" placeholder="Horas"
                                        value="{{ $curso->horas_academicas }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="profesor_id" class="col-sm-4 col-form-label">Profesor</label>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-md" name="profesor_id" id="profesor_id">
                                        <option selected disabled>--Seleccione un Profesor--</option>
                                        @foreach ($profesores as $profesor)
                                            @if ($profesor->id == $curso->profesor_id)
                                                <option value="{{ $profesor->id }}" selected>
                                                    {{ $profesor->nombre_apellido }}</option>
                                            @else
                                                <option value="{{ $profesor->id }}">
                                                    {{ $profesor->nombre_apellido }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="alumno_ids" class="col-sm-4 col-form-label">Alumnos</label>
                                <div class="col-sm-8">
                                    <select multiple class="form-select form-select-md" name="alumno_ids[]"
                                        id="alumno_ids">
                                        @foreach ($alumnos as $alumno)
                                            @php $valor = 0; @endphp
                                            @foreach ($alumno_curso as $alumno_curso_valor)
                                                @if ($alumno->id == $alumno_curso_valor->alumno_id)
                                                    @php $valor = 1; @endphp
                                                @endif
                                            @endforeach
                                            @if ($valor == 1)
                                                <option value="{{ $alumno->id }}" selected>
                                                    {{ $alumno->nombre_apellido }}</option>
                                            @else
                                                <option value="{{ $alumno->id }}">
                                                    {{ $alumno->nombre_apellido }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-light btn-outline-secondary">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
