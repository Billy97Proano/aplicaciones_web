<?php

    session_start(); 

    //destruir la sesion 
    session_destroy();

    header("Location:index.php");

?>