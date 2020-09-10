<?php

require_once("../config/conexion.php");

class Paciente extends Conectar{

    ////////////GET NUMERO DE PACIENTE POR SUCURSAL
    public function get_numero_paciente($sucursal_correlativo){
        $conectar= parent::conexion();
        $sql= "select codigo from pacientes where sucursal=? order by id_paciente DESC limit 1;";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $sucursal_correlativo);
        $sql->execute();
        return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    }


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

//////////////////VALIDAR SI EXISTE PACIENTE
public function validar_codigo_paciente($codigo_paciente){
    $conectar= parent::conexion();
    $sql= "select*from pacientes where codigo=?;";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1,$codigo_paciente);
   // $sql->bindValue(2,$dui);
    $sql->execute();
    return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    }
//////////////////////****************
    public function validar_dui_paciente($dui){
    $conectar= parent::conexion();
    $sql= "select*from pacientes where dui=?;";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1,$dui);
   // $sql->bindValue(2,$dui);
    $sql->execute();
    return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    }

//////////////LISTAR PACIENTES
public function get_pacientes($sucursal_paciente){
    $conectar= parent::conexion();
    $sql= "select*from pacientes where sucursal=? order by id_paciente DESC;";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1,$sucursal_paciente);
    $sql->execute();
    return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    }

 public function get_paciente_por_id($id_paciente){
    $conectar= parent::conexion();
    $sql="select id_paciente,nombres from pacientes where id_paciente=?";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1, $id_paciente);
    $sql->execute();

    return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);

  }
}