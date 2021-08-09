<?php

    class ConexionBDD{
        public static function getConnection()
        {
            $host = 'localhost';
            $usuario = 'root';
            $clave = "";
            $bd = 'testcontinente';

            $conexion = new mysqli($host, $usuario, $clave, $bd) or die($conexion->connect_error);
            $conexion->set_charset("UTF-8");

            return $conexion;
        }

    }

?>