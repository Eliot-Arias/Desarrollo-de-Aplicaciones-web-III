<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $profesor->nombre_apellido }}</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="card col-md-6">
                <div class="card-header text-center">
                    <h1 class="fw-bold">Carta de Presentacion</h1>
                    <a name="" id="" class="btn btn-sm btn-light btn-outline-success"
                        href=" {{ route('profesores.index') }} " role="button">Volver a la Tabla</a>
                </div>
                <div class="card-body">
                    <p class="fs-5"><span class="fw-bold">Nombres y Apellidos:</span> {{ $profesor->nombre_apellido }}
                    </p>
                    <p class="fs-5"><span class="fw-bold">Profesión</span> {{ $profesor->profesion }}</p>
                    <p class="fs-5"><span class="fw-bold">Grado Academico:</span> {{ $profesor->grado_academico }}</p>
                    <p class="fs-5"><span class="fw-bold">Telefono:</span> {{ $profesor->telefono }}</p>
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                            <strong>{{$errors->first('mensaje')}}</strong> 
                        </div>
                        <script>
                            var alertList = document.querySelectorAll('.alert');
                            alertList.forEach(function(alert) {
                                new bootstrap.Alert(alert)
                            })
                        </script>
                        {{-- <p class="text-danger">{{$errors->first('mensaje')}}</p> --}}
                    @endif
                </div>
                <div class="card-footer text-muted">
                    <div class="d-flex justify-content-center gap-4">
                        <a href="{{ route('profesores.edit', $profesor->id) }}" class="btn btn-light btn-outline-primary">Editar</a> <br>
                        <form action="{{ route('profesores.destroy', $profesor->id) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input class="btn btn-light btn-outline-danger" type="submit" value="Eliminar" onclick="return EliminarRegistro('Eliminar Profesor')">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function EliminarRegistro(value) {
            action = confirm(value) ? true : event.preventDefault();
        }
    </script>
</body>

</html>
