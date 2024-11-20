<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Reservaciones</title>
    <link rel="stylesheet" href="vista/css/styleReser.css">
</head>
<body>
    <header class="header">
        <h1>Mis Reservaciones</h1>
        <div class="search-container">
            <input type="text" placeholder="Buscar reservación" class="search-bar">
            <button class="filter-btn">Filtrar</button>
        </div>
    </header>

    <main>
        <!-- Sección de reservaciones -->
        <div class="reservation-section">
            <h2>6 de noviembre</h2>
            <div class="reservation-card">
                <img src="chiapas-tour.jpg" alt="Tour Chiapas" class="package-image">
                <div class="reservation-info">
                    <h3>Excursión a las Cuevas de Chiapas</h3>
                    <p><strong>Fecha de viaje:</strong> 12 de diciembre, 2024</p>
                    <p><strong>Estado:</strong> Confirmado</p>
                    <p><strong>Precio:</strong> $5,000 MXN</p>
                </div>
                <div class="reservation-actions">
                    <a href="#" class="more-info">Ver más información</a>
                    <a href="#" class="add-service">Agregar servicios</a>
                </div>
            </div>
        </div>

        <div class="reservation-section">
            <h2>16 de octubre</h2>
            <div class="reservation-card">
                <img src="selva-tour.jpg" alt="Tour Selva" class="package-image">
                <div class="reservation-info">
                    <h3>Tour por la Selva Lacandona</h3>
                    <p><strong>Fecha de viaje:</strong> 21 de octubre, 2024</p>
                    <p><strong>Estado:</strong> Finalizado</p>
                    <p><strong>Precio:</strong> $7,000 MXN</p>
                </div>
                <div class="reservation-actions">
                    <a href="#" class="more-info">Ver más información</a>
                    <a href="#" class="add-service">Reagendar viaje</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>