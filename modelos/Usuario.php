<?php 
require_once("../config/conexion.php");

//INICIO DE FUNCION "CREAR NUEVO USUARIO"////Cod. Empleado	
class Usuarios extends conectar{  // inicio de la clase

	public function registrarUsuario($nom_user,$tel_user,$correo_user,$dir_user,$user,$pass_user,$fecha_ingreso,$cat_user,$est_user,$suc_user){

		$conectar= parent::conexion();
		parent::set_names();
		$sql="insert into usuarios values (null,?,?,?,?,?,?,?,?,?,?);";
		$sql=$conectar->prepare($sql);
		$sql->bindValue(1, $nom_user);
		$sql->bindValue(2, $tel_user);
		$sql->bindValue(3, $correo_user);
		$sql->bindValue(4, $dir_user);
		$sql->bindValue(5, $user);
		$sql->bindValue(6, $pass_user);
		$sql->bindValue(7, $fecha_ingreso);
		$sql->bindValue(8, $cat_user);
		$sql->bindValue(9, $est_user);
		$sql->bindValue(10, $suc_user);

		
		$sql->execute();

		//print_r($_POST);
	}
	//fin, función registrarUsuario

	////// funcion listar usuarios
	public function get_usuarios(){
 	$conectar= parent::conexion();
  	$sql="select id_usuario, nombres, usuario, categoria, telefono, correo, direccion from usuarios;";
  	$sql = $conectar->prepare($sql);
  	$sql->execute();
  	return $result = $sql->fetchAll(PDO::FETCH_ASSOC);
}


}

 ?>