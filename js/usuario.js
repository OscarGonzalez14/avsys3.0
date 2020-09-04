function guardarUsuario(){
	var nomUsuario=$("#nomUsuario").val();
	var telUsuario=$("#telUsuario").val();
	var correoUsuario=$("#correoUsuario").val();
	var dirUsuario=$("#dirUsuario").val();
	var usuario=$("#usuario").val();
	var passUsuario=$("#passUsuario").val();
	var catUsuario=$("#catUsuario").val();
	var estUsuario=$("#estUsuario").val();

	// Se validan los campos de la modal nuevo usuario
	if (nomUsuario !="" && telUsuario !="" && correoUsuario !="" && dirUsuario !="" && usuario !="" && passUsuario !="" && catUsuario !="" && estUsuario !=''){
		$.ajax({
		url:"ajax/usuario.php?op=guardar_usuario",
  		method:"POST",
        data:{nomUsuario:nomUsuario, telUsuario:telUsuario, correoUsuario:correoUsuario, dirUsuario:dirUsuario, usuario:usuario, passUsuario:passUsuario, catUsuario:catUsuario, estUsuario:catUsuario},
        cache: false,
        dataType:"json",
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