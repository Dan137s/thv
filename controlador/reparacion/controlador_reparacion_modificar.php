<?php
    require '../../modelo/modelo_reparacion.php';
    $MRE = new Modelo_Reparacion();//Instancio todas las funciones del modelo
    $id = htmlspecialchars($_POST['id'],ENT_QUOTES,'UTF-8');
    $reparacionactual = htmlspecialchars($_POST['repaac'],ENT_QUOTES,'UTF-8');
    $reparacionnueva = htmlspecialchars($_POST['repanu'],ENT_QUOTES,'UTF-8');
    $descripcion = htmlspecialchars($_POST['descri'],ENT_QUOTES,'UTF-8');
    $nivel = htmlspecialchars($_POST['niv'],ENT_QUOTES,'UTF-8');
    $personas = htmlspecialchars($_POST['cpe'],ENT_QUOTES,'UTF-8');
    $insumo = htmlspecialchars($_POST['insu'],ENT_QUOTES,'UTF-8');
    $reqvecino = htmlspecialchars($_POST['reqv'],ENT_QUOTES,'UTF-8');
    $estatus = htmlspecialchars($_POST['estatus'],ENT_QUOTES,'UTF-8');
    
  
    $consulta = $MRE->Modificar_Reparacion($id, $reparacionactual, $reparacionnueva, $descripcion, $nivel, $personas, $insumo, $reqvecino, $estatus);
    echo $consulta;
  
?>