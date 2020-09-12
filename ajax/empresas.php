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
<<<<<<< HEAD

case 'listar_en_pacientes':
    	     
    $datos=$empresas->get_empresas_en_pacientes();
 	$data= Array();

     foreach($datos as $row){
					
		$sub_array = array();
	    $sub_array[] = $row["id_empresa"];
		$sub_array[] = $row["nombre"];
		$sub_array[] = $row["ubicacion"];
        $sub_array[] = '<button type="button" onClick="agregar_empresa_pac('.$row["id_empresa"].');" id="'.$row["id_empresa"].'" class="btn btn-edit btn-md"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button>';
        $data[] = $sub_array;
	}

    $results = array(
 		"sEcho"=>1, //Información para el datatables
 		"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 		"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 		"aaData"=>$data);
 	echo json_encode($results);
    break;

////////////rellenar campo de empresas en modal de nuevo paciente
    case "buscar_empresa_paciente":
	$datos=$empresas->add_empresa_paciente($_POST["id_empresa"]);
          
	    if(is_array($datos)==true and count($datos)>0){
				foreach($datos as $row)
				{
       				$output["nombre"] = $row["nombre"];				

				}	
		}

	echo json_encode($output);

    break;

}


=======
	}
?>
>>>>>>> accesorios

