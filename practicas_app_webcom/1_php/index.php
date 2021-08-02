<?php

#comentarios en PHP 
# Impresion en pantalla puedes realizarlo con print o echo

print("Esta es una prueba de impresion en panalla ");
echo ("<br>");
echo("esta es una prueba con echo "); 

#-----------------------creacion de variables -------------------

$pais = "Ecuador";
$numero = 2021;
$numeroTexto = "2020";
$banderaUno = true;
$banderaDos = false;


#concatenar variables con los textos --------------------------

echo "<br><br>";
echo $pais." es rico y diverso ". $pais. " del " . $numero;
echo "<br>";

echo "<br>";
echo "valor de bandera uno " .$banderaUno; 
echo "<br>";
echo "valor de bandera dos " .$banderaDos; 
echo "<br>";
#declaracion de arreglos 

$estadoCivil = array("soltero", "casado", "unido", "divorciado");
print_r($estadoCivil);
echo "<br>";

echo "estado civil en posicion 2 es: ".$estadoCivil[2];
echo "<br>";
#arrays en clave valor -------------------------

$estadoCivilClaveValor = array("clave1"=>"soltero", "clave2"=>"casado", "clave3"=>"divorciado");
echo "estado civil en posicion uno con clave valor " .$estadoCivilClaveValor["clave2"];


?>
