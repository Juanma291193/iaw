<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 34;
        $y = 2;

        if ($x > $y) {
            echo "$x es mayor que $y ".'<br>';
        } elseif ($x < $y) {
            echo "$x es menor que $y.".'<br>';
        } else {
            echo "$x es igual a $y ".'<br>';
        }

    ?>
</body>
</html>