<?php 
require_once("../config/conexion.php");

class Recibos extends conectar {//inicio de la clase


	public function get_numero_recibo($sucursal_correlativo){
  	$conectar= parent::conexion();
  	$sql= "select numero_recibo from recibos where sucursal=? order by id_recibo DESC limit 1;";
  	$sql=$conectar->prepare($sql);
  	$sql->bindValue(1, $sucursal_correlativo);
  	$sql->execute();
  	return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
	}

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

//////////////VALIDA NUMERO DE RECIBO
///////////////VERIFICA SI EXISTE RECIBO***********
public function valida_existencia_nrecibo($n_recibo){
  $conectar= parent::conexion();
  parent::set_names();
  $sql="select numero_recibo from recibos where numero_recibo=?";
  $sql= $conectar->prepare($sql);
  $sql->bindValue(1, $n_recibo);
  $sql->execute();
  return $resultado=$sql->fetchAll();
}
///////////////////GREGISTRA RECIBO
public function agrega_detalle_abono($a_anteriores,$n_recibo,$n_venta_recibo_ini,$monto,$fecha,$sucursal,$id_paciente,$id_usuario,$telefono_ini,$recibi_rec_ini,$empresa_ini,$texto,$numero,$saldo,$forma_pago,$marca_aro_ini,$modelo_aro_ini,$color_aro_ini,$lente_rec_ini,$ar_rec_ini,$photo_rec_ini,$observaciones_rec_ini,$pr_abono,$servicio_rec_ini){

$conectar=parent::conexion();  

  $sql="insert into recibos values(null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
  $sql=$conectar->prepare($sql);

  $sql->bindValue(1,$n_recibo);
  $sql->bindValue(2,$n_venta_recibo_ini);
  $sql->bindValue(3,$monto);
  $sql->bindValue(4,$fecha);
  $sql->bindValue(5,$sucursal);
  $sql->bindValue(6,$id_paciente);
  $sql->bindValue(7,$id_usuario);
  $sql->bindValue(8,$telefono_ini);
  $sql->bindValue(9,$recibi_rec_ini);
  $sql->bindValue(10,$empresa_ini);
  $sql->bindValue(11,$texto);
  $sql->bindValue(12,$a_anteriores);
  $sql->bindValue(13,$numero);
  $sql->bindValue(14,$saldo);
  $sql->bindValue(15,$forma_pago);
  $sql->bindValue(16,$marca_aro_ini);
  $sql->bindValue(17,$modelo_aro_ini);
  $sql->bindValue(18,$color_aro_ini);
  $sql->bindValue(19,$lente_rec_ini);
  $sql->bindValue(20,$ar_rec_ini);
  $sql->bindValue(21,$photo_rec_ini);
  $sql->bindValue(22,$observaciones_rec_ini);
  $sql->bindValue(23,$pr_abono);
  $sql->bindValue(24,$servicio_rec_ini);
  
  $sql->execute();

  ///////////////REGISTRA ABONOS
  $sql2="insert into abonos values(null,?,?,?,?,?,?,?,?);";
  $sql2=$conectar->prepare($sql2);
  $sql2->bindValue(1,$numero);
  $sql2->bindValue(2,$forma_pago);
  $sql2->bindValue(3,$fecha);
  $sql2->bindValue(4,$id_paciente);
  $sql2->bindValue(5,$id_usuario);
  $sql2->bindValue(6,$n_recibo);
  $sql2->bindValue(7,$n_venta_recibo_ini);
  $sql2->bindValue(8,$sucursal);
  $sql2->execute();

  ///////////////ACTUALIZAR SALDO DEL CREDITO
  $sql3="select * from creditos where numero_venta=? AND id_paciente=?;";             
  $sql3=$conectar->prepare($sql3);
  $sql3->bindValue(1,$n_venta_recibo_ini);
  $sql3->bindValue(2,$id_paciente);
  $sql3->execute();

  $resultados = $sql3->fetchAll(PDO::FETCH_ASSOC);
      foreach($resultados as $b=>$row){
        $re["saldo_actual"] = $row["saldo"];
       // $re["abono_realizados"] = $row["abonos"];

    }
    //la cantidad total es la suma de la cantidad más la cantidad actual
    $saldo_act = $row["saldo"] - $numero;
    //$abonos_pendientes = $row["abonos"]+1;             
    //si existe el producto entonces actualiza el stock en producto              
      if(is_array($resultados)==true and count($resultados)>0) {                     
                  //actualiza el stock en la tabla producto
        $sql12 = "update creditos set saldo=? where numero_venta=? and id_paciente=?";
        $sql12 = $conectar->prepare($sql12);
        $sql12->bindValue(1,$saldo_act);
        $sql12->bindValue(2,$n_venta_recibo_ini);
        $sql12->bindValue(3,$id_paciente);
        //$sql12->bindValue(3,$sucursal);
        $sql12->execute();               
    }//Fin del if

}


}

 ?>