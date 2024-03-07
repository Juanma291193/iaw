<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
		$codalum = $_POST['codalum'];
		$nombre = $_POST['nombre'];
		$direccion = $_POST['direccion'];
		$curso = $_POST['curso'];

		// Inserto los datos en BBDD
	    	$insert_alumno = "INSERT INTO alumnos 
	  		(codalumno, nombre, direccion, cursoId)
			VALUES($codalum, '$nombre', '$direccion', $curso);";


	if ($result = mysqli_query($conector, $insert_alumno)) {
	    echo "<h3 class='center'>Alumno " . $nombre ." creado correctamente."."<br/>"."</h3>";
  		    
	} else {
	    echo ("No ha sido posible registrar el alumno -> ". mysqli_error($conector))."<br/>"."<br/>";
	}
	    
	?>
</body>
</html>