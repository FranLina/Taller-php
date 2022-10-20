<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Coche</title>
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <?php
    include '../modelo.php';
    $matricula = $_GET['matricula'];
    session_start();

    $listadoCoches = (array) $_SESSION['coches'];
    if (count($listadoCoches) != 0) {
        foreach ($listadoCoches as $coche) {
            $co = new coche();
            $co = $coche;
            if ($co->get_matricula() == $matricula) {
                $string_html = "<h1>Modificacion Coches</h1>";
                $string_html .= "<form action='modificacionCoche.php' method='post'>";
                $string_html .= "<label>Matricula: " . $co->get_matricula() . "</label>";
                $string_html .= "<input type='hidden' name='Matricula' value='" . $co->get_matricula() . "'>
                <br />";
                $string_html .= "<label>Marca: </label>";
                $string_html .= "<input type='text' name='Marca' value='" . $co->get_marca() . "'>
                <br />";
                $string_html .= "<label>Modelo: </label>";
                $string_html .= "<input type='text' name='Modelo' value='" . $co->get_modelo() . "'>
                <br />";
                $string_html .= "<label>Color: </label>";
                $string_html .= "<input type='text' name='Color' value='" . $co->get_color() . "'>
                <br />";
                $string_html .= "<input type='submit' value='Editar' class='botonEd'/>";
                $string_html .= "</form>";

                echo $string_html;
            }
        }
    }
    ?>
</head>

<body style="background-color:#5FEB65;">
</body>

</html>