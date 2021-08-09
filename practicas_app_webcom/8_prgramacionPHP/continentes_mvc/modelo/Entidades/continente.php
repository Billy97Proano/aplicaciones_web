<?php

    class Continente{

        private $continenteID;
        private $continenteNombre;

        function __construct()
        {
            
        }

        public function getContinenteid(){
            return $this->continenteID;
        }

        public function getContinenteNombre(){
            return $this->continenteNombre;
        }

        public function setContinenteID($idContinente){
            $this->continenteId = $idContinente;
        }

        public function setContinenteNombre($nombreContinente){
            $this->continenteNombre = $nombreContinente;
        }


    }
        

    

?>