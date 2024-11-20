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
// Inicialización de variables para evitar errores si faltan claves en $valor
$id = $nombre = $descripcion = $fecha = $precio = $informacion = '';

// Verificar y asignar valores del array $datos
foreach ($datos as $key => $value) {
    foreach ($value as $valor) {
        $id = $valor["id_excursion"] ?? '';
        $nombre = $valor["nombre"] ?? '';
        $descripcion = $valor["descripcion"] ?? '';
        $fecha = $valor["fecha"] ?? '';
        $precio = $valor["precio"] ?? '';
        $informacion = $valor["informacion"] ?? '';
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
        <h1>Editar Excursiones</h1>
        <h2>Datos Generales</h2>
    </section>

    <!-- Formulario de actualización -->
    <form method="POST" action="?h=actualizar">
        <section id="general">
            <label for="id_excurciones">Id:</label>
            <input type="number" readonly id="id" name="id" value="<?= htmlspecialchars($id) ?>"><br><br>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($nombre) ?>"><br><br>
            <label for="descripcion">Descripcion:</label>
            <input type="text" id="descripcion" name="descripcion" value="<?= htmlspecialchars($descripcion) ?>"><br><br>
            <label for="fecha">Fecha:</label>
            <input type="date" id="tipo" name="fecha" value="<?= htmlspecialchars($fecha) ?>"><br><br>
            <label for="precio">Precio:</label>
            <input type="number" step="0.01" id="precio" name="precio" value="<?= htmlspecialchars($precio) ?>"><br><br>
            <label for="informacion">Informacion:</label>
            <input type="text" id="informacion" name="informacion" value="<?= htmlspecialchars($informacion) ?>"><br><br>
            <input type="submit" name="h" value="actualizar">
        </section>
    </form>
</div>

</body>
</html>
