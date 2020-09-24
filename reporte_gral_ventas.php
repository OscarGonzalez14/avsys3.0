<?php
require_once("config/conexion.php");
if(isset($_SESSION["usuario"])){ 
require_once('header.php');
?>

<div class="content-wrapper">
  <div class="content" id="listar_reporte_ventas">

    <div class="header" style="padding:7px;">
        <h2 class="card-title" align="center"><strong> REPORTE GENERAL DE VENTAS </strong></h2>
        <div>
         <ul class="breadcrumb float-sm-right" style="background-color:transparent;padding:0px;">
         <li class="breadcrumb-item"><a href="ventas.php">Regresar</a></li>
         <li class="breadcrumb-item active">Reporte</li>
         </ul>
        </div>
    </div><br>
    <div class="card-body p-0" style="margin:7px">
      <table id="lista_reporte_ventas_data" width="100%" class = "table-hover">
        <thead style="background:#034f84;color:white;text-align: center;">
          <tr>
          <th>#Venta</th>
          <th>Asesor</th>
          <th>Fecha</th>
          <th>Monto Total</th>
          <th>Paciente</th>
          <th>Detalle</th>
          </tr>
        </thead>
        <tbody style="text-align:center">                                  
        </tbody>
      </table>
    </div>
 
  </div>
</div>

<script src="js/ventas.js"> </script>

   <?php } else{
echo "Acceso no permitido";
  } ?>

 
