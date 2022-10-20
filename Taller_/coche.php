<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Coche</title>
    <link href="estilo.css" rel="stylesheet" type="text/css">
</head>

<body style="background-color:#5FEB65;">
    <h1>Alta Coches</h1>
    <form action="altaCoche.php" method="post">
        <label>Matricula: </label>
        <input type="text" name="Matricula">
        <br />
        <label>Marca: </label>
        <input type="text" name="Marca">
        <br />
        <label>Modelo: </label>
        <input type="text" name="Modelo">
        <br />
        <label>Color: </label>
        <input type="text" name="Color">
        <br />
        <input type="submit" value="Crear" class="boton"/>
    </form>
</body>

</html>