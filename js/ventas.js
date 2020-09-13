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
    };//Fin objeto
    detalles.push(obj);
   // listarDetallesCompras();
   // $('#modalAros').modal("hide");
    console.log(detalles);
    }//fin success
  });//fin de ajax

}