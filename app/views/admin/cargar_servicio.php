<!-- cargar_servicio.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Nuevo Servicio</title>
</head>
<body>
    <h1>Añadir Servicio</h1>
    <form action="" method="POST">
        <label for="nombre">Nombre del Servicio:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required></textarea>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>