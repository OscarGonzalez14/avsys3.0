 <style>
    #photo{
      max-width: 65% !important;
      margin: auto;
    }
    #head{
        background-color: black !important;
        color: white;
        text-align: center;
    }

    .modal-dialog{
      margin: auto;
    }

</style>
  
  <!-- The Modal -->
<div class="modal fade bd-example-modal-lg" role="dialog" id="nuevo_photo">
  <div class="modal-dialog" id="photo">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header bg-info" id="head" style="justify-content:space-between">
       <span><i class="fas fa-plus-square"></i> CREAR NUEVO PHOTOSENSIBLE</span>
        <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
     </div>

      <!-- Modal body -->
      <div class="modal-body">
       <div class="form-row">
      <div class="form-group col-md-9">
              <label>Descripción</label>
              <input type="text" class="form-control" name="" placeholder="Descripción de photosensible" id="describe">
          </div>
          <div class="form-group col-md-3">
              <label>Precio $</label>
                <div class="input-group">
                  <input type="number" class="form-control" name="precio" placeholder="" id="precio" >
              </div>
          </div>
          <input type="hidden" value="photosensibles" name="" id="cat_prod">
      </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal" onClick="guardarPhotosensible();"><i class="fas fa-save"></i>Guardar</button>
      </div>

    </div>
  </div>
</div>

<script>

</script>