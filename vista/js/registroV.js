let saleCount = 0; // Contador para el número de ventas

document.getElementById('comprar-button').addEventListener('click', function () {
    // Obtener valores del formulario
    const packageName = document.getElementById('paquete').value;
    const route = document.getElementById('rutas').value;
    const excursion = document.getElementById('excursion').value;

    // Validar que los campos no estén vacíos
    if (!packageName || !route || !excursion) {
        alert('Por favor, completa todos los campos.');
        return;
    }

    // Incrementar el contador de ventas
    saleCount++;

    // Crear una nueva fila para la tabla
    const saleRow = document.createElement('tr');
    const currentTime = new Date().toLocaleString(); // Fecha y hora actual

    saleRow.innerHTML = `
        <td>${saleCount}</td>
        <td>${packageName}</td>
        <td>${route}</td>
        <td>${excursion}</td>
        <td>${currentTime}</td>
    `;

    // Agregar la fila al historial de ventas
    document.getElementById('sales-container').appendChild(saleRow);

    // Limpiar el formulario
    document.getElementById('sales-form').reset();
});
