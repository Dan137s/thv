<?php
    class Modelo_Reparacion{
        private $conexion;
        function __construct(){
            require_once 'modelo_conexion.php';
            $this->conexion = new conexion();
            $this->conexion->conectar();
        }

        //Funcion listar
        function listar_reparacion(){
            $sql = "call SP_LISTAR_REPARACION()";
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {
				while ($consulta_VU = mysqli_fetch_assoc($consulta)) {
                    $arreglo["data"][]=$consulta_VU;

				}
				return $arreglo;
				$this->conexion->cerrar();
			}
        }

        //Funcion Registrar
        function Registrar_Reparacion($reparacion, $descripcion, $nivel, $cpersonas, $estatus){
            $sql = "call SP_REGISTRAR_REPARACION('$reparacion', '$descripcion', '$nivel', '$cpersonas', '$estatus')";
			if ($consulta = $this->conexion->conexion->query($sql)) {
				if ($row = mysqli_fetch_array($consulta)) {
                        return $id= trim($row[0]); //Retorna valores 
				}
				$this->conexion->cerrar();
			}
        }

        //Funcion Modificar
        function Modificar_Reparacion($id, $reparacionactual, $reparacionnueva, $descripcion, $nivel, $personas, $insumo, $reqvecino, $estatus){
            $sql = "call SP_MODIFICAR_REPARACION('$id', '$reparacionactual', '$reparacionnueva', '$descripcion', '$nivel', '$personas', '$insumo',  '$reqvecino', '$estatus')";
			if ($consulta = $this->conexion->conexion->query($sql)) {
				if ($row = mysqli_fetch_array($consulta)) {
                        return $id= trim($row[0]);//Retorna valores
				}
				$this->conexion->cerrar();
			}
        }
    }
?>