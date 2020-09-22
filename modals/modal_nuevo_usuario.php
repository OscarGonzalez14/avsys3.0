<?php date_default_timezone_set('America/El_Salvador'); $hoy = date("d-m-Y H:i:s");?>

<style>
  #tamModal{
    width: 70% !important;
  }
  #head{
    background-color: black;
    color: white;
    text-align: center;
  }
</style>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelleddy="myLargeModalLabel" id="nuevo_usuario" style="border-radius:0px !important;">
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
          <input type="text" class="form-control" id="nom_user" name="" onkeyup="mayus(this);">
        </div>
        <div class="form-group col-md-4">
          <label>Teléfono</label>
          <input type="text" class="form-control" id="tel_user" name="telefono" required pattern='^[0-9]+'>
        </div>
        <div class="form-group col-md-7">
          <label>Dirección</label>
          <input type="text" class="form-control" id="dir_user" name="" onkeyup="mayus(this);">
        </div>
        <div class="form-group col-md-5">
          <label>Correo</label>
          <input type="text" class="form-control" id="correo_user" name="">
        </div>
        <div class="form-group col-md-4">
          <label>Usuario</label>
          <input type="text" class="form-control" id="user" name="" >
        </div>
        <div class="form-group col-md-4">
          <label>Contraseña</label>
          <input type="text" class="form-control" id="pass_user" name="" onkeyup="mayus(this);">
        </div>
        
        <div class="form-group col-md-4">
          <label>Categoría</label>
           <select name="Categorias" class="form-control" id="cat_user">
                    <option value="">Seleccione...</option>
                    <option value="administrador">ADMINISTRADOR</option>
                    <option value="optometra">OPTÓMETRA</option>
                    <option value="asesor">ASESOR</option>
            </select>
        </div>
        <div class="form-group col-md-6">
          <label>Estado</label>
            <select name="Estado" class="form-control" id="est_user">
                    <option value="">Seleccione...</option>
                    <option value="1">ACTIVO</option>
                    <option value="0">INACTIVO</option>
            </select>
        </div>
        <div class="form-group col-md-6">
          <label>Sucursal</label>
            <select name="Estado" class="form-control" id="suc_user">
                    <option value="">Seleccione...</option>
                    <option value="metrocentro">METROCENTRO</option>
                    <option value="san miguel">SAN MIGUEL</option>
                    <option value="santa ana">SANTA ANA</option>
            </select>
        </div>
        <input type="hidden" class="form-control" id="fecha_ingreso" name="" value=" <?php echo $hoy;?>">

      </div>
    <!-- Modal footer -->
            <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-block" data-dismiss="modal" onClick="guardarUsuario();"><i class="fas fa-save"></i> Guardar</button>
            </div>
        </section>
      </div>
  </div>
</div>

         

