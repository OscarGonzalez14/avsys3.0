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

public function buscar_accesorios_ventas($id_producto,$id_ingreso){
  $conectar= parent::conexion();
  $sql="select p.categoria,p.desc_producto,p.categoria_producto,e.precio_venta,e.stock,e.categoria_ub,e.num_compra,e.fecha_ingreso,e.id_ingreso,p.id_producto from
productos as p inner join existencias as e on p.id_producto=e.id_producto
where e.id_producto=? and e.id_ingreso=? and p.categoria_producto='accesorios';";

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
  $sql= "select numero_venta from ventas where sucursal=? order by id_ventas DESC limit 1;";
  $sql=$conectar->prepare($sql);
  $sql->bindValue(1, $sucursal_correlativo);
  $sql->execute();
  return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}

//////////VALIDAR SI EXISTE VENTA
public function valida_existencia_venta($numero_venta){
  $conectar= parent::conexion();
  parent::set_names();
  $sql="select numero_venta from ventas where numero_venta=?";
  $sql= $conectar->prepare($sql);
  $sql->bindValue(1, $numero_venta);
  //$sql->bindValue(2, $id_paciente);
  $sql->execute();
  return $resultado=$sql->fetchAll();
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
  $id_ref = $_POST["id_ref"];

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

    ////////////////////ACTUALIZAR STOCK DE BODEGA SI PRODUCTO == aros o accesorios
      $sql3="select * from existencias where id_producto=? and bodega=? and categoria_ub=? and num_compra=? and id_ingreso=?;";           
      $sql3=$conectar->prepare($sql3);
      $sql3->bindValue(1,$codProd);
      $sql3->bindValue(2,$sucursal);
      $sql3->bindValue(3,$categoria_ub);
      $sql3->bindValue(4,$num_compra);
      $sql3->bindValue(5,$id_ingreso);
      $sql3->execute();

      $resultados = $sql3->fetchAll(PDO::FETCH_ASSOC);

      foreach($resultados as $b=>$row){
      $re["existencia"] = $row["stock"];
    }            
    
    $cantidad_totales = $row["stock"] - $cantidad;

    if(is_array($resultados)==true and count($resultados)>0) {                    

    $sql12 = "update existencias set stock=? where id_producto=? and bodega=? and id_ingreso=? and categoria_ub=? and num_compra=?";
      $sql12 = $conectar->prepare($sql12);
      $sql12->bindValue(1,$cantidad_totales);
      $sql12->bindValue(2,$codProd);
      $sql12->bindValue(3,$sucursal);
      $sql12->bindValue(4,$id_ingreso);
      $sql12->bindValue(5,$categoria_ub);
      $sql12->bindValue(6,$num_compra);
      $sql12->execute();               
  }


}//FIN DEL FOREACH**************

    ///////////////////////INSERTAR CREDITOS
    $sql1="insert into creditos values(null,?,?,?,?,?,?,?,?,?);";
    $sql1=$conectar->prepare($sql1);          
    $sql1->bindValue(1,$tipo_venta);
    $sql1->bindValue(2,$monto_total);
    $sql1->bindValue(3,$plazo);
    $sql1->bindValue(4,$monto_total);
    $sql1->bindValue(5,$tipo_pago);
    $sql1->bindValue(6,$numero_venta);
    $sql1->bindValue(7,$id_paciente);
    $sql1->bindValue(8,$id_usuario);
    $sql1->bindValue(9,$fecha_venta);

    $sql1->execute();


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

    if ($id_ref != "") {
    $sql2="insert referidos values(null,?,?,?,?);";
    $sql2=$conectar->prepare($sql2);
          
    $sql2->bindValue(1,$id_ref);
    $sql2->bindValue(2,$id_paciente);
    $sql2->bindValue(3,$fecha_venta);
    $sql2->bindValue(4,$sucursal);
    $sql2->execute();
    }
#################  REGISTRAR VENTA EN CORTE DIARIO #####################

    $n_recibo="";
    $n_factura="";
    $forma_cobro="";
    $monto_cobrado="";
    $abono_anterior="0";
    $abonos_realizados="0";
    $sucursal_cobro="";
    $tipo_ingreso = "Venta";

    $sql2="insert into corte_diario values(null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $sql2=$conectar->prepare($sql2);          
    $sql2->bindValue(1,$fecha_venta);
    $sql2->bindValue(2,$n_recibo);
    $sql2->bindValue(3,$numero_venta);
    $sql2->bindValue(4,$n_factura);
    $sql2->bindValue(5,$paciente);
    $sql2->bindValue(6,$vendedor);
    $sql2->bindValue(7,$monto_total);
    $sql2->bindValue(8,$forma_cobro);
    $sql2->bindValue(9,$monto_cobrado);
    $sql2->bindValue(10,$monto_total);
    $sql2->bindValue(11,$tipo_venta);
    $sql2->bindValue(12,$tipo_pago);
    $sql2->bindValue(13,$id_usuario);
    $sql2->bindValue(14,$abono_anterior);
    $sql2->bindValue(15,$abonos_realizados);
    $sql2->bindValue(16,$id_paciente);
    $sql2->bindValue(17,$sucursal);
    $sql2->bindValue(18,$sucursal_cobro);
    $sql2->bindValue(19,$tipo_ingreso);

    $sql2->execute();


}//////////FIN FUNCION REGISTRA VENTA

////////LENADO DE RECIBO INICIAL DE LENTE
public function get_detalle_lente_rec_ini($id_paciente,$numero_venta){
  $conectar=parent::conexion();
  parent::set_names();
  $sql="select p.desc_producto,d.producto from productos as p inner join detalle_ventas as d on p.id_producto=d.id_producto where d.numero_venta=? and d.id_paciente=? and p.categoria_producto='lentes'";
  $sql=$conectar->prepare($sql);
  $sql->bindValue(1,$numero_venta);
  $sql->bindValue(2,$id_paciente);
  $sql->execute();
  return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
}

////////LENADO DE RECIBO INICIAL PHOTO
public function get_detalle_photo_rec_ini($id_paciente,$numero_venta){
  $conectar=parent::conexion();
  parent::set_names();
  $sql="select p.desc_producto,d.producto from productos as p inner join detalle_ventas as d on p.id_producto=d.id_producto where d.numero_venta=? and d.id_paciente=? and p.categoria_producto='photosensible'";
  $sql=$conectar->prepare($sql);
  $sql->bindValue(1,$numero_venta);
  $sql->bindValue(2,$id_paciente);
  $sql->execute();
  return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
}

////////LENADO DE RECIBO ANTIREFLEJANTES
public function get_detalle_ar_rec_ini($id_paciente,$numero_venta){
  $conectar=parent::conexion();
  parent::set_names();
  $sql="select p.desc_producto,d.producto from productos as p inner join detalle_ventas as d on p.id_producto=d.id_producto where d.numero_venta=? and d.id_paciente=? and p.categoria_producto='antireflejante'";
  $sql=$conectar->prepare($sql);
  $sql->bindValue(1,$numero_venta);
  $sql->bindValue(2,$id_paciente);
  $sql->execute();
  return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
}

////////////LENADO DE CAMPOS AROS RECIBO INICIAL
public function get_detalle_aros_rec_ini($id_paciente,$numero_venta){
  $conectar=parent::conexion();
  parent::set_names();
  $sql="select p.marca,p.modelo,p.color,d.producto from productos as p inner join detalle_ventas as d on p.id_producto=d.id_producto where d.numero_venta=? and d.id_paciente=? and p.categoria_producto='aros'";
  $sql=$conectar->prepare($sql);
  $sql->bindValue(1,$numero_venta);
  $sql->bindValue(2,$id_paciente);
  $sql->execute();
  return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
}


  public function get_ventas_gral($sucursal){
  $conectar= parent::conexion();
  $sql="select*from ventas where sucursal=? order by id_ventas DESC;";
  $sql = $conectar->prepare($sql);
  $sql->bindValue(1,$sucursal);
  $sql->execute();
  return $result = $sql->fetchAll(PDO::FETCH_ASSOC);
}

  public function get_ventas_mora($id_paciente,$numero_venta){
  $conectar= parent::conexion();
  $sql="select p.nombres,v.id_paciente,v.numero_venta,v.paciente,v.evaluado,v.tipo_venta,v.tipo_pago,v.fecha_venta,u.usuario from pacientes as p inner join ventas as v on p.id_paciente=v.id_paciente inner join usuarios as u on u.id_usuario=v.id_usuario where v.id_paciente=? and v.numero_venta=?;";
  $sql = $conectar->prepare($sql);
  $sql->bindValue(1,$id_paciente);
  $sql->bindValue(2,$numero_venta);
  $sql->execute();
  return $result = $sql->fetchAll(PDO::FETCH_ASSOC);
}

////////////////DETALLE DE VENTAS
public function get_detalle_ventas_paciente($numero_venta,$id_paciente){

  $conectar=parent::conexion();
  parent::set_names();
  $moneda="$";   

  $sql="select producto,cantidad_venta,precio_venta,descuento,precio_final from detalle_ventas where numero_venta=? and id_paciente=?";

  $sql=$conectar->prepare($sql);            

  $sql->bindValue(1,$numero_venta);
  $sql->bindValue(2,$id_paciente);
  $sql->execute();
  $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

  $html= "
     <thead class='bg-success'>
      <th style='text-align:center'>Producto</th>
      <th style='text-align:center'>Cantidad</th>
      <th style='text-align:center'>P/U</th>
      <th style='text-align:center'>Descuento $</th>
      <th style='text-align:center'>Subtotal</th>                                   
    </thead>";           
    $subtotal=0;
    foreach($resultado as $row){         
    $html.="<tr class='filas'>
    <td style='text-align:center'>".$row['producto']."</td>
    <td style='text-align:center'>".$row['cantidad_venta']."</td>
    <td style='text-align:center'>".$moneda." ".$row['precio_venta']."</td> 
    <td style='text-align:center'>"."$".$row['descuento']."</td>
    <td style='text-align:center'>"."$".$row['precio_final']."</td>
    </tr>";
 
   $subtotal= $subtotal+$row["precio_final"];         
              
}
$html .= "<tfoot style='text-align:center'><td colspan='4'><b>Subtotal</b></td><td>".$moneda." ".$subtotal."</td></tfoot>";                                     
echo $html;
}


}//////Fin de la clase
