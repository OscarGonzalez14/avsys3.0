function guardarUsuario(){
	//se definen las varibles segun id de los campos en modal nuevo usuario
	var nom_user =$("#nom_user").val();
	var tel_user =$("#tel_user").val();
	var correo_user	=$("#correo_user").val();
	var dir_user =$("#dir_user").val();
	var user =$("#user").val();
	var pass_user =$("#pass_user").val();
	var fecha_ingreso =$("#fecha_ingreso").val();
	var cat_user =$("#cat_user").val();
	var est_user =$("#est_user").val();
	var suc_user =$("#suc_user").val();


	//Se validan los campos de modal nuevo usuario
	if (nom_user !="" || tel_user !="" || correo_user !="" || dir_user !="" || user !="" || pass_user !="" || fecha_ingreso !="" || cat_user !="" || est_user !="" || suc_user !=""){
		$.ajax({
		url:"ajax/usuarios.php?op=guardar_usuario",
		method:"POST",
		data:{nom_user:nom_user,tel_user:tel_user,correo_user:correo_user,dir_user:dir_user,user:user,pass_user:pass_user,fecha_ingreso:fecha_ingreso,cat_user:cat_user,est_user:est_user,suc_user:suc_user},
		cache: false,
		dataType: "json",
		error:function(x,y,z){
			d_pacole.log(x);
			console.log(y);
			console.log(z);
		},
		success:function(data){
			console.log(data);
			
			}
		});
		setTimeout ("Swal.fire('Se ha registrado un nuevo usuario','','success')", 100)
        setTimeout ("explode();", 2000);
	
	}
}

 function explode(){
    location.reload();
  }

