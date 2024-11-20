<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración Empresarial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="vista/css/formularios.css">
</head>
<header>

</header>
<body>

    <div class="container">
        <section class="cabe">
        <h1>Agregar Rutas</h1>
            <h2>Datos Generales</h2>
        </section>
            <section id="general">
            <form class="admin-form" method="POST" action="?r=guardar">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required><br><br>

                <label for="descripcion">Descripcion:</label>
                <input type="text" id="descripcion" name="descripcion" required><br><br>

                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha" name="fecha" required><br><br>

                <label for="precio">Precio</label>
                <input type="text" id="precio" name="precio" required><br><br>

                <label for="informacion">Informacion:</label>
                <input type="text" id="informacion" name="informacion" required><br><br>

                <input class="btn-submit" type="submit" value="Agregar">
                <input type="hidden" name="r" value="guardar">
            </form>
    </section>
</div>
</body>
</html>