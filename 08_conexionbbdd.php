<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //De momento no funciona
        $host = "localhost";
        $user = "phpmyadmin";
        $pass = "phpmyadmin";
        $database = "biblioteca";

        //Conectando
        $con = new mysqli($host, $user, $pass, $database);
        
        //Verificar conexion
        if (!$con) {
            die("Conexion fallida" . $con->connect_error);
        }
        echo "Conexion exitosa";
        
        //Cerrar conexion
        $con->close();

    ?>
</body>
</html>