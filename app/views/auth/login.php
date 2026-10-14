<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <div class="auth-card text-center">
        <h2 class="auth-title">¡Hola de nuevo!</h2>
        <p class="auth-subtitle">Ingresá tus datos para gestionar tus turnos.</p>

        <form action="" method="POST" class="text-start">
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@correo.com" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="........" required>
            </div>

            <button type="submit" class="btn btn-primary-custom">Iniciar Sesión</button>
        </form>

        <div class="auth-links">
            <a href="recuperar_password.php">¿Olvidaste tu contraseña?</a>
        </div>

        <div class="auth-divider"></div>

        <div class="auth-register-text">
            ¿No tenés cuenta? <a href="registro.php" class="auth-register-link">Registrate acá</a>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>