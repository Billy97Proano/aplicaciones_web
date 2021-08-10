<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/practicas_app_webcom/aplicaciones_web/practicas_app_webcom/8_prgramacionPHP/continentes_mvc/utilerias/utilerias.php");
//1 recibe datos de request 
require_once(MODELO."DAO/continenteDAO.php");
//2 si necesito, e conecto con el modelo para pedirle datos 
$contineneteDAO = new ContinenteDAO();
$continentes = $contineneteDAO->getContinentes();
//3 llamo a la vista para mostrar los datos que me entrega el modelo
require_once(VISTA."continentes_listar_view.php");
?>