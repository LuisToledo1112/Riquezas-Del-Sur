<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración Empresarial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="vista/css/formularios.css">
</head>
<body>

<?php
    foreach ($datos as $key => $value) {
        foreach ($value as $valor) {
            $id = $valor["id_cliente"];
            $nombre = $valor["nombre"];
            $apellido = $valor["apellido"];
            $telefono = $valor["telefono"];
            $correo = $valor["correo"];
            $password = $valor["password"];
        }
    }
?>

<style>
    .admin-form {
        padding-right: 500px;
    }
</style>

<div class="container">
    <section class="cabe">
        <h1>Editar Empleados</h1>
        <h2>Datos Generales</h2>
    </section>

    <!-- Formulario de actualización -->
    <form method="POST" action="index.php?c=actualizar">

    <section id="general">
        <label for="id_empleado">Id:</label>
        <input type="text" readonly id="id" name="id" value="<?= $id ?>"><br><br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?= $nombre ?>"><br><br>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" value="<?= $apellido ?>"><br><br>
        <label for="telefono">Teléfono:</label>
        <input type="number" id="telefono" name="telefono" value="<?= $telefono ?>"><br><br>
        <label for="correo">Correo:</label>
        <input type="text" id="correo" name="correo" value="<?= $correo ?>"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="<?= $password ?>"><br><br>
        <input type="submit" name="i" value="Actualizar">
    </section>
</form>

</div>

</body>
</html>