<?php
require_once("../config/conexion.php");
// llamada al modelo categoria
require_once("../modelos/Users.php");

$users = new User();

switch ($_GET["op"]){
	case 'guardar_user':
	$users->registrar_user($_POST["nom_user"],$_POST["user"],$_POST["tel_user"],$_POST["correo_user"],$_POST["dir_user"],$_POST["pass_user"],$_POST["ingreso_user"],$_POST["cat_user"],$_POST["est_user"]);
		break;
}
 ?>