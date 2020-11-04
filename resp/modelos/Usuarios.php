<?php
require_once("config/conexion.php");

class Usuarios extends Conectar{
public function login(){
  $conectar=parent::conexion();
  parent::set_names();
  if(isset($_POST["enviar"])){
//********VALIDACIONES  DE ACCESO*****************
  $password = $_POST["password"];
  $usuario = $_POST["usuario"];
  $sucursal = $_POST["sucursal"];

  if(empty($usuario) or empty($password) or empty($sucursal)){
      header("Location:index.php?m=2");
      exit();
    }else {
      
      $sql= "select * from usuarios where usuario=? and password=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $usuario);
        $sql->bindValue(2, $password);
        $sql->execute();
        $resultado = $sql->fetch();

    if(is_array($resultado) and count($resultado)>0){
        $_SESSION["id_usuario"] = $resultado["id_usuario"];           
        $_SESSION["usuario"] = $resultado["usuario"];
        $_SESSION["sucursal"] = $sucursal;
        header("Location:pacientes.php");

      exit();
    } else {                         
    //si no existe el registro entonces le aparece un mensaje
    header("Location:index.php?m=1");
    exit();
    } 
  }//cierre del else
  }//condicion enviar
}///FIN FUNCION LOGIN


}

?>
