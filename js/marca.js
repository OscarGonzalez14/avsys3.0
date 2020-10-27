var tabla_marcas;

function init(){
	listar_marcas();
}

function guardarMarca(){
	var nom_marca=$("#marca").val();
	
	if(nom_marca !=""){
	$.ajax({
		url:"ajax/marca.php?op=guardar_marca",
		method:"POST",
		data:{nom_marca:nom_marca},
		cache: false,
		dataType: "json",
		error:function(x,y,z){
			d_pacole.log(x);
			console.log(y);
			console.log(z);
		},
		success:function(data){
         if (data=='ok') {
	      setTimeout ("Swal.fire('Se ha registrado una nueva marca','','success')", 100)
	      setTimeout ("explode();", 2000);
	    }else{
          setTimeout ("Swal.fire('Esta marca ya se encuetra registrada','','error')", 100);
          return false;
  		}
        }

     });
	}
	}

function listar_marcas()
{
  tabla_marcas=$('#lista_marcas_creadas').dataTable(
  {
    "aProcessing": true,//Activamos el procesamiento del datatables
      "aServerSide": true,//Paginación y filtrado realizados por el servidor
      dom: 'Bfrtip',//Definimos los elementos del control de tabla
      responsive: true,
      buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdf'
            ],
    "ajax":
        {
          url: 'ajax/productos.php?op=listar_marcas',
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

///FUNCION GUARDAR MARCA EDITADA
function guardarMarcaEdit(){
  var marca =$("#marca_edit").val();

if(marca !=""){

    $.ajax({
    url:"ajax/marcas.php?op=editar_marca",
    method:"POST",
    data:{marca:marca},
    cache: false,
    dataType:"json",
    error:function(x,y,z){
      d_pacole.log(x);
      console.log(y);
      console.log(z);
    },
    success:function(data){         

    }
});
}
Swal.fire('La marca ha sido editado exitosamente!','','success')
setTimeout ("explode();", 2000);
} //cierre editar accesorio


///FUNCION VER MARCAS
function show_datos_marca(id_marca){
  $.ajax({
    url:"ajax/marca.php?op=show_datos_marca",
    method:"POST",
    data:{id_producto:id_producto},
    cache:false,
    dataType:"json",
    success:function(data){
      console.log(data);
      $("#marca_edit").val(data.marca);
      
    }
  });
}

///FUNCION ELIMINAR MARCA
function eliminar_marca(id_marca){
    
  bootbox.confirm("¿Está seguro de eliminar marca?", function(result){
    if(result){

  $.ajax({
    url:"ajax/marca.php?op=eliminar_marca",
    method:"POST",
    data:{id_producto:id_producto},
    dataType:"json",
    success:function(data)
    {
      console.log(data);
      if(data=="ok"){
        setTimeout ("Swal.fire('Marca Eliminada Existosamente','','success')",);
        setTimeout ("explode();", 2000);
      }        //alert(data);
      $("#lista_marcas_creadas").DataTable().ajax.reload();
    }
  });

}
});//bootbox

}



init()
