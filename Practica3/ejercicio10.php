<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Panadería</h1>
        <form action = "ejercicio10_b.php" method = "post">
            <div class="form-group">
                <label for="barras">Barras de pan:</label>
                <input type ="number" class="form-control" name="barras" id="barras" placeholder="Introduzca una cantidad"/>
            </div>
            <div class="form-group">
                <label for="bollos">Bollos:</label>
                <input type ="number" class="form-control" name="bollos" id="bollos" placeholder="Introduzca una cantidad"/>
            </div>
            <div class="form-group">
                <label for="bocata">Pan de bocata:</label>
                <input type ="number" class="form-control" name="bocata" id="bocata" placeholder="Introduzca una cantidad"/>
            </div>
            <div class="form-group">
                <label for="web">¿Cómo ha encontrado esta página web?</label>
                <input type ="text" class="form-control" id="web" placeholder="Introduzca una respuesta"/>
            </div>
            <button type="submit" class="btn btn-primary">Realizar pedido</button>
            <button type ="reset" class="btn btn-primary">Restablecer</button>
        </form>
    </div>
</body>
</html>