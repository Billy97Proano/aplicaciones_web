<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/practicas_app_webcom/aplicaciones_web/practicas_app_webcom/8_prgramacionPHP/continentes_mvc/utilerias/utilerias.php");
    require_once(MODELO."Entidades/continente.php");
    require_once(UTILERIAS."cnn.php");

    class ContinenteDAO{

        const SQL_CONSULT = "SELECT * FROM CONTINENTE";
        const SQL_CONSULTAR_ID = " SELECT * FROM CONTINENTE WHERE CONT_ID = ?";

        function __construct()
        {
            
        }

        public function getContinentes(){

            $continentesArray = array();
            $conexion = ConexionBDD::getConnection();
            $stament = $conexion->prepare(self::SQL_CONSULT);
            $stament->execute();
            $result = $stament->get_result();
            if($result){
                while($row = $result->fetch_assoc()){
                    $continente = new Continente();
                    $continente ->setContinenteID($row["CONT_ID"]);
                    $continente ->setContinenteNombre($row["CONT_NOMBRE"]);
                    array_push($continentesArray, $continente); 
                }
            }

            $stament->close();
            $result->free();
            ConexionBDD::cerrar($conexion);

            return $continentesArray;

        }

        public function getContinenteByID($idContinete){
            $conexion = ConexionBDD::getConnection();
            $stmt = $conexion->prepare(self::SQL_CONSULTAR_ID);
            $stmt->bind_param("i", $idContinete);
            $stmt->execute();
            $resultado = $stmt->get_result();
            $stmt->close();
            ConexionBDD::cerrar($conexion);
            
            if($resultado){
                $fila = $resultado->fetch_assoc();

                $continente = new Continente();
                $continente->setContinenteID($fila["CONT_ID"]);
                $continente->setContinenteNombre($fila["CONT_NOMBRE"]);
            }
        }
    }

?>