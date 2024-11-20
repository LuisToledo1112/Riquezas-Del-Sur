<?php
// Establecer la conexión con la base de datos
$servername = "127.0.0.1";
$username = "root";
$password = "Alumno.";
$dbname = "riquezasdelsur";  // Cambia esto con el nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Consultas para obtener los datos
$excursionesQuery = "SELECT nombre FROM Excursiones";
$paquetesQuery = "SELECT nombre FROM Paquete";
$rutasQuery = "SELECT nombre FROM Rutas";

$excursiones = $conn->query($excursionesQuery);
$paquetes = $conn->query($paquetesQuery);
$rutas = $conn->query($rutasQuery);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riqueza del Sur - Panel de Empleado</title>
    <link rel="stylesheet" href="vista/css/styleWorker.css">
    <style>
        /* Estilos adicionales para simplificar la vista */
        .hidden {
            display: none;
        }

        .options-container {
            margin-top: 10px;
        }

        .option {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Riqueza del Sur</h2>
        <ul>
            <li><a href="./?i=worker">Inicio</a></li>
            <li><a href="./?i=paqueteempleado">Paquetes</a></li>
            <li><a href="./?i=rutaempleado">Rutas</a></li>
            <li><a href="./?i=excursionempleado">Excursiones</a></li>
            <li><a href="#Reportes">Reportes</a></li>
            <li><a href="./?i=pago">Venta</a></li>
            <li><a href=".?i=reservacionLocal">Reservaciones</a></li>
            <li><a type="button" class="btn btn-outline-success" href="./?i=index">Página Principal</a></li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <h1>Panel de Empleado</h1>
        </header>

        <section class="employee-panel">
            <h2>Datos de Reservación</h2>
            <form action="#" id="reservation-form">
                <label for="cliente">Nombre del Cliente:</label>
                <input type="text" id="cliente" name="cliente" required>

                <label for="fecha">Fecha de Reservación:</label>
                <input type="date" id="fecha" name="fecha" required>

                <label for="tipo">Seleccione una Opción:</label>
                <select id="tipo" name="tipo" required>
                    <option value="" disabled selected>Seleccione</option>
                    <option value="excursion">Excursión</option>
                    <option value="paquete">Paquete</option>
                    <option value="ruta">Ruta</option>
                </select>

                <!-- Contenedor dinámico para opciones -->
                <div class="options-container">
                    <!-- Excursiones -->
                    <div id="excursiones-container" class="hidden">
                        <h3>Excursiones Disponibles</h3>
                        <?php while ($row = $excursiones->fetch_assoc()) { ?>
                            <div class="option">
                                <input type="radio" id="excursion-<?php echo $row['nombre']; ?>" name="opcion" value="<?php echo $row['nombre']; ?>">
                                <label for="excursion-<?php echo $row['nombre']; ?>"><?php echo $row['nombre']; ?></label>
                            </div>
                        <?php } ?>
                    </div>

                    <!-- Paquetes -->
                    <div id="paquetes-container" class="hidden">
                        <h3>Paquetes Disponibles</h3>
                        <?php while ($row = $paquetes->fetch_assoc()) { ?>
                            <div class="option">
                                <input type="radio" id="paquete-<?php echo $row['nombre']; ?>" name="opcion" value="<?php echo $row['nombre']; ?>">
                                <label for="paquete-<?php echo $row['nombre']; ?>"><?php echo $row['nombre']; ?></label>
                            </div>
                        <?php } ?>
                    </div>

                    <!-- Rutas -->
                    <div id="rutas-container" class="hidden">
                        <h3>Rutas Disponibles</h3>
                        <?php while ($row = $rutas->fetch_assoc()) { ?>
                            <div class="option">
                                <input type="radio" id="ruta-<?php echo $row['nombre']; ?>" name="opcion" value="<?php echo $row['nombre']; ?>">
                                <label for="ruta-<?php echo $row['nombre']; ?>"><?php echo $row['nombre']; ?></label>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <label for="paquete">Seleccionado:</label>
                <input type="text" id="paquete" name="paquete" readonly>

                <label for="hora">Hora de Salida:</label>
                <input type="time" id="hora" name="hora" required>

                <label for="estado">Estado de la Reservación:</label>
                <select id="estado" name="estado">
                    <option value="pendiente">Pendiente</option>
                    <option value="confirmada">Confirmada</option>
                    <option value="cancelada">Cancelada</option>
                </select>

                <div class="form-actions">
                    <button class="guardarCambios" type="submit">Guardar Cambios</button>
                    <button type="button">Cancelar Reservación</button>
                </div>
            </form>
        </section>
    </div>

    <script>
        // JavaScript para manejar la lógica de habilitación de vistas
        document.addEventListener("DOMContentLoaded", () => {
            const tipoSelect = document.getElementById("tipo");
            const excursionContainer = document.getElementById("excursiones-container");
            const paqueteContainer = document.getElementById("paquetes-container");
            const rutaContainer = document.getElementById("rutas-container");
            const paqueteInput = document.getElementById("paquete");
            const opcionInputs = document.querySelectorAll("input[name='opcion']");

            // Escuchar cambios en la selección de tipo
            tipoSelect.addEventListener("change", (e) => {
                const tipoSeleccionado = e.target.value;

                // Ocultar todas las opciones primero
                excursionContainer.classList.add("hidden");
                paqueteContainer.classList.add("hidden");
                rutaContainer.classList.add("hidden");

                // Mostrar la opción correspondiente
                if (tipoSeleccionado === "excursion") {
                    excursionContainer.classList.remove("hidden");
                    paqueteInput.value = "";
                } else if (tipoSeleccionado === "paquete") {
                    paqueteContainer.classList.remove("hidden");
                    paqueteInput.value = "";
                } else if (tipoSeleccionado === "ruta") {
                    rutaContainer.classList.remove("hidden");
                    paqueteInput.value = "";
                }
            });

            // Escuchar cambios en las opciones seleccionadas
            opcionInputs.forEach((input) => {
                input.addEventListener("change", (e) => {
                    paqueteInput.value = e.target.value;
                });
            });
        });
    </script>
    <!-- Incluir SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./?i=msalert"></script>
</body>
</html>
