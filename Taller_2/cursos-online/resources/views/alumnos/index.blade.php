<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumnos</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="container">
        <div class="row align-items-md-stretch mt-3">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-light text-center border rounded-3">
                    <h2>Tabla Alumnos</h2>
                    <a name="" id="" class="btn btn-dark btn-outline-success"
                        href=" {{ route('alumnos.create') }} " role="button">Agregar Alumnos</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive">
            <table
                class="table table-striped-columns text-center
            table-hover	
            table-borderless
            align-middle">
                <thead class="table">
                    <caption class="fw-bold text-center">
                        Tabla Alumnos</caption>
                    <tr class="table-dark">
                        <th>Nombre y Apellido</th>
                        <th>Edad</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th colspan="2" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="">
                    @foreach ($alumnos as $alumno)
                        <tr class="text-center">
                            <td> {{ $alumno->nombre_apellido }} </td>
                            <td> {{ $alumno->edad }} </td>
                            <td> {{ $alumno->telefono }} </td>
                            <td> {{ $alumno->direccion }} </td>
                            <td>
                                <a name="" id="" class="btn btn-sm btn-light btn-outline-primary"
                                    href=" {{ route('alumnos.edit', $alumno->id) }} " role="button">Editar</a>
                            </td>
                            <td>
                                <a name="" id="" class="btn btn-sm btn-light btn-outline-danger"
                                    href="" role="button">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
