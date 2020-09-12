function save_usuario(){
	//se definen las variables según los campos del modal nuevo usuario
	var nom_usuario=$("#nom_usuario").val();
	var tel_usuario=$("#tel_usuario").val();
	var correo_usuario=$("#correo_usuario").val();
	var dir_usuario=$("#dir_usuario").val();
	var usuario=$("#usuario").val();
	var pass_usuario=$("#pass_usuario").val();
	var fecha_ingreso=$("#fecha_ingreso").val();
	var cat_usuario=$("#cat_usuario").val();
	var est_usuario=$("#est_usuario").val();


	//se validan los campos del modal nuevo usuario
	if (nom_usuario !="" || tel_usuario !="" || correo_usuario !="" || dir_usuario !="" || usuario !="" || pass_usuario !="" || fecha_ingreso !="" || cat_usuario !="" || est_usuario !=""){
		$.ajax({
		url:"ajax/usuarios.php?op=guardar_usuario",
		method:"POST",
		data:{nom_usuario:nom_usuario, tel_usuario:tel_usuario, correo_usuario:correo_usuario, dir_usuario:dir_usuario, usuario:usuario, pass_usuario:pass_usuario, fecha_ingreso:fecha_ingreso, cat_usuario:cat_usuario, est_usuario:est_usuario},
		cache:false,
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