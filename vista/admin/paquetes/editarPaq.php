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
$nombre = $descripcion = $fecha_viaje = $precio = $hora_salida = $hora_llegada = '';
$id = ''; // Inicializar ID

// Verificar y asignar valores del array $datos
foreach ($datos as $key => $value) {
    foreach ($value as $valor) {
        $id = $valor["id_paquete"] ?? ''; // Asegúrate de que el ID se esté recuperando correctamente
        $nombre = $valor["nombre"] ?? '';
        $descripcion = $valor["descripcion"] ?? '';
        $fecha_viaje = $valor["fecha_viaje"] ?? '';
        $precio = $valor["precio_paquete"] ?? ''; // Asegúrate de que el nombre de la columna sea correcto
        $hora_salida = $valor["hora_salida"] ?? '';
        $hora_llegada = $valor["hora_llegada"] ?? '';
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
        <h1>Editar Paquete</h1>
        <h2>Datos Generales</h2>
    </section>

    <form method="POST" action="?p=actualizar"> <!-- Cambia a ?e=actualizar -->
        <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>"> <!-- Campo oculto para el ID -->
        <section id="general">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($nombre) ?>"><br><br>
            
            <label for="descripcion">Descripción:</label>
            <input type="text" id="descripcion" name="descripcion" value="<?= htmlspecialchars($descripcion) ?>"><br><br>
            
            <label for="fecha_viaje">Fecha de Viaje:</label>
            <input type="date" id="fecha_viaje" name="fecha_viaje" value="<?= htmlspecialchars($fecha_viaje) ?>"><br><br>
            
            <label for="precio">Precio:</label>
            <input type="text" id="precio" name="precio" value="<?= htmlspecialchars($precio) ?>"><br><br>
            
            <label for="hora_salida">Hora de Salida:</label>
            <input type="time" id="hora_salida" name="hora_salida" value="<?= htmlspecialchars($hora_salida) ?>"><br><br>
            
            <label for="hora_llegada">Hora de Llegada:</label>
            <input type="time" id="hora_llegada" name="hora_llegada" value="<?= htmlspecialchars($hora_llegada) ?>"><br><br>
            
            <input type="submit" name="p" value="Actualizar">
        </section>
    </form>
</div>

</body>
</html>