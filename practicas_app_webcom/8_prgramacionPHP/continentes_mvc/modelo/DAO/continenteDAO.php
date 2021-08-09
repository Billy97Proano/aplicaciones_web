<?php

    class ContinenteDAO{

        const SQL_CONSULT = "SELECT * FROM CONTINETE";
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
                    array_push($continentesArray, $row); 
                }
            }

            $stament->close();
            $result->free();
            $conexion->close();

            return $continentesArray;

        }

        public function getContinenteByID($idContinete){

        }
    }

?>