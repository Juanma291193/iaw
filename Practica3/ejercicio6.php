<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $meses = array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "novimebre", "diciembre");
        sort($meses);
        foreach ($meses as $clave => $valor) {
            echo "meses[" . $clave . "] = " . $valor . "\n" . '<br>';
        }
    ?>
</body>
</html>