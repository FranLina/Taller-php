<?php

session_start();
$_SESSION['coches'] = array();
header('Location: ' . 'listadoCoches.php');