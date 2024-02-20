<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 0;
        $b = 0;
        while ($a < 100) {
            $a = ($a + 1);
            if ($a % 2 == 1) {
                echo $a . '<br>';
                $b = ($b + $a);
            };
        }
        echo $b;
    ?>
</body>
</html>