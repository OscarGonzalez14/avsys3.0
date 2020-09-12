<?php
require_once("config/conexion.php");
<<<<<<< HEAD
if(isset($_SESSION["usuario"])){
=======
>>>>>>> accesorios
require_once('header.php');
require_once('modals/empresa.php'); 
 ?>


<div class="content-wrapper" >
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newEmpresa">
  	CREAR NUEVA EMPRESA
  </button>
</div>
<<<<<<< HEAD
<script src="js/empresas.js"></script>
<?php } else{
echo "Acceso denegado";
header("Location:index.php");
        exit();
  } ?>
=======
<script src="js/empresas.js"></script>
>>>>>>> accesorios
