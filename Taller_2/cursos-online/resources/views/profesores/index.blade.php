<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profesores</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="container">
        <div class="row align-items-md-stretch mt-3">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-light text-center border rounded-3">
                    <h2>Tabla Profesores</h2>
                    <a name="" id="" class="btn btn-dark btn-outline-success"
                        href=" {{ route('profesores.create') }} " role="button">Agregar Profesores</a>
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
                <thead class="">
                    <caption class="fw-bold text-center">Profesores</caption>
                    <tr class="table-dark">
                        <th>Nombre y Apellido</th>
                        <th>Profesion</th>
                        <th>Grado Academico</th>
                        <th>Teléfono</th>
                        <th colspan="2" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="">
                    @foreach ($profesores as $profesor)
                        <tr class="text-center">
                            <td> {{ $profesor->nombre_apellido }} </td>
                            <td> {{ $profesor->profesion }} </td>
                            <td> {{ $profesor->grado_academico }} </td>
                            <td> {{ $profesor->telefono }} </td>
                            <td> 
                                <a name="" id="" class="btn btn-sm btn-light btn-outline-primary"
                                    href=" {{ route('profesores.edit', $profesor->id) }} " role="button">Editar</a>
                            </td>
                            <td> 
                                <a name="" id="" class="btn btn-sm btn-light btn-outline-success"
                                    href=" {{ route('profesores.show', $profesor->id) }} " role="button">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>
    </div>

</body>

</html>
