<?php
require_once("config/conexion.php");
if(isset($_SESSION["usuario"])){ 
require_once('header.php');
require_once('modals/modal_detalle_ventas.php');
?>

<div class="content-wrapper">
  <div class="content" id="listar_reporte_ventas">

    <div class="header" style="padding:7px;">
        <h2 class="card-title" align="center"><strong> REPORTE GENERAL DE VENTAS </strong></h2>
        <div>
         <ul class="breadcrumb float-sm-right" style="background-color:transparent;padding:0px;">
         <li class="breadcrumb-item"><a href="ventas.php">Nueva Venta</a></li>
         <li class="breadcrumb-item"><a href="corte_diario.php">Corte Diario</a></li>
         <li class="breadcrumb-item active">Reporte</li>
         </ul>
        </div>
    </div><br>
    <div class="card-body p-0" style="margin:7px">
      <table id="lista_reporte_ventas_data" width="100%" data-order='[[ 0, "desc" ]]'>
        <thead style="background:#034f84;color:white;text-align: center;">
          <tr>
          <th>#Venta</th>
          <th>Fecha</th>
          <th>Paciente</th>
          <th>Evaluado</th>
          <th>Tipo Pago</th>
          <th>Sucursal</th>
          <th>Monto</th>
          <th>Detalles</th>
          </tr>
        </thead>
        <tbody style="text-align:center">                                  
        </tbody>
      </table>
    </div>
 
  </div>
</div>
<input type="hidden" name="sucursal" id="sucursal" value="<?php echo $_SESSION["sucursal"];?>"/>
<script src="js/ventas.js"> </script>

   <?php } else{
echo "Acceso no permitido";
  } ?>

 
