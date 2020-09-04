<?php require_once("header.php");?>
<div class="content-wrapper">
    <script type="text/javascript">
        function cargar_provincias()
        {
            var array = ["Cantabria", "Asturias", "Galicia", "Andalucia", "Extremadura"];
            for(var i in array)
            { 
                document.getElementById("provincia").innerHTML += "<option value='"+array[i]+"'>"+array[i]+"</option>"; 

            }
    }

    cargar_provincias();

    function carga_cats(){
     $.ajax({
      url:"ajax/categoria.php?op=get_categorias",
      method:"POST",
      //data:{numero_venta:numero_venta},
      cache:false,
      dataType:"json",
      success:function(data)
      {
        console.log(data);
        for(var i in data)
            { 
                document.getElementById("provincia").innerHTML += "<option value='"+data[i]+"'>"+data[i]+"</option>"; 

            }
      }
    });
}
    </script>
    <button class="btn btn-success btn-block" style="border-radius:2px" onClick='carga_cats();'>Nuevo Ingreso</button>
    <select name="provincia" id="provincia"></select>

    </div>