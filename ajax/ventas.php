<?php
//llamo a la conexion de la base de datos
require_once("../config/conexion.php");
//llamo al modelo pacientes
require_once("../modelos/Ventas.php");
 //llamo al modelo Ventas
$ventas = new Ventas();
  
switch($_GET["op"]){
///////////////////////////AROS EN EXISTENCIAS
case "agregar_aros_venta":          
  $datos=$ventas->buscar_aros_ventas($_POST["id_producto"],$_POST["id_ingreso"]);
  if(is_array($datos)==true and count($datos)>0){
        foreach($datos as $row)
        {
          $output["desc_producto"] = $row["desc_producto"];
          $output["precio_venta"] = $row["precio_venta"];
          $output["stock"] = $row["stock"];
          $output["categoria_ub"] = $row["categoria_ub"];
          $output["num_compra"] = $row["num_compra"];
          $output["id_producto"] = $row["id_producto"];
          $output["id_ingreso"] = $row["id_ingreso"];                   
        }      

      } else {                 
                 //si no existe el registro entonces no recorre el array
      $output["error"]="El producto seleccionado está inactivo, intenta con otro";

      }

  echo json_encode($output);

     break;

   }
   ?>
