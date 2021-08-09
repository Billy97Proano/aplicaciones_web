<?php

if(isset($_POST)){
    $idContinente = $_POST["txtIDContinente"];
    $nombreContinte = $_POST["txtNombre"];

    include("cnn.php");
    $sql="INSERT INTO PAIS (PAIS_NOMBRE, CONT_ID) VALUES (?,?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("si", $nombreContinte, $idContinente);
    $resultado = $stmt->execute();
    $stmt->close();
    $conexion->close();

    if($resultado){
        header("Location:paises.php?idContinente=".$idContinente);
    }else{
        die("Error al insertat ");
    }
}

?>