function init(){
	listar_creditos_sucursal();
}
///////////OCULTAR ELEMENTOS AL INICIO
$(document).ready(ocultar_element_ini);

  function ocultar_element_ini(){
  document.getElementById("btn_print_recibos").style.display = "none";
}

function listar_creditos_sucursal(){
  var sucursal= $("#sucursal").val();
  tabla_creditos_sucursal=$('#creditos_de_contado').dataTable(
  {
    "aProcessing": true,//Activamos el procesamiento del datatables
      "aServerSide": true,//Paginación y filtrado realizados por el servidor
      dom: 'Bfrtip',//Definimos los elementos del control de tabla
      buttons: [{
          extend: 'excelHtml5',
          download: 'open',
          text: 'Descargar Excel',
          filename: function() {
              var date_edition = 'Creditos Sucursal '+moment().format("DD-MM-YYYY HH[h]mm")
              var selected_machine_name = $("#output_select_machine select option:selected").text()
              return date_edition + ' - ' + selected_machine_name
           },
           sheetName: 'Creditos Sucursal',
           title : null
       },
            {
              extend: 'pdfHtml5',
              download: 'open',
              text: 'Imprimir',
              orientation: 'portrait',
              pageSize: 'letter',
              filename: function() {
              var fecha = 'Compras Pendientes '+moment().format("DD-MM-YYYY HH[h]mm")
              var selected_machine_name = $("#output_select_machine select option:selected").text()
              return fecha + ' - ' + selected_machine_name
              
            },
            title : ''
        }   
       ],
    "ajax":
        {
          url: 'ajax/creditos.php?op=listar_creditos_contado',
          type : "post",
          dataType : "json",
          data:{sucursal:sucursal},
          error: function(e){
            console.log(e.responseText);
          }
        },
    "bDestroy": true,
    "responsive": true,
    "bInfo":true,
    "iDisplayLength": 10,//Por cada 10 registros hace una paginación
      "order": [[ 0, "desc" ]],//Ordenar (columna,orden)

      "language": {

          "sProcessing":     "Procesando...",

          "sLengthMenu":     "Mostrar _MENU_ registros",

          "sZeroRecords":    "No se encontraron resultados",

          "sEmptyTable":     "Ningún dato disponible en esta tabla",

          "sInfo":           "Mostrando un total de _TOTAL_ registros",

          "sInfoEmpty":      "Mostrando un total de 0 registros",

          "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",

          "sInfoPostFix":    "",

          "sSearch":         "Buscar:",

          "sUrl":            "",

          "sInfoThousands":  ",",

          "sLoadingRecords": "Cargando...",

          "oPaginate": {

              "sFirst":    "Primero",

              "sLast":     "Último",

              "sNext":     "Siguiente",

              "sPrevious": "Anterior"

          },

          "oAria": {

              "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",

              "sSortDescending": ": Activar para ordenar la columna de manera descendente"

          }

         }//cerrando language

  }).DataTable();
}
//////////////RECIBOS Y ABONOS
function realizarAbonos(id_paciente,id_credito,numero_venta){
  $("#modal_recibos_generico").modal("show");
  $("#numero").val("");
    document.getElementById("numero").focus();
  ////////ajax datos de paciente
  $.ajax({
  url:"ajax/creditos.php?op=datos_paciente_abono",
  method:"POST",
  data:{id_paciente:id_paciente,id_credito:id_credito,numero_venta:numero_venta},
  cache:false,
  dataType:"json",
  success:function(data)
  { 
    console.log(data);  
    $("#recibi_abono").val(data.paciente);
    $("#servicio_abono").val(data.evaluado);
    $("#telefono_abono").val(data.telefono);
    $("#empresa_abono").val(data.empresas);
    $("#monto_venta_rec_ini").val(data.monto);
    $("#n_venta_recibo_ini").val(data.numero_venta);
    $("#id_paciente").val(data.id_paciente);
    $("#saldo_credito").val(data.saldo);
    $("#saldo").val("");   
    
 }
  })
 //////// FIN ajax datos de paciente
 $.ajax({
  url:"ajax/ventas.php?op=get_datos_lentes_rec_ini",
  method:"POST",
  data:{id_paciente:id_paciente,numero_venta:numero_venta},
  cache:false,
  dataType:"json",
  success:function(data)
  { 
    console.log(data);  
    $("#lente_rec_ini").val(data.producto);
  }
  })
  ////////////////photo
  $.ajax({
  url:"ajax/ventas.php?op=get_datos_photo_rec_ini",
  method:"POST",
  data:{id_paciente:id_paciente,numero_venta:numero_venta},
  cache:false,
  dataType:"json",
  success:function(data)
  { 
    console.log(data);  
    $("#photo_rec_ini").val(data.producto);
  }
  })

    ////////////////antireflejante
  $.ajax({
  url:"ajax/ventas.php?op=get_datos_ar_rec_ini",
  method:"POST",
  data:{id_paciente:id_paciente,numero_venta:numero_venta},
  cache:false,
  dataType:"json",
  success:function(data)
  { 
    console.log(data);  
    $("#ar_rec_ini").val(data.producto);
  }
  })
      ////////////////aros
  $.ajax({
  url:"ajax/ventas.php?op=get_datos_aros_rec_ini",
  method:"POST",
  data:{id_paciente:id_paciente,numero_venta:numero_venta},
  cache:false,
  dataType:"json",
  success:function(data)
  { 
    console.log(data);  
    $("#marca_aro_ini").val(data.marca);
    $("#modelo_aro_ini").val(data.modelo);
    $("#color_aro_ini").val(data.color);
  }
  })

    ////////////////abono anterior
  $.ajax({
  url:"ajax/creditos.php?op=datos_abono_anterior",
  method:"POST",
  data:{id_paciente:id_paciente,numero_venta:numero_venta},
  cache:false,
  dataType:"json",
  success:function(data)
  { 
    console.log(data);  
    $("#abono_ant").val(data.monto_abono);
  }
  })

}

////////////////REGISTRAR ABONO
function registra_abonos(){
  var fecha_rec_ini=$("#fecha_rec_ini").val();
  var saldo=$("#saldo").val();
  var monto = $("#numero").val();

  if (monto !="") {//VALIDA MONTO
     if (saldo >0 && fecha_rec_ini=="") {
     Swal.fire('Especifique fecha de proximo abono abono!','','error')
    }else{
    //////////////SE ENVIA RECIBO
      registrar_abono();
    }
  }else{
    Swal.fire('Debe llenar los campos obligatorios correctamente!','','error')

  }//VALIDA MONTO
  
}

function registrar_abono(){

    var a_anteriores=$("#abono_ant").val();
    var n_recibo = $("#n_recibo").html();
    var n_venta_recibo_ini =$("#n_venta_recibo_ini").val();
    var monto =$("#monto_venta_rec_ini").val();
    var fecha =$("#fecha").val();
    var sucursal =$("#sucursal").val();
    var id_paciente =$("#id_paciente").val();
    var id_usuario =$("#usuario").val();
    var telefono_ini =$("#telefono_abono").val();
    var recibi_rec_ini =$("#recibi_abono").val();
    var empresa_ini =$("#empresa_abono").val();
    var texto=$("#texto").val();
    var numero=$("#numero").val();
    var saldo=$("#saldo").val();
    var forma_pago=$("#forma_pago").val();
    var marca_aro_ini=$("#marca_aro_ini").val();
    var modelo_aro_ini=$("#modelo_aro_ini").val();    
    var color_aro_ini=$("#color_aro_ini").val();
    var lente_rec_ini=$("#lente_rec_ini").val();
    var ar_rec_ini=$("#ar_rec_ini").val();
    var photo_rec_ini=$("#photo_rec_ini").val();
    var observaciones_rec_ini=$("#observaciones_rec_ini").val();
    var pr_abono=$("#pr_abono").val();
    var servicio_rec_ini=$("#servicio_abono").val();    
    
    if (forma_pago !="") {
    $('#creditos_de_contado').DataTable().ajax.reload();
    $.ajax({
    url:"ajax/recibos.php?op=registrar_recibo",
    method:"POST",
    data:{a_anteriores:a_anteriores,n_recibo:n_recibo,n_venta_recibo_ini:n_venta_recibo_ini,monto:monto,fecha:fecha,sucursal:sucursal,id_paciente:id_paciente,id_usuario:id_usuario,telefono_ini:telefono_ini,recibi_rec_ini:recibi_rec_ini,empresa_ini:empresa_ini,texto:texto,numero:numero,saldo:saldo,forma_pago:forma_pago,marca_aro_ini:marca_aro_ini,modelo_aro_ini:modelo_aro_ini,color_aro_ini:color_aro_ini,lente_rec_ini:lente_rec_ini,ar_rec_ini:ar_rec_ini,photo_rec_ini:photo_rec_ini,observaciones_rec_ini:observaciones_rec_ini,pr_abono:pr_abono,servicio_rec_ini:servicio_rec_ini},
    cache: false,
    dataType:"json",
    error:function(x,y,z){
      d_pacole.log(x);
      console.log(y);
      console.log(z);
    }, 
      
    success:function(data){
      console.log(data);
      if(data=='error'){
        Swal.fire('Este correlativo ya fué ingresado!','','error')
        return false;
      }else if (data=="ok") {
        Swal.fire('Recibo registrado exitosamente!','','success')
        //$('#recibo_inicial').modal('hide');
        //setTimeout ("explode();", 2000);
      }
      
    }

  });
  }else{
    Swal.fire('Especifique la forma de Pago!','','error')
    return false;
  }  
    
  }
  ///////////////////////IMPRIMIR RECIBO DE ABONO
  $(document).on('click', '#registrar_abono', function(){
  var n_recibo = $("#n_recibo").html();
  var n_venta_recibo_ini =$("#n_venta_recibo_ini").val();
  var id_paciente =$("#id_paciente").val();
  document.getElementById("btn_print_recibos").style.display = "block";

  document.getElementById("btn_print_recibos").href='imprimir_recibo_pdf.php?n_recibo='+
  n_recibo+'&'+'n_venta='+n_venta_recibo_ini+'&'+'id_paciente='+id_paciente;
  
});
  /////////////////LISTAR DETALLE DE ABONOS
  function verDetAbonos(id_paciente,numero_venta){
  $("#detalle_abonos").modal("show");
  tabla_det_abono=$('#lista_det_abonos').dataTable(
  {
    "aProcessing": true,//Activamos el procesamiento del datatables
      "aServerSide": true,//Paginación y filtrado realizados por el servidor
      dom: 'Bfrtip',//Definimos los elementos del control de tabla
      buttons: ['copyHtml5', {
           extend: 'excelHtml5',
           text: 'Excel Abonos',
           filename: function() {
               var date_edition = 'Detalle Abono'+moment().format("DD-MM-YYYY HH[h]mm")
               var selected_machine_name = $("#output_select_machine select option:selected").text()
               return date_edition + ' - ' + selected_machine_name
           },
           sheetName: 'Abonos',
           title : null
       }],
    "ajax":
        {
          url: 'ajax/creditos.php?op=listar_detalle_abonos',
          type : "post",
          //dataType : "json",
          data:{id_paciente:id_paciente,numero_venta:numero_venta},
          error: function(e){
            console.log(e.responseText);
          }
        },
    "bDestroy": true,
    "responsive": true,
    "bInfo":true,
    "iDisplayLength": 10,//Por cada 10 registros hace una paginación
      "order": [[ 0, "desc" ]],//Ordenar (columna,orden)

      "language": {

          "sProcessing":     "Procesando...",

          "sLengthMenu":     "Mostrar _MENU_ registros",

          "sZeroRecords":    "No se encontraron resultados",

          "sEmptyTable":     "Ningún dato disponible en esta tabla",

          "sInfo":           "Mostrando un total de _TOTAL_ registros",

          "sInfoEmpty":      "Mostrando un total de 0 registros",

          "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",

          "sInfoPostFix":    "",

          "sSearch":         "Buscar:",

          "sUrl":            "",

          "sInfoThousands":  ",",

          "sLoadingRecords": "Cargando...",

          "oPaginate": {

              "sFirst":    "Primero",

              "sLast":     "Último",

              "sNext":     "Siguiente",

              "sPrevious": "Anterior"

          },

          "oAria": {

              "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",

              "sSortDescending": ": Activar para ordenar la columna de manera descendente"

          }

         }//cerrando language

  }).DataTable();
}
init();
