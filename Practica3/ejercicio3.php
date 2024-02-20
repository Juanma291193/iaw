<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 1;
        $b = 0;
        $c = 0;
        while ($a <= 50) {
            $b = $a ** 2;
            echo "$a al cuadrado es: $b" . '<br>';
            $a = ($a + 1);
            $c = $c + $b;
        }
        echo "La suma total de los cuadrados es: $c";
    ?>
</body>
</html>