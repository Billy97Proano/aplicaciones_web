<?php
    #inicializamos el servicio de sesiones 
    session_start();

    if(isset($_POST)){
        //creacion de las sesiones
        $_SESSION["usuario"] = $_POST["usuario"];
        $_SESSION["password"] = $_POST["contrasenia"];
        #si los datos son correctos ingresamos a mi panel
        header("Location:panel.php");

    } else {

        #regresar a la pagina de login index.php
        header("Location:index.php");

    }

?>