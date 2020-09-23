function init(){
	 get_correlativo_recibo();
}
function get_correlativo_recibo(){
  var sucursal_correlativo = $("#sucursal").val();
  $.ajax({
    url:"ajax/recibos.php?op=get_numero_recibo",
    method:"POST",
    data:{sucursal_correlativo:sucursal_correlativo},
    cache:false,
    dataType:"json",
      success:function(data){
      console.log(data);        
      $("#n_recibo").html(data.correlativo);             
      }
    })
}

function registra_abono_inicial(){
  var fecha_rec_ini=$("#fecha_rec_ini").val();
  var saldo=$("#saldo").val();
  var monto = $("#numero").val();

  if (monto !="") {//VALIDA MONTO
  	if (saldo !="0.00" && fecha_rec_ini=="") {
  	 Swal.fire('Especifique fecha de proximo abono abono!','','error')
  	}else{
  	//////////////SE ENVIA RECIBO
  	alert("ok");
    }
  }else{
  	Swal.fire('Especifique el monto del abono!','','error')
  }//VALIDA MONTO

  
	
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

init();
