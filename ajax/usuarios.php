<?php
// se hace la conexión con la base de datos
require_once("../config/conexion.php");
// llamada al modelo nuevo  usuario
require_once("../modelos/Usuarios.php");

$usuario = new Usuarios();

switch ($_GET["op"]){
	case 'guardar_usuario':
	$usuario->registrarUsuario($_POST["nom_usuario"],$_POST["tel_usuario"],$_POST["correo_usuario"],$_POST["dir_usuario"],$_POST["usuario"],$_POST["pass_usuario"],$_POST["fecha_ingreso"],$_POST["cat_usuario"],$_POST["est_usuario"]);
		break;
}

?>