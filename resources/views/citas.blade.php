<!-- resources/views/citas.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Cita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Íconos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 500px;">
            <div class="text-center mb-4">
                <i class="bi bi-calendar2-check-fill text-primary" style="font-size: 3rem;"></i>
                <h2 class="mt-2">Registrar Cita</h2>
            </div>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
                </div>
            @endif

            <form method="POST" action="/citas">
                @csrf

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Ej. Juan Pérez" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="email" placeholder="Ej. correo@ejemplo.com" required>
                </div>

                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" class="form-control" name="fecha" required>
                </div>

                <div class="mb-3">
                    <label for="hora" class="form-label">Hora</label>
                    <input type="time" class="form-control" name="hora" required>
                </div>

                <div class="mb-3">
                    <label for="motivo" class="form-label">Motivo</label>
                    <input type="text" class="form-control" name="motivo" placeholder="Ej. Consulta general" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    <i class="bi bi-save2-fill me-2"></i>Guardar Cita
                </button>
            </form>
        </div>
    </div>

    <!-- Script de Bootstrap (para el botón de cerrar alerta) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


