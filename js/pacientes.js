$(document).ready(ocultar_btns_creditos);

  function ocultar_btns_creditos(){
  document.getElementById("btns_credito").style.display = "none";
  get_correlativo_paciente();
  listar_pacientes();
  tabla_pacientes();
}

function mostrar_btns_creditos(){
  document.getElementById("btns_credito").style.display = "block";  
}

$(document).on('click', '#tipo_paciente', function(){ 
 var tipo_paciente=$(this).val();
 //console.log(tipo_paciente);
 if (tipo_paciente=="Desc_planilla" || tipo_paciente=="Cargo_a"){
 	mostrar_btns_creditos();
 	$("#empresa").attr('readonly', true);
 }else if(tipo_paciente=="Sucursal"){
 	ocultar_btns_creditos();
 }
});

function get_correlativo_paciente(){
	var sucursal_correlativo = $("#sucursal").val();
	$.ajax({
    url:"ajax/pacientes.php?op=get_numero_paciente",
    method:"POST",
    data:{sucursal_correlativo:sucursal_correlativo},
    cache:false,
    dataType:"json",
      success:function(data){
    	$("#codigo_paciente").val(data.correlativo);             
      }
    })
}

//////////////////GUARDAR PACIENTE
function guardarPaciente(){
	var codigo_paciente =$("#codigo_paciente").val();
    var nombres=$("#nombres").val();
    var telefono=$("#telefono").val();
	var edad=$("#edad").val();
	var dui=$("#dui").val();
	var ocupacion =$("#ocupacion").val();
	var correo=$("#correo").val();
	var empresa=$("#empresa").val();
	var cod_empresa_pac=$("#cod_emp").val();
	var id_usuario=$("#id_usuario").val();    
	var sucursal = $("#sucursal").val();
	var nit = $("#nit").val();
	var tel_oficina = $("#tel_oficina").val();
	var direccion_completa = $("#direccion_completa").val();
	var tipo_paciente = $("#tipo_paciente").val();

	if (tipo_paciente=="Desc_planilla" || tipo_paciente=="Cargo_a") {
		if (tel_oficina == "" || nit == "" || empresa == "" || dui == "") {
			setTimeout ("Swal.fire('Hay campos obligatorios vacios','','error')", 100);
		}else{
			save_paciente();
		}
	}else if(tipo_paciente=="Sucursal"){
 	    save_paciente();
    }else{
    	setTimeout ("Swal.fire('Elija el tipo de paciente','','error')", 100);
    }
}
function save_paciente() {
	var codigo_paciente =$("#codigo_paciente").val();
    var nombres=$("#nombres").val();
    var telefono=$("#telefono").val();
	var edad=$("#edad").val();
	var dui=$("#dui").val();
	var ocupacion =$("#ocupacion").val();
	var correo=$("#correo").val();
	var empresa=$("#empresa").val();	
	var usuario=$("#usuario").val();    
	var sucursal = $("#sucursal").val();
	var nit = $("#nit").val();
	var tel_oficina = $("#tel_oficina").val();
	var direccion_completa = $("#direccion_completa").val();
	var tipo_paciente = $("#tipo_paciente").val();
	var fecha = $("#fecha").val();

	if(nombres != "" && telefono != "" && edad != "" && dui != "" && correo != ""){
    $.ajax({
    url:"ajax/pacientes.php?op=guardar_paciente",
    method:"POST",
    data:{codigo_paciente:codigo_paciente,nombres:nombres,telefono:telefono,edad:edad,ocupacion:ocupacion,sucursal:sucursal,dui:dui,correo:correo,usuario:usuario,empresa:empresa,nit:nit,direccion_completa:direccion_completa,tel_oficina:tel_oficina,tipo_paciente:tipo_paciente,fecha:fecha},
    cache: false,
    dataType:"json",
    error:function(x,y,z){
      d_pacole.log(x);
      console.log(y);
      console.log(z);
    },        
      
  success:function(data){
  	console.log(data);
//return false;
  	if(data=='ok'){

    setTimeout ("Swal.fire('Paciente guardado Existosamente','','success')", 100);
    setTimeout ("explode();", 2000); 
  }else{
    setTimeout ("Swal.fire('El DUI de paciente ya se encuentra registrado','','error')", 100);
    return false;
  }           
}

}); 
}else{
    setTimeout ("Swal.fire('Debe llenar el formulario correctamente','','error')", 100);
    return false;
} //cierre del condicional de validacion de los campos del paciente
}

  function explode(){
    location.reload();
  }

  ///////////////////LISTADO GENERAL DE PACIENTES
  function listar_pacientes(){

	var sucursal_paciente = $('#sucursal').val();

	tabla_pacientes=$('#data_pacientes').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	      "columnDefs": [
    { "orderable": false, "targets": 0 }
  ],
	    buttons: [		          
		         
		            'excelHtml5',

		            'pdf'
		        ],
		"ajax":
				{
					url: 'ajax/pacientes.php?op=listar_pacientes',
					type : "post",
					dataType : "json",
					data:{sucursal_paciente:sucursal_paciente},					
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"responsive": true,
		"bInfo":true,
		"iDisplayLength": 10,//Por cada 10 registros hace una paginación
	    //"order": [[ 0, "desc" ]],//Ordenar (columna,orden)
	    
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
			 
			    }

			   }//cerrando language
	       
	}).DataTable();
}

//////////show id y nombre modal Consulta
$(document).on('click', '.info_pac', function(){	
	var id_paciente = $(this).attr("id");
	$.ajax({
		url:"ajax/pacientes.php?op=ver_pacientes_data",
		method:"POST",
		data:{id_paciente:id_paciente},
		cache:false,
		dataType:"json",
		success:function(data){				
		$("#nombre_pac").val(data.nombres);
		$("#codigop").val(data.id_paciente);
        }
	})

});

////////AUTORELLENO CAMPOS DE CONSULTA
function fill_lenso_oi(){
	 document.getElementById("oiadicionl").value = document.getElementById("odadicionl").value; 
}
function fill_obleas(){
	let x = document.getElementById("dip").value;
	let val = x/2;
	document.getElementById("oddip").value=val+" mm";
	document.getElementById("oidip").value=val+" mm";
}
function fill_rx(){
	document.getElementById("oiadicionf").value = document.getElementById("oddicionf").value; 
}
function fill_ao(){
	document.getElementById("aooi").value = document.getElementById("aood").value;	
}
function fill_ap(){
	document.getElementById("opoi").value = document.getElementById("apod").value;	
}