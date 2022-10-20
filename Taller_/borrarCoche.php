<?php

include '../modelo.php';
$matricula = $_GET['matricula'];

session_start();
$listadoCoches = (array) $_SESSION['coches'];
for ($i = 0; $i <= count($listadoCoches) - 1; $i++) {
    if ($listadoCoches[$i]->get_matricula() == $matricula) {
        array_splice($listadoCoches, $i);
    }
}
$_SESSION['coches'] = $listadoCoches;
header('Location: ' . 'listadoCoches.php');