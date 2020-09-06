<?php 
require_once("config/conexion.php");
if(isset($_SESSION["usuario"])){ 
require_once('header.php');
require_once("modals/nuevo_paciente.php");
?>
<div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2" style="margin: 2px">
          <div class="col-sm-10">
            <h5 align="center">MÓDULO PACIENTES</h5>
          </div>
          <div class="col-sm-2">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pacientes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

     <div class="invoice p-3 mb-3" style="margin: 3px;border-radius: 5px">
     	<div class="row">
     	<div class="col-sm-2">
     	<button type="button" class="btn btn-block btn-outline-primary btn-flat" data-toggle="modal" data-target="#newPaciente"><i class="fas fas fa-user-plus"></i> Agregar Paciente</button>
     	</div>

     	<div class="col-sm-2">
     	<button type="button" class="btn btn-block btn-outline-success btn-flat" ><i class="fas fa-clipboard-list"></i> Ver Consultas</button>
     	</div>

     	</div>
     </div>     
         
</div><!-- /.content-wrapper -->
 <!-- Modal -->
<div id="empresasModal" class="modal fade" data-modal-index="2">
        <div class="modal-dialog modal-lg">
          <div class="modal-content bg-info">
            <div class="modal-header">
              <span class="modal-title">SELECCIONAR EMPRESA</span>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" style="background: white">
                    <div class="card-body p-0" style="margin:1px">
                <table class="table" id="reporte_compra_admin" width="100%">
                  <thead style="background:#034f84;color:white">
                    <tr>
                    <th>Codigo</th>          
                    <th>Nombre</th>
                    <th>Sucursal</th>
                    <th>Agregar</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center">                                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
</div>
<?php date_default_timezone_set('America/El_Salvador'); $hoy = date("d-m-Y H:i:s");?>
<input type="hidden" name="id_usuario" id="usuario" value="<?php echo $_SESSION["usuario"];?>"/>
<input type="hidden" name="sucursal" id="sucursal" value="<?php echo $_SESSION["sucursal"];?>"/>
<input type="text" id="fecha" value="<?php echo $hoy;?>">
<script type="text/javascript" src="js/cleave.js"></script>
<script type="text/javascript" src="js/pacientes.js"></script>
<script>

function mayus(e) {
    e.value = e.value.toUpperCase();
}

var medidas = new Cleave('#dui', {
    delimiter: '-',
    blocks: [8,1],
    uppercase: true
});

var nit = new Cleave('#nit', {
    delimiter: '-',
    blocks: [4,6,3,1],
    uppercase: true
});

var tel_oficina = new Cleave('#tel_oficina', {
    delimiter: '-',
    blocks: [4,4],
    uppercase: true,
    //numeral: true
});

var telefono = new Cleave('#telefono', {
    delimiter: '-',
    blocks: [4,4],
    uppercase: true
});
</script>


<script>
    $(function(){
      $('.btn[data-toggle=modal]').on('click', function(){
        var $btn = $(this);
        var currentDialog = $btn.closest('.modal-dialog'),
        targetDialog = $($btn.attr('data-target'));;
        if (!currentDialog.length)
          return;
        targetDialog.data('previous-dialog', currentDialog);
        currentDialog.addClass('aside');
        var stackedDialogCount = $('.modal.in .modal-dialog.aside').length;
        if (stackedDialogCount <= 5){
          currentDialog.addClass('aside-' + stackedDialogCount);
        }
      });

      $('.modal').on('hide.bs.modal', function(){
        var $dialog = $(this);  
        var previousDialog = $dialog.data('previous-dialog');
        if (previousDialog){
          previousDialog.removeClass('aside');
          $dialog.data('previous-dialog', undefined);
        }
      });
    })
  </script>
  <?php } else{
echo "Acceso denegado";
  } ?>