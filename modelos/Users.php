<?php 
require_once("../config/conexion.php");

class User extends conectar{
//inicio de la clase

	public function registrar_user($nom_user,$user,$tel_user,$correo_user,$dir_user,$pass_user,$ingreso_user,$cat_user,$est_user){

		$conectar= parent::conexion();
		parent::set_names();
		$sql="insert into user values(null,?,?,?,?,?,?,?,?,?);";
		$sql=$conectar->prepare($sql);
		$sql->bindValue(1, $nom_user);
		$sql->bindValue(2, $user);
		$sql->bindValue(3, $tel_user);
		$sql->bindValue(4, $correo_user);
		$sql->bindValue(5, $dir_user);
		$sql->bindValue(6, $pass_user);
		$sql->bindValue(7, $ingreso_user);
		$sql->bindValue(8, $cat_user);
		$sql->bindValue(9, $est_user);


		$sql->execute();

		//print_r($_POST);
	}

	

	}/////FIN CLASS

 ?>