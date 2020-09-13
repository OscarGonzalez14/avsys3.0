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

    $descripcion=$marca_aros." mod.".$modelo_aro." ".$medidas_aro." ".$color_aro;

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


public function buscar_aros_ventas($sucursal){
  $conectar= parent::conexion();
  $suscursal=$_POST["sucursal"];

  $sql="select p.desc_producto,e.precio_venta,e.stock,e.categoria_ub,e.num_compra,e.fecha_ingreso,e.id_ingreso,p.id_producto from
productos as p inner join existencias as e on p.id_producto=e.id_producto
where e.bodega=? and e.stock>0";

  $sql = $conectar->prepare($sql);
  $sql->bindValue(1,$sucursal);
  $sql->execute();
  return $result = $sql->fetchAll(PDO::FETCH_ASSOC);

}

}//////Fin de la clase
