<?php
include '../modelo.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $co = new Coche();
    $co->set_matricula($_REQUEST['Matricula']);
    $co->set_marca($_REQUEST['Marca']);
    $co->set_modelo($_REQUEST['Modelo']);
    $co->set_color($_REQUEST['Color']);
    $co->set_revisado("N");

    $listadoCoches = (array) $_SESSION['coches'];
    array_push($listadoCoches, $co);
    $_SESSION['coches'] = $listadoCoches;
    header('Location: ' . 'listadoCoches.php');
}
