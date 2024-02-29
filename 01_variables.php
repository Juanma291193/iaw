<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 3;
        $b = $a;
        $a = 10; //$b sigue siendo 3.
        //____________________________
        $a = 3;
        $b = &$a;
        $a = 10; //Ahora $b vale 10.
    ?>
</body>
</html>