<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continentes</title>
</head>
<body>
    <h1> Continentes </h1>
    <ul>
        <?php
        foreach($continentes as $c){
            echo '<li> <a href="paises_listar_controler.php$idContinente'.$c->getContinenteid().'">' . $c->getContinenteNombre(). "</a> </li>";
        }
        ?>
        <li> </li>
    </ul>
</body>
</html>