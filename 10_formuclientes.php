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
        <h1>Introduzca los datos del nuevo cliente</h1>
        <form action= "10_inserta_clientes.php" method = "post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type ="text" class="form-control" name="nombre" id="nombre" placeholder="Introduzca un nombre"/>
            </div>
            <div class="form-group">
                <label for="dni">DNI:</label>
                <input type ="text" class="form-control" name="dni" id="dni" placeholder="Introduzca un DNI"/>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type ="number" class="form-control" name="telefono" id="telefono" placeholder="Introduzca un teléfono"/>
            </div>
            <button type="submit" class="btn btn-primary">Insertar</button>
            <button type ="reset" class="btn btn-primary">Restablecer</button>
        </form>
        </div>
    </body>
</html>