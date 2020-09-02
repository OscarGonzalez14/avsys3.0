var tabla_proveedores;

function init(){
	listar_proveedores();
}

//Función Listar
function listar_proveedores()
{
	tabla_proveedores=$('#data_proveedores').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: 'ajax/proveedor.php?op=listar_proveedores',
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

/// función para guardar nuevos proveedores

function guardarProveedor(){

	$("#newProveedor").modal("hide");

	var codProveedor=$("#codProveedor").val();
	var nomProveedor = $("#nomProveedor").val();
	var nitProveedor = $("#nitProveedor").val();
	var telProveedor = $("#telProveedor").val();
	var empresaProveedor = $("#empresaProveedor").val();
	

	///se validan los campos de llenado (modal: nuevo proveedor) 
	if(codProveedor !="" && nomProveedor !="" && nitProveedor !="" && telProveedor !="" && empresaProveedor != ""){
	$.ajax({
		url:"ajax/proveedor.php?op=guardarProveedor",
		method:"POST",
		data:{codProveedor:codProveedor,nomProveedor:nomProveedor,nitProveedor:nitProveedor,telProveedor:telProveedor,empresaProveedor:empresaProveedor},
		cache: false,
		dataType: "json",
		error:function(x,y,z){
			d_pacole.log(x);
			console.log(y);
			console.log(z);
		},
		success:function(data){
    console.log(data);
     alert("¡Los datos han sido guardados exitosamente!");
    }

	});

}
}


////LLENADO DE CAMPOS EN COMPRAS DE PROVEEDOR
$(document).on('click', '.agrega_proveedor', function(){
	 	//toma el valor del id
		var id_proveedor = $(this).attr("id");
		$.ajax({
			url:"ajax/proveedor.php?op=agrega_proveedor_compra",
			method:"POST",
			data:{id_proveedor:id_proveedor},
			cache:false,
			dataType:"json",
			success:function(data)
			{
				$('#modalProveedores').modal('hide');
				$("#proveedor_compra").val(data.nombre);
				$("#codigo_proveedor").val(data.codigo_proveedor);				
			}
		})
});

init();