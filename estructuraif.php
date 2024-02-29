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
            echo "<h1> $x es mayor que $y </h1>".'<br>';
        } elseif ($x < $y) {
            echo "<h1> $x es menor que $y </h1>".'<br>';
        } else {
            echo "<h1> $x es igual a $y </h1>".'<br>';
        }

    ?>
</body>
</html>