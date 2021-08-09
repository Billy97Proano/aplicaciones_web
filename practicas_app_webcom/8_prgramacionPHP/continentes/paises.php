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
        $numeroFilas = $result->num_rows;
        if($numeroFilas>0){
            while($row = $result->fetch_assoc()){
                echo "ID: ". $row['CONT_ID']. "<br>";
                echo "NOMBRE: ". $row['CONT_NOMBRE']. "<br>"; 
            }
        }
        
    ?>

    <h1> PAISES DE </h1>

    <p> <a href="index.php"> Regresar al Continente</a> | <a href="pais_vista.php">Crear Paìs</a></p>
    <table>
        <tr>
            <th> Paìs </th>
            <th> Opciones </th>
        </tr>
        <tr>
            <td>Ecuador</td>
            <td> Actalizar | Eliminar </td>
        </tr>

    </table>
</body>
</html>