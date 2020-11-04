<style>
    #tamModal_traslados{
      width: 50% !important;
    }
     #head_traslados{
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

<div class="modal fade bd-example-modal-lg" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modalTraslados" style="border-radius:0px !important;">
  <div class="modal-dialog modal-lg" role="document" id="tamModal_traslados">

    <div class="modal-content">
     <div class="modal-header" id="head_traslados" style="justify-content:space-between">
       <span><i class="fas fa-plus-square"></i> PRODUCTOS A TRASLADOS</span>
        <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
     </div>

              <div class="card-body p-0" style="margin:7px">
                <table class="table display nowrap" id="data_items_traslados" width="100%">
                  <thead style="background:#034f84;color:white">
                    <tr>
                      <th style="text-align:center">Descripción</th>
                      <th style="text-align:center">Ubicación</th>
                      <th style="text-align:center">Sucursal</th>
                      <th style="text-align:center">Agregar</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center">
                                        
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
  
    </div><!--Fin modal Content-->

  </div>
</div>
<script type="">
  $(function() {
    $("div.dataTables_filter input").focus();
});

</script>