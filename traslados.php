<?php 
require_once("config/conexion.php");
if(isset($_SESSION["usuario"])){
require_once('header_dos.php');
require_once('modals/modal_traslados.php');

 ?>

 <div class="content-wrapper">
  <div style="margin:2px">
  <div class="callout callout-info">
        <h4 align="center"><i class="fas fa-exchange-alt" style="color:green"></i> <strong>TRASLADOS</strong></h4>              
    </div>

    <div class="row" style="margin: 3px">
    <div class="form-group col-md-3">
      <label for="inputPassword4">Tipo traslado</label>
      <select class="form-control" id="tipo_traslado" required="">
        <option value="">Seleccionar Traslado....</option>
        <option value="Completo">Interno</option>
        <option value="Semi-Aereo">Sucursal</option>
      </select>
    </div>

    <div class="col-sm-2">
       <label for="inputPassword4">Buscar Producto</label>
       <button class="btn btn-dark btn-block" id="items_traslados"><i class="fas fa-search"></i></button>
    </div>

    </div><!--FIN INVOICES-->

<table class="table-hover table-striped" id="tabla_det_traslados" width="100%">
    <thead class="bg-info">
      <tr>
        <th style="text-align:center" width="10%">Item</th>
        <th style="text-align:center" width="40%">Descripción</th>
        <th style="text-align:center" width="10%">Cantidad</th>
        <th style="text-align:center" width="10%">Ub. Origen</th>
        <th style="text-align:center" width="10%">Ub. Destino</th>
        <th style="text-align:center" width="10%">Quitar</th>
      </tr>
    </thead>
    <tbody id="listar_det_traslados" style="width: 100%;text-align: center;"></tbody>               
                 
</table>
  

  </div>
</div>
<input type="hidden" name="sucursal" id="sucursal" value="<?php echo $_SESSION["sucursal"];?>"/>

<?php require_once("footer.php");?>
<script type="text/javascript" src="js/productos.js"></script>
<script type="text/javascript" src="js/bodegas.js"></script>
 <?php } else{
echo "Acceso no permitido";
  } ?>