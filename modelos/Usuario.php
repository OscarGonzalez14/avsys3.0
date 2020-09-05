<?php 
require_once("../config/conexion.php");

class Usuario extends conectar 
{//inicio de la clase

	public function registrar_usuarios($nomUsuario,$telUsuario,$correoUsuario,$dirUsuario,$usuario,$passUsuario,$catUsuario,$estUsuario){

		$fecha="01-05-2020";

		$conectar= parent::conexion();
		parent::set_names();
		$sql="insert into usuarios values(null,?,?,?,?,?,?,?,?,?);";
		$sql=$conectar->prepare($sql);
		$sql->bindValue(1, $nomUsuario);
		$sql->bindValue(2, $telUsuario);
		$sql->bindValue(3, $correoUsuario);
		$sql->bindValue(4, $dirUsuario);
		$sql->bindValue(5, $usuario);
		$sql->bindValue(6, $passUsuario);
		$sql->bindValue(7, $fecha);
		$sql->bindValue(8, $catUsuario);
		$sql->bindValue(9, $estUsuario);
		
		$sql->execute();

		print_r($_POST);
	}

//FIN class

}

 ?>