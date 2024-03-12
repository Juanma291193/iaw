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
        $pan = $_POST['seleccionar'];
        $dni = $_POST['dni'];
        $cantidad = $_POST['cantidad'];
        $fecha = $_POST['fecha'];

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

        //Preparo las consultas para obtener los id de pan y cliente
        $consupan = "SELECT id FROM panes WHERE tipo = '$pan'";
        $consucliente = "SELECT id FROM clientes WHERE dni = '$dni'";
        
        //Consulto y recojo el valor del array de consulta, en una variable
        $panes = mysqli_query($con, $consupan);
        if (!$panes) {
            die("Error al ejecutar la consulta de panes: " . mysqli_error($con));
        }
        while ($id_pan = mysqli_fetch_row($panes)) {
            $pan_id = $id_pan[0];
        }

        $clientes = mysqli_query($con, $consucliente);
        if (!$clientes) {
            die("Error al ejecutar la consulta de clientes: " . mysqli_error($con));
        }
        while ($id_cliente = mysqli_fetch_row($clientes)) {
            $cliente_id = $id_cliente[0];
        }
        
        //Preparo la variable de fecha para que tenga el formato adecuado
        $fecha = date('Y-m-d', strtotime($fecha));

        //Inserto en la base de datos
        $insert_pedido = "INSERT INTO pedidos 
                        (id_cliente, id_pan, cantidad, fecha)
                        VALUES($cliente_id, $pan_id, $cantidad, '$fecha');";

        //Verifico
        if ($result = mysqli_query($con, $insert_pedido)) {
            echo "<h3 class='center'>Pedido de " . $pan ." insertado correctamente."."<br/>"."</h3>";
                    
        } else {
            echo ("No ha sido posible registrar el pedido -> ". mysqli_error($con))."<br/>"."<br/>";
        }
    ?>
</body>
</html>