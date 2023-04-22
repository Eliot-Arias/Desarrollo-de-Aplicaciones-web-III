<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Curso de laravel</title>
</head>

<body>
    <h2>Listado de Profesores</h2>
    <table>
        <tr>
            <th>Nombre y Apellido</th>
            <th>Profesión</th>
            <th>Grado Academico</th>
            <th>Teléfono</th>
        </tr>
        @foreach ($profesores as $profesor)
            <tr>
                <td>{{ $profesor->nombre_apellido }}</td>
                <td>{{ $profesor->profesion }}</td>
                <td>{{ $profesor->grado_academico }}</td>
                <td>{{ $profesor->telefono }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
