<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="auth-title">Gestión de Turnos y Servicios</h1>
            <a href="cargar_servicio.php" class="btn btn-primary-custom" style="width: auto;">Añadir Nuevo Servicio</a>
        </div>

        <h2 class="auth-title mt-5">Turnos Pendientes</h2>
        <div class="card auth-card w-100 mx-0 mt-3" style="max-width: 100%;">
            <table class="table">
                <thead>
                    <tr>
                        <th>Turno</th>
                        <th>Cliente</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Corte de Cabello</td>
                        <td>Juan Perez</td>
                        <td>15/10/2026 - 10:00</td>
                        <td>
                            <button class="btn btn-success btn-sm">Aprobar</button>
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
                    <!-- Lista de turnos generada dinámicamente -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>