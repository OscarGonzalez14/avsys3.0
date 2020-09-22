<?php 
require_once("../config/conexion.php");

class Recibos extends conectar {//inicio de la clase

	public function get_datos_pac_rec_ini($n_venta,$id_paciente){

    $conectar= parent::conexion();	       
	$sql= "select p.categoria_producto,d.producto from productos as p inner join detalle_ventas as d on p.id_producto=d.id_producto where categoria_producto='lentes'
        and d.numero_venta=? and d.id_paciente=?";

    $sql=$conectar->prepare($sql);
    $sql->bindValue(1, $sucursal);
    $sql->bindValue(2, $id_usuario);
    $sql->execute();
    return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}

}

 ?>