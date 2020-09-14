var detalles = [];
function agregarDetalleVenta(id_producto,id_ingreso){
  $.ajax({
  url:"ajax/ventas.php?op=agregar_aros_venta",
  method:"POST",
  data:{id_producto:id_producto,id_ingreso:id_ingreso},
  cache: false,
  dataType:"json",
  success:function(data){
    console.log(data);   
    var obj = {
      cantidad : 1,
      codProd  : id_producto,
      id_ingreso   : id_ingreso,
      stock    : data.stock,
      descripcion    : data.desc_producto,
      categoria_ub  : data.categoria_ub,
      num_compra : data.num_compra,
      precio_venta  : data.precio_venta,
      subtotal : 0,
      descuento : 0
    };//Fin objeto
    detalles.push(obj);
    listarDetallesVentas();
   $('#listar_aros_ventas').modal("hide");
    console.log(detalles);
    }//fin success
  });//fin de ajax
}

/////////////LISTAR DETALLE DE ITEM SELECCIONADOS
function listarDetallesVentas(){

    $('#listar_det_ventas').html('');

    var filas = "";
    //var subtotal = 0;
    var total = 0;

    for(var i=0; i<detalles.length; i++){

      var subtotal = detalles[i].subtotal = detalles[i].cantidad * detalles[i].precio_venta;

      var filas = filas + "<tr id='fila"+i+"'><td>"+(i+1)+
      "</td><td style='text-align:center;'>"+detalles[i].descripcion+
      "</td><td style='text-align:center'><input style='text-align:right' type='number' class='cantidad form-control' name='cantidad[]' id='cantidad[]' onClick='setCantidad(event, this, "+(i)+");' onKeyUp='setCantidad(event, this, "+(i)+");' value='"+detalles[i].cantidad+"'>"+
      "<td style='text-align:center'>"+"<span>$</span>"+detalles[i].precio_venta+"</td>"+
      "<td style='text-align:center'><input style='text-align:right' type='number' class='descuento form-control' id='descuento"+(i)+"' onClick='setDescuento(event, this, "+(i)+");' onKeyUp='setDescuento(event, this, "+(i)+");' value='"+detalles[i].descuento+"'>"+
      "</td><td style='text-align:center;'><span>$</span><span style='text-align:right' name='subtotal[]' id=subtotal"+i+" >"+detalles[i].subtotal.toFixed(2)+"</span><td style='text-align:center'><i class='nav-icon fas fa-trash-alt fa-2x' onClick='eliminarFila("+i+");' style='color:red'></i></td></tr>";

    //subtotal = subtotal + importe;

  }//cierre for
  $('#listar_det_ventas').html(filas);
}

function setCantidad(event, obj, idx){
    event.preventDefault();
    detalles[idx].cantidad = parseInt(obj.value);
    recalcular(idx);
}

function recalcular(idx){

    console.log(detalles[idx].cantidad);
    console.log((detalles[idx].cantidad * detalles[idx].precio_venta));
    var subtotal =detalles[idx].subtotal = detalles[idx].cantidad * detalles[idx].precio_venta;
    console.log(subtotal.toFixed(2));
    subtotal = detalles[idx].subtotal = detalles[idx].subtotal - (detalles[idx].subtotal * detalles[idx].descuento/100);

    subtotalFinal = subtotal.toFixed(2);
    $('#subtotal'+idx).html(subtotalFinal);

    //calcularTotales();
  }

function setDescuento(event, obj, idx){
    event.preventDefault();
    var desc = document.getElementById("descuento"+idx).value;
    var desc_n = parseInt(desc);
     if(desc_n>20){
      Swal.fire('Error!, Ha excedido el limite de descuento autorizado','','error')
      document.getElementById("descuento"+idx).value="";
      document.getElementById("descuento"+idx).style.border='solid 1px red';
     }else if(desc_n<=20){
    detalles[idx].descuento = parseFloat(obj.value);
    document.getElementById("descuento"+idx).style.border='solid 1px green';
    recalcular(idx);
  }
}

function eliminarFila(index) {
  $("#fila" + index).remove();
  drop_index(index);
}

function drop_index(position_element){
  detalles.splice(position_element, 1);
  //recalcular(position_element);
  //calcularTotales();

}

$(document).on("click","#select_paciente_venta", function(){
  var consulta = $("#consulta_ex").val();

  if(consulta==''){
    setTimeout ("Swal.fire('Hay campos sin seleccionar','','error')", 100);
    document.getElementById("consulta_ex").style.border='solid 1px red';
  }else if(consulta=='si'){
    alert("No hola");
  }

});
