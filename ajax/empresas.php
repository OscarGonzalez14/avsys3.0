<?php 
// se agrega el enlace de conexión a la base de datos
require_once("../config/conexion.php");
//se llame el modelo Empresas
require_once("../modelos/Empresas.php");

$empresas = new Empresas();
switch ($_GET["op"]){
	case 'guardar_empresa':
	$empresas->registrarEmpresa($_POST["nomEmpresa"], $_POST["dirEmpresa"], $_POST["nitEmpresa"], $_POST["telEmpresa"], $_POST["respEmpresa"], $_POST["correoEmpresa"], $_POST["encargado"]);
	break;
	}
?>

