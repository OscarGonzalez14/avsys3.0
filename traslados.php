<?php 
require_once("config/conexion.php");
if(isset($_SESSION["usuario"])){
require_once('header_dos.php');
 ?>

 <div class="content-wrapper">
 	<div style="margin:2px">
 	<div class="callout callout-info">
        <h4 align="center"><i class="fas fa-exchange-alt" style="color:green"></i> <strong> TRASLADOS</strong></h4>              
    </div>

    <div class="invoice p-3 mb-3">
    <div class="form-group col-md-5">
      <label for="inputPassword4">Traslado</label>
      <select class="form-control" id="traslado" required="">
        <option value="">Seleccionar Traslado</option>
        <option value="Completo">Interno</option>
        <option value="Semi-Aereo">Sucursal</option>
      </select>
    </div>
    </div>
 	

	</div>
</div>
<?php require_once("footer.php");?>
 <?php } else{
echo "Acceso no permitido";
  } ?>