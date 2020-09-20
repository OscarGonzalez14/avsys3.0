<?php
require_once("config/conexion.php");
if(isset($_SESSION["usuario"])){ 
require_once('header.php');
require_once('modals/nuevo_lente.php');
require_once('modals/nuevo_antireflejante.php');
require_once('modals/nuevo_photosensible.php');
 ?>


<div class="content-wrapper" >  <!-- Inicio de content wraper -->
  <!-- Button to Open the Modals -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevo_photo"><i class="fas fa-plus-square"></i> NUEVO PHOTOSENSIBLE</button>&nbsp;
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevo_anti"><i class="fas fa-plus-square"></i> NUEVO ANTIREFLEJANTE</button>&nbsp;
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevo_lente"><i class="fas fa-plus-square"></i> NUEVO LENTE</button>&nbsp;








</div> <!-- Fin content wraper -->
<script src="js/productos.js"></script>
<?php } else{
echo "Acceso no permitido";
header("Location:index.php");
        exit();
  } ?>