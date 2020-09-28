<style>
    #tamModal_det_abonos{
      max-width: 80% !important;
    }
     #head_det_abonos{
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

<div class="modal fade bd-example-modal-lg" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="detalle_abonos" style="border-radius:0px !important;">
  <div class="modal-dialog modal-lg" role="document" id="tamModal_det_abonos">

    <div class="modal-content">
     <div class="modal-header" id="head_det_abonos" style="justify-content:space-between">
       <span><i class="fas fa-plus-square"></i> DETALLE DE ABONO</span>
        <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
     </div>

          <div class="card-body p-0" style="margin:7px">
            <table id="lista_det_abonos" width="100%" class ="table-hover">
              <thead style="background:#034f84;color:white;text-align: right;">
                <tr>
                <th>Fecha Abono</th>
                <th>Paciente</th>
                <th>Empresa</th>
                <th>Recibió</th>
                <th>Sucursal</th>
                <th>No. Recibo</th>
                <th>Monto</th> 
                </tr>
              </thead>
              <tbody style="text-align:center">                                  
              </tbody>
            </table>
          </div>
    </div><!--Fin modal Content-->

  </div>
</div>
