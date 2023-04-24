<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="container">
        <div class="row align-items-md-stretch mt-3">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-light text-center border rounded-3">
                    <h2>Tabla Cursos</h2>
                    <a name="" id="" class="btn btn-dark btn-outline-success"
                        href=" {{ route('cursos.create') }} " role="button">Agregar Cursos</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive-md">
            <table
                class="table table-striped-columns text-center
            table-hover	
            table-borderless
            align-middle">
                <thead class="">
                    <caption class="fw-bold text-center">
                        Tabla Alumnos
                    </caption>
                    <tr class="table-dark">
                        <th>Curso</th>
                        <th>Nivel</th>
                        <th>Horas Academicas</th>
                        <th>Profesor Asignado</th>
                        <th>Estudiantes Inscritos</th>
                        <th colspan="2" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($cursos as $curso)
                        <tr class="table-light">
                            <td> {{ $curso->nombre }} </td>
                            <td> {{ $curso->nivel }} </td>
                            <td> {{ $curso->horas_academicas }} </td>
                            <td> {{ $curso->profesor }} </td>
                            <td>
                                @foreach ($curso->alumnos as $alumno)
                                    {{ $alumno->alumno }} <br>
                                @endforeach
                            </td>
                            <td> 
                                <a name="" id="" class="btn btn-sm btn-light btn-outline-primary"
                                    href="{{ route('cursos.edit', $curso->id) }}" role="button">Editar</a>
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
