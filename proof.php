<?php
require_once("config/conexion.php");
class Bodegas extends Conectar{
public function get_productos_ingresar(){
$conectar=parent::conexion();
$sql5="SELECT SUM(`cant_ingreso`) FROM `detalle_compras` WHERE `numero_compra`='ME-1;";
       $sql5=$conectar->prepare($sql5);
       $sql5->execute();
       $resultado2 = $sql5->fetchAll(PDO::FETCH_ASSOC);


   //echo $resultado2;
 }
}
$solicitudes = new Bodegas();
echo $solicitudes->get_productos_ingresar();