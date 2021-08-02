<?php
    //inicia servicio de sesion
    session_start();

    if(isset($_POST["nombre"]) && isset($_POST["clave"])){
        $nombre = $_POST["nombre"];
        $clave = $_POST["clave"];



        // selecion de la session
        $_SESSION["session_nombre"] = $nombre;


        if(isset($_POST["recordarme"])){
            setcookie("cookie_nombre", $nombre, time() + 60*60*24);
            setcookie("cookie_clave", $clave, time() + 60*60*24);
        }else{
            if(isset($_COOKIE)){
                foreach($_COOKIE as $name => value){
                    setcookie($name,'', 1);
                }
            }
        }

        header("Location:panel_principal.php");

    } else{
        header("Location:index.php");
    }


?>