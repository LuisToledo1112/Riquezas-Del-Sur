<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración Empresarial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="vista/css/styleAdmin.css">
</head>
<body>
    <div class="sidebar">
        <h2>Riqueza del Sur</h2>
        <nav>
            <a href="?i=administrador">Inicio</a>
            <a href="?i=empleado">Empleados</a>
            <a href="?i=cliente">Clientes</a>
            <a href="?i=paquete">Paquetes</a>
            <a href="?i=ruta">Rutas</a>
            <a href="?i=excursion">Excursiones</a>
            <a type="button" class="btn btn-outline-success" href="./?i=index">Página Principal</a>
        </nav>
    </div>

    <div class="main-content">
        <h1>Panel de Administración Empresarial</h1>
        <section id="general">
            <h2>Datos Generales</h2>
            <form class="admin-form">
                <label for="empresa">Nombre de la Empresa:</label>
                <input type="text" id="empresa" name="empresa" value="Riqueza del Sur">

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion"></textarea>

                <label for="ubicacion">Ubicación:</label>
                <input type="text" id="ubicacion" name="ubicacion">

                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono">

                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo">
            </form>
        </section>
    </div>
</body>
</html>
