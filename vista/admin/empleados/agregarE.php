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
        <h1>Agregar Empleados</h1>
            <h2>Datos Generales</h2>
        </section>
            <section id="general">
            <form class="admin-form">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required><br><br>

                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required><br><br>

                <label for="tipo">Tipo:</label>
                <input type="text" id="tipo" name="tipo" required><br><br>

                <label for="Fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" id="Fecha_nacimiento" name="Fecha_nacimiento" required><br><br>

                <label for="CURP">CURP:</label>
                <input type="text" id="CURP" name="CURP" required><br><br>

                <label for="Genero">Genero:</label>
                <input type="text" id="Genero" name="Genero" required><br><br>

                <label for="telefono">Telefono:</label>
                <input type="number" id="telefono" name="telefono" required><br><br>

                <label for="correo">Correo:</label>
                <input type="text" id="correo" name="correo" required><br><br>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required><br><br>
                
                <input class="btn-submit" type="submit" value="Agregar">
                <input type="hidden" name="e" value="guardar">
            </form>
    </section>
</div>
</body>
</html>