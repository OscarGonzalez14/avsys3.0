<?php

require_once("../config/conexion.php");

class Paciente extends Conectar{
	public function registrar_paciente($codigo_paciente,$nombres,$telefono,$edad,$ocupacion,$sucursal,$dui,$correo,$usuario,$empresa,$nit,$tel_oficina,$direccion_completa,$tipo_paciente,$fecha){

      $conectar= parent::conexion();
      parent::set_names();
      $sql="insert into pacientes values(null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
          
        $sql=$conectar->prepare($sql);

        $sql->bindValue(1, $_POST["codigo_paciente"]);
        $sql->bindValue(2, $_POST["nombres"]);
        $sql->bindValue(3, $_POST["telefono"]);
        $sql->bindValue(4, $_POST["edad"]);
        $sql->bindValue(5, $_POST["ocupacion"]);
        $sql->bindValue(6, $_POST["sucursal"]);
        $sql->bindValue(7, $_POST["dui"]);
        $sql->bindValue(8, $_POST["correo"]);
        $sql->bindValue(9, $_POST["fecha"]);
        $sql->bindValue(10, $_POST["usuario"]);
        $sql->bindValue(11, $_POST["empresa"]);
        $sql->bindValue(12, $_POST["nit"]);
        $sql->bindValue(13, $_POST["tel_oficina"]);
        $sql->bindValue(14, $_POST["direccion_completa"]);
        $sql->bindValue(15, $_POST["tipo_paciente"]);

        $sql->execute();
      
}
}