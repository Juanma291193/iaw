<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Me conecto
        $host = "localhost";
        $user = "phpmyadmin";
        $pass = "phpmyadmin";
        $database = "biblioteca";

        $con = new mysqli($host, $user, $pass, $database);

        // Verificar la conexión
        if ($con->connect_error) {
            die("Error al conectar con la base de datos: " . $con->connect_error);
        }

        // Preparo las consultas
        $pres_titulo = "Orgullo y prejuicio";
        $pres_nombre = "Elena Castro";

        $consulibro = "SELECT id FROM libros WHERE titulo = '$pres_titulo'";
        $consusuario = "SELECT id FROM usuarios WHERE nombre = '$pres_nombre'";

        // Ejecuto las consultas
        $libros = mysqli_query($con, $consulibro);
        if (!$libros) {
            die("Error al ejecutar la consulta de libros: " . mysqli_error($con));
        }

        while ($id_libro = mysqli_fetch_row($libros)) {
            $libro_id = $id_libro[0];
        }

        $usuarios = mysqli_query($con, $consusuario);
        if (!$usuarios) {
            die("Error al ejecutar la consulta de usuarios: " . mysqli_error($con));
        }

        while ($id_usuario = mysqli_fetch_row($usuarios)) {
            $usuario_id = $id_usuario[0];
        }

        // Defino las variables de fechas
        $fechainicio = date('Y-m-d');
        $fechafin = date('Y-m-d', strtotime('+7 days'));

        // Inserto en la base de datos
        $insert_pres = "INSERT INTO prestamos 
                        (id_libro, id_usuario, fecha_prestamo, fecha_devolucion)
                        VALUES($libro_id, $usuario_id, '$fechainicio', '$fechafin')";

        // Verifico
        if (mysqli_query($con, $insert_pres) === TRUE) {
            echo "<h3 class='center'>Préstamo de " . $pres_titulo . " insertado correctamente." . "<br/>" . "</h3>";
        } else {
            echo "No ha sido posible registrar el préstamo: " . mysqli_error($con) . "<br/>" . "<br/>";
        }

        // Cerrar la conexión
        $con->close();
    ?>
</body>
</html>