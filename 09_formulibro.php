<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- Incluir Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
        <h1>Introduzca los datos del nuevo libro</h1>
        <form action= "09_inserta.php" method = "post">
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type ="text" class="form-control" name="titulo" id="titulo" placeholder="Introduzca un título"/>
            </div>
            <div class="form-group">
                <label for="autor">Autor:</label>
                <input type ="text" class="form-control" name="autor" id="autor" placeholder="Introduzca un autor"/>
            </div>
            <div class="form-group">
                <label for="genero">Género:</label>
                <input type ="text" class="form-control" name="genero" id="genero" placeholder="Introduzca un género"/>
            </div>
            <div class="form-group">
                <label for="editorial">Editorial:</label>
                <input type ="text" class="form-control" name="editorial" id="editorial" placeholder="Introduzca una editorial"/>
            </div>
            <div class="form-group">
                <label for="isbn">ISBN:</label>
                <input type ="text" class="form-control" name="isbn" id="isbn" placeholder="Introduzca un ISBN"/>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type ="text" class="form-control" name="cantidad" id="cantidad" placeholder="Introduzca un cantidad"/>
            </div>
            <button type="submit" class="btn btn-primary">Insertar</button>
            <button type ="reset" class="btn btn-primary">Restablecer</button>
        </form>
    </body>
</html>