<?php
 require_once("config/conexion.php");
if(isset($_SESSION["usuario"])){ 
require_once('header.php');
require_once('modals/nuevo_accesorio.php'); 
?>

<div class="content-wrapper" > <!-- Inicio content wraper-->
  <!-- Button to Open the Modal -->
  <div style="margin:5px;">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#accesorios_save" data-backdrop="static" data-keyboard="false" style="margin:8px;background: black;border-radius:0px;border: 0px;"><i class="fas fa-plus"></i>
  	CREAR ACCESORIOS
  </button>
  </div>

  <div style="margin: 1px">
	<div class="callout callout-info"><i class="fas fa-plus"></i>
        <h5 align="center"><i class="fas fa-glasses" style="color:green"></i> <strong>LISTADO DE ACCESORIOS</strong></h5>              
    </div>
	<table class="table" id="data_lista_accesorios_creados" width="100%">
        <thead style="background:#034f84;color:white;max-height:10px">
          <tr>
            <th style="text-align:center">ID</th>
            <th style="text-align:center">Marca</th>
            <th style="text-align:center">Modelo</th>
            <th style="text-align:center">Categoría</th>
            <th style="text-align:center">Categoría_producto</th>
            <th style="text-align:center">Descripción</th>
            <th style="text-align:center">Eliminar</th>

          </tr>
        </thead>
        <tbody style="text-align:center">                                        
        </tbody>
      </table>   <!-- /.content -->
</div>

</div>     <!-- fin content wraper-->

<script src="js/productos.js"></script>
   <?php } else{
echo "Acceso denegado";
  } ?>

  <script>
  	function myFunction() {
  document.getElementById("eliminar").ID = "red";
}
  </script>