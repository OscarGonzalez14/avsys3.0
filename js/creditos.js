function init(){
	listar_creditos_sucursal();
}
function listar_creditos_sucursal(){
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
          type : "get",
          dataType : "json",
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
