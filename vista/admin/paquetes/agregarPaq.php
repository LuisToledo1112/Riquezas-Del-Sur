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
        <h1>Agregar Paquetes</h1>
            <h2>Datos Generales</h2>
        </section>
            <section id="general">
            <form method="POST" action="index.php?p=guardar">

                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="Nombre"><br><br>

                <label for="descripcion">Descripción:</label>
                <input type="text" id="descripcion" name="Descripcion"><br><br>

                <label for="fecha_viaje">Fecha del Viaje:</label>
                <input type="date" id="fecha_viaje" name="Fecha_viaje"><br><br>

                <label for="precio_paquete">Precio del paquete:</label>
                <input type="text" id="precio_paquete" name="Precio_paquete"><br><br>

                <label for="hora_salida">Hora de Salida:</label>
                <input type="time" id="hora_salida" name="hora_salida"><br><br>

                <label for="hora_llegada">Hora de Llegada:</label>
                <input type="time" id="hora_llegada" name="hora_llegada"><br><br>

                <input class="btn-submit" type="submit" value="Agregar">
            </form>

    </section>
</div>
</body>
</html>