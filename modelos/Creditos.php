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


    /////////////GET DATOS DE PACIENTE PARA MODAL GENERICA DE CREDITOS
    public function get_data_paciente_abonos($id_paciente,$id_credito,$numero_venta){
        $conectar=parent::conexion();
        parent::set_names();

        $sql="select c.id_paciente,c.numero_venta,c.id_credito,c.monto,c.saldo,v.paciente,v.evaluado,p.telefono,p.empresas
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

	}/////FIN CLASS

 ?>