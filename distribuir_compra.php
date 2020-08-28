<?php 
require_once('header.php');
$n_compra =$_GET["numero_compra"];
require_once('modals/modal_ingreso_bodega.php');
?>
<input type="hidden" name="" id="numero_compra_bod" value="<?php echo $n_compra; ?>">
<div class="content-wrapper">
<div style="margin: 5px">
    <h5 align="center"><strong>DISTRIBUIR COMPRAS A BODEGA</strong></h5>
    <div class="callout callout-dark">
	<div class="row" style="margin: 0px;padding: 0px">
		<div class="callout callout-danger col-sm-3">
            <span><strong>No. Compra:</strong></span><span id="numero_compra_i"><?php echo $n_compra; ?></span>
        </div>
        <div class="col-sm-1"></div>
        <div class="callout callout-success col-sm-3">
            <span><strong>Fecha:</strong> </span><span id=""><?php date_default_timezone_set('America/El_Salvador'); $hoy = date("d-m-Y H:i:s"); echo $hoy;?></span>
        </div>
        <div class="col-sm-1"></div>        
        <div class="callout callout-info col-sm-3">
            <span><strong>Sucursal: </strong> </span><span id="sucursal_i">Metrocentro</span>
        </div>
	</div>
	</div>
	 <div style="margin:2px;" class="row">
      <div class="col-sm-4">
       <a class="btn btn-dark" style="color:white;border-radius:3px; background:black" data-backdrop="static" data-keyboard="false" onClick="ingresar_compras_bodega();"><i class="fas fa-cubes"></i> Seleccionar Producto</a></div>
       <div class="col-sm-5">
       <select class='form-control' id="categoria_ubicacion"><option value="">Seleccione Categoría/Ubicación</option><option value='Gaveta1'>Gaveta 1</option><option value='Gaveta 2'>Gaveta 2</option><option value='Gaveta 3'>Gaveta 3</option><option value='Gaveta 4'>Gaveta 4</option><option value='Gaveta 5'>Gaveta 5</option></select>
       </div>
     </div>
        <div class="card" style="margin-top:10px">
              <!-- /.card-header -->
              <div class="card-body p-0 table-responsive">
                <table class="table table-striped">
                  <thead style="background:black;color:white">
                    <tr>
                      <th style="text-align:center" width="10%">Item</th>
                      <th style="text-align:center" width="20%">Orden</th>
                      <th style="text-align:center" width="55%">Descripción</th>
                      <th style="text-align:center" width="15%">Cantidad</th>
                    </tr>
                  </thead>
                  <tbody id="listar_productos_de_ingreso" style="width: 100%"></tbody>                    
                     
                </table>
                <?php date_default_timezone_set('America/El_Salvador'); $hoy = date("d-m-Y H:i:s");?>
                <input type="hidden" id="usuario" value="oscar">
                <input type="hidden" id="fecha_ingreso" value="<?php echo $hoy;?>">
                <button class="btn btn-primary btn-block" style="border-radius:2px" onClick='registrarIngresoBodega();' onmouseover="get_numero_recibo();"><i class="fas fa-download"></i> INGRESAR A INVENTARIO</button>
              </div>
              <!-- /.card-body -->
            </div>

</div>
</div>
<script src='js/compras.js'></script>
<script src='js/bodegas.js'></script>