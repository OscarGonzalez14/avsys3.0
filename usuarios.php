<?php
require_once("config/conexion.php");
require_once('header.php');
require_once('modals/modal_nuevo_usuario.php'); 
 ?>


<div class="content-wrapper" >
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevo_usuario">
  	CREAR NUEVO USUARIO
  </button>
</div>
<script src="js/usuarios.js"></script>
<script src="js/cleave.js"></script>
<script>
	 function mayus(e) {
    e.value = e.value.toUpperCase();
}

	var tel_user = new Cleave('#tel_user', {
    delimiter: '-',
    blocks: [4,4],
    uppercase: true
});
</script>
