<?php

    class Pais{
        private $paisID;
        private $paisNombre;
        private $continenteID; 

        function __construct()
        {
            
        }

        public function getPaisID(){
            return $this->paisID;
        }

        
        public function getPaisNombre(){
            return $this->paisNombre;
        }
        
        public function getContinenteID(){
            return $this->continenteID;
        }

        public function setPaisID($idPais){
            $this->paisID = $idPais;
        }

        
        public function setPaisNombre($nombrePais){
            $this->paisNombre = $nombrePais;
        }
        
        public function setContinenteID($idContinete){
            $this->continenteID = $idContinete;
        }


    }

?>