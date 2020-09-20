<style>
    #tamModal_ultima_c_admin{
      max-width: 95% !important;
    }
     #head_rini{
        background-color:#034f84;
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

<div class="modal fade bd-example-modal-lg" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="recibo_inicial" style="border-radius:0px !important;">
  <div class="modal-dialog modal-lg" role="document" id="tamModal_ultima_c_admin">

    <div class="modal-content">
     <div class="modal-header text-center" id="head_rini">
       <h5 class="text-center" style="text-align: center" align="center"><i class="fas fa-plus-square"></i> RECIBO INICIAL</h5>
        <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
     </div>
        <div class="form-group row" style="margin:8px"><!--FORM GROUP 1-->

          <div class="input-group col-sm-2">
            <div class="input-group-prepend">
              <span class="input-group-text">#Venta</span>
            </div>
            <input type="text" class="form-control float-right" id="n_venta_recibi_ini" readonly="" style="border-radius: :0px;background:white;">
          </div>

          <div class="input-group col-sm-4">
            <div class="input-group-prepend">
              <span class="input-group-text">Recibí de: </span>
            </div>
            <input type="text" class="form-control float-right" id="n_venta_recibi_ini" readonly="" style="border-radius: :0px;background:white;">
          </div>

          <div class="input-group col-sm-2">
            <div class="input-group-prepend">
              <span class="input-group-text">Tél.: </span>
            </div>
            <input type="text" class="form-control float-right" id="n_venta_recibi_ini" readonly="" style="border-radius: :0px;background:white;">
          </div>

          <div class="input-group col-sm-4">
            <div class="input-group-prepend">
              <span class="input-group-text">Empresa</span>
            </div>
            <input type="text" class="form-control float-right" id="n_venta_recibi_ini" readonly="" style="border-radius: :0px;background:white;">
          </div>

        </div><!-- FIN FORM GROUP 1-->
  
    </div><!--Fin modal Content-->

  </div>
</div>
