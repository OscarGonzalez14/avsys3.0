<?php

  require_once("../config/conexion.php");
  require_once("../modelos/Consultas.php");

  $consultas = new Consulta(); 

  switch($_GET["op"]){
  case "listar":
  $datos=$consultas->get_consultas($_POST["sucursal"]);
 	$data= Array();

     foreach($datos as $row){
      $fecha_nac = date("Y-m-d", strtotime($row["fecha_nac"]));;
    $hoy = date("Y-m-d");
    $edad = abs(strtotime($hoy) - strtotime($fecha_nac));

    $years = floor($edad / (365*60*60*24));
		
		  $sub_array = array();
      $sub_array[] = $row["id_consulta"];
			$sub_array[] = date("d-m-Y", strtotime($row["fecha_reg"]));				
			$sub_array[] = $row["nombres"];      
			$sub_array[] = $row["p_evaluado"];
      $sub_array[] = $years." años";
			$sub_array[] = ucfirst($row["usuario"]);
			$sub_array[] = '<button type="button" class="btn btn-dark edit_consultas" id="'.$row["id_consulta"].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></i> Ver y Editar</button>';
			//$sub_array[] = '<button type="button" class="btn btn-dark delete_consultas" onClick="eliminar_consulta('.$row["id_consulta"].');"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></i> Eliminar</button>';
		  $data[] = $sub_array;
			 
			 }


      $results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);


     break;

     case 'ver_consultas':

      $datos= $consultas->get_detalle_consultas($_POST["id_consulta"]); 

            // si existe el proveedor entonces recorre el array
        if(is_array($datos)==true and count($datos)>0){

        foreach($datos as $row)
        {
        $output["fecha_reg"] = date("d-m-Y", strtotime($row["fecha_reg"]));
        $output["id_consulta"] = $row["id_consulta"];
        $output["nombres"] = $row["nombres"];
        $output["sugeridos"] = $row["sugeridos"];
        $output["diagnostico"] = $row["diagnostico"];
        $output["usuario"] = $row["usuario"];
        $output["codigo"] = $row["codigo"];
        $output["oiesfreasl"] = $row["oiesfreasl"];
        $output["oicilindrosl"] = $row["oicilindrosl"];
        $output["oiejesl"] = $row["oiejesl"];
        $output["oiprismal"]= $row["oiprismal"];
        $output["oiadicionl"]= $row["oiadicionl"];
        $output["odesferasl"]= $row["odesferasl"];
        $output["odcilndrosl"]= $row["odcilndrosl"];
        $output["odejesl"]= $row["odejesl"];
        $output["odprismal"]= $row["odprismal"];
        $output["odadicionl"]= $row["odadicionl"];
        $output["oiesferasa"]= $row["oiesferasa"];
        $output["oicolindrosa"]= $row["oicolindrosa"];
        $output["oiejesa"]= $row["oiejesa"];
        $output["oiprismaa"]= $row["oiprismaa"];
        $output["oiadiciona"]=$row["oiadiciona"];
        $output["odesferasa"]=$row["odesferasa"];
        $output["odcilindrosa"]=$row["odcilindrosa"];
        $output["odejesa"]=$row["odejesa"];
        $output["dprismaa"]=$row["dprismaa"];
        $output["oddiciona"]=$row["oddiciona"];

        $output["odavsclejos"]=$row["odavsclejos"];
        $output["odavphlejos"]=$row["odavphlejos"];
        $output["odavcclejos"]=$row["odavcclejos"];
        $output["odavsccerca"]=$row["odavsccerca"];
        $output["odavcccerca"]=$row["odavcccerca"];       
        $output["oiavesferasf"]=$row["oiavesferasf"];
        $output["oiavcolindrosf"]=$row["oiavcolindrosf"];
        $output["oiavejesf"]=$row["oiavejesf"];
        $output["oiavprismaf"]=$row["oiavprismaf"];
        $output["oiavadicionf"]=$row["oiavadicionf"];

        ////////////////////RX FINAL oI
        $output["oiesferasf"]=$row["oiesferasf"];
        $output["oicolindrosf"]=$row["oicolindrosf"];
        $output["oiejesf"]=$row["oiejesf"];
        $output["oiprismaf"]=$row["oiprismaf"];
        $output["oiadicionf"]=$row["oiadicionf"];
        $output["prisoicorrige"]=$row["prisoicorrige"];
        $output["addoicorrige"]=$row["addoicorrige"];
////////////////////RX FINAL oD
        $output["odesferasf"]=$row["odesferasf"];
        $output["odcilindrosf"]=$row["odcilindrosf"];
        $output["odejesf"]=$row["odejesf"];
        $output["dprismaf"]=$row["dprismaf"];
        $output["oddicionf"]=$row["oddicionf"];
        $output["addodcorrige"]=$row["addodcorrige"];
        $output["prisodcorrige"]=$row["prisodcorrige"];
        
        ////////////////FIN RX FINAL 

        $output["sugeridos"]=$row["sugeridos"];
        $output["diagnostico"]=$row["diagnostico"];
        $output["medicamento"]=$row["medicamento"];
        $output["observaciones"]=$row["observaciones"];
        $output["oiesferasf"]=$row["oiesferasf"];
        $output["oicolindrosf"]=$row["oicolindrosf"];
        $output["oiejesf"]=$row["oiejesf"];
        $output["oiprismaf"]=$row["oiprismaf"];
        $output["oiadicionf"]=$row["oiadicionf"];
        $output["odesferasf"]=$row["odesferasf"];
        $output["odcilindrosf"]=$row["odcilindrosf"];
        $output["odejesf"]=$row["odejesf"];
        $output["dprismaf"]=$row["dprismaf"];
        $output["oddicionf"]=$row["oddicionf"];
        $output["fecha_consulta"]=$row["fecha_consulta"];
        $output["motivo"]=$row["motivo"];
        $output["patologias"]=$row["patologias"];
///////////////////////////////DISTANCIA INTERPUPILAR***************
        $output["dip"]=$row["dip"];
        $output["oddip"]=$row["oddip"];
        $output["oidip"]=$row["oidip"];
        $output["aood"]=$row["aood"];
        $output["aooi"]=$row["aooi"];
        $output["apod"]=$row["apod"];
        $output["opoi"]=$row["opoi"];
        $output["sugeridos"]=$row["sugeridos"];
        $output["diagnostico"]=$row["diagnostico"];
        $output["medicamento"]=$row["medicamento"];
        $output["observaciones"]=$row["observaciones"];
        $output["ishihara"]=$row["ishihara"];
        $output["amsler"]=$row["amsler"];
        $output["anexos"]=$row["anexos"];
        $output["id_consulta"]=$row["id_consulta"];
        $output["p_evaluado"]=$row["p_evaluado"];
        $output["parentesco_beneficiario"]=$row["parentesco_beneficiario"];
        $output["telefono_beneficiario"]=$row["telefono_beneficiario"];
        



                  
        }
    
          
              echo json_encode($output);


          } else {
                 
                 //si no existe el registro entonces no recorre el array
                $errors[]="no existe";

          }


           //inicio de mensaje de error

        if (isset($errors)){
      
          ?>
          <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Error!</strong> 
              <?php
                foreach ($errors as $error) {
                    echo $error;
                  }
                ?>
          </div>
          <?php
            } 
      
      break;

  case "editar_consulta":
  $consultas->editar_consultas($_POST['mot_consulta'],$_POST['patologias_c'],$_POST['id_consulta_e'],$_POST['oiesfreasl_e'],$_POST['oicilindrosl_e'],$_POST['oiejesl_e'],$_POST['oiprismal_e'],$_POST['oiadicionl_e'],$_POST['odesferasl_e'],$_POST['odcilndrosl_e'],$_POST['odejesl_e'],$_POST['odprismal_e'],$_POST['odadicionl_e'],$_POST['oiesferasa_e'],$_POST['oicolindrosa_e'],$_POST['oiejesa_e'],$_POST['oiprismaa_e'],$_POST['oiadiciona_e'],$_POST['odesferasa_e'],$_POST['odcilindrosa_e'],$_POST['odejesa_e'],$_POST['dprismaa_e'],$_POST['oddiciona_e'],$_POST['odavsclejos_e'],$_POST['odavphlejos_e'],$_POST['odavcclejos_e'],$_POST['odavsccerca_e'],$_POST['odavcccerca_e'],$_POST['oiavesferasf_e'],$_POST['oiavcolindrosf_e'],$_POST['oiavejesf_e'],$_POST['oiavprismaf_e'],$_POST['oiavadicionf_e'],$_POST["odesferasf_e"],$_POST["odcilindrosf_e"],$_POST["odejesf_e"],$_POST["dprismaf_e"],$_POST["prisodcorrige_e"],$_POST["oddicionf_e"],$_POST["addodcorrige_e"],$_POST["oiesferasf_e"],$_POST["oicolindrosf_e"],$_POST["oiejesf_e"],$_POST["oiprismaf_e"],$_POST["prisoicorrige_e"],$_POST["oiadicionf_e"],$_POST["addoicorrige_e"],$_POST["oddip_e"],$_POST["oidip_e"],$_POST["aood_e"],$_POST["aooi_e"],$_POST["apod_e"],$_POST["opoi_e"],$_POST["ishihara_e"],$_POST["amsler_e"],$_POST["anexos_e"],$_POST["sugeridos_e"],$_POST["diagnostico_e"],$_POST["medicamento_e"],$_POST["observaciones_e"]);
break;
   }