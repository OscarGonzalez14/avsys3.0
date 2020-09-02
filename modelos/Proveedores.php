<?php  
//conexion a la base de datos
require_once("../config/conexion.php");
require_once("../modals/nuevo_proveedor.php");


class Proveedor extends Conectar{  

     //inicio de la clase registrando nuevo proveedor
    public function registrarProveedor($codProveedor,$nomProveedor,$nitProveedor,$telProveedor,$empresaProveedor){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="insert into proveedor values(null,?,?,?,?,?);";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $codProveedor);
        $sql->bindValue(2, $nomProveedor);
        $sql->bindValue(3, $nitProveedor);
        $sql->bindValue(4, $telProveedor);
        $sql->bindValue(5, $empresaProveedor);
        $sql->execute();
        // fin funcion
        }

  	public function get_proveedores(){
    	$conectar= parent::conexion();         
    	$sql= "select*from proveedor order by id_proveedor DESC;";
    	$sql=$conectar->prepare($sql);
    	//$sql->bindValue(1, $sucursal_correlativo);
    	$sql->execute();
    	return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_proveedores_compra($id_proveedor){
    	$conectar= parent::conexion();         
    	$sql= "select*from proveedor where id_proveedor=?;";
    	$sql=$conectar->prepare($sql);
    	$sql->bindValue(1, $id_proveedor);
    	$sql->execute();
    	return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    }

}