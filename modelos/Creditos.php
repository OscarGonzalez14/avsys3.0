<?php 
require_once("../config/conexion.php");

	class Creditos extends conectar{
	
	public function get_creditos_contado(){
    $conectar= parent::conexion();
    $sql= "select c.numero_venta,p.nombres,c.monto,c.saldo,p.id_paciente,c.id_credito from creditos as c inner join pacientes as p on c.id_paciente=p.id_paciente
        where c.tipo_credito='Contado' order by c.id_credito DESC;";
    $sql=$conectar->prepare($sql);
    $sql->execute();
    return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    }

	}/////FIN CLASS

 ?>