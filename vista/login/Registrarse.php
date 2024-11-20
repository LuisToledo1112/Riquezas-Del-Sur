<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="vista/css/styleSecure.css">
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <a style="color:beige;" type="button" class="btn btn-outline-success" href="?i=index">Página Principal</a>
    <div class="form">
        <ul class="tab-group">
            <li class="tab active"><a href="?i=registro">Registro</a></li>
            <li class="tab"><a href="?i=iniciarSesion" onclick="toggleLogin()">Iniciar Sesión</a></li>
        </ul>
        <div id="signup">
            <h1 style="color:beige">¡Inicia Tu Registro Para La Aventura!</h1>
            <form method="POST" action="index.php?c=guardar">

                <div class="top-row">
                    <div class="field-wrap">
                        <input for="nombre" id="nombre" name="nombre" type="text" required autocomplete="off" placeholder="Nombre(s)" />
                    </div>
                    <div class="field-wrap">
                        <input for="apellido" id="apellido" name="apellido" type="text" required autocomplete="off" placeholder="Apellido" />
                    </div>
                </div>
                <div class="field-wrap">
                    <input for="telefono" id="telefono" name="telefono" type="text" required autocomplete="off" placeholder="Número de Teléfono" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,10)" />
                </div>
                <div class="field-wrap">
                    <input for="correo" type="text" id="correo" name="correo" required autocomplete="off" placeholder="Correo Electrónico" pattern="^[^@\s]+@[^@\s]+\.[^@\s]+$" title="Por favor, introduce un correo electrónico válido que contenga '@' y una terminación." />
                </div>
                <div class="field-wrap">
                    <input for="password" id="password" name="password" type="password" required autocomplete="off" placeholder="Password"/>
                </div>
                <input class="button" type="submit" value="Registrate">
                <input type="hidden" name="c" value="guardar">
            </form>
        </div>
    </div>
    <script src="./?i=jsemail"></script>
    <!-- Incluye SweetAlert2 desde CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>