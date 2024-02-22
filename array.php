<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $musicas = array("Pop", "Rock", "Country", "Clásica", "Rap");
        echo $musicas [4] . '<br>';
        echo "________________________________________" . "<br>";
        echo "Me gustan los géneros: " . $musicas [1];
        echo ", " . $musicas [4] . '<br>';
        echo "________________________________________" . "<br>";
        echo "Conozco los géneros: ". '<br>';
        print_r($musicas);
        echo "<br>";
        echo "________________________________________" . "<br>";
        echo "Conozco los géneros: ". '<br>';
        foreach($musicas as $v) {
            echo "$v" . "<br>";
        }
        //Se puede hacer un array de arrays.
        //Para llamarlo es $arraypadre [array hijo] [posición]
    ?>
</body>
</html>