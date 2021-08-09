<?php

//conectar a la base de datos 
$host = 'localhost';
$usuario = 'root';
$clave = "";
$bd = 'testcontinente';

$conexion = new mysqli($host, $usuario, $clave, $bd) or die($conexion->connect_error);

/*
//inserion 
$sql = "INSERT INTO CONTINENTE (CONT_NOMBRE) VALUES (?)"; //prepared stament
$nombreContinente = "AMERICA";

if($stament = $conexion->prepare($sql)){
    //enlazamos los parametros a insertar
    $stament->bind_param("s", $nombreContinente);
    //ejecutamos la sentencia
    if(!$stament->execute()){
        echo "ERROR: INSERCION";
    }
    $stament->close();
}
$conexion->close();

*/


//CONSULTA ************************* PREPARE STATMENT 
/*
$sql = "SELECT CONT_ID, CONT_NOMBRE FROM CONTINENTE WHERE CONT_ID=?";
$idContinente = 1;
$stament = $conexion->prepare($sql);
$stament->bind_param("i", $idContinente);
$stament->execute();
$result = $stament->get_result();
$numeroFilas = $result->num_rows;
if($numeroFilas>0){
    while($row = $result->fetch_assoc()){
        echo "ID: ". $row['CONT_ID']. "<br>";
        echo "NOMBRE: ". $row['CONT_NOMBRE']. "<br>"; 
    }
}
$stament->close();
$conexion-> close();
*/


//CONSULTA SIN PREPARE STATMEN 
$sql="SELECT * FROM CONTINENTE";
if(!$resultado = $conexion->query($sql)){
    die("FALLO LA COSULTA");
}else{
    if($resultado->num_rows === 0){
        die("no hay resultados");
    }
    else {
        while($continente = $resultado->fetch_assoc()){
            echo $continente["CONT_ID"]. " - ". $continente["CONT_NOMBRE"]. "<br>";
        }
    }
}


//ACTUALIZAR **************************
/*
$sql = "UPDATE CONTINENTE SET CONT_NOMBRE = ? WHERE CONT_ID=?;";
$nombreContinente = "ATLANTIDA";
$idContinente = 1;

if($stament = $conexion->prepare($sql)){
    $stament->bind_param("si", $nombreContinente, $idContinente);
    if(!$stament->execute()){
        die("FALLO: ACTUALIZACION");
    }
    $stament->close();
}else {
    die("UPDATE NO PREPARADO");
}

$conexion->close();
*/


//DELETE 

$sql = "DELETE FROM CONTINENTE WHERE CONT_ID= ?;";
$idContinente = 1;

if($stament = $conexion->prepare($sql)){
    $stament->bind_param("i",$idContinente);
    if(!$stament->execute()){
        die("ERROR: DELETE ");
    }
    $stament->close();
}else{
    die("DELETE MAL PREPARADO ");
}
$conexion->close();

?>