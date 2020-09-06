<?php
  require_once("../config/conexion.php");
  require_once("../modelos/Pacientes.php");
      //llamo al modelo Ventas
  //require_once("../modelos/Ventas.php");  
  $pacientes = new Paciente();
    switch($_GET["op"]){

    case "guardar_paciente":
		$pacientes->registrar_paciente($_POST["codigo_paciente"],$_POST["nombres"],$_POST["telefono"],$_POST["edad"],$_POST["ocupacion"],$_POST["sucursal"],$_POST["dui"],$_POST["correo"],$_POST["usuario"],$_POST["empresa"],$_POST["nit"],$_POST["tel_oficina"],$_POST["direccion_completa"],$_POST["tipo_paciente"],$_POST["fecha"]);	  
    break;
}