<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
	//Recojo todas las variables de ambos formularios
	$titulo = $_POST['titulo'];
	$autor = $_POST['autor'];
	$genero = $_POST['genero'];
	$editorial = $_POST['editorial'];
	$isbn = $_POST['isbn'];
	$cantidad = $_POST['cantidad'];
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];

	//Me conecto
	$host = "localhost";
        $user = "phpmyadmin";
        $pass = "phpmyadmin";
        $database = "biblioteca";

        //Conectando
        $con = new mysqli($host, $user, $pass, $database);

		//Selecciono la base de datos
		mysqli_select_db($con, "biblioteca");

		//Verifico que se ha rellenado el formulario de libros

		if ($titulo) {
			// Inserto los datos en BBDD
			$insert_libro = "INSERT INTO libros 
			(titulo, autor, genero, editorial, isbn, cantidad)
			VALUES('$titulo', '$autor', '$genero', '$editorial', $isbn, $cantidad);";

			if ($result = mysqli_query($con, $insert_libro)) {
			echo "<h3 class='center'>Libro " . $titulo ." insertado correctamente."."<br/>"."</h3>";
					
			} else {
			echo ("No ha sido posible registrar el libro -> ". mysqli_error($con))."<br/>"."<br/>";
			}
		}

		//Verifico que se ha rellenado el formulario de usuarios
		if ($nombre) {
			// Inserto los datos en BBDD
			$insert_usu = "INSERT INTO usuarios 
			(nombre, email, telefono)
			VALUES('$nombre', '$email', $telefono);";

			if ($result = mysqli_query($con, $insert_usu)) {
			echo "<h3 class='center'>Usuario " . $nombre ." insertado correctamente."."<br/>"."</h3>";
					
			} else {
			echo ("No ha sido posible registrar el usuario -> ". mysqli_error($con))."<br/>"."<br/>";
			}
		}

	?>
</body>
</html>
