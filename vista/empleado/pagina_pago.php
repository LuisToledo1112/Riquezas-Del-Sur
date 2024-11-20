<?php
// Verificar si el parámetro 'id' existe en la URL y si es un número entero
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Obtener el ID de la venta de forma segura
    $id_venta = (int)$_GET['id'];

    // Conexión a la base de datos para obtener los detalles de la venta
    $conn = new mysqli("127.0.0.1", "root", "Alumno.", "riquezasdelsur");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Usar una consulta preparada para evitar SQL Injection
    $sql = $conn->prepare("SELECT * FROM ventas WHERE id = ?");
    $sql->bind_param("i", $id_venta);  // "i" indica que el parámetro es un entero
    $sql->execute();
    $result = $sql->get_result();

    // Comprobar si se obtuvo algún resultado
    if ($result->num_rows > 0) {
        $venta = $result->fetch_assoc();
    } else {
        die("Venta no encontrada.");
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
} else {
    die("ID de venta no válido o no proporcionado.");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Pago</title>
</head>
<body>
    <h1>Confirmación de Venta</h1>

    <h3>Resumen de la Venta</h3>
    <p><strong>Cliente:</strong> <?php echo htmlspecialchars($venta['cliente']); ?></p>
    <p><strong>Opción seleccionada:</strong> <?php echo htmlspecialchars($venta['opcion']); ?></p>
    <p><strong>Precio:</strong> $<?php echo number_format($venta['precio'], 2); ?></p>
    <p><strong>Hora de salida:</strong> <?php echo htmlspecialchars($venta['hora']); ?></p>

    <h3>Elija el Método de Pago</h3>
    <form action="procesar_pago.php" method="POST">
        <input type="hidden" name="venta_id" value="<?php echo $venta['id']; ?>">
        <label for="metodo_pago">Método de Pago:</label>
        <select name="metodo_pago" id="metodo_pago" required>
            <option value="tarjeta">Tarjeta de Crédito/Débito</option>
            <option value="efectivo">Efectivo</option>
            <option value="transferencia">Transferencia Bancaria</option>
        </select>
        <button type="submit">Pagar</button>
    </form>
</body>
</html>

