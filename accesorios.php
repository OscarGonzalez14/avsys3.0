<?php
 require_once("config/conexion.php");
if(isset($_SESSION["usuario"])){ 
require_once('header.php');
require_once('modals/nuevo_accesorio.php'); 
?>

<div class="content-wrapper" >
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#accesorios_save" data-backdrop="static" data-keyboard="false" style="margin:8px;background: black;border-radius:0px;border: 0px;">
  	CREAR ACCESORIOS
  </button>
</div>

<script src="js/productos.js"></script>
   <?php } else{
echo "Acceso denegado";
  } ?>