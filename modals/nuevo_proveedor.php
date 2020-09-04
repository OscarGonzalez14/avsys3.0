<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="newProveedor" style="border-radius:0px !important;">
  <div class="modal-dialog modal-lg" role="document" id="tamModal">

    <div class="modal-content">
     <div class="modal-header" id="head" style="justify-content:space-between">
       <span><i class="fas fa-plus-square"></i> NUEVO PROVEEDOR</span>
        <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
     </div>
  
<section style="margin:15px">
  <div class="form-row" >
     <div class="form-group col-md-2">
      <label>Código</label>
      <input type="text" class="form-control" id="codProveedor" placeholder="Código"  required="" onkeyup="mayus(this);" >
    </div>
    <div class="form-group col-md-10">
      <label>Nombre</label>
      <input type="text" class="form-control" id="nomProveedor" placeholder="Nombre del proveedor"  required="" onkeyup="mayus(this);" >
    </div>
    <div class="form-group col-md-4">
      <label>NIT</label>
      <input type="text" class="form-control" id="nitProveedor" placeholder="Número de NIT">
    </div>
    <div class="form-group col-md-4">
      <label>Teléfono</label>
      <input type="text" class="form-control" id="telProveedor" placeholder="Número Teléfonico"  required="" >
    </div>
    <div class="form-group col-md-4">
      <label>Empresa</label>
      <input type="text" class="form-control" id="empresaProveedor" placeholder="Nombre de la Empresa" onkeyup="mayus(this);" >
    </div>
  </div>
  <div class="modal-footer">
<button  type="button" class="btn btn-primary btn-block"   data-dismiss="modal" onClick="guardarProveedor();"><i class="fas fa-save" style="border-radius:0px"></i> Guardar</button>
  </div>
</section>
    </div>
  </div>
</div>