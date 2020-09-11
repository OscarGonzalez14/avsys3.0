<?php 
require_once("../config/conexion.php");

class Empresas extends conectar{//inicio de la clase

	public function registrarEmpresa($nomEmpresa,$dirEmpresa,$nitEmpresa,$telEmpresa,$respEmpresa,$correoEmpresa,$encargado){

		$conectar= parent::conexion();
		parent::set_names();
		$sql="insert into empresas values(null,?,?,?,?,?,?,?);";
		$sql=$conectar->prepare($sql);
		$sql->bindValue(1, $nomEmpresa);
		$sql->bindValue(2, $dirEmpresa);
		$sql->bindValue(3, $nitEmpresa);
		$sql->bindValue(4, $telEmpresa);
		$sql->bindValue(5, $respEmpresa);
		$sql->bindValue(6, $correoEmpresa);
		$sql->bindValue(7, $encargado);

		$sql->execute();

		//print_r($_POST);
	}

	/*public function get_categorias(){
	    $conectar= parent::conexion();
		parent::set_names();
		 $sql="select id_categoria, nombre from categoria";
		 $sql=$conectar->prepare($sql);
    	 $sql->execute();
    	 return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    	}*/


	}/////FIN CLASS

 ?>