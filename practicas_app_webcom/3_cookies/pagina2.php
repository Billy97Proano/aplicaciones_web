<?php
    var_dump($_POST);

    $nombre = $_POST["usuario"];
    $clave = $_POST["contrasenia"];
    $genero = $_POST["genero"];
    #creacion de las cookies 
    # el tercer parametro de la cookie el tiempo en que expira debe colocarse en segundos, en la funcion esta para un año 
    setcookie("usuario", $nombre, time()+60*60*24*365);
    setcookie("clave_usuario", $clave, time()+60*60*24*365);
    setcookie("genero_usuario", $genero, time()+60*60*24*365);

    echo "nombre: ". $nombre . " | clave". $clave . " | genero". $genero;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies Acept</title>
</head>
<body>

    <?php if(isset($_COOKIE)){?>
    <h2> Bienevenido/a: <?php echo $_COOKIE["usuario"]?></h2>
    <p> nos as indicado que tu genero es: <?php echo $_COOKIE["genero_usuario"]?></p>
    
    <?php } else{?>          
        <p> Lo siento no se pudieron almacenar las cookies !!!</p>
    <?php } ?> <br>

    <a href="borrarCookies.php"> Borrar Cokies Guardadas </a>
    
</body>
</html>