<?php date_default_timezone_set('America/El_Salvador'); $hoy = date("d-m-Y H:i:s");?>

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
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelleddy="myLargeModalLabel" id="new_user" style="border-radius:0px !important;">
	<div class="modal-dialog modal-lg" role="document" id="tamModal">
		<div class="modal-content">

		<div class="modal-header" id="head" style="justify-content: space-between;">
		<span><i class="fas fa-plus-square"></i> NUEVO USUARIO</span>
      	<button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>	
		</div>
	
		<!-- cuerpo de la modal de usuario-->
		<section style="margin:15px">
			<div class="form-row">
				
				<div class="form-group col-md-8">
					<label>Nombre</label>
					<input type="text" class="form-control" id="nom_user" name="">
				</div>
				<div class="form-group col-md-4">
					<label>Usuario</label>
					<input type="text" class="form-control" id="user" name="">
				</div>
				<div class="form-group col-md-4">
					<label>Telefono</label>
					<input type="text" class="form-control" id="tel_user" name="">
				</div>
				<div class="form-group col-md-4">
					<label>Correo</label>
					<input type="text" class="form-control" id="correo_user" name="">
				</div>
				<div class="form-group col-md-4">
					<label>Dirección</label>
					<input type="text" class="form-control" id="dir_user" name="">
				</div>
				<div class="form-group col-md-4">
					<label>Contraseña</label>
					<input type="text" class="form-control" id="pass_user" name="">
				</div>
				
				<div class="form-group col-md-4">
					<label>Categoría</label>
					 <select name="Categorias" class="form-control" id="cat_user">
              		 	<option>Administrador</option>
               			<option>Optometrista</option>
              		 	<option>Asesor</option>
           			 </select>
				</div>
				<div class="form-group col-md-4">
					<label>Estado</label>
					<select name="Estado" class="form-control" id="est_user">
               			<option>Activo</option>
               			<option>Inactivo</option>
           			 </select>
				</div>

			</div>
		<!-- Modal footer -->
            <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-block" data-dismiss="modal" onClick="guardar_user();"><i class="fas fa-save"></i> Guardar</button>
            </div>
        </section>
    	</div>
	</div>
</div>
<div class="form-group col-md-4">
					<label>Fecha de ingreso</label>
					<input type="hidden" class="form-control" id="ingreso_user" name="" value=" <?php echo $hoy;?>">
				</div>