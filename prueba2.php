<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Esta es la corrección que ofrece chatgpt
    //Me conecto
    $host = "localhost";
    $user = "phpmyadmin";
    $pass = "phpmyadmin";
    $database = "biblioteca";

    $con = new mysqli($host, $user, $pass, $database);

    //Verificar la conexión
    if ($con->connect_error) {
        die("Error al conectar con la base de datos: " . $con->connect_error);
    }

    //Preparo las consultas
    $pres_titulo = "Cien años de soledad";
    $pres_nombre = "Paco";

    //Escapar los valores de las variables y usar comillas simples en las consultas
    $pres_titulo_esc = $con->real_escape_string($pres_titulo);
    $pres_nombre_esc = $con->real_escape_string($pres_nombre);

    $consulibro = "SELECT id FROM libros WHERE titulo = '$pres_titulo_esc'";
    $consusuario = "SELECT id FROM usuarios WHERE nombre = '$pres_nombre_esc'";

    //Hago las consultas
    $libros = $con->query($consulibro);
    if (!$libros) {
        die("Error al ejecutar la consulta de libros: " . $con->error);
    }
    while ($id_libro = $libros->fetch_row()) {
        echo "Libro: " . $id_libro[0];
        echo "<br>";
    }

    $usuarios = $con->query($consusuario);
    if (!$usuarios) {
        die("Error al ejecutar la consulta de usuarios: " . $con->error);
    }
    while ($id_usuario = $usuarios->fetch_row()) {
        echo "Usuario: " . $id_usuario[0];
        echo "<br>";
    }

    //Cerrar la conexión
    $con->close();

    ?>
</body>
</html>