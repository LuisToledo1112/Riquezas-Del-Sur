
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
        
        <!-- Botón de sesión -->
        <section class="Head ms-auto">
            <div class="dropdown">
                <img src="vista/img/Login.png" style="width: 50px; height: 50px" alt="">
                <a href="index.php?i=registro" id="session-button" class="btn btn" type="button">Iniciar Sesión</a>
            </div>
        </section>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vista/js/verf.js"></script>
</body>
</html>
