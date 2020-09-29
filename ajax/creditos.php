<?php
require_once("../config/conexion.php");
// llamada al modelo Accesorios
require_once("../modelos/Creditos.php");

$creditos = new Creditos();

switch ($_GET["op"]){
	case 'listar_creditos_contado':
	$datos=$creditos->get_creditos_contado($_POST["sucursal"]);
  $data= Array();
  foreach($datos as $row){
    $sub_array = array();

    $icon="";
    $atrib="";
    $txt="";
    $evento="";
    $class="";
    $href="";

    if($row["saldo"] == 0){
        $icon="fas fa-print";
        $atrib = "btn btn-info";
        $txt = 'CANC.';
        $href='imprimir_factura_pdf.php?n_venta='.$row['numero_venta'].'&id_paciente='.$row['id_paciente'].'';
    }elseif ($row["saldo"] > 0) {
        $icon=" fas fa-hand-holding-usd";
        $atrib = "btn btn-secondary";
        $txt = 'PEND.';
        $href='#';
    }

    $sub_array[] = $row["numero_venta"];
    $sub_array[] = $row["nombres"];
    $sub_array[] = $row["evaluado"];    
    $sub_array[] = "$".number_format($row["monto"],2,".",","); 
    $sub_array[] = "$".number_format($row["saldo"],2,".",",");    

    $sub_array[] = '<button type="button" onClick="realizarAbonos('.$row["id_paciente"].','.$row["id_credito"].',\''.$row["numero_venta"].'\');" id="'.$row["id_paciente"].'" class="btn btn-md bg-warning" data-backdrop="static" data-keyboard="false"><i class="fas fa-plus" aria-hidden="true" style="color:white"></i></button>';
     $sub_array[] = '<button type="button" onClick="verDetAbonos('.$row["id_paciente"].',\''.$row["numero_venta"].'\');" id="'.$row["id_paciente"].'" class="btn btn-md bg-success"><i class="fas fa-file-invoice-dollar" aria-hidden="true" style="color:white"></i></button>';
    $sub_array[] = '<a href="'.$href.'" method="POST" target="_blank"><button type="button"  class="btn '.$atrib.' btn-md"><i class="'.$icon.'"></i>'.$txt.'</button></a>';           
                                                
    $data[] = $sub_array;
  }

      $results = array(
      "sEcho"=>1, //Información para el datatables
      "iTotalRecords"=>count($data), //enviamos el total registros al datatable
      "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
      "aaData"=>$data);
    echo json_encode($results);
	break;

  ////////////////GET DATOS DE PACIENTE PARA MODAL ABONOS
  case 'datos_paciente_abono':
      $datos= $creditos->get_data_paciente_abonos($_POST["id_paciente"],$_POST["id_credito"],$_POST["numero_venta"]); 

        if(is_array($datos)==true and count($datos)>0){
          foreach($datos as $row){         
            $output["numero_venta"] = $row["numero_venta"];
            $output["paciente"] = $row["paciente"];
            $output["evaluado"] = $row["evaluado"];
            $output["telefono"] = $row["telefono"];
            $output["empresas"] = $row["empresas"];
            $output["monto"] = number_format($row["monto"],2,".",",");
            $output["id_paciente"] = $row["id_paciente"];
            $output["saldo"] = number_format($row["saldo"],2,".",",");               
          }       
        echo json_encode($output);
        } 
      break;

    ////////////////GET DATOS DE PACIENTE PARA MODAL ABONOS
  case 'datos_abono_anterior':
      $datos= $creditos->get_abono_ant($_POST["id_paciente"],$_POST["numero_venta"]); 

        if(is_array($datos)==true and count($datos)>0){
          foreach($datos as $row){         
            $output["monto_abono"] = $row["monto_abono"];                
          }       
        echo json_encode($output);
        } 
      break;

  ///////////////////////LISTAR DETALLES DE ABONO
    case "listar_detalle_abonos":
    $datos=$creditos->get_detalle_abonos($_POST["id_paciente"],$_POST["numero_venta"]);
    //Vamos a declarar un array
    $data= Array();
    foreach($datos as $row){

        $sub_array = array();

        $sub_array[] = $row["fecha_abono"];
        $sub_array[] = $row["nombres"];
        $sub_array[] = $row["empresas"];
        $sub_array[] = $row["usuario"];
        $sub_array[] = $row["sucursal"];
        $sub_array[] = $row["n_recibo"];
        $sub_array[] = "$".number_format($row["monto_abono"],2,".",",");
               
        $data[] = $sub_array;
      }

      $results = array(
      "sEcho"=>1, //Información para el datatables
      "iTotalRecords"=>count($data), //enviamos el total registros al datatable
      "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
      "aaData"=>$data);
      echo json_encode($results);

    break;
    /////////////////GET DATOS DE PACIENTE DE MODAL ABONOS
    case 'get_datos_credito_abono':
  
    $datos= $creditos->get_datos_abonos($_POST["id_paciente"],$_POST["numero_venta"]); 

        if(is_array($datos)==true and count($datos)>0){
          foreach($datos as $row){         
            $output["monto"] = $row["monto"];
            $output["abonado"] = $row["abonado"];
            $output["nombres"] = $row["nombres"];
            $output["saldo"] = $row["saldo"];                
          }       
        echo json_encode($output);
        } 
      break;
}
 ?>