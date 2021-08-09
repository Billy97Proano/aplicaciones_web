<?php

$idContinente = $_GET["continente"];

include("cnn.php");
$sql = "SELECT CONT_ID, CONT_NOMBRE FROM CONTINENTE WHERE CONT_ID=?";
$stament = $conexion->prepare($sql);
$stament->bind_param("i", $idContinente);
$stament->execute();
$result = $stament->get_result();
if($result->num_rows>0){
   $continente = $result->fetch_row();
   $nombreContinente = $continente[1];
 }
$stament->close();
$conexion->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Pais</title>
</head>

<body> 

    <h1> Pais </h1>
    <p> <a href="index.php"> Regresar al Continente</a> </p>

    <form action="pais_insertar.php" method="POST">
        <p>Continente: <?php echo $nombreContinente; ?> </p>
        <label for="txtpais"> Nombre Pais </label> <br>
        <input type="text" id="txtpais" name="txtpais"> <br> <br>
        <input type="hidden" name="txtIdContinente" value="<?php echo $idContinente;?>">
        <input type="submit" value="Guardar">
    </form>

</body>
</html>