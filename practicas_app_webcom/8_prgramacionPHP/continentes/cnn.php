<?php
//conectar a la base de datos 
$host = 'localhost';
$usuario = 'root';
$clave = "";
$bd = 'testcontinente';

$conexion = new mysqli($host, $usuario, $clave, $bd) or die($conexion->connect_error);

?>