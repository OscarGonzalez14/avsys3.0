<?php
require_once("../config/conexion.php");
// llamada al modelo Usuario
require_once("../modelos/Usuario.php");

$usuario = new Usuario();

switch ($_GET["op"]){
	case 'guardar_usuario':
	$usuario->registrar_usuarios($_POST["nomUsuario"],$_POST["telUsuario"],$_POST["correoUsuario"],$_POST["dirUsuario"],$_POST["usuario"],$_POST["passUsuario"],$_POST["catUsuario"],$_POST["estUsuario"]);
			//print_r($_POST);
		break;

	}
?>