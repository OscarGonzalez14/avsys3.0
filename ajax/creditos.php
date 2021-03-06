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
        $icon=" fas fa-clock";
        $atrib = "btn btn-secondary";
        $txt = '';
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

  ///////////////////GET CREDITOS CARGO AUTOMATICO

  case 'listar_creditos_cauto':
  $datos=$creditos->get_creditos_cauto($_POST["sucursal"]);
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
        $icon=" fas fa-clock";
        $atrib = "btn btn-secondary";
        $txt = '';
        $href='#';
    }

    $sub_array[] = $row["numero_venta"];
    $sub_array[] = $row["nombres"];
    $sub_array[] = $row["empresas"];
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

   ///////////////////GET CREDITOS DESCUENTO EN PLANILLA

  case 'listar_creditos_oid':
  $datos=$creditos->get_creditos_oid($_POST["sucursal"],$_POST["empresa"]);
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
        $icon=" fas fa-clock";
        $atrib = "btn btn-secondary";
        $txt = '';
        $href='#';
    }

    $sub_array[] = $row["numero_venta"];
    $sub_array[] = $row["nombres"];
    $sub_array[] = $row["empresas"];
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
            $output["cuotas"] = number_format($row["cuotas"],2,".",",");
                    
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

############## CREDITOS POR CATEGORÍA #######################
    case "show_cat_creditos":

    if ($_POST["categoria"]=="cat_b") {
      $datos = $creditos->get_creditos_cat_b();
    }elseif ($_POST["categoria"]=="cat_c") {
      $datos = $creditos->get_creditos_cat_c();
    }
    //Vamos a declarar un array
  $data= Array();
    foreach($datos as $row){
    $sub_array = array();       
    $sub_array[] = $row["nombres"];
    $sub_array[] = $row["empresas"];
    $sub_array[] = $row["numero_venta"];
    $sub_array[] = $row["forma_pago"];
    $sub_array[] = "$".number_format($row["monto"],2,".",",");
    $sub_array[] = "$".number_format($row["saldo"],2,".",",");
    $sub_array[] = "$".number_format($row["abonado"],2,".",",");
    $sub_array[] = date("d-m-Y",strtotime($row["fecha_abono"]));
    $sub_array[] = date("d-m-Y",strtotime($row["prox_abono"]));
    $sub_array[] = $row["dif_days"]." dias";
    $sub_array[] = '<button type="button" onClick="verDetAbonos('.$row["id_paciente"].',\''.$row["numero_venta"].'\');" id="'.$row["id_paciente"].'" class="btn btn-sm btn-flat bg-success"><i class="fas fa-file-invoice-dollar" aria-hidden="true" style="color:white"></i></button>';
    $sub_array[] = '<button class="btn btn-sm btn-flat bg-light" onClick="info_pacientes_mora('.$row["id_paciente"].',\''.$row["numero_venta"].'\')" data-toggle="modal" data-target="#info_pac_mora"><i class="fas fa-eye" style="color:green"></i></button>';                                 
    $data[] = $sub_array;
  }

      $results = array(
      "sEcho"=>1, //Información para el datatables
      "iTotalRecords"=>count($data), //enviamos el total registros al datatable
      "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
      "aaData"=>$data);
    echo json_encode($results);

    break;

/////////////////////GET DATOS PACIENTES ATRASADOS
    case 'get_datos_creditos_mora':
  
    $datos= $creditos->get_datos_creditos_mora($_POST["id_paciente"]); 

        if(is_array($datos)==true and count($datos)>0){
          foreach($datos as $row){         
            $output["nombres"] = ucfirst($row["nombres"]);
            $output["telefono"] = ucfirst($row["telefono"]);
            $output["direccion"] = ucfirst($row["direccion"]);
            $output["empresas"] = ucfirst($row["empresas"]);                
          }       
        echo json_encode($output);
        } 
      break;

      ///////////////

  case 'get_datos_venta_mora':  
  require_once("../modelos/Ventas.php");
  //llamo al modelo Ventas
  $ventas = new Ventas();
  $datos=$ventas->get_ventas_mora($_POST["id_paciente"],$_POST["numero_venta"]);

    if(is_array($datos)==true and count($datos)>0){
      foreach($datos as $row){         
        $output["numero_venta"] = ucfirst($row["numero_venta"]);
        $output["paciente"] = ucfirst($row["paciente"]);
        $output["evaluado"] = ucfirst($row["evaluado"]);
        $output["fecha_venta"] = ucfirst($row["fecha_venta"]);
        $output["tipo_venta"] = ucfirst($row["tipo_venta"]);
        $output["tipo_pago"] = ucfirst($row["tipo_pago"]);
        $output["usuario"] = ucfirst($row["usuario"]);                
      }       
    echo json_encode($output);
    } 
  break;


    }//70814834
 ?>