<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $horas = $_POST['horas'];

        echo "El usuario $nombre tiene $edad años y ha trabajado un total de $horas horas esta semana.";
    ?>
</body>
</html>