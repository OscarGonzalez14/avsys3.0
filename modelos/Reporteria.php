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

/////////////////////GET DATOS PARA ECIBO
public function print_recibo_paciente($n_recibo,$n_venta,$id_paciente){
  $conectar=parent::conexion();
  parent::set_names();

  $sql="select*from recibos where numero_recibo=? and numero_venta=? and id_paciente=?;";
  $sql=$conectar->prepare($sql);
  $sql->bindValue(1,$n_recibo);
  $sql->bindValue(2,$n_venta);
  $sql->bindValue(3,$id_paciente);
  $sql->execute();
  return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
}
/////////GET DATOS DESCRIPCION DE PRODUCTOS FACTURA
public function get_datos_factura($n_venta,$id_paciente){
	$conectar= parent::conexion();
	parent::set_names();
	$sql="select producto from detalle_ventas where numero_venta=? and id_paciente=? order by id_detalle_ventas ASC;";
	$sql=$conectar->prepare($sql);
	$sql->bindValue(1,$n_venta);
       $sql->bindValue(2,$id_paciente);
	$sql->execute();
	return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}
/////////GET DATOS CANTIDAD DE PRODUCTOS FACTURA
public function get_datos_factura_cantidad($n_venta,$id_paciente){
	$conectar= parent::conexion();
	parent::set_names();
	$sql="select cantidad_venta from detalle_ventas where numero_venta=? and id_paciente=? order by id_detalle_ventas ASC;";
	$sql=$conectar->prepare($sql);
	$sql->bindValue(1,$n_venta);
    $sql->bindValue(2,$id_paciente);
	$sql->execute();
	return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}

/////////GET DATOS PRECIO UNITARIO DE PRODUCTOS FACTURA
public function get_datos_factura_p_unitario($n_venta,$id_paciente){
	$conectar= parent::conexion();
	parent::set_names();
	$sql="select precio_venta from detalle_ventas where numero_venta=? and id_paciente=? order by id_detalle_ventas ASC;";
	$sql=$conectar->prepare($sql);
	$sql->bindValue(1,$n_venta);
    $sql->bindValue(2,$id_paciente);
	$sql->execute();
	return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}
/////////GET DATOS SUBTOTAL DE PRODUCTOS FACTURA
public function get_datos_factura_subtotal($n_venta,$id_paciente){
	$conectar= parent::conexion();
	parent::set_names();
	$sql="select precio_venta*cantidad_venta as subtotal from detalle_ventas where numero_venta=? and id_paciente=? order by id_detalle_ventas ASC;";
	$sql=$conectar->prepare($sql);
	$sql->bindValue(1,$n_venta);
    $sql->bindValue(2,$id_paciente);
	$sql->execute();
	return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}

/////////GET DATOS CLIENTE DE PRODUCTOS FACTURA
public function get_datos_factura_paciente($id_paciente){
	$conectar= parent::conexion();
	parent::set_names();
	$sql="select *from pacientes where id_paciente=?";
	$sql=$conectar->prepare($sql);
	$sql->bindValue(1,$id_paciente);
	$sql->execute();
	return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}

/////////GET DATOS VENTA FACTURA
public function get_datos_factura_venta($n_venta,$id_paciente){
	$conectar= parent::conexion();
	parent::set_names();
	$sql="select *from ventas where numero_venta=? and id_paciente=?";
	$sql=$conectar->prepare($sql);
	$sql->bindValue(1,$n_venta);
    $sql->bindValue(2,$id_paciente);
	$sql->execute();
	return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}

/////////////////////////////INICIO CORTE DIARIO
public function get_datos_ventas_cobros_contado($fecha){
	$conectar= parent::conexion();
	parent::set_names();
 
	$fecha_corte = $fecha."%";
	$sql="select c.n_recibo,p.nombres,u.usuario,c.total_factura,c.forma_cobro,c.monto_cobrado,c.saldo_credito,c.abonos_realizados,c.fecha_ingreso from pacientes as p inner join corte_diario as c on c.paciente=p.id_paciente inner join usuarios as u on c.id_usuario=u.id_usuario where c.abonos_realizados=1 and c.fecha_ingreso like ?;";
	$sql=$conectar->prepare($sql);
	$sql->bindValue(1,$fecha_corte);
	$sql->execute();
	return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}

public function count_referidos(){
    $conectar= parent::conexion();           
    $sql="select id_paciente_refiere from referidos where id_paciente_refiere=?;";             
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1,$id_paciente);
    $sql->execute();
    $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    return $sql->rowCount();
}
}