<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Riquezas del Sur</title>
    <link rel="stylesheet" href="vista/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        header {
            display: flex;
            align-items: center;
            padding: 10px;
        }
        
        header img {
            margin-right: 15px;
        }

        header h1 {
            font-size: 1.8rem;
            margin: 0;
        }
    </style>
    
</head>
<body>

    <header>
        <!-- Logo Image -->
        <img src="vista/img/Logo.png" alt="Riquezas del Sur Logo" style="width: 150px; height: auto;">
        
        <!-- Título del proyecto -->
        <h1>Riquezas del Sur</h1>
        
        <section class="reserva">
            <a href="./?i=listareserva" id="boton" type="botton">Mis Reservaciones</a>
        </section>
        <section class="botonaso">
            <div class="dropdown">
                <img src="vista/img/Login.png" style="width: 50px; height: 50px" alt="">
                <a href="./?i=index" id="session-button" class="btn btn" type="button">Cerrar Sesion</a>
            </div>
        </section>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vista/js/verf.js"></script>
</body>
</html>

<div class="banner">
    ¡Descubre la belleza de Chiapas!
</div>

<div class="content">
    <section id="about">
        <h2 class="section-title">Sobre Nosotros</h2>
        <p style="font-size: 20px;">Somos una agencia de turismo con más de 10 años de experiencia en la creación de experiencias inolvidables. Nuestros tours te llevarán a los lugares más impresionantes de Chiapas, desde las majestuosas Cascadas de Agua Azul hasta la histórica ciudad de San Cristóbal de las Casas.</p>
    </section>

    <section id="services">
        <h2 class="section-title">Nuestros Servicios</h2>
        <div class="services">
            <div>
                <h3>Paquetes Turísticos</h3>
                <p>Ofrecemos paquetes que incluyen transporte, hospedaje y guías turísticos certificados.</p>
                <a type="button" class="btn btn-outline-success" href="?i=paquetes">Mas info...</a>
            </div>
            <div>
                <h3>Rutas Personalizadas</h3>
                <p>Creamos rutas a medida según tus preferencias y tiempo disponible.</p>
                <a type="button" class="btn btn-outline-success" href="?i=rutas">Mas info...</a>
            </div>
            <div>
                <h3>Excursiones de Aventura</h3>
                <p>Vive la adrenalina con nuestras excursiones de aventura en la selva y los ríos de Chiapas.</p>
                <a type="button" class="btn btn-outline-success" href="?i=excursiones">Mas info...</a>
            </div>
        </div>
    </section>

    <section id="destinations">
        <h2 class="section-title">Destinos Populares</h2>
        <div class="destinations">
            <div>
                <h3>Cascadas de Agua Azul</h3>
                <p>Un paraíso natural de aguas cristalinas y cascadas impresionantes.</p>
                <img src="vista/img/Cascadas_Agua.jpeg" height="200px" width="390px" alt="">
            </div>
            <div>
                <h3>San Cristóbal de las Casas</h3>
                <p>Una ciudad colonial llena de historia, cultura y tradiciones.</p>
                <img src="vista/img/Sancris.jpeg" height="200px" width="390px" alt="">
            </div>
            <div>
                <h3>Cañón del Sumidero</h3>
                <p>Explora este increíble cañón en un recorrido en lancha por el río Grijalva.</p>
                <img src="vista/img/Canon.jpeg" height="200px" width="390px" alt="">
            </div>
        </div>
    </section>

    <section id="contact">
        <h2 class="section-title">Contáctanos</h2>
        <div class="contact-form">
            <form action="enviar.php" method="post">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                <div class="alert alert-primary d-flex align-items-center" role="alert">

                <input type="submit" value="Enviar">
            </form>
        </div>
    </section>
</div>
<?php require_once("layout/footer.php");
?>
