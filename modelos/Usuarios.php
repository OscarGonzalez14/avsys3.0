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
        header("Location:compras.php");

      exit();
    } else {                         
    //si no existe el registro entonces le aparece un mensaje
    header("Location:index.php?m=1");
    exit();
    } 
  }//cierre del else
  }//condicion enviar
}///FIN FUNCION LOGIN



//INICIO DE FUNCIÓN REGISTRAR USUARIO
public function registrarUsuario($nom_usuario,$tel_usuario,$correo_usuario,$dir_usuario,$usuario,$pass_usuario,$fecha_ingreso,$cat_usuario,$est_usuario){

    $conectar= parent::conexion();
    parent::set_names();
    $sql="insert into usuarios values(null,?,?,?,?,?,?,?,?,?);";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1, $nom_usuario);
    $sql->bindValue(2, $tel_usuario);
    $sql->bindValue(3, $correo_usuario);
    $sql->bindValue(4, $dir_usuario);
    $sql->bindValue(5, $usuario);
    $sql->bindValue(6, $pass_usuario);
    $sql->bindValue(7, $fecha_ingreso);
    $sql->bindValue(8, $cat_usuario);
    $sql->bindValue(9, $est_usuario);
    
    $sql->execute();

    print_r($_POST);
  }

//FIN FUNCION REGISTRAR USUARIO

}
