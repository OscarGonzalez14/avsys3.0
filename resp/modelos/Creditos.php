<?php 
require_once("../config/conexion.php");

	class Creditos extends conectar{
	
	public function get_creditos_contado($sucursal){
    $conectar= parent::conexion();
    $sql= "select c.numero_venta,p.nombres,c.monto,c.saldo,p.id_paciente,c.id_credito,v.evaluado
from creditos as c inner join pacientes as p on c.id_paciente=p.id_paciente inner join ventas as v on c.numero_venta=v.numero_venta
where c.tipo_credito='Contado' and p.sucursal=? order by c.id_credito DESC;";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1,$sucursal);
    $sql->execute();
    return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    }

/////////////////////////LISTAR CREDITOS DE CARGO AUTOMATICO
    public function get_creditos_cauto($sucursal){
    $conectar= parent::conexion();
    $sql= "select c.numero_venta,p.nombres,p.empresas,c.monto,c.saldo,p.id_paciente,c.id_credito,v.evaluado
        from creditos as c inner join pacientes as p on c.id_paciente=p.id_paciente inner join ventas as v on c.numero_venta=v.numero_venta
        where c.forma_pago='Cargo Automatico' and p.sucursal=? order by c.id_credito DESC;;";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1,$sucursal);
    $sql->execute();
    return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    }
//////////////////////LISTAR CREDITOS DE DESCUENTO EN PLANILLA
    public function get_creditos_oid($sucursal,$empresa){
    $conectar= parent::conexion();
    $sql= "select c.numero_venta,p.nombres,p.empresas,c.monto,c.saldo,p.id_paciente,c.id_credito,v.evaluado
        from creditos as c inner join pacientes as p on c.id_paciente=p.id_paciente inner join ventas as v on c.numero_venta=v.numero_venta
        where c.forma_pago='Descuento en Planilla' and p.sucursal=? and p.empresas=? order by c.id_credito DESC;";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1,$sucursal);
    $sql->bindValue(2,$empresa);
    $sql->execute();
    return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    }


    /////////////GET DATOS DE PACIENTE PARA MODAL GENERICA DE CREDITOS
    public function get_data_paciente_abonos($id_paciente,$id_credito,$numero_venta){
        $conectar=parent::conexion();
        parent::set_names();

        $sql="select c.id_paciente,c.monto/c.plazo as cuotas,c.numero_venta,c.id_credito,c.monto,c.saldo,v.paciente,v.evaluado,p.telefono,p.empresas
        from creditos as c inner join ventas as v on c.numero_venta=v.numero_venta inner join pacientes as p on p.id_paciente=c.id_paciente where c.id_paciente=? and v.numero_venta=?
        and c.numero_venta=? and c.id_paciente=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $id_paciente);
        $sql->bindValue(2, $numero_venta);
        $sql->bindValue(3, $numero_venta);
        $sql->bindValue(4, $id_paciente);
        $sql->execute();
        return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);

    }

        public function get_abono_ant($id_paciente,$numero_venta){
        $conectar=parent::conexion();
        parent::set_names();

        $sql="select monto_abono from abonos where numero_venta=? and id_paciente=? order by id_abono DESC limit 1";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $numero_venta);
        $sql->bindValue(2, $id_paciente);
        $sql->execute();
        return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);

    }

    //////LISTAR DETALLE DE ABONOS
     public function get_detalle_abonos($id_paciente,$numero_venta){
    $conectar= parent::conexion();
    $sql= "SELECT a.fecha_abono,a.forma_pago,a.n_recibo,a.monto_abono,a.sucursal,u.usuario,c.monto,p.nombres,p.empresas from abonos as a inner join creditos as c on c.numero_venta=a.numero_venta inner join usuarios as u on a.id_usuario=u.id_usuario inner join pacientes as p on p.id_paciente=a.id_paciente where a.id_paciente=? and a.numero_venta=?;";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1, $id_paciente);
    $sql->bindValue(2, $numero_venta);
    $sql->execute();
    return $resultado=$sql->fetchAll();
    }

    //////////////GET DATOS DE PACIENTE DE MODAL ABONOS
    public function get_datos_abonos($id_paciente,$numero_venta){
    $conectar=parent::conexion();
    parent::set_names();

    $sql="select c.monto,sum(a.monto_abono) as abonado,p.nombres,c.monto-(sum(a.monto_abono)) as saldo
        from creditos as c inner join abonos as a on c.numero_venta=a.numero_venta inner join
        pacientes as p on c.id_paciente=p.id_paciente where a.id_paciente=? and a.numero_venta=?;";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1, $id_paciente);
    $sql->bindValue(2, $numero_venta);
    $sql->execute();
    return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);

    }

    public function get_creditos_automaticos(){
    $conectar= parent::conexion();
    $sql= "select c.numero_venta,p.nombres,c.monto,c.saldo,p.id_paciente,c.id_credito,v.evaluado from creditos as c inner join pacientes as p on c.id_paciente=p.id_paciente inner join ventas as v on c.numero_venta=v.numero_venta where c.forma_pago='Cargo Automatico' and p.sucursal='Metrocentro' order by c.id_credito DESC;";
    $sql=$conectar->prepare($sql);
   // $sql->bindValue(1,$sucursal);
    $sql->execute();
    return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    }


	}/////FIN CLASS

 ?>