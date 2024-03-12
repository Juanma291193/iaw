<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
    <body>
        <div class="container mt-5">
        <h1>Introduzca los datos del nuevo tipo de pan</h1>
        <form action= "10_inserta_panes.php" method = "post">
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input type ="text" class="form-control" name="tipo" id="tipo" placeholder="Introduzca un tipo de pan."/>
            </div>
            <button type="submit" class="btn btn-primary">Insertar</button>
            <button type ="reset" class="btn btn-primary">Restablecer</button>
        </form>
        </div>
    </body>
</html>