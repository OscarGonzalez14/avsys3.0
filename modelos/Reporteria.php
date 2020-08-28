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
}