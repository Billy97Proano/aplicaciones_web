<?php

    if(isset($_COOKIE)){
        #recorremos el arreglo de cookies y eliminamos cada una 
        foreach($_COOKIE as $name => $value){
            setcookie($name, '', 0);
        }
    }else{
        echo "<p> No se encontro ningu arreglo de cookies </p>";
    }

?>

<a href="index.php"> Volver a pagina principal </a>