<?php
  require_once("../config/conexion.php");
  require_once("../modelos/Pacientes.php");
      //llamo al modelo Ventas
  //require_once("../modelos/Ventas.php");  
  $pacientes = new Paciente();
    switch($_GET["op"]){

  case "get_numero_paciente":
  $datos= $pacientes->get_numero_paciente($_POST["sucursal_correlativo"]);
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
			$codigo=$row["codigo"];
			$cod=substr($codigo,5,11)+1;
			$output["correlativo"]="AV".$prefijo."-".$cod;
		}							
	}else{
			$output["correlativo"] = "AV".$prefijo."-1";
	}

	 echo json_encode($output);

  break;

  case "guardar_paciente":

    $tipo_paciente=($_POST["tipo_paciente"]);
    $codigo=$pacientes->validar_codigo_paciente($_POST["codigo_paciente"]);
    $dui=$pacientes->validar_dui_paciente($_POST["dui"]);

    //echo json_encode($dui);exit();

    
    if($tipo_paciente=="Desc_planilla" || $tipo_paciente=="Cargo_a") {
      if(is_array($codigo)==true and count($codigo)==0 and is_array($dui)==true and count($dui)==0){
      $pacientes->registrar_paciente($_POST["codigo_paciente"],$_POST["nombres"],$_POST["telefono"],$_POST["edad"],$_POST["ocupacion"],$_POST["sucursal"],$_POST["dui"],$_POST["correo"],$_POST["usuario"],$_POST["empresa"],$_POST["nit"],$_POST["tel_oficina"],$_POST["direccion_completa"],$_POST["tipo_paciente"],$_POST["fecha"]);
    $messages[]="ok";
    }else{
      $errors[]="dui";
    }
    if (isset($messages)){
     ?>
       <?php
         foreach ($messages as $message) {
             echo json_encode($message);
           }
         ?>
   <?php
 }
    //mensaje error
      if (isset($errors)){

   ?>

         <?php
           foreach ($errors as $error) {
               echo json_encode($error);
             }
           ?>
   <?php
   }
  }elseif ($tipo_paciente=="Sucursal" or $tipo_paciente=="C_personal") {
    if(is_array($codigo)==true and count($codigo)==0){
      $pacientes->registrar_paciente($_POST["codigo_paciente"],$_POST["nombres"],$_POST["telefono"],$_POST["edad"],$_POST["ocupacion"],$_POST["sucursal"],$_POST["dui"],$_POST["correo"],$_POST["usuario"],$_POST["empresa"],$_POST["nit"],$_POST["tel_oficina"],$_POST["direccion_completa"],$_POST["tipo_paciente"],$_POST["fecha"]);
    $messages[]="ok";
    }else{
      $errors[]="codigo";
    }
    if (isset($messages)){
     ?>
       <?php
         foreach ($messages as $message) {
             echo json_encode($message);
           }
         ?>
   <?php
 }
    //mensaje error
      if (isset($errors)){

   ?>

         <?php
           foreach ($errors as $error) {
               echo json_encode($error);
             }
           ?>
   <?php
   }
  }
 
    break;

/////////////////////listado general pacintes
    case "listar_pacientes":

	$datos=$pacientes->get_pacientes($_POST["sucursal_paciente"]);
	$data= Array();
    foreach($datos as $row){
		$sub_array = array();
			$sub_array[] = date("d-m-Y",strtotime($row["fecha_reg"]));			
	    $sub_array[] = $row["codigo"];
			$sub_array[] = $row["tipo_paciente"];
			$sub_array[] = $row["nombres"];
			$sub_array[] = $row["telefono"];			            
            $sub_array[] = '<button type="button" onClick="mostrarc('.$row["id_paciente"].');" id="'.$row["id_paciente"].'" class="btn btn-block btn-outline-info btn-sm info_pac" data-toggle="modal" data-target="#consultasModal" data-backdrop="static" data-keyboard="false"> Agregar</button>';

            $sub_array[] = '<button type="button"  id="'.$row["id_paciente"].'" class="btn btn-edit btn-md edita_pacc bg-light" style="text-align:center" onClick="editar_paciente();" data-toggle="modal" data-target="#newPaciente" data-backdrop="static" data-keyboard="false"><i class="fa fa-edit" aria-hidden="true" style="color:#006600"></i></button>';

            $sub_array[] = '<button type="button"  class="btn btn-md bg-light" onClick="eliminarp('.$row["id_paciente"].')"><i class="fa fa-trash" aria-hidden="true" style="color:red"></i></button>';

            $sub_array[] = '<button type="button" onClick="mostrarc('.$row["id_paciente"].');" id="'.$row["id_paciente"].'" class="btn  btn-md bg-light"><i class="fas fa-clipboard-list" aria-hidden="true" style="color:blue"></i></button>';

             $sub_array[] = '<button type="button" onClick="mostrarc('.$row["id_paciente"].');" id="'.$row["id_paciente"].'" class="btn btn-md bg-light"><i class="fas fa-search" aria-hidden="true" style="color:blue"></i></button>';            
                                                
		$data[] = $sub_array;
	}

      $results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);


    break;

     ///////////////BUSCAR PACIENTE POR ID PARA MOSTRAR EN LA VENTANA DE CONSULTAS
    case 'ver_pacientes_data':    
		$datos=$pacientes->get_paciente_por_id($_POST["id_paciente"]);

    	foreach($datos as $row)
    	{
    		$output["id_paciente"] = $row["id_paciente"];
			$output["nombres"] = $row["nombres"];			
    	}
    echo json_encode($output);
	break;
}