<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Recojo variables
        $tipo = $_POST['tipo'];

        //Me conecto
			$host = "localhost";
			$user = "phpmyadmin";
			$pass = "phpmyadmin";
			$database = "panaderia";

        //Conectando
        $con = new mysqli($host, $user, $pass, $database);

        //Verificar conexion
        if (!$con) {
            die("Conexion fallida" . $con->connect_error);
        }
        
        //Selecciono la base de datos
        mysqli_select_db($con, "panaderia");

        // Inserto los datos en BBDD
        $insert_pan = "INSERT INTO panes 
        (tipo)
        VALUES('$tipo')";

        if ($result = mysqli_query($con, $insert_pan)) {
        echo "<h3 class='center'>Pan " . $tipo ." insertado correctamente."."<br/>"."</h3>";
                
        } else {
        echo ("No ha sido posible registrar el tipo de pan -> ". mysqli_error($con))."<br/>"."<br/>";
        }

    ?>
</body>
</html>