<?php
//conexion de la base de datos 
require_once("../config/conexion.php");
//llamo al modelo Pacientes
require_once("../modelos/Bodegas.php");
//llamo al modelo Pacientes  
$bodegas = new Bodegas();

switch($_GET["op"]){
////////////////MODAL PARA INGRESAR EN BODEGAS/****
case "listar_productos_ingreso_bodegas":
	$datos=$bodegas->get_productos_ingresar($_POST["numero_compra"]);
    //Vamos a declarar un array
 	$data= Array();
    foreach($datos as $row)
	{
		$sub_array = array();
    $sub_array[] = $row["id_producto"];				
		$sub_array[] = $row["numero_compra"];
		$sub_array[] = $row["descripcion"];
    $sub_array[] = $row["cant_ingreso"];
        $sub_array[] = '<button type="button"  class="btn btn-infos btn-md asigna_datos_orden" onClick="agregaIngreso('.$row["id_producto"].',\''.$row["numero_compra"].'\');"><i class="fas fa-plus"></i> Ingresar</button>';                                 
		$data[] = $sub_array;
	}
        $results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

    break;
    
    case "buscar_producto_por_compra":

        $datos=$bodegas->get_productos_ingresar_bodega($_POST["id_producto"],$_POST["numero_compra"]);

        if(is_array($datos)==true and count($datos)>0){

        foreach($datos as $row)
        {
          $output["numero_compra"] = $row["numero_compra"];
          $output["descripcion"] = $row["descripcion"];
          $output["id_producto"] = $row["id_producto"];
          $output["cant_ingreso"] = $row["cant_ingreso"];
          $output["precio_venta"] = $row["precio_venta"];                             
        }      

       } 
  echo json_encode($output);
break;

///////REGISTRAR INGRESO
	case "registrar_ingreso_a_bodega";
       $bodegas->registrar_ingreso_a_bodega();
    break;
//////////////REPORTE INGRESOS BODEGA
case "reporte_ingresos_bodega":
    $datos=$bodegas->get_reporte_ingreso_bodega($_POST["numero_ingreso"]);
    //Vamos a declarar un array
    $data= Array();
    foreach($datos as $row){
    $sub_array = array(); 
    $sub_array[] = $row["fecha"];
    $sub_array[] = $row["id_detalle_ingreso"];
    $sub_array[] = $row["n_compra"];
    $sub_array[] = $row["usuario"];
    $sub_array[] = $row["producto"];
    $sub_array[] = $row["cantidad"];
    $sub_array[] = $row["sucursal"];
    $sub_array[] = $row["destino"];
    $data[] = $sub_array;
  }

 // print_r($_POST);

    $results = array(
      "sEcho"=>1, //Información para el datatables
      "iTotalRecords"=>count($data), //enviamos el total registros al datatable
      "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
      "aaData"=>$data);
    echo json_encode($results);
    break;

  case "get_numero_ingreso":
    $datos= $bodegas->get_numero_ingreso();

    if(is_array($datos)==true and count($datos)>0){
      foreach($datos as $row){        
        $output["n_ingreso"] = "I-".$row["n_ingreso"];
      }
    }else{
        $output["n_ingreso"] = "I-1";
    }
    echo json_encode($output);    
  break;
}