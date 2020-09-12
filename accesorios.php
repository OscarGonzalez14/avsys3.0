<?php
 require_once("config/conexion.php");
if(isset($_SESSION["usuario"])){ 
require_once('header.php');
require_once('modals/nuevo_accesorio.php'); 
?>

<div class="content-wrapper" >
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#accesorios_save">
  	GUARDAR ACCESORIOS
  </button>
</div>

<script src="js/accesorios.js"></script>
   <?php } else{
echo "Acceso denegado";
  } ?>