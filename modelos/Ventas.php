<?php

require_once("../config/conexion.php");


class Ventas extends Conectar{//////inicio de la clase

public function buscar_aros_ventas($id_producto,$id_ingreso){
  $conectar= parent::conexion();


  $sql="select p.desc_producto,e.precio_venta,e.stock,e.categoria_ub,e.num_compra,e.fecha_ingreso,e.id_ingreso,p.id_producto from
productos as p inner join existencias as e on p.id_producto=e.id_producto
where e.id_producto=? and e.id_ingreso=?";

  $sql = $conectar->prepare($sql);
  $sql->bindValue(1,$id_producto);
  $sql->bindValue(2,$id_ingreso);
  $sql->execute();
  return $result = $sql->fetchAll(PDO::FETCH_ASSOC);

}

}//////Fin de la clase
