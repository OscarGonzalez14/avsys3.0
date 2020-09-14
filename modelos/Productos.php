<?php

require_once("../config/conexion.php");


class Productos extends Conectar
{//////inicio de la clase

public function valida_existencia_aros($marca_aros,$modelo_aro,$color_aro,$medidas_aro){
  $conectar= parent::conexion();
  parent::set_names();
  $sql="select*from productos where marca=? and modelo=? and color=? and medidas=?";
  $sql= $conectar->prepare($sql);
  $sql->bindValue(1, $marca_aros);
  $sql->bindValue(2, $modelo_aro);
  $sql->bindValue(3, $color_aro);
  $sql->bindValue(4, $medidas_aro);
  $sql->execute();
  return $resultado=$sql->fetchAll();
}

public function registrar_aro($marca_aros,$modelo_aro,$color_aro,$medidas_aro,$diseno_aro,$materiales_aro,$cat_venta_aros,$categoria_producto){

    $descripcion=$marca_aros." mod.".$modelo_aro;

    $conectar= parent::conexion();
    parent::set_names();
    $sql="insert into productos values(null,?,?,?,?,?,?,?,?,?);";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1, $marca_aros);
    $sql->bindValue(2, $modelo_aro);
    $sql->bindValue(3, $color_aro);
    $sql->bindValue(4, $medidas_aro);
    $sql->bindValue(5, $diseno_aro);
    $sql->bindValue(6, $materiales_aro);
    $sql->bindValue(7, $cat_venta_aros);
    $sql->bindValue(8, $categoria_producto);
    $sql->bindValue(9, $descripcion);
    $sql->execute();

}

public function get_aros(){
    $conectar= parent::conexion();
    $sql= "select*from productos where categoria_producto='aros' order by id_producto DESC;";
    $sql=$conectar->prepare($sql);
    //$sql->bindValue(1, $sucursal_correlativo);
    $sql->execute();
    return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    }


////////////GUARDAR PHOTOSENSIBLE   
public function guardar_photosensible($describe,$precio,$cat_prod){
    $conectar= parent::conexion();
    parent::set_names();
    $sql="insert into productos values(null,?,?,?,?,?,?,?,?,?);";
    $conectar= parent::conexion();
    parent::set_names();
    $marca_aros= ""; 
    $modelo_aro= ""; 
    $color_aro= "";
    $medidas_aro = "";
    $diseno_aro = "";
    $materiales_aro = "";


    $sql="insert into productos values(null,?,?,?,?,?,?,?,?,?);";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1, $marca_aros);
    $sql->bindValue(2, $modelo_aro);
    $sql->bindValue(3, $color_aro);
    $sql->bindValue(4, $medidas_aro);
    $sql->bindValue(5, $diseno_aro);
    $sql->bindValue(6, $materiales_aro);
    $sql->bindValue(7, $precio);
    $sql->bindValue(8, $cat_prod);
    $sql->bindValue(9, $describe);

    $sql->execute();

    //print_r($_POST);
  } 

///////////GUARDAR ANTIREFLEJANTE
public function guardar_antireflejante($describe,$precio,$cat_prod){
    $conectar= parent::conexion();
    parent::set_names();
    $sql="insert into productos values(null,?,?,?,?,?,?,?,?,?);";
    $conectar= parent::conexion();
    parent::set_names();
    $marca_aros= ""; 
    $modelo_aro= ""; 
    $color_aro= "";
    $medidas_aro = "";
    $diseno_aro = "";
    $materiales_aro = "";


    $sql="insert into productos values(null,?,?,?,?,?,?,?,?,?);";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1, $marca_aros);
    $sql->bindValue(2, $modelo_aro);
    $sql->bindValue(3, $color_aro);
    $sql->bindValue(4, $medidas_aro);
    $sql->bindValue(5, $diseno_aro);
    $sql->bindValue(6, $materiales_aro);
    $sql->bindValue(7, $precio);
    $sql->bindValue(8, $cat_prod);
    $sql->bindValue(9, $describe);

    $sql->execute();

    //print_r($_POST);
  } 

//////////////////////GUARDAR LENTE
public function guardar_lente($describe,$precio,$cat_prod){
    $conectar= parent::conexion();
    parent::set_names();
    $marca_aros= ""; 
    $modelo_aro= ""; 
    $color_aro= "";
    $medidas_aro = "";
    $diseno_aro = "";
    $materiales_aro = "";


    $sql="insert into productos values(null,?,?,?,?,?,?,?,?,?);";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1, $marca_aros);
    $sql->bindValue(2, $modelo_aro);
    $sql->bindValue(3, $color_aro);
    $sql->bindValue(4, $medidas_aro);
    $sql->bindValue(5, $diseno_aro);
    $sql->bindValue(6, $materiales_aro);
    $sql->bindValue(7, $precio);
    $sql->bindValue(8, $cat_prod);
    $sql->bindValue(9, $describe);

    $sql->execute();

    //print_r($_POST);
  }   



}//////Fin de la clase
