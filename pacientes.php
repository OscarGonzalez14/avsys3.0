<?php 
require_once("config/conexion.php");
if(isset($_SESSION["usuario"])){ 
require_once('header.php');
?>
<div class="content-wrapper">        
        <!-- Main content -->
<section class="content">
  <input type="hidden" id="sucursal_paciente" value="<?php echo $_SESSION["sucursal"];?>">
  <div id="resultados_ajax"></div>
  <h3 align="center">PACIENTES <span style="text-transform: uppercase;"><?php echo $_SESSION["sucursal"];?></span></h3>

<div class="row">
  <div class="col-sm-2">
  <button type="button" class="btn btn-block btn-outline-primary btn-flat"><i class="fas fas fa-user-plus"></i> Agregar Paciente</button>
  </div>
</div>
</div><!-- /.content-wrapper -->
  <?php } else{
echo "Acceso denegado";
  } ?>