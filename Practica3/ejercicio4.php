<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 0;
        for ($i = 1; $i <= 100; $i++){
            if ($i % 5 == 0) {
                echo "$i es múltiplo de 5." . '<br>';
                $x = $x + $i;
            }
        }
        echo "La suma de los múltiplos de 5 es: $x";
    ?>
</body>
</html>