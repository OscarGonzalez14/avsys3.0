<?php 
// se agrega el enlace de conexión a la base de datos
require_once("../config/conexion.php");
//se llame el modelo nuevo usuario
require_once("../modelos/Usuarios.php");

$usuario = new Usuarios();

switch ($_GET["op"]){
	case 'guardar_usuario':
	$usuario->registrarUsuario($_POST["nom_user"],$_POST["tel_user"],$_POST["correo_user"],$_POST["dir_user"],$_POST["user"],$_POST["pass_user"],$_POST["fecha_ingreso"],$_POST["cat_user"],$_POST["est_user"]);
	break;
	}
?>

