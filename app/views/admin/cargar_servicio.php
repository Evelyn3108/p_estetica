<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Nuevo Servicio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <div class="container mt-5 d-flex justify-content-center">
        <div class="auth-card text-center">
            <h1 class="auth-title">Añadir Servicio</h1>
            <p class="auth-subtitle">Carga los datos del nuevo servicio a ofrecer.</p>

            <form action="" method="POST" class="text-start">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del Servicio:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción:</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary-custom">Guardar Servicio</button>
            </form>

            <div class="mt-3">
                <a href="panel_servicios.php" class="auth-register-link">Volver al Panel</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>