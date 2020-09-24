///// js
var tabla_lista_usuarios;

function init(){
	lista_usuarios();

}

/////////////////LISTAR USUARIOS///////
function lista_usuarios(){
  tabla_lista_usuarios=$('#listar_usuarios').dataTable(
  {
    "aProcessing": true,//Activamos el procesamiento del datatables
      "aServerSide": true,//Paginación y filtrado realizados por el servidor
      dom: 'Bfrtip',//Definimos los elementos del control de tabla
      responsive: true,
      buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdf'
            ],
    "ajax":
        {
          url: 'ajax/usuarios.php?op=lista_usuarios',
          type : "get",
          dataType : "json",
          error: function(e){
            console.log(e.responseText);
          }
        },
    "bDestroy": true,
    "responsive": true,
    "bInfo":true,
    "iDisplayLength": 10,//Por cada 10 registros hace una paginación
      "order": [[ 0, "desc" ]],//Ordenar (columna,orden)

      "language": {

          "sProcessing":     "Procesando...",

          "sLengthMenu":     "Mostrar _MENU_ registros",

          "sZeroRecords":    "No se encontraron resultados",

          "sEmptyTable":     "Ningún dato disponible en esta tabla",

          "sInfo":           "Mostrando un total de _TOTAL_ registros",

          "sInfoEmpty":      "Mostrando un total de 0 registros",

          "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",

          "sInfoPostFix":    "",

          "sSearch":         "Buscar:",

          "sUrl":            "",

          "sInfoThousands":  ",",

          "sLoadingRecords": "Cargando...",

          "oPaginate": {

              "sFirst":    "Primero",

              "sLast":     "Último",

              "sNext":     "Siguiente",

              "sPrevious": "Anterior"

          },

          "oAria": {

              "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",

              "sSortDescending": ": Activar para ordenar la columna de manera descendente"

          }

         }//cerrando language

  }).DataTable();
}


/////////////LISTAR USUARIOS ayax
	 case "lista_usuarios":
    $datos=$usuario->get_lista_usuarios();
    //Vamos a declarar un array
    $data= Array();

    foreach($datos as $row)
      {
        $sub_array = array();
        $sub_array[] = $row["id_usuario"];
        $sub_array[] = $row["nombres"];
        $sub_array[] = $row["usuario"];
        $sub_array[] = $row["categoria"];
        $sub_array[] = $row["telefono"];
        $sub_array[] = $row["correo"];
        $sub_array[] = $row["direccion"]
        $sub_array[] = '<button type="button" name="hola" id="'.$row["id_producto"].'" class="btn btn-danger btn-sm btn-flat" onClick="eliminarAccesorio()"></i> Eliminar</button>';
        $sub_array[] = '<button type="button" name="hola" id="'.$row["id_producto"].'" class="btn btn-danger btn-sm btn-flat" onClick="eliminarAccesorio()"></i> Eliminar</button>';
        $data[] = $sub_array;
      }

      $results = array(
      "sEcho"=>1, //Información para el datatables
      "iTotalRecords"=>count($data), //enviamos el total registros al datatable
      "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
      "aaData"=>$data);
      echo json_encode($results);

    break;


//modelos
////// funcion listar usuarios
public function get_lista_usuarios(){
  $conectar= parent::conexion();
  $sql="select id_usuario, nombres, usuario, categoria, telefono, correo, direccion from usuarios;";
  $sql = $conectar->prepare($sql);
  $sql->execute();
  return $result = $sql->fetchAll(PDO::FETCH_ASSOC);
}
