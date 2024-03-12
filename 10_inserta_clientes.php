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
        $nombre = $_POST['nombre'];
        $dni = $_POST['dni'];
        $telefono = $_POST['telefono'];
        
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
        $insert_client = "INSERT INTO clientes 
        (dni, nombre, telefono)
        VALUES('$dni', '$nombre', $telefono)";

        if ($result = mysqli_query($con, $insert_client)) {
        echo "<h3 class='center'>Cliente " . $nombre ." insertado correctamente."."<br/>"."</h3>";
                
        } else {
        echo ("No ha sido posible registrar el cliente -> ". mysqli_error($con))."<br/>"."<br/>";
        } 
    ?>
</body>
</html>