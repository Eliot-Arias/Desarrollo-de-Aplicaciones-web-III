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
                        <h2>Editar Profesor</h2>
                        <a name="" id="" class="btn btn-light btn-outline-secondary"
                            href=" {{ route('profesores.index') }} " role="button">Ver Tabla</a>
                    </div>
                    <div class="card-body">
                        <form action=" {{ route('profesores.update', $profesor->id) }} " method="POST">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="mb-3 row">
                                <label for="nombre_apellido" class="col-sm-4 col-form-label">Nombres y Apellidos</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nombre_apellido"
                                        id="nombre_apellido" placeholder="Name" value="{{ $profesor->nombre_apellido }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="profesion" class="col-sm-4 col-form-label">Profesion</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="profesion" id="profesion"
                                        placeholder="Name" value="{{ $profesor->profesion }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="grado_academico" class="col-sm-4 col-form-label">Grado Academico</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="grado_academico"
                                        id="grado_academico" placeholder="Name"value="{{ $profesor->grado_academico }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="telefono" class="col-sm-4 col-form-label">Telefono</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="telefono" id="telefono"
                                        placeholder="Name" value="{{ $profesor->telefono }}">
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
