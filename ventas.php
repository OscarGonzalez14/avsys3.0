
 <?php
 require_once("config/conexion.php");
if(isset($_SESSION["usuario"])){ 
require_once("header_dos.php");
require_once("modals/listar_aros_en_venta.php");

 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content" style="margin-top: 5px">
      <div class="row">
        <div class="col-12">
          <div class="card">
          <!-- /.card-header -->
<div class="card-body"><!--CONTENIDO-->

<section class="content">
        <div class="container-fluid">

            <div class="invoice p-3 mb-3">
              <div class="row row2" style="background:#E0E0E0;border-radius: 5px">
                    <div class="form-group col-sm-3">
                      <label for="">Tipo Venta</label>
                      <select class="form-control input-dark" id="tipo_compra" required="">
                        <option value=''>Seleccionar tipo Venta</option>
                        <option value='Contado'>Contado</option>
                        <option value='Credito'>Credito</option>
                      </select>
                    </div>  

                  <div class="form-group col-sm-3">
                    <label for="">Tipo Pago</label>
                      <select class="form-control input-dark" id="tipo_pago" required="">
                        <option value=''>Seleccionar tipo Pago</option>
                        <option value='Contado'>Efectivo</option>
                        <option value='Credito'>Cheque</option>
                        <option value='Credito'>Tarjeta de Crédito</option>
                      </select>
                  </div>

                  <div class="form-group col-sm-3">
                    <label for="">Plazo</label>
                      <select class="form-control input-dark" id="plazo" required="">
                        <option value='contado'> Contado</option>
                        <option value='1'>1 meses</option>
                        <option value='2'>2 meses</option>
                        <option value='3'>3 meses</option>
                        <option value='4'>4 meses</option>
                        <option value='5'>5 meses</option>
                        <option value='6'>6 meses</option>
                        <option value='7'>7 meses</option>
                        <option value='8'>8 meses</option>
                        <option value='9'>9 meses</option>
                        <option value='10'>10 meses</option>
                        <option value='11'>11 meses</option>
                        <option value='12'>12 meses</option>
                      </select>
                  </div>

                  <div class="form-group col-sm-3">
                    <label for="">Existe Consulta?</label>
                      <select class="form-control input-dark" id="consulta_ex" required="">
                        <option value=''>Seleccionar...</option>
                        <option value='Si'>Si</option>
                        <option value='No'>No</option>
                      </select>
                  </div>
            </div>
            <div class="dropdown-divider"></div>
              <div class="row invoice-info callout callout-info" style="border-bottom: solid 1px black;border-right: solid 1px black;border-top: solid 1px black">
                    <div class="col-sm-1 invoice-col">
                    <label># Venta</label>
                      <input type="text" class="form-control input-dark" id="n_compra" style="margin:2px;background:white;border-radius: 6px;text-align: center;">
                    </div>

                    <div class="col-sm-4 invoice-col">
                    <label>Encargado de cuenta</label>
                      <input type="text" class="form-control input-dark" id="proveedor_compra" style="margin:2px;background:white;border-radius: 6px;text-align: center;" readonly>
                    </div>

                    <div class="col-sm-3 invoice-col" style="display: none">
                    <label>Paciente Evaluado</label>
                      <input type="text" class="form-control input-dark" id="proveedor_compra" style="margin:2px;background:white;border-radius: 6px;text-align: center;" readonly>
                    </div>

                    <div class="col-sm-2 invoice-col">
                    <label>Cod. Pac</label>
                      <input type="text" class="form-control input-dark" id="codigo_proveedor" style="margin:2px;background:white;border-radius: 6px;text-align: center;" readonly>
                    </div>

                    <div class="col-sm-2 invoice-col">
                    <label>Buscar</label>
                      <button class="btn btn-primary btn-block" style="border-radius:2px" data-toggle="modal" data-target="#modalProveedores" id="select_paciente_venta">Paciente</button>
                    </div>
                </div><!--/.row invoice-info datos Proveedor-->

           <div class="col-md-12">
              <div><!--BOTONES AGREGAR PRODUCTO-->

                  <a class="btn btn-dark" style="color:white;border-radius:1px; background:black" data-toggle="modal" data-target="#listar_aros_ventas" data-backdrop="static" data-keyboard="false" id="btn_aros_venta"><i class="fas fa-plus"></i>Aro</a>
                  <a class="btn btn-dark" style="color:white;border-radius:1px; background:black" data-toggle="modal" data-target="#listar_lentes_ventas" data-backdrop="static" data-keyboard="false" id="btn_aros_venta"><i class="fas fa-plus"></i> Lentes</a>

            </div><!-- FIN BOTONES AGREGAR PRODUCTO-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" align="center"><strong>Detalle de Compras</strong></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table  id="tabla_det_ventas" width="100%">
                  <thead style="background: #00001a;color:white">
                    <tr>
                      <th style="text-align:center" width="10%">#</th>
                      <th style="text-align:center" width="40%">Descripción&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th style="text-align:center" width="10%">Cantidad</th>
                      <th style="text-align:center" width="10%">P/U</th>
                       <th style="text-align:center" width="10%">Desc.%</th>
                      <th style="text-align:center" width="10%">Subtotal</th>
                      <th style="text-align:center" width="10%">Quitar</th>
                    </tr>
                  </thead>
                  <tbody id="listar_det_ventas" style="width: 100%"></tbody>               

                    <tfoot style='background:#E0E0E0'>
                      <tr>
                      <td style="text-align:center;text-align:center" colspan="6"><strong>Monto total de la Compra</strong></td>
                      <td style="text-align:center;text-align:center" colspan="1"><strong><span>$</span><span id="total_compra"></span></strong></td>                      
                    </tr>
                    <tfoot>                      
                </table>
                <?php date_default_timezone_set('America/El_Salvador'); $hoy = date("d-m-Y H:i:s");?>
                <input type="hidden" id="usuario" value="oscar">
                <input type="hidden" id="fecha" value="<?php echo $hoy;?>">
                <button class="btn btn-primary btn-block" id="btn_de_compra" style="border-radius:2px" onClick='registrarCompra();' onmouseover="get_numero_recibo();"><i class="fas fa-save"></i> REGISTRAR VENTA</button>
              </div>
              <br>
              <div class="row post_compra" id="post_compra" style="display: flex;justify-content: space-between !important;">
                <div class="col-sm-6 post_compra">
                  <button class="btn btn-block" style="border-radius:2px;background:#333333;color:white" data-toggle="modal" data-target="#modal_print_admin" data-backdrop="static" data-keyboard="false" onClick="reporte_compras_admin();";><i class="fas fa-print"></i> Imprimir recibo Inicial</button>
                </div>
                <div class="col-sm-6 post_compra">
                  <button class="btn btn-success btn-block" style="border-radius:2px" onClick='explode();'><i class="fas fa-plus"></i> Nueva Venta</button>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div> <!--Fin trable-->    
            </div>
        </div>
    </section>


<?php require_once("footer.php");?>
<?php date_default_timezone_set('America/El_Salvador'); $hoy = date("d-m-Y H:i:s");?>
<input type="hidden" name="id_usuario" id="usuario" value="<?php echo $_SESSION["usuario"];?>"/>
<input type="hidden" name="sucursal" id="sucursal" value="<?php echo $_SESSION["sucursal"];?>"/>
<input type="hidden" id="fecha" value="<?php echo $hoy;?>">
<input type="hidden" id="name_pag" value="MODULO VENTAS">
<script type="text/javascript" src="js/cleave.js"></script>
<script type="text/javascript" src="js/productos.js"></script>
<script type="text/javascript" src="js/ventas.js"></script>
<script type="text/javascript" src="js/bootbox.min.js"></script>
  <script type="text/javascript">
    var title = document.getElementById("name_pag").value;
    document.getElementById("title_mod").innerHTML=" "+
    title;
  </script>
</div><!-- FIN CONTENIDO-->
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script>

function mayus(e) {
    e.value = e.value.toUpperCase();
}


   <?php } else{
echo "Acceso denegado";
  } ?>
