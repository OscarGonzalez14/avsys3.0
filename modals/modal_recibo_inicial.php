<style>
    #tamModal_ultima_c_admin{
      max-width: 75% !important;
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
            <input type="text" class="form-control float-right" id="n_venta_recibi_ini" readonly="" style="border-radius: :0px;background:white;">
          </div>

          <div class="input-group col-sm-6">
            <input type="text" class="form-control float-right" id="n_venta_recibi_ini" readonly="" style="border-radius: :0px;background:white;">
          </div>

          <div class="input-group col-sm-2">
            <input type="text" class="form-control float-right" id="n_venta_recibi_ini" readonly="" style="border-radius: :0px;background:white;">
          </div>

          <div class="input-group col-sm-2">
            <input type="text" class="form-control float-right" id="n_venta_recibi_ini" readonly="" style="border-radius: :0px;background:white;">
          </div><span style="visibility: hidden;">.</span>
          <div class="dropdown-divider"></div>
          <div class="input-group col-sm-12">
            <input type="text" class="form-control float-right" id="n_venta_recibi_ini" readonly="" style="border-radius: :0px;background:white;" placeholder="CANTIDAD EN LETRAS">
          </div>
        </div><!-- FIN FORM GROUP 1-->

        <table style="margin: 8px">
        <thead style="background-color: #034f84 ;color:white;text-align: center">
          <tr>
          <th>Valor de la Venta</th>
          <th>Abono Actual</th>
          <th>NuevoSaldo</th> 
          <th>Forma de Pago</th>
          <th>Proximo Abono</th>

          </tr>
        </thead>

        <tbody>
          <td align='center'><input class='form-control' type='text' class='monto' name='monto' id="monto" style="text-align: right;" readonly></td>
          <td align='center'><input class='form-control' type='text' name='numero' id="numero" onkeyup="nuevo_saldo()" style="text-align: right;" required></td>
          <td align='center'><input class='form-control' type='text' class='saldo' name='saldo' id="saldo" style="text-align: right;" readonly></td>
          <td align='center'><select class='form-control' id='forma_pago' name='forma_pago'><option value=''>Seleccione</option><option value='Efectivo'>Efectivo</option><option value='Tarjeta de Credito'>Tarjeta de Credito</option><option value='Tarjeta de Debito'>Tarjeta de Debito</option><option value='Cargo Automatico'>Cargo Automatico</option><option value='Cheque'>Cheque</option></select></td>
          <td><input type='date' class='form-control' id='fecha_rec_ini' name='pr_abono'></td>

        </tbody>
      </table>

    <div class="row"><!--aros datos-->
    <div class="form-group col-md-4">
      <label for="inputPassword4">Marca Aro</label>
      <input type="text" class="form-control" id="marca_aro_ini" readonly="" style="background: white">
    </div>

    <div class="form-group col-md-4">
      <label for="inputPassword4">Modelo Aros</label>
      <input type="text" class="form-control" id="modelo_aro_ini" readonly="" style="background: white">
    </div>

    <div class="form-group col-md-4">
      <label for="inputEmail4">Color</label>
      <input type="text" class="form-control" id="color_aro_ini" readonly="" style="background: white">
    </div>

    </div><!--FIN aros datos-->

    <div class="form-row" style="margin: 8px">

    <div class="form-group col-md-4">
      <label for="inputPassword4">Lente</label>
      <input type="text" class="form-control" id="lente_rec_ini" style="background: white" readonly="">
    </div>

    <div class="form-group col-md-4">
      <label for="inputPassword4">Photosensible</label>
      <input type="text" class="form-control" id="photo_rec_ini" style="background: white" readonly="">
    </div>

    <div class="form-group col-md-4">
      <label for="inputEmail4">Antireflejante</label>
      <input type="text" class="form-control" id="ar_rec_ini" style="background: white" readonly="">
    </div>

  </div>

    <button type="button" onClick="registra_abono_inicial()" class="btn bg-info btn-sm pull-right" id="btn_enviar_ini" style="margin: 20px; border-radius: 0px"><i class="fa fa-save" aria-hidden="true"></i>  Registrar Abono</button>
    </div><!--Fin modal Content-->

  </div>
</div>
