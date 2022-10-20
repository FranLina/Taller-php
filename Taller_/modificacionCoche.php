<?php
include '../modelo.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $listadoCoches = (array) $_SESSION['coches'];
    for ($i = 0; $i <= count($listadoCoches) - 1; $i++) {
        if ($listadoCoches[$i]->get_matricula() == $_REQUEST['Matricula']) {
            //No debe cambiarse la matricula porque es unico
            //$listadoCoches[$i]->set_matricula($_REQUEST['Matricula']);

            $listadoCoches[$i]->set_marca($_REQUEST['Marca']);
            $listadoCoches[$i]->set_modelo($_REQUEST['Modelo']);
            $listadoCoches[$i]->set_color($_REQUEST['Color']);
            $_SESSION['libros'] = $listadoCoches;
            header('Location: ' . 'listadoCoches.php');
        }
    }
}