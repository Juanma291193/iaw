<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 33;
        $y = 3;

        if ($x > $y) {
            echo "<h1> $x es mayor que $y . </h1>".'<br>';
        } elseif ($x < $y) {
            echo "<h1> $x es menor que $y . </h1>".'<br>';
        } else {
            echo "<h1> $x es igual a $y </h1>".'<br>';
        }

        echo "---------------------------------------------";

        if (($x * $y) % 2 == 0) {
            echo "<h2> $x por $y da un resultado par.</h2>". $x * $y .'<br>';
        } else {
            echo "<h2> $x por $y NO da un resultado par.</h2>". $x * $y .'<br>';
        }

        echo "---------------------------------------------";
    ?>
</body>
</html>