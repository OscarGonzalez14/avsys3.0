<?php  
//conexion a la base de datos
require_once("../config/conexion.php");


class Bodegas extends Conectar{

public function get_numero_ingreso(){
    $conectar= parent::conexion();
    $sql= "select max(id_ingresos)+1 as n_ingreso from ingresos;";
    $sql=$conectar->prepare($sql);
    $sql->execute();
    return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}
public function get_productos_ingresar($numero_compra){
$conectar= parent::conexion();         
$sql= "SELECT * FROM `detalle_compras` WHERE `numero_compra`=?;";
$sql=$conectar->prepare($sql);
$sql->bindValue(1,$numero_compra);
$sql->execute();
return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}

public function get_productos_ingresar_bodega($id_producto,$numero_compra){
$conectar= parent::conexion();         
$sql= "select*from detalle_compras where id_producto=? and numero_compra=? and cant_ingreso>0;";
$sql=$conectar->prepare($sql);
$sql->bindValue(1,$id_producto);
$sql->bindValue(2,$numero_compra);
$sql->execute();
return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}
////////////////////REGISTRAR INGRESO A BODEGAS//////////////
public function registrar_ingreso_a_bodega(){

  $str = '';
  $detalles = array();
  $detalles = json_decode($_POST['arrayIngresoBodega']); 
  $conectar=parent::conexion();

  foreach ($detalles as $k => $v) {
    $cantidad = $v->cantidad;
    $descripcion = $v->descripcion;
    $id_producto = $v->id_producto;
    $precio_venta =$v->precio_venta;

    $fecha_ingreso = $_POST["fecha_ingreso"];
    $usuario = $_POST["usuario"];
    $sucursal_i = $_POST["sucursal_i"];
    $numero_compra = $_POST["numero_compra_i"];
    $categoria_ubicacion = $_POST["categoria_ubicacion"];
    $numero_ingreso = $_POST["numero_ingreso"];  

    //////////////////VERIFICA SI EXISTE EL PRODUCTO EN LA BODEGA  para insertar o ACTUALIZAR BODEGA 
  $sql3="select * from existencias where id_producto=? and bodega=? and categoria_ub=? and num_compra=?;";
    $sql3=$conectar->prepare($sql3);
    $sql3->bindValue(1,$id_producto);
    $sql3->bindValue(2,$sucursal_i);
    $sql3->bindValue(3,$categoria_ubicacion);
    $sql3->bindValue(4,$numero_compra);
    $sql3->execute();
    $resultado = $sql3->fetchAll(PDO::FETCH_ASSOC);
      
      if(is_array($resultado)==true and count($resultado)>0){
        foreach($resultado as $b=>$row){
          $re["existencia"] = $row["stock"];
        }
    //la cantidad total es la suma de la cantidad más la cantidad actual
      $cantidad_total = $cantidad + $row["stock"];             
      //si existe el producto entonces actualiza el stock en producto
            
     if(is_array($resultado)==true and count($resultado)>0) {                     
          //actualiza el stock en la tabla producto
        $sql4 = "update existencias set                      
        stock=?
        where 
        id_producto=? and bodega=? and categoria_ub=? and num_compra=?";
      $sql4 = $conectar->prepare($sql4);
      $sql4->bindValue(1,$cantidad_total);
      $sql4->bindValue(2,$id_producto);
      $sql4->bindValue(3,$sucursal_i);
      $sql4->bindValue(4,$categoria_ubicacion);
      $sql4->bindValue(5,$numero_compra);
      $sql4->execute();
      }

    }else{
     $sql="insert into existencias values (null,?,?,?,?,?,?,?,?);";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$id_producto);
        $sql->bindValue(2,$cantidad);
        $sql->bindValue(3,$sucursal_i);
        $sql->bindValue(4,$categoria_ubicacion);
        $sql->bindValue(5,$fecha_ingreso);
        $sql->bindValue(6,$usuario);
        $sql->bindValue(7,$numero_compra);
        $sql->bindValue(8,$precio_venta);
        $sql->execute();
    } //cierre la condicional

    ///SE DESCUENTA DEL NUMERO DE COMPRAS EL DETALLE INSERTADO
       $sql5="select * from detalle_compras where id_producto=? and numero_compra=?;";
       $sql5=$conectar->prepare($sql5);
       $sql5->bindValue(1,$id_producto);
       $sql5->bindValue(2,$numero_compra);
       $sql5->execute();
       $resultado2 = $sql5->fetchAll(PDO::FETCH_ASSOC);

       if(is_array($resultado2)==true and count($resultado2)>0){
        foreach($resultado2 as $b=>$row){
          $re["ingreso"] = $row["cant_ingreso"];
        }
      //la cantidad total es la suma de la cantidad más la cantidad actual
        $cantidad_ingreso = $row["cant_ingreso"]-$cantidad;             
      //si existe el producto entonces actualiza el stock en producto
            
      if(is_array($resultado2)==true and count($resultado2)>0) {                     
          //actualiza el stock en la tabla producto
        $sql6 = "update detalle_compras set                      
        cant_ingreso=?
        where 
        id_producto=? and numero_compra=?
      ";
      $sql6 = $conectar->prepare($sql6);
      $sql6->bindValue(1,$cantidad_ingreso);
      $sql6->bindValue(2,$id_producto);
      $sql6->bindValue(3,$numero_compra);
      $sql6->execute();
      }
  }//cerre del condicional

   $sql10="insert into detalle_ingresos values (null,?,?,?,?,?,?,?,?,?);";
   $sql10=$conectar->prepare($sql10);
   $sql10->bindValue(1,$descripcion);
   $sql10->bindValue(2,$cantidad);
   $sql10->bindValue(3,$sucursal_i);
   $sql10->bindValue(4,$categoria_ubicacion);
   //$sql10->bindValue(5,$fecha_ingreso);
   $sql10->bindValue(5,$usuario);
   $sql10->bindValue(6,$fecha_ingreso);
   $sql10->bindValue(7,$numero_compra);
   $sql10->bindValue(8,$precio_venta);
   $sql10->bindValue(9,$numero_ingreso);
   $sql10->execute();

  }//cierre del foreach

 // SELECT `cant_ingreso` from detalle_compras WHERE `cant_ingreso`>0
  //SELECT SUM(`cant_ingreso`) as suma FROM `detalle_compras` WHERE `numero_compra`='ME-1' HAVING suma<0}//cierre del la funcion
  ////////////VERIFICAR LA ITEMS DE COMPRA PARA CAMBIAR EL ESTADO DE LACOMPRA
    $sql7="SELECT cant_ingreso from detalle_compras WHERE cant_ingreso>0  AND numero_compra=?;";
    $sql7=$conectar->prepare($sql7);
    $sql7->bindValue(1,$numero_compra);
    $sql7->execute();
    $resultado_count = $sql7->fetchAll(PDO::FETCH_ASSOC);

    if(is_array($resultado_count)==true and count($resultado_count)>0) {                     
      $sql8 = "update compras set estado=1 where numero_compra=?";
      $sql8 = $conectar->prepare($sql8);
      $sql8->bindValue(1,$numero_compra);
      $sql8->execute();
    }elseif (is_array($resultado_count)==true and count($resultado_count)==0) {
      $sql9 = "update compras set estado=2 where numero_compra=?";
      $sql9 = $conectar->prepare($sql9);
      $sql9->bindValue(1,$numero_compra);
      $sql9->execute();
    } 
//////////////////////REGISTRA DETALLE DE INGRESO
    //$numero_ing='0';
    $sql12="insert into ingresos values (null,?,?,?,?);";
    $sql12=$conectar->prepare($sql12);
    //$sql12->bindValue(1,$id_ingresos);
    $sql12->bindValue(1,$numero_ingreso);
    $sql12->bindValue(2,$usuario);
    $sql12->bindValue(3,$fecha_ingreso);
    $sql12->bindValue(4,$sucursal_i);
    $sql12->execute();
}


///////////////////get reporte ingresos a bodega
public function get_reporte_ingreso_bodega($numero_ingreso){
    $conectar= parent::conexion();         
    $sql= "select*from detalle_ingresos WHERE numero_ingreso=?";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1,$numero_ingreso);
    $sql->execute();
    return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
}
}