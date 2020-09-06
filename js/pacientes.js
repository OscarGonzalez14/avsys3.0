$(document).ready(ocultar_btns_creditos);

  function ocultar_btns_creditos(){
  document.getElementById("btns_credito").style.display = "none";  
}

function mostrar_btns_creditos(){
  document.getElementById("btns_credito").style.display = "block";  
}

$(document).on('click', '#tipo_paciente', function(){ 
 var tipo_paciente=$(this).val();
 //console.log(tipo_paciente);
 if (tipo_paciente=="Desc_planilla" || tipo_paciente=="Cargo_a"){
 	mostrar_btns_creditos();
 }else if(tipo_paciente=="Sucursal"){
 	ocultar_btns_creditos();
 }
});

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
    dataType:"html",
    error:function(x,y,z){
      d_pacole.log(x);
      console.log(y);
      console.log(z);
    },        
      
  success:function(data){
  setTimeout ("Swal.fire('Paciente guardado Existosamente','','success')", 100);
  //refresca la pagina, se llama a la funtion explode
  setTimeout ("explode();", 2000);          
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