<?php

    session_start();
    #verificar que las sesiones existan  
    if($_SESSION["usuario"] == "" || $_SESSION["password"] == null){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
</head>
<body>
    
    <h1> PANEL PRINCIPAL </h1>
    <h3> Bienvenido: <?php echo $_SESSION["usuario"]; ?></h3>
    <p> <a href="cerrarSesion.php"> Cerrar sesion </a></p>

</body>
</html>