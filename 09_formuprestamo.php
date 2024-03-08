<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
    <body>
        <div class="container mt-5">
        <h1>Introduzca los datos del nuevo préstamo</h1>
        <form action= "09_inserta.php" method = "post">
            <?php
                //Para fijarme de un código:
                //https://github.com/OpenWebinarsNet/Curso-PHP-Ampliando-Conceptos-/blob/main/4.%20MySQL/Actualizaci%C3%B3n%20de%20datos/formulario4.php
            ?>

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type ="text" class="form-control" id="nombre" placeholder="Introduzca un nombre"/>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type ="text" class="form-control" id="email" placeholder="Introduzca una dirección de correo"/>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type ="text" class="form-control" id="telefono" placeholder="Introduzca un teléfono"/>
            </div>
            <button type="submit" class="btn btn-primary">Insertar</button>
        </form>
        </div>
    </body>
</html>