<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración Empresarial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="vista/css/styleAdmin.css">
</head>
<body>
    <div class="sidebar">
        <h2>Riqueza del Sur</h2>
        <nav>
            <a href="?i=administrador">Inicio</a>
            <a href="?i=empleado">Empleados</a>
            <a href="?i=cliente">Clientes</a>
            <a href="?i=paquete">Paquetes</a>
            <a href="?i=ruta">Rutas</a>
            <a href="?i=excursion">Excursiones</a>
            <a type="button" class="btn btn-outline-success" href="./?i=index">Página Principal</a>
        </nav>
    </div>

    <div class="main-content">
        <h2>Datos Generales</h2>
        <section id="Excursion">
            <h2>Gestión de Excursiones</h2>

            <a class="BotonesAccion" href="./?i=agregarExcursion" type="button">Agregar Excursiones</a>
            <form class="gestionE" action="">
                <table class="table">
                    <thead class="thead-dark">
                                <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Informacion</th>
                                </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($datos as $key => $value)
                                foreach($value as $va ):
                                    echo "<tr><td>".$va['id_excursion']."</td>";
                                    echo "<td>".$va['nombre']."</td>";
                                    echo "<td>".$va['descripcion']."</td>";
                                    echo "<td>".$va['fecha']."</td>";
                                    echo "<td>".$va['precio']."</td>";
                                    echo "<td>".$va['informacion']."</td>";
                                    echo "<td><a class='BotonesAccion1' href='./?h=editar&id=".$va['id_excursion']."'>Update</a>
                                    <a class='BotonesAccion2' href='./?h=eliminar&id=".$va['id_excursion']."'>Delete</a></td>";
                            endforeach;
                        ?>      
                    </tbody>
                </table>
            </form>
        </section>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="./?i=msalert"></script>
</body>
</html>