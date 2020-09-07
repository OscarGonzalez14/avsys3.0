<?php
require_once('modelos/Externos.php');
$marca = new Externos();
$marcas=$marca->get_marca();
?>
<style>
	#tamModal{
		width: 60% !important;
	}
	#head{
		background-color: black;
		color: white;
		text-align: center;
	}
</style>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelleddy="myLargeModalLabel" id="accesorios_save" style="border-radius:0px !important;">
	<div class="modal-dialog modal-lg" role="document" id="tamModal">
		<div class="modal-content">

		<!--cabecera de la modal  guardar accesorio-->		
		<div class="modal-header" id="head" style="justify-content: space-between;">
		<span><i class="fas fa-plus-square"></i> GUARDAR ACCESORIOS</span>
      	<button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>	
		</div>
	
		<!-- cuerpo de la modal guardar accesorio-->
		<section style="margin:15px">
			<div class="form-row">
				
				<div class="form-group col-md-6">
					<label>Tipo accesorio</label>
					<select class="form-control" id="tipo_accesorio">
						<option>Estuches</option>
						<option>Franelas</option>
						<option>Spray de limpieza</option>
						<option>Lentes de contacto</option>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label>Marca</label>
					<select class="form-control" id="marca_accesorio">
						<option>Seleccione marca</option>
        				<?php 
      						for ($i=0; $i < sizeof($marcas); $i++) {  ?>
       						 <option value="<?php echo($marcas[$i]["marca"]) ?>"><?php echo $marcas[$i]["marca"]?></option>
        				<?php } ?>
     
					</select>
				</div>
				<div class="form-group col-md-12">
					<label>Descripción</label>
					<input type="text" class="form-control" name="" id="des_accesorio">
				</div>
				<div class="form-group col-md-6">
					<input type="hidden" class="form-control" name="">
				</div>
			</div>

			<!-- pie modal guardar accesorios -->
            <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-block" data-dismiss="modal" onClick="guardar_accesorios();"><i class="fas fa-save"></i> Guardar</button>
            </div>
        </section>
    	</div>
	</div>
</div>
		
	
