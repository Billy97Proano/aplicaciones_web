<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> Parametros enviados por el cliente por POST</p>
        <?php var_dump($_POST) ?>
        <br>
        <br>

        <h2> INFORMACIÓN ENVIADA POR POST</h2>
        Nombre: <?php echo $_POST["varNombre"] ?> <br>
        Email:  <?php echo $_POST["email"] ?> <br>
        <h3> GRacias por su pago con la tarjeta<?php echo $_POST["numtarjeta"] ?> </h3>

</body>
</html>