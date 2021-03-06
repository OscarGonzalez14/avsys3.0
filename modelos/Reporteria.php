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

/////////////////////////////INICIO CORTE DIARIO////////////////////

############GET VENTAS COBRO CONTADO##############
public function get_datos_ventas_cobros_contado($fecha){
	$conectar= parent::conexion();
	parent::set_names();
 
	$fecha_corte = $fecha."%";
	$sql="select  c.fecha_ingreso,c.n_recibo,c.paciente,u.usuario,c.total_factura,c.forma_cobro,c.monto_cobrado,c.saldo_credito,c.abonos_realizados from
corte_diario as c inner join usuarios as u on u.id_usuario=c.id_usuario where c.fecha_ingreso like ? and c.abonos_realizados='0' and c.tipo_venta='Contado' AND tipo_ingreso='Venta';";
	$sql=$conectar->prepare($sql);
	$sql->bindValue(1,$fecha_corte);
	$sql->execute();
	return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}

############GET VENTAS EMPRESARIAL##############
public function get_datos_ventas_empresarial($fecha){
	$conectar= parent::conexion();
	parent::set_names();
 
	$fecha_corte = $fecha."%";
	$sql="select c.fecha_ingreso, c.n_recibo,p.nombres,p.empresas,u.usuario,c.forma_cobro,c.monto_cobrado,c.total_factura,c.saldo_credito,c.abonos_realizados from corte_diario as c inner join usuarios as u on u.id_usuario=c.id_usuario inner join pacientes as p on p.id_paciente=c.id_paciente where c.fecha_ingreso like ? and c.abonos_realizados='0' and c.tipo_pago='Descuento en Planilla';";
	$sql=$conectar->prepare($sql);
	$sql->bindValue(1,$fecha_corte);
	$sql->execute();
	return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}

##################GET VENTAS CARGO AUTOMATICO########
public function get_datos_ventas_cargo($fecha){
	$conectar= parent::conexion();
	parent::set_names();
 
	$fecha_corte = $fecha."%";
	$sql="select  c.fecha_ingreso,c.n_recibo,c.paciente,u.usuario,c.total_factura,c.forma_cobro,c.monto_cobrado,c.saldo_credito,c.abonos_realizados from corte_diario as c inner join usuarios as u on u.id_usuario=c.id_usuario where c.fecha_ingreso like ? and c.abonos_realizados='0' and c.tipo_pago='Cargo Automatico';";
	$sql=$conectar->prepare($sql);
	$sql->bindValue(1,$fecha_corte);
	$sql->execute();
	return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}

##################RECUPERADO CONTADO ########
public function get_datos_recuperado_contado($fecha){
	$conectar= parent::conexion();
	parent::set_names();
 
	$fecha_corte = $fecha."%";
	$sql="select  c.fecha_ingreso,c.n_recibo,c.paciente,u.usuario,c.total_factura,c.abono_anterior,c.saldo_credito+c.monto_cobrado as saldo_anterior,c.forma_cobro,c.monto_cobrado,c.saldo_credito,c.abonos_realizados from
corte_diario as c inner join usuarios as u on u.id_usuario=c.id_usuario where c.fecha_ingreso like ? and c.tipo_ingreso='Recuperado' and c.tipo_venta='Contado';";
	$sql=$conectar->prepare($sql);
	$sql->bindValue(1,$fecha_corte);
	$sql->execute();
	return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}

##################RECUPERADO EMPRESARIAL ########
public function get_datos_recuperado_empresarial($fecha){
	$conectar= parent::conexion();
	parent::set_names();
 
	$fecha_corte = $fecha."%";
	$sql="select  c.fecha_ingreso,c.n_recibo,c.paciente,u.usuario,c.total_factura,c.abono_anterior,c.saldo_credito+c.monto_cobrado as saldo_anterior,c.forma_cobro,c.monto_cobrado,c.saldo_credito,c.abonos_realizados from
corte_diario as c inner join usuarios as u on u.id_usuario=c.id_usuario where c.fecha_ingreso like ? and c.tipo_ingreso='Recuperado' and c.tipo_pago='Descuento en Planilla';";
	$sql=$conectar->prepare($sql);
	$sql->bindValue(1,$fecha_corte);
	$sql->execute();
	return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}

##################RECUPERADO EMPRESARIAL ########
public function get_datos_recuperado_cargo($fecha){
	$conectar= parent::conexion();
	parent::set_names();
 
	$fecha_corte = $fecha."%";
	$sql="select  c.fecha_ingreso,c.n_recibo,c.paciente,u.usuario,c.total_factura,c.abono_anterior,c.saldo_credito+c.monto_cobrado as saldo_anterior,c.forma_cobro,c.monto_cobrado,c.saldo_credito,c.abonos_realizados from
corte_diario as c inner join usuarios as u on u.id_usuario=c.id_usuario where c.fecha_ingreso like ? and c.tipo_ingreso='Recuperado' and c.tipo_pago='Cargo Automatico';";
	$sql=$conectar->prepare($sql);
	$sql->bindValue(1,$fecha_corte);
	$sql->execute();
	return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}

#############GET RESUMEN VENTAS Y COBROS
public function get_resumen_ventas_cobros($fecha){
	$conectar= parent::conexion();
	parent::set_names();
 
	$fecha_corte = $fecha."%";
	$sql="select * from corte_diario where fecha_ingreso like ?;";
	$sql=$conectar->prepare($sql);
	$sql->bindValue(1,$fecha_corte);
	$sql->execute();
	return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}



////////////NOTIFICACION DE GANADORES POR REFERIDOS
public function count_ganadores(){
    $conectar= parent::conexion();           
    $sql="select id_paciente_refiere, count(*) as num from referidos group by id_paciente_refiere having num = 5;";             
    $sql=$conectar->prepare($sql);    
    $sql->execute();
    $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    return $sql->rowCount();
}

/////////GET DATOS VENTA EMPRESA
public function get_datos_empresa($empresa){
	$conectar= parent::conexion();
	parent::set_names();
	$sql="select *from empresas where nombre=?";
	$sql=$conectar->prepare($sql);
	$sql->bindValue(1,$empresa);
	$sql->execute();
	return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}

#############GET RESUMEN VENTAS Y COBROS



}