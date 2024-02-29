<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Dadas dos variables, comprobar si el valor de la multiplicación es par o inpar.
        
        $x = 33;
        $y = 3;
        echo "<h1> x vale $x ---- y vale $y. </h1>";
        echo "$x * $y = ". $x * $y;

        switch (($x*$y)%2) {
            case 0: 
                echo "<h2> El resultado de $x por $y es par </h2>";
                break;
            default:
                echo "<h2> El resultado de $x por $y NO es par </h2>";
                break;
        }
        echo "---------------------------------------------";
    ?>
</body>
</html>