<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios Disponibles</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="auth-title text-center">Servicios de la Estética</h1>
        <div class="row mt-4">
            <div class="col-md-6 mb-3">
                <div class="card auth-card text-center h-100">
                    <h3 class="auth-title">Corte de Cabello</h3>
                    <p class="auth-subtitle">Renueva tu estilo con nuestros expertos.</p>
                    <a href="detalle_servicio.php?id=1" class="btn btn-primary-custom mt-auto">Ver detalles</a>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card auth-card text-center h-100">
                    <h3 class="auth-title">Manicura</h3>
                    <p class="auth-subtitle">Cuidado y estilo para tus uñas.</p>
                    <a href="detalle_servicio.php?id=2" class="btn btn-primary-custom mt-auto">Ver detalles</a>
                </div>
            </div>
            <!-- Lista de servicios generada dinámicamente -->
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>