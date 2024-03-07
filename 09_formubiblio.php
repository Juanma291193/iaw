<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Introduzca un nuevo libro y/o usuario</h1> <br>
    <form action= "09_inserta.php" method = "post">
        <p>Nuevo libro</p> <br>
        Titulo: <input type ="text" name="titulo"/> <br>
        Autor: <input type ="text" name="autor"/> <br>
        Genero: <input type ="text" name="genero"/> <br>
        Editorial: <input type ="text" name="editorial"/> <br>
        ISBN: <input type ="text" name="isbn"/> <br>
        Cantidad:<input type ="text" name="cantidad"/> <br>
        <p>Nuevo usuario</p> <br>
        Nombre: <input type ="text" name="nombre"/> <br>
        Email: <input type ="text" name="email"/> <br>
        Telefono: <input type ="text" name="telefono"/> <br>
        <p><input type="submit"></p>
    </form>
    </body>
</html>