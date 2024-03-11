<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $barra = $_POST['barras']; 
        $bollo = $_POST['bollos'];
        $bocata = $_POST['bocata'];
        if (($barra+$bollo+$bocata) > 0) {
            echo "<h3>Pedido enviado correctamente. Gracias!</h3>";
        }
        else {
            echo "<h3>No se ha seleccionado ningún producto.</h3>" . "<br>";
        }
    ?>
</body>
</html>