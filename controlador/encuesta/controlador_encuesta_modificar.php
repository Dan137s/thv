
<?php
    require '../../modelo/modelo_encuesta.php';

    $MR = new Modelo_Encuesta();
    $rut = htmlspecialchars($_POST['rut'],ENT_QUOTES,'UTF-8');
    $p1 = htmlspecialchars($_POST['p1'],ENT_QUOTES,'UTF-8');
    $p2 = htmlspecialchars($_POST['p2'],ENT_QUOTES,'UTF-8');
    $p3 = htmlspecialchars($_POST['p3'],ENT_QUOTES,'UTF-8');
    $p4 = htmlspecialchars($_POST['p4'],ENT_QUOTES,'UTF-8');
    $p5 = htmlspecialchars($_POST['p5'],ENT_QUOTES,'UTF-8');
    $p6 = htmlspecialchars($_POST['p6'],ENT_QUOTES,'UTF-8');
    $p7 = htmlspecialchars($_POST['p7'],ENT_QUOTES,'UTF-8');
    $p8 = htmlspecialchars($_POST['p8'],ENT_QUOTES,'UTF-8');
    $p9 = htmlspecialchars($_POST['p9'],ENT_QUOTES,'UTF-8');
    
    $consulta = $MR->modificar_Encuestas($rut,$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9);
    echo $consulta;

?>