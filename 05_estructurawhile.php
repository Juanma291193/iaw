<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h2>Estructura while con variable preincremento.</h2>";
        $x = 0;
        while ($x < 10) {
            echo ++$x . "<br>";
        }
        
        echo "<h2>Estructura while con variable postincremento.</h2>";
        $x = 1;
        while ($x <= 10) {
            echo $x++ . "<br>";
        }
        echo "<h2>Estructura do...while del 10 al 1 con postdecremento.</h2>";
        $x = 10;
        do {
            echo $x-- . "<br>";
        } while ($x >=1);

        echo "<h2>Estructura do...while del 1 al 10 con postincremento.</h2>";
        $x = 1;
        do {
            echo $x++ . "<br>";
        } while ($x <=10);

        echo "<h2>Estructura do...while del 1 al 10 con preincremento.</h2>";
        $x = 0;
        do {
            echo ++$x . "<br>";
        } while ($x <10);
    ?>
</body>
</html>