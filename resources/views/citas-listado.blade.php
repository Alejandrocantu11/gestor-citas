<!-- resources/views/citas-listado.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Citas</title>
</head>
<body>
    <h1>Listado de Citas</h1>

    <table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Motivo</th> {{-- ✅ Nuevo encabezado --}}
        </tr>
    </thead>
    <tbody>
        @forelse ($citas as $cita)
            <tr>
                <td>{{ $cita->nombre }}</td>
                <td>{{ $cita->email }}</td>
                <td>{{ $cita->fecha }}</td>
                <td>{{ $cita->hora }}</td>
                <td>{{ $cita->motivo }}</td> {{-- ✅ Nuevo campo --}}
            </tr>
        @empty
            <tr>
                <td colspan="5">No hay citas registradas.</td> {{-- Actualiza el colspan a 5 --}}
            </tr>
        @endforelse
    </tbody>
</table>


    <br>
    <a href="/citas">Volver al formulario</a>
</body>
</html>
