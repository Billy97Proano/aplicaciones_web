<?php
session_start();
if($_SESSION["session_nombre"]){
    $nombre = $_SESSION["session_nombre"];
}else{
    header("Location: index.php");
}

function leerArchivo(){
    //obtener el idiamo 
    $lang="en"
    if(isset($_GET["lang"])){
        $lang=$_GET["lang"];
        setcookie("cookie_idioma", $lang, time() + 60*60*24);
    }else{
        if(isset($_COOKIE["cookie_idioma"])){
            $lang = $_COOKIE["cookie_idioma"];
        }
    }
    
    $titulo = ($lang==="en") "<h2> Product List </h2>": "<h2> Lista de productos </h2>"
    
    //leer el fichero
    $file = ($lang==="en")?"categorias_en.txt":"categorias_es.txt";

    $fp = fopen($file, "r");
    while($line = fgets($fp)){
        echo $line . "<br>";
    }
    fclose($fp);
    
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel principal</title>
</head>
<body>
    <h1>PANEL PRINCIPAL</h1>
    <p>
        Bienveido usuario <?php echo $nombre; ?>
    </p>
    <a href="">Salir</a><br>

    <a href="panel_principal.php?lang=es">ES (español)</a> | <a href="panel_principal.php?lang=en">EN (english)</a>

    <!-- AQUI VA LA LSTA DE PRODUCTOS  -->

    <?php leerArchivo() ?>


</body>
</html>