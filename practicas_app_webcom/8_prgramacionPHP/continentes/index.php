<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continentes</title>
</head>
<body>
    

    <?php

        include("cnn.php");

        $sql = "SELECT CONT_ID, CONT_NOMBRE FROM CONTINENTE";
        $stament = $conexion->prepare($sql);
        $stament->execute();
        $result = $stament->get_result();
        $numeroFilas = $result->num_rows;
        if($numeroFilas>0){
            echo "<ul>";
            while($continente = $result->fetch_assoc()){
                echo '<li><a href="paises.php?idContinente='. $continente['CONT_ID'].'">'.$continente["CONT_NOMBRE"] . '</a></li>' .'<br>';
            }
            echo "</ul>";
        }
        $stament->close();
        $conexion-> close();
    
    ?>


</body>
</html>