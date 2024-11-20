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
    // Inicializar las variables
    $id = '';
    $nombre = '';
    $descripcion = '';
    $fecha = '';
    $precio = '';
    $informacion = '';

    // Asegúrate de que $datos esté definido y sea un array
    if (isset($datos) && is_array($datos) && !empty($datos)) {
        $valor = $datos[0]; // Asumiendo que solo hay un registro
        $id = isset($valor['id_ruta']) ? $valor['id_ruta'] : '';
        $nombre = isset($valor['nombre']) ? $valor['nombre'] : '';
        $descripcion = isset($valor['descripcion']) ? $valor['descripcion'] : '';
        $fecha = isset($valor['fecha']) ? $valor['fecha'] : '';
        $precio = isset($valor['precio']) ? $valor['precio'] : '';
        $informacion = isset($valor['informacion']) ? $valor['informacion'] : '';
    }
?>

<style>
    .admin-form {
        padding-right: 500px;
    }
</style>

<div class="container">
    <section class="cabe">
        <h1>Editar Ruta</h1>
        <h2>Datos Generales</h2>
    </section>

    <!-- Formulario de actualización -->
    <form method="POST" action="?r=actualizar">
        <section id="general">
            <label for="id_ruta">Id:</label>
            <input type="text" readonly id="id" name="id_ruta" value="<?= htmlspecialchars($id) ?>"><br><br>

            <label for="Nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($nombre) ?>"><br><br>

            <label for="Descripción">Descripción:</label>
            <input type="text" id="descripcion" name="descripcion" value="<?= htmlspecialchars($descripcion) ?>"><br><br>

            <label for="Fecha_viaje">Fecha:</label>
            <input type="date" id="fecha_viaje" name="fecha" value="<?= htmlspecialchars($fecha) ?>"><br><br>

            <label for="Precio_paquete">Precio:</label>
            <input type="number" id="precio" name="precio" value="<?= htmlspecialchars($precio) ?>" step="0.01"><br><br>

            <label for="Hora_salida">Información:</label>
            <input type="text" id="informacion" name="informacion" value="<?= htmlspecialchars($informacion) ?>"><br><br>

            <input type="submit" name="r" value="Actualizar">
        </section>
    </form>
</div>

</body>
</html>