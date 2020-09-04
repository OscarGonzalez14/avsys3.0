<?php
require_once("../config/conexion.php");
// llamada al modelo categoria
require_once("../modelos/Categorias.php");

$categorias = new Categoria();

switch ($_GET["op"]){
	case 'guardar_categoria':
		$categorias->registrar_categoria($_POST["cat_nombre"],$_POST["cat_sucursal"],$_POST["cat_descripcion"],$_POST["tipo_categoria"]);
	break;

	case "get_categorias":
    $datos= $categorias->get_categorias();	
    $data= Array();

    foreach($datos as $row)
	{
		$sub_array = array();
		$sub_array[] = $row["nombre"];
		$data[] = $sub_array;

	}
		$results=$data;
 
 		echo json_encode($results);
break;
}
 ?>