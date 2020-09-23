<?php
require_once("../config/conexion.php");
//llamada al modelo marca
require_once("../modelos/Recibos.php");

$recibos = new Recibos();

switch ($_GET["op"]) {
	case 'get_detalle_lente_rec_ini':
	   
  break;


///////////////////////GET NUMERO RECIBO
  case "get_numero_recibo":
  $datos= $recibos->get_numero_recibo($_POST["sucursal_correlativo"]);
  $sucursal = $_POST["sucursal_correlativo"];
  $prefijo = "";
  if ($sucursal=="Metrocentro") {
    $prefijo="ME";
  }elseif ($sucursal=="Santa Ana") {
    $prefijo="SA";
  }elseif ($sucursal=="San Miguel") {
    $prefijo="SM";
  }
    if(is_array($datos)==true and count($datos)>0){
    foreach($datos as $row){                  
      $codigo=$row["numero_venta"];
      $cod=(substr($codigo,4,11))+1;
      $output["correlativo"]="R".$prefijo."-".$cod;
    }             
  }else{
      $output["correlativo"] = "R".$prefijo."-1";
  }

   echo json_encode($output);

  break;
}