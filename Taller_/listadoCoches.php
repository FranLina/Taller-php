<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller</title>

    <?php
    include '../modelo.php';

    session_start();
    $listadoCoches = (array) $_SESSION['coches'];

    echo "<h1 align='center'>Listado Coches</h1>";
    echo "<form action='coche.php' method='post'>";
    echo "<table width='900px' align='center' border=' 1px solid'>";
    echo "<tr><th>Matricula</th><th>Marca</th><th>Modelo</th><th>Color</th><th>Revisado</th><th style='colspan='3''>Operaciones</th></tr>";
    if (count($listadoCoches) != 0) {
        foreach ($listadoCoches as $coche) {
            $co = new Coche();
            $co = $coche;
            echo "<tr align='center'>";
            echo "<td>" . $co->get_matricula() . "</td>";
            echo "<td>" . $co->get_marca() . "</td>";
            echo "<td>" . $co->get_modelo() . "</td>";
            echo "<td>" . $co->get_color() . "</td>";
            echo "<td>" . $co->get_revisado() . "</td>";
            echo "<td><input class='botonEd' type='submit' formaction='revisaCoche.php?matricula=" . $co->get_matricula() . "' value='Revisar'><input class='botonEd' type='submit' formaction='coche2.php?matricula=" . $co->get_matricula() . "' value='Editar'><input class='botonBo' type='submit' value='Borrar' formaction='borrarCoche.php?matricula=" . $co->get_matricula() . "'></td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    echo "<input type='submit' value='Nuevo Coche' class='boton'>";
    echo "<input type='submit' formaction='borrarTodo.php' value='Eliminar Todos' class='boton'>";
    echo "</form>"
    ?>

</head>

<body>

</body>

</html>