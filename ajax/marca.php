<?php
require_once("../config/conexion.php");
//llamada al modelo marca
require_once("../modelos/Marcas.php");

$marca = new Marca();

switch ($_GET["op"]) {
	case 'guardar_marca':
	   $datos=$marca->valida_existencia_marca($_POST["nom_marca"]);
	   if(is_array($datos)==true and count($datos)==0){
	   	$marca->registrar_marca($_POST["nom_marca"]);
	   	$messages[]="ok";
       }else{
      	$errors[]="error";
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
//fin mensaje error
    break;

    //// DATATABLE MARCAS
    case "listar_marcas":
    $datos=$marca->get_marcas();
    //Vamos a declarar un array
    $data= Array();

    foreach($datos as $row)
      {
        $sub_array = array();
        $sub_array[] = $row["id_marca"];
        $sub_array[] = $row["marca"];
        $sub_array[] = '<button type="button" class="btn btn-edit btn-md edita_marca bg-light" style="text-align:center" onClick="show_datos_marca('.$row["id_marca"].');" data-toggle="modal" data-target="#edit_marca" data-backdrop="static" data-keyboard="false"><i class="fa fa-edit" aria-hidden="true" style="color:#006600"></i></button>';
        $sub_array[] = '<button type="button"  class="btn btn-md bg-light" onClick="eliminar_marca('.$row["id_marca"].')"><i class="fa fa-trash" aria-hidden="true" style="color:red"></i></button>';

        $data[] = $sub_array;
      }

      $results = array(
      "sEcho"=>1, //Información para el datatables
      "iTotalRecords"=>count($data), //enviamos el total registros al datatable
      "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
      "aaData"=>$data);
      echo json_encode($results);

    break;

    case 'editar_marca':
      $marca->editar_marca($_POST["nom_marca"],$_POST["id_marca"]);
    break;

    case 'show_datos_marca':
      $marca->show_datos_marca($_POST["id_marca"]);
      foreach ($datos as $row)
      {
        $output["id_marca"] = $row["id_marca"];
        $output["nom_marca"] = $row["marca"];
   
      }
      echo json_encode($output);
    break;

    case 'eliminar_marca':
      $marca->eliminar_marca($_POST["id_marca"]);
       $messages[]="ok";
        if (isset($messages)){
         ?>
           <?php
             foreach ($messages as $message) {
                 echo json_encode($message);
               }
             ?>
        <?php
 }

  break;

}