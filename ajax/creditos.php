<?php
require_once("../config/conexion.php");
// llamada al modelo Accesorios
require_once("../modelos/Creditos.php");

$creditos = new Creditos();

switch ($_GET["op"]){
	case 'listar_creditos_contado':
	$datos=$creditos->get_creditos_contado();
  $data= Array();
  foreach($datos as $row){
    $sub_array = array();
    $sub_array[] = $row["numero_venta"];
    $sub_array[] = $row["nombres"];    
    $sub_array[] = "$".number_format($row["monto"],2,".",","); 
    $sub_array[] = "$".number_format($row["saldo"],2,".",",");    

    $sub_array[] = '<button type="button" onClick="registrarAbonos('.$row["id_paciente"].','.$row["id_credito"].',\''.$row["numero_venta"].'\');" id="'.$row["id_paciente"].'" class="btn btn-md bg-success"><i class="fas fa-plus" aria-hidden="true" style="color:white"></i></button>';
     $sub_array[] = '<button type="button" onClick="registrarAbonos('.$row["id_paciente"].','.$row["id_credito"].',\''.$row["numero_venta"].'\');" id="'.$row["id_paciente"].'" class="btn btn-md bg-success"><i class="fas fa-plus" aria-hidden="true" style="color:white"></i></button>';
      $sub_array[] = '<button type="button" onClick="registrarAbonos('.$row["id_paciente"].','.$row["id_credito"].',\''.$row["numero_venta"].'\');" id="'.$row["id_paciente"].'" class="btn btn-md bg-success"><i class="fas fa-plus" aria-hidden="true" style="color:white"></i></button>';           
                                                
    $data[] = $sub_array;
  }

      $results = array(
      "sEcho"=>1, //Información para el datatables
      "iTotalRecords"=>count($data), //enviamos el total registros al datatable
      "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
      "aaData"=>$data);
    echo json_encode($results);
	break;
}
 ?>