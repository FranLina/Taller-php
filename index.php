<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>taller</title>
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <?php
    include 'modelo.php';
    session_start();
    $prueba = array();
    $coche_prueba = new Coche();

    $coche_prueba->set_matricula("1234ABC");
    $coche_prueba->set_marca("Seat");
    $coche_prueba->set_modelo("Leon");
    $coche_prueba->set_color("Blanco");
    $coche_prueba->set_revisado("N");

    array_push($prueba, $coche_prueba);

    $coche_prueba2 = new Coche();
    $coche_prueba2->set_matricula("234987KPL");
    $coche_prueba2->set_marca("Ford");
    $coche_prueba2->set_modelo("Fiesta");
    $coche_prueba2->set_color("Rojo");
    $coche_prueba2->set_revisado("N");

    array_push($prueba, $coche_prueba2);

    $_SESSION['coches'] = $prueba;

    ?>
</head>

<body style="background-color:#5FEB65;">
    <h1>Taller</h1>
    <form action="Taller_/listadoCoches.php" method="post">
        <input type="submit" value="Coches" class="boton" />
    </form>
</body>

</html>