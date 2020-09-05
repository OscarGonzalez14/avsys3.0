function guardar_user(){
	//se definen las variables según los campos del modal users
	var nom_user=$("#nom_user").val();
	var user=$("#user").val();
	var tel_user=$("#tel_user").val();
	var correo_user=$("#correo_user").val();
	var dir_user=$("#dir_user").val();
	var pass_user=$("#pass_user").val();
	var ingreso_user=$("#ingreso_user").val();
	var cat_user=$("#cat_user").val();
	var est_user=$("#est_user").val();


	//se validan los campos del modal users
	if (nom_user !="" && user !="" && tel_user !="" && correo_user !="" && dir_user !="" && pass_user !="" && ingreso_user !="" && cat_user !="" && est_user !=""){
		$.ajax({
		url:"ajax/users.php?op=guardar_user",
		method:"POST",
		data:{nom_user:nom_user, user:user, tel_user:tel_user, correo_user:correo_user, dir_user:dir_user, pass_user:pass_user, ingreso_user:ingreso_user, cat_user:cat_user, est_user:est_user},
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