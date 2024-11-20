<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            background-color: #ffffff;
        }

        /* Estilos del contenedor del formulario */
        .container {
            max-width: 400px;
            width: 90%;
            padding: 2rem;
            background-color: #fff;
            border: 1px solid #e0e0e0;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            text-align: center;
        }

        /* Título */
        h2 {
            color: #006400; /* Verde oscuro */
            margin-bottom: 1.5rem;
        }

        /* Estilos de los inputs */
        .form-group {
            margin-bottom: 1rem;
            text-align: left;
        }

        label {
            color: #333;
            font-weight: bold;
            display: block;
            margin-bottom: 0.3rem;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="time"],
        select {
            width: 100%;
            padding: 0.6rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }

        /* Estilo del botón */
        .btn-submit {
            width: 100%;
            padding: 0.8rem;
            background-color: #006400; /* Verde oscuro */
            color: #fff;
            font-size: 1rem;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-submit:hover {
            background-color: #004d00; /* Un verde aún más oscuro */
        }

        .precio-paquete {
            font-weight: bold;
            color: #006400;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulario de Reservación</h2>
        <form>
            <div class="form-group">
                <label for="nombre">Nombre Completo</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha de la Reserva</label>
                <input type="date" id="fecha" name="fecha" required>
            </div>
            <div class="form-group">
                <label for="hora">Hora de la Reserva</label>
                <input type="time" id="hora" name="hora" required>
            </div>
            <div class="form-group">
                <label for="CURP">CURP</label>
                <input type="text" id="CURP" name="CURP" required>
            </div>
            <div class="form-group">
                <label for="personas">Número de Personas</label>
                <select id="personas" name="personas" required>
                    <option value="1">1 Persona</option>
                    <option value="2">2 Personas</option>
                    <option value="3">3 Personas</option>
                    <option value="4">4 Personas</option>
                    <option value="5">5 Personas</option>
                    <option value="6">6 Personas</option>
                </select>
            </div>
            <div class="form-group">
                <label for="paquete">Selecciona un Paquete</label>
                <select id="paquete" name="paquete" required onchange="actualizarPrecio()">
                    <option value="PaqueteDiviertas" data-precio="5000">PaqueteDiviertas - $5,000 MXN</option>
                    <option value="PaqueteDistraigas" data-precio="8000">PaqueteDistraigas - $8,000 MXN</option>
                    <option value="PaqueteMuevas" data-precio="6000">PaqueteMuevas - $6,000 MXN</option>
                    <option value="PaqueteMires" data-precio="6000">PaqueteMires - $6,000 MXN</option>
                    <option value="PaqueteAsombres" data-precio="4000">PaqueteAsombres - $4,000 MXN</option>
                    <option value="PaqueteLlegues" data-precio="9500">PaqueteLlegues - $9,500 MXN</option>
                </select>
            </div>
            <p id="precio" class="precio-paquete">Precio del paquete: $5,000 MXN</p>
            <button type="submit" class="btn-submit">Reservar</button>
        </form>
    </div>

    <script>
        function actualizarPrecio() {
            const paquete = document.getElementById("paquete");
            const precioSeleccionado = paquete.options[paquete.selectedIndex].getAttribute("data-precio");
            document.getElementById("precio").textContent = "Precio del paquete: $" + precioSeleccionado + " MXN";
        }
    </script>
</body>
</html>