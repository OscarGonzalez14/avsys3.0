  <style >
    #tanModal{
      width: 60% !important;
    }
    #head{
      background-color: black;
      color: white;
      text-align: center;
    }
    .modal-dialog {
      height: 75vh;
      display: flex;
      align-items: center;
    }
    
  </style>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelleddy="myLargeModalLabel" aria-hidden="true" id="newUsuario" style="border-radius:0px !important;">
<div class="modal-dialog modal-lg" role="document" id="tamModal">
   <div class="modal-content">
      <!--cabecera de modal-->
      <div class="modal-header" id="head" style="justify-content: space-between;">
      <span><i class="fas fa-plus-square"></i> NUEVO USUARIO</span>
      <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
      </div>
      <!--cuerpo de la modad-->
      <section style="margin:15px">
         <div class="form-row" >
            <div class="form-group col-md-8">
            <label>Nombre</label>
            <input type="text" class="form-control" id="nomUsuario" placeholder="Escriba nombre"  required="">
            </div>
            <div class="form-group col-md-4">
            <label>Teléfono</label>
            <input type="text" class="form-control" id="telUsuario" placeholder="Teléfono"  required="" >
            </div>
            <div class="form-group col-md-5">
            <label>E-mail</label>
            <input type="text" class="form-control" id="correoUsuario" placeholder="E-mail"  required="">
            </div>
            <div class="form-group col-md-7">
            <label>Dirección</label>
            <input type="text" class="form-control" id="dirUsuario" placeholder="Escriba Dirección"  required="" >
            </div>
            <div class="form-group col-md-3">
            <label>Usuario</label>
            <input type="text" class="form-control" id="usuario" placeholder="Nombre de usuario"  required="" >
            </div>
            <div class="form-group col-md-3">
            <label>Contraseña</label>
            <input type="text" class="form-control" id="passUsuario" placeholder="Contraseña"  required=""  >
            </div>
            <div class="form-group col-md-3">
            <label>Categoría</label>
            <select name="Categorías" class="form-control" id="catUsuario">
               <option>Administrador</option>
               <option>Optometrista</option>
               <option>Asesor</option>
            </select>
            </div>
            <div class="form-group col-md-3">
            <label>Estado</label>
            <select name="Estado" class="form-control" id="estUsuario">
               <option>Activo</option>
               <option>Inactivo</option>
            </select>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-block" data-dismiss="modal" onClick="guardarUsuario();"><i class="fas fa-save"></i> Guardar</button>
            </div>
         </div>
      </section>
   </div>
</div>   
</div>

