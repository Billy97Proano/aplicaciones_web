<?php

$idPais = $_GET["idpais"];
$idContinente =  $_GET["continenteid"];

include("cnn.php");

$sql="DELETE FROM PAIS WHERE PAIS_ID=?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $idPais);
$resultado = $stmt->execute();
$stmt->close();
$conexion->close();

if($resultado){
    header("Location:paises.php?idContinente=".$idContinente);
}else{
    die("Error al insertar");
}

?>