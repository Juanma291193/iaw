<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Repositorio de openwebinar
        //https://github.com/OpenWebinarsNet/Curso-PHP-Ampliando-Conceptos-/blob/main/4.%20MySQL/Actualizaci%C3%B3n%20de%20datos/formulario4.php
        /*Recojo todas las variables de todos los formularios
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $genero = $_POST['genero'];
        $editorial = $_POST['editorial'];
        $isbn = $_POST['isbn'];
        $cantidad = $_POST['cantidad'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $pres_titulo = $_POST['seleccionar'];
        $pres_nombre = $_POST['seleccionar2'];
        $fechainicio = $_POST['fechainicio'];
        $fechafin = $_POST['fechafin']; */

        //Me conecto
        $host = "localhost";
        $user = "phpmyadmin";
        $pass = "phpmyadmin";
        $database = "biblioteca";

        $con = new mysqli($host, $user, $pass, $database);

        //Selecciono la base de datos
        mysqli_select_db($con, "biblioteca");

        //Preparo las consultas
        $pres_titulo="Cien años de soledad";
        $pres_nombre="Paco";
        $consulibro= "SELECT id FROM libros WHERE titulo = $pres_titulo";
		$consusuario= "SELECT id FROM usuarios WHERE nombre = $pres_nombre";

        //Hago las consultas, pero no funciona. 
		$libros = mysqli_query($con, $consulibro);
        while ($id_libro=mysqli_fetch_row($libros)) {
            echo "Libro: " . $id_libro[0];
            echo "<br>";
        }
        $usuarios = mysqli_query($con, $consusuario);
        while ($id_usuario=mysqli_fetch_row($usuarios)) {
            echo "Usuario: " . $id_usuario[0];
            echo "<br>";
        }
		
    ?>
</body>
</html>