<style>
    #tamModal_ingreso{
      max-width: 80% !important;
    }
     #head_ingreso{
        background-color: black;
        color: white;
        text-align: center;
    }
    .input-dark{
      border: solid 1px black;
      border-radius: 0px;
    }
    .input-dark{
      border: solid 1px black;
    }
</style>

<div class="modal fade bd-example-modal-lg" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal_ingreso_bodega" style="border-radius:0px !important;">
  <div class="modal-dialog modal-lg" role="document" id="tamModal_ingreso">

    <div class="modal-content">
     <div class="modal-header" id="head_ingreso" style="justify-content:space-between">
       <span><i class="fas fa-plus-square"></i> Igresos a bodega</span>
        <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
     </div>

    
                <table class="table" id="data_productos_ingresos_bodega" width="100%">
                  <thead style="background:#034f84;color:white">
                    <tr>
                      <th style="text-align:center">ID</th>
                      <th style="text-align:center"># Compra</th>
                      <th style="text-align:center">Descripción</th>
                      <th style="text-align:center">Cantidad disponible</th>
                      <th style="text-align:center">Agregar</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center">
                                        
                  </tbody>
                </table>

  <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Agregar</button>
      </div>
    </div><!--Fin modal Content-->

  </div>
</div>
