<?php 
require_once("../config/conexion.php");

class Marca extends conectar 
{//inicio de la clase

	public function registrar_marca($nom_marca){

		$conectar= parent::conexion();
		parent::set_names();
		$sql="insert into marca values(null,?);";
		$sql=$conectar->prepare($sql);
		$sql->bindValue(1, $nom_marca);
		$sql->execute();
	}
/////////////////////VERIFICAR SI EXISTE MARCA
	public function valida_existencia_marca($nom_marca){
    $conectar= parent::conexion();
    parent::set_names();
    $sql="SELECT*from marca WHERE marca=?";
    $sql= $conectar->prepare($sql);
    $sql->bindValue(1, $nom_marca);
    $sql->execute();
    return $resultado=$sql->fetchAll();
}

public function get_marcas(){
    $conectar= parent::conexion();
    $sql= "select*from marca order by id_marca DESC;";
    $sql=$conectar->prepare($sql);
    //$sql->bindValue(1, $sucursal_correlativo);
    $sql->execute();
    return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    }

//////FUNCION EDITAR MARCA
public function editar_marca($nom_marcas){

    $conectar= parent::conexion();
    parent::set_names();
    $sql="update marca set marca=? where id_marca=?;";
    $sql=$conectar->prepare($sql);
    
    $sql="insert into marca values(null,?);";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1, $nom_marca);
    $sql->execute();
    return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}

////FUNCION VER MARCAS
public function show_datos_marca($id_marca){
    $conectar= parent::conexion();
    $sql="select*from marca where id_marca=?;";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1, $id_marca);
    $sql->execute();
    return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
  }
/////FUNCIO EDITAR MARCA
public function eliminar_marca($id_marca){
    $conectar=parent::conexion();
    $sql="delete from marca where id_marca=?";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1, $id_marca);
    $sql->execute();
    return $resultado=$sql->fetch(PDO::FETCH_ASSOC);
  }



}

 ?>