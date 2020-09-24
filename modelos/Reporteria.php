<?php  
//conexion a la base de datos
require_once("config/conexion.php");


class Reporteria extends Conectar{

	public function count_compras_ingresar_bodegas(){
    $conectar= parent::conexion();           
    $sql="SELECT estado FROM `compras` WHERE `estado`<2;";             
    $sql=$conectar->prepare($sql);
    $sql->execute();
    $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    return $sql->rowCount();
}

/////////////////////GET DATOS PARA ECIBO
public function print_recibo_paciente($n_recibo,$n_venta,$id_paciente){
  $conectar=parent::conexion();
  parent::set_names();

  $sql="select*from recibos where numero_recibo=? and numero_venta=? and id_paciente=?;";
  $sql=$conectar->prepare($sql);
  $sql->bindValue(1,$n_recibo);
  $sql->bindValue(2,$n_venta);
  $sql->bindValue(3,$id_paciente);
  $sql->execute();
  return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
}
}