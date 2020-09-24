<?php 
// se agrega el enlace de conexión a la base de datos
require_once("../config/conexion.php");
//se invoca el modelo Usuario
require_once("../modelos/Usuario.php");

$usuario = new Usuarios();

switch ($_GET["op"]){
	case 'guardar_usuario':
	$usuario->registrarUsuario($_POST["nom_user"],$_POST["tel_user"],$_POST["correo_user"],$_POST["dir_user"],$_POST["user"],$_POST["pass_user"],$_POST["fecha_ingreso"],$_POST["cat_user"],$_POST["est_user"],$_POST["suc_user"]);
	break;

	/////////////LISTAR USUARIOS
	 case "listar_usuarios":
    $datos=$usuario->get_usuarios();
    //Vamos a declarar un array
    $data= Array();

    foreach($datos as $row)
      {
        $sub_array = array();
        $sub_array[] = $row["id_usuario"];
        $sub_array[] = $row["nombres"];
        $sub_array[] = $row["usuario"];
        $sub_array[] = $row["categoria"];
        $sub_array[] = $row["telefono"];
        $sub_array[] = $row["correo"];
        $sub_array[] = $row["direccion"];
        $sub_array[] = '<button type="button"  id="'.$row["id_usuario"].'" class="btn btn-edit btn-md edita_pacc bg-light" style="text-align:center" onClick="show_datos_paciente('.$row["id_usuario"].',\''.$row["codigo"].'\');" data-toggle="modal" data-target="#nuevo_usuario" data-backdrop="static" data-keyboard="false"><i class="fa fa-edit" aria-hidden="true" style="color:#006600"></i></button>';

        $sub_array[] = '<button type="button"  id="'.$row["id_usuario"].'" class="btn btn-power-off btn-md activa_desactiva_usuario bg-light" style="text-align:center" onClick=estado_usuario('.$row["id_usuario"].',\''.$row["estado"].'\');" data-toggle="modal" data-target="#nuevo_usuario" data-backdrop="static" data-keyboard="false"><i class="fa fa-power-off" aria-hidden="true" style="color:#006600"></i></button>';
        $data[] = $sub_array;
      }

      $results = array(
      "sEcho"=>1, //Información para el datatables
      "iTotalRecords"=>count($data), //enviamos el total registros al datatable
      "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
      "aaData"=>$data);
      echo json_encode($results);

    break;
    /////FUNCIÓN PARA ACTIVAR ACTIVAR/DESACTIVAR USUARIO
   /*case 'estado_usuario':
   	if ($est_user=0) {

   		# code...
   	} else {
   		# code...
   	}
   	
   	break;
*/



	}
?>

