<?php

if(isset($_POST)){
    $idContinente = $_POST["txtIdContinente"];
    $nombreContinte = $_POST["txtpais"];

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
        die("Error al insertar");
    }
}

?>