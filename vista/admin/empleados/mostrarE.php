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
        <section id="Empleados">
            <h2>Gestión de Empleados</h2>

            <a class="BotonesAccion" href="./?i=agregarEmpleado" type="button">Add Worker</a>
            <form class="gestionE" action="">
                <table class="table">
                    <thead class="thead-dark">
                                <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Fecha De Nacimiento</th>
                                <th scope="col">CURP</th>
                                <th scope="col">Genero</th>
                                <th scope="col" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,10)">Telefono</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Password</th>
                                </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($datos as $key => $value) {
                                foreach($value as $va) {
                                    echo "<tr><td>".$va['id_empleado']."</td>";
                                    echo "<td>".$va['nombre']."</td>";
                                    echo "<td>".$va['apellido']."</td>";
                                    echo "<td>".$va['tipo']."</td>";
                                    echo "<td>".$va['fecha_nacimiento']."</td>";
                                    echo "<td>".$va['curp']."</td>"; // Asegúrate de que el nombre de la columna sea correcto
                                    echo "<td>".$va['genero']."</td>"; // Asegúrate de que el nombre de la columna sea correcto
                                    echo "<td>".$va['telefono']."</td>";
                                    echo "<td>".$va['correo']."</td>";
                                    echo "<td>".$va['password']."</td>";
                                    echo "<td><a class='BotonesAccion1' href='./?e=editar&id=".$va['id_empleado']."'>Update</a>
                                        <a class='BotonesAccion2' href='./?e=eliminar&id=".$va['id_empleado']."'>Delete</a></td>";
                                    echo "</tr>"; // Asegúrate de cerrar la fila correctamente
                                }
                            }
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