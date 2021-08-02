<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p> Parametros enviados por el cliente</p>
    <?php print_r($_GET) ?>
    <br>
    <br>

    <h2> INFORMACIÓN ENVIADA POR GET</h2>
    Nombre: <?php echo $_GET["varNombre"] ?> <br>
    Email:  <?php echo $_GET["email"] ?> <br>
    <h3> GRacias por su pago con la tarjeta<?php echo $_GET["numtarjeta"] ?> </h3>

</body>
</html>


 