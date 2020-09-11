function guardarEmpresa(){
	var nomEmpresa=$("#nomEmpresa").val();
	var dirEmpresa=$("#dirEmpresa").val();
	var nitEmpresa=$("#nitEmpresa").val();
	var telEmpresa=$("#telEmpresa").val();
	var respEmpresa=$("#respEmpresa").val();
	var correoEmpresa=$("#correoEmpresa").val();
	var encargado=$("#encargado").val();

	//Se validan los campos de modal empresa
	if(nomEmpresa !="" || dirEmpresa !="" || nitEmpresa !="" || telEmpresa !="" || respEmpresa !="" || correoEmpresa !="" || encargado !=""){
		$.ajax({
			url:"ajax/empresas.php?op=guardar_empresa",
			method:"POST",
			data:{nomEmpresa:nomEmpresa, dirEmpresa:dirEmpresa, nitEmpresa:nitEmpresa, telEmpresa:telEmpresa, respEmpresa:respEmpresa, correoEmpresa:correoEmpresa, encargado:encargado},
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