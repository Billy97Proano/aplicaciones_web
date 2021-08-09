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
        include_once("cnn.php");

        $sql = "SELECT CONT_ID, CONT_NOMBRE FROM CONTINENTE";
        $stament = $conexion->prepare($sql);
        $stament->execute();
        $result = $stament->get_result();
        $numeroFilas = $result->num_rows;
        if($numeroFilas>0){
            while($row = $result->fetch_assoc()){
                echo "<br>" ."<a href='pais_vista.php'>" . $row['CONT_NOMBRE']. "</a>". "<br>"; 
            }
        }
        
    
    ?>


</body>
</html>