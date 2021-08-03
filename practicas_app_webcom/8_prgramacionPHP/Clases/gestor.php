<?php

include_once "continente.php";
$continentes = array();

$cont1 = new Continente();
$cont1->setId(1)
$cont1->setNombre("America");

array_push($continentes, $cont1);

foreach($continentes as $continente){
    echo $continente->toString();
    echo "<br>"
}

?>