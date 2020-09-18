<?php

require_once("../config/conexion.php");


class Ventas extends Conectar{//////inicio de la clase

public function buscar_aros_ventas($id_producto,$id_ingreso){
  $conectar= parent::conexion();
  $sql="select p.desc_producto,p.categoria_producto,e.precio_venta,e.stock,e.categoria_ub,e.num_compra,e.fecha_ingreso,e.id_ingreso,p.id_producto from
productos as p inner join existencias as e on p.id_producto=e.id_producto
where e.id_producto=? and e.id_ingreso=?";

  $sql = $conectar->prepare($sql);
  $sql->bindValue(1,$id_producto);
  $sql->bindValue(2,$id_ingreso);
  $sql->execute();
  return $result = $sql->fetchAll(PDO::FETCH_ASSOC);

}

public function buscar_lentes_ventas($id_producto){
  $conectar= parent::conexion();
  $sql="select categoria as precio_venta,categoria_producto,desc_producto,id_producto from productos where id_producto=?";

  $sql = $conectar->prepare($sql);
  $sql->bindValue(1,$id_producto);
  $sql->execute();
  return $result = $sql->fetchAll(PDO::FETCH_ASSOC);
}

public function get_numero_venta($sucursal_correlativo){
  $conectar= parent::conexion();
  $sql= "select numero_venta from ventas where sucursal=? order by id_paciente DESC limit 1;";
  $sql=$conectar->prepare($sql);
  $sql->bindValue(1, $sucursal_correlativo);
  $sql->execute();
  return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}


/////////////////////REGISTRAR VENTA
public function agrega_detalle_venta(){

$str = '';
$detalles = array();
$detalles = json_decode($_POST['arrayVenta']);
$conectar= parent::conexion();
parent::set_names();

foreach ($detalles as $k => $v) {
  $cantidad = $v->cantidad;
  $categoria_prod = $v->categoria_prod;
  $categoria_ub = $v->categoria_ub;
  $codProd = $v->codProd;
  $descripcion = $v->descripcion;
  $descuento = $v->descuento;
  $id_ingreso = $v->id_ingreso;
  $num_compra = $v->num_compra;
  $precio_venta = $v->precio_venta;
  $stock = $v->stock;
  $subtotal = $v->subtotal;

  $fecha_venta = $_POST["fecha_venta"];
  $numero_venta = $_POST["numero_venta"];
  $paciente = $_POST["paciente"];
  $vendedor = $_POST["vendedor"];
  $monto_total = $_POST["monto_total"];
  $tipo_pago = $_POST["tipo_pago"];
  $tipo_venta = $_POST["tipo_venta"];
  $id_usuario = $_POST["id_usuario"];
  $id_paciente = $_POST["id_paciente"];
  $sucursal = $_POST["sucursal"];
  $evaluado = $_POST["evaluado"];
  $optometra = $_POST["optometra"];
  $plazo = $_POST["plazo"];

  $sql="insert into detalle_ventas values(null,?,?,?,?,?,?,?,?,?,?,?);";
    $sql=$conectar->prepare($sql);

    $sql->bindValue(1,$numero_venta);
    $sql->bindValue(2,$codProd);
    $sql->bindValue(3,$descripcion);
    $sql->bindValue(4,$precio_venta);
    $sql->bindValue(5,$cantidad);
    $sql->bindValue(6,$descuento);
    $sql->bindValue(7,$subtotal);
    $sql->bindValue(8,$fecha_venta);
    $sql->bindValue(9,$id_usuario);
    $sql->bindValue(10,$id_paciente);
    $sql->bindValue(11,$evaluado);
    $sql->execute();

}

  $sql2="insert into ventas values(null,?,?,?,?,?,?,?,?,?,?,?,?);";
    $sql2=$conectar->prepare($sql2);
          
    $sql2->bindValue(1,$fecha_venta);
    $sql2->bindValue(2,$numero_venta);
    $sql2->bindValue(3,$paciente);
    $sql2->bindValue(4,$vendedor);       
    $sql2->bindValue(5,$monto_total);
    $sql2->bindValue(6,$tipo_pago);
    $sql2->bindValue(7,$tipo_venta);          
    $sql2->bindValue(8,$id_usuario);
    $sql2->bindValue(9,$id_paciente);
    $sql2->bindValue(10,$sucursal);
    $sql2->bindValue(11,$evaluado);
    $sql2->bindValue(12,$optometra);
    $sql2->execute();


}//////////FIN FUNCION REGISTRA VENTA

}//////Fin de la clase
