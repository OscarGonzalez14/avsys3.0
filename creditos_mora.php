<?php 
require_once("config/conexion.php");
if(isset($_SESSION["usuario"])){
require_once('header_dos.php');
require_once("modals/modal_detalle_abonos.php");

 ?>

 <div class="content-wrapper">
  <div style="margin:2px">
  <div class="callout callout-info">
    <div class="col-sm-10">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="creditos.php">Regresar</a></li>
              <li class="breadcrumb-item" class="bg-primary" class="cat_creditos" ><a class="bg-warning cat_creditos" style="background:#FF7F50;padding: 5px;border-radius: 8px" name="cat_b">Categoría B</a></li>
              <li class="breadcrumb-item" class="bg-primary" class=""><a class="bg-danger cat_creditos" style="background:#8B0000;padding: 5px;border-radius: 8px" name="cat_c">Categoría C</a></li>
              
            </ol>
        <h4 align="center"><i class="fas fa-business-time" style="color:green"></i> <strong>CREDITOS EN MORA</strong></h4>              
    </div>
  </div><!--FIN INVOICES-->

<table class="table-hover table-striped" id="cats_creditos" width="100%">
    <thead class="bg-info">
      <tr>
        <th style="text-align:center">Paciente</th>
        <th style="text-align:center">Empresa</th>
        <th style="text-align:center">#Venta</th>
        <th style="text-align:center">Monto Crédito</th>
        <th style="text-align:center">Saldo</th>
        <th style="text-align:center">Ultimo abono</th>
        <th style="text-align:center">Fecha de Abono</th>
        <th style="text-align:center">Dias retraso</th>
        <th style="text-align:center">Historial</th>
        <th style="text-align:center">Info</th>
      </tr>
    </thead>
    <tbody id="listar_det_traslados" style="width: 100%;text-align: center;"></tbody>          
</table>
</div>
</div>

<input type="hidden" name="sucursal" id="sucursal" value="<?php echo $_SESSION["sucursal"];?>"/>
<input type="hidden" name="usuario" id="usuario" value="<?php echo $_SESSION["id_usuario"];?>"/>
<?php date_default_timezone_set('America/El_Salvador'); $hoy = date("d-m-Y H:i:s");?>
<input type="hidden" id="fecha" value="<?php echo $hoy;?>">

<?php require_once("footer.php");?>
<script type="text/javascript" src="js/productos.js"></script>
<script type="text/javascript" src="js/creditos.js"></script>
 <?php } else{
echo "Acceso no permitido";
  } ?>