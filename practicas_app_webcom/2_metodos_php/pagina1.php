<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1> Peticion con GET</h1>
    <form method="GET" action="pagina2_resp_get.php">
        <fieldset> 
            <legend> Información Pago Virtual </legend>
            Nombre:<input type="text" name="varNombre"><br>
            Email: <input type="mail" name="email"><br>
            Numero de tarjeta de credito: <input type="text" name="numtarjeta"><br>
            CVV: <input type="text" name="cvv"><br> 
            <input type="submit" value="Realizar el pago">
        </fieldset>
    </form>

    <h1> Peticion con POST</h1>
    <form method="POST" action="pagina2_resp_post.php">
        <fieldset> 
            <legend> Información Pago Virtual </legend>
            Nombre:<input type="text" name="varNombre"><br>
            Email: <input type="mail" name="email"><br>
            Numero de tarjeta de credito: <input type="text" name="numtarjeta"><br>
            CVV: <input type="text" name="cvv"><br> 
            <input type="submit" value="Realizar el pago">
        </fieldset>
    </form>


</body>
</html> 