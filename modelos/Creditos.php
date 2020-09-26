<?php 
require_once("../config/conexion.php");

	class Creditos extends conectar{
	
	public function get_creditos_contado(){
    $conectar= parent::conexion();
    $sql= "select*from creditos where tipo_credito='Contado' order by id_credito DESC;;";
    $sql=$conectar->prepare($sql);
    $sql->execute();
    return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    }

	}/////FIN CLASS

 ?>