<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Alumnos</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="container">
        <div class="row align-items-md-stretch mt-3">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card h-100 bg-light text-center border rounded-3">
                    <div class="card-header">
                        <h2>Crear Alumno</h2>
                        <a name="" id="" class="btn btn-light btn-outline-secondary"
                            href=" {{ route('alumnos.index') }} " role="button">Ver Tabla</a>
                    </div>
                    <div class="card-body">
                        <form action=" {{ route('alumnos.store') }} " method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="mb-3 row">
                                <label for="nombre_apellido" class="col-sm-4 col-form-label">Nombres y Apellidos</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control @error('nombre_apellido') is-invalid @enderror" name="nombre_apellido"
                                        id="nombre_apellido" placeholder="Nombres y Apellidos" value="{{old('nombre_apellido')}}">
                                    @error('nombre_apellido')
                                        <span id="nombre_apellido" class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="edad" class="col-sm-4 col-form-label">Edad</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control @error('edad') is-invalid @enderror" name="edad" id="edad"
                                        placeholder="Edad" value="{{old('edad')}}">
                                    @error('edad')
                                        <span id="edad" class="invalid-feedback" role="alert"> {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="telefono" class="col-sm-4 col-form-label">Telefono</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="telefono" id="telefono"
                                        placeholder="Telefono" value="{{old('telefono')}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="direccion" class="col-sm-4 col-form-label">Dirección</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="direccion" id="direccion"
                                        placeholder="Dirección" value="{{old('direccion')}}">
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
