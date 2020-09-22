

function registra_abono_inicial(){
  var fecha_rec_ini=$("#fecha_rec_ini").val();

  if (fecha_rec_ini=="") {
  	alert("Especifique la fecha");
  }
	
	/*if(nom_marca !=""){
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
*/
  
}