<?php
if(isset($_GET)){
    $idContinente = $_GET["idContinente"];
}else {
    header("Location:index.pgp");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paises</title>
</head>
<body>

    <?php

        include_once("cnn.php");
        $sql = "SELECT CONT_ID, CONT_NOMBRE FROM CONTINENTE WHERE CONT_ID=?";
        //$idContinente = 1;
        $stament = $conexion->prepare($sql);
        $stament->bind_param("i", $idContinente);
        $stament->execute();
        $result = $stament->get_result();
        if($result->num_rows>0){
            $continente = $result->fetch_row();
        }
        $stament->close();
        //$conexion->close();

    ?>

    <h1> PAISES DE <?php echo $continente[1]; ?> </h1>

    <p> <a href="index.php"> Regresar al Continente</a> | <a href="pais_vista.php?continente=<?php echo $idContinente;?>">Crear Paìs</a></p>
    <table border=1>
        <tr>
            <th> Paìs </th>
            <th> Opciones </th>
        </tr>
        <?php
            //LISTAR PAISES 
            $sql = "SELECT PAIS_ID ,PAIS_NOMBRE, CONT_ID FROM PAIS WHERE CONT_ID=?";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param("i", $idContinente);
            $stmt->execute();
            $result = $stmt->get_result();
            $numeroFilas = $result->num_rows;
            if($numeroFilas>0){
                while($row = $result->fetch_assoc()){
                    echo '<tr> <td>' .$row['PAIS_NOMBRE']. '<br>' . '</td> <td> Actalizar | <a href="pais_eliminar.php?idpais='.$row['PAIS_ID'].'&continenteid='.$row ['CONT_ID'].'">Elimimar</a> </td> </tr> ';
                }
            }
            $stmt->close();
            $conexion->close(); 
        ?>

    </table>

</body>
</html>