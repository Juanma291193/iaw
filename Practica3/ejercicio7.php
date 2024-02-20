<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Función para generar un color hexadecimal aleatorio
        function random_color() {
            return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
        }

        // Dibuja 100 cuadrados con colores aleatorios
        for ($i = 0; $i < 100; $i++) {
            $color = random_color(); // Genera un color aleatorio
            echo "<div style='width: 10px; height: 10px; margin: 5px; float: left; background-color: $color'></div>";
        }
    ?>
</body>
</html>