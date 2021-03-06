<?php ob_start();
use Dompdf\Dompdf;
use Dompdf\Options;

require_once 'dompdf/autoload.inc.php';

require_once("modelos/Reporteria.php");
$reporteria=new Reporteria();
$id_paciente =$_GET["id_paciente"];
$n_venta =$_GET["n_venta"];

$datos_factura_cantidad = $reporteria->get_datos_factura_cantidad($_GET["n_venta"],$_GET["id_paciente"]);
$datos_factura_producto = $reporteria->get_datos_factura($_GET["n_venta"],$_GET["id_paciente"]);
$datos_factura_precio_u = $reporteria->get_datos_factura_p_unitario($_GET["n_venta"],$_GET["id_paciente"]);
$datos_factura_subtotal = $reporteria->get_datos_factura_subtotal($_GET["n_venta"],$_GET["id_paciente"]);
$datos_factura_paciente = $reporteria->get_datos_factura_paciente($_GET["id_paciente"]);
$datos_factura_venta    = $reporteria->get_datos_factura_venta($_GET["n_venta"],$_GET["id_paciente"]);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
   <style>
      html{
      	margin-top: 0;
        margin-left: 28px;
        margin-right:20px; 
        margin-bottom: 0;
    }
    .stilot1{
       border: 1px solid black;
       padding: 5px;
       font-size: 12px;
       font-family: Helvetica, Arial, sans-serif;
       border-collapse: collapse;
       text-align: center;
    }

    .stilot2{
       border: 1px solid black;
       text-align: center;
       font-size: 11px;
       font-family: Helvetica, Arial, sans-serif;
    }
    .stilot3{
       text-align: center;
       font-size: 11px;
       font-family: Helvetica, Arial, sans-serif;
    }

    #table2 {
       border-collapse: collapse;
    }
   </style>
  </head>
  <body>

<div style="margin-top: 130px;height:500px" >
  <table width="100%">
    <tr>
      <?php

  for($i=0;$i<sizeof($datos_factura_paciente);$i++){

?>
  <td colspan="40" style="color:black;font-size:11px;border: 1px solid white;font-family: Helvetica, Arial, sans-serif;width: 40%"><strong>CLIENTE:</strong> <?php echo $datos_factura_paciente[$i]["nombres"];?></td>

    <td colspan="40" style="color:black;font-size:11px;border: 1px solidwhite;font-family: Helvetica, Arial, sans-serif;width: 40%"><strong>DIRECCION:</strong> <?php echo $datos_factura_paciente[$i]["direccion"];?></td>

    <td colspan="20" style="color:black;font-size:11px;border: 1px solid white;font-family: Helvetica, Arial, sans-serif;width: 40%"><strong>TELEFONO:</strong> <?php echo $datos_factura_paciente[$i]["telefono"];?></td>
    <?php
  }
?>
</tr>
</table>
<table id="table2" width="100%">
<tr>
    <th bgcolor="#0061a9" colspan="10" style="color:white;font-size:8px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;width: 10%"><span class="Estilo11">CANT.</span></th>
    <th bgcolor="#0061a9" colspan="50" style="color:white;font-size:8px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;width: 50%"><span class="Estilo11">DESCRIPCIÓN</span></th>
    <th bgcolor="#0061a9" colspan="10" style="color:white;font-size:8px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;width: 10%"><span class="Estilo11">P/UNITARIO</span></th>
    <th bgcolor="#0061a9" colspan="10" style="color:white;font-size:7px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;width: 10%"><span class="Estilo11">VENTAS NO SUJETAS</span></th>
    <th bgcolor="#0061a9" colspan="10" style="color:white;font-size:8px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;width:10% "><span class="Estilo11">VENTAS EXENTAS</span></th>
    <th bgcolor="#0061a9" colspan="10" style="color:white;font-size:8px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;width: 10%"><span class="Estilo11">VENTAS AFECTAS</span></th>
</tr>

<tr style="height:50px;">
  <td colspan="10" style="border: 1px solid black;font-family: Helvetica, Arial, sans-serif;font-size: 10px;text-align: center;margin:20px;height: 95px">
 <?php 
    for ($i=0; $i < sizeof($datos_factura_cantidad); $i++) {
     echo $datos_factura_cantidad[$i]["cantidad_venta"]?><br>
     <?php } ?>     
  </td>
 
  <td colspan="50" style="border: 1px solid black;font-family: Helvetica, Arial, sans-serif;font-size: 10px;text-align: center;margin:20px">
     <?php 
    for ($i=0; $i < sizeof($datos_factura_producto); $i++) {
     echo $datos_factura_producto[$i]["producto"]?><br>
     <?php } ?>    
  </td>
 
  <td colspan="10" style="border: 1px solid black;font-family: Helvetica, Arial, sans-serif;font-size:10px;text-align: center;margin:20px">

    <?php 
    for ($i=0; $i < sizeof($datos_factura_precio_u); $i++) {
     echo "$".number_format(($datos_factura_precio_u[$i]["precio_venta"]),2,".",",");?><br>
     <?php } ?> 
    
  </td>
  <td colspan="10" style="border: 1px solid black">
      
  </td>
  <td colspan="10" style="border: 1px solid black">
      
  </td>
  <td colspan="10" style="border: 1px solid black;font-family: Helvetica, Arial, sans-serif;font-size:10px;text-align: center;margin:20px">

    <?php 
    $subtotal=0;
    for ($i=0; $i < sizeof($datos_factura_subtotal); $i++) {
      $subtotal=$subtotal+$datos_factura_subtotal[$i]["subtotal"];
     echo "$".number_format(($datos_factura_subtotal[$i]["subtotal"]),2,".",",");?><br>

     <?php } ?>
   
  </td>
</tr>

<tr>
  <td colspan="60" rowspan="2" class="stilot1" style="width: 60%;text-align: left">Son: </td>
  <td colspan="10" class="stilot1" style="font-size:8px">SUMAS</td>
  <td colspan="10" class="stilot1"></td>
  <td colspan="10" class="stilot1"></td>
  <td colspan="10" class="stilot1" style="font-size:8px"><?php echo "$".number_format($subtotal,2,".",","); ?></td>
</tr>
<tr>
  <td colspan="20" class="stilot1" style="font-size:8px">VENTA EXENTA</td>
  <td colspan="10" class="stilot1"></td>
  <td colspan="10" class="stilot1"></td>
</tr>
<tr>
  <td colspan="60" class="stilot1" style="font-size:8px">LLENAR SI LA OPERACIÓN IGUAL O MAYOR A $200.00</td>
  <td colspan="20" class="stilot1"></td>
  <td colspan="20" class="stilot1"></td>
</tr>

<tr>
  <td colspan="30" rowspan="4" class="stilot1" style="width: 60%;text-align: left;font-size: 9px">
  Entregado por:<br>
  Nombre:<br>
  DUI:<br>
  Firma:<br>
  </td>
  <td colspan="30" rowspan="4" class="stilot1" style="width: 60%;text-align: left;font-size: 9px">
  Entregado por:<br>
  Nombre:<br>
  DUI:<br>
  Firma:<br>
  </td>
  <td colspan="20" class="stilot1" style="font-size:8px; height:8px">SUBTOTAL</td>
  <td colspan="10" class="stilot1" style="height:8px"></td>
  <td colspan="10" class="stilot1" style="height:8px"></td>
</tr>
<tr>
  <td colspan="20" class="stilot1" style="font-size:8px">(-)IVA RETENIDO</td>
  <td colspan="10" class="stilot1"></td>
  <td colspan="10" class="stilot1"></td>
</tr>
<tr>
  <td colspan="20" class="stilot1" style="font-size:8px">VENTA NO SUJETA</td>
  <td colspan="10" class="stilot1"></td>
  <td colspan="10" class="stilot1"></td>
</tr>
<tr>
  <td colspan="20" class="stilot1" style="font-size:8px"><strong>TOTAL</strong></td>
  <td colspan="20" class="stilot1"><strong><?php echo "$".number_format($subtotal,2,".",",");?></strong></td>
</tr>
</table>
<?php
  for($i=0;$i<sizeof($datos_factura_venta);$i++){
 ?>
<p style="font-size: 10px;text-align: right;">No.Venta:<?php echo $datos_factura_venta[$i]["numero_venta"];?>&nbsp;&nbsp;user:&nbsp;<?php echo $datos_factura_venta[$i]["id_usuario"];?>&nbsp;&nbsp;opto:&nbsp;<?php echo $datos_factura_venta[$i]["optometra"];?>&nbsp;&nbsp;-&nbsp;&nbsp;<?php echo $datos_factura_venta[$i]["fecha_venta"];?>&nbsp;&nbsp;<?php echo $datos_factura_venta[$i]["sucursal"];?></p>
    <?php
  }
?>
</div>

<!--ORIGINAL EMISOR-->
<div style="margin-top: 30px;max-height:100px" >
 <table width="100%">
    <tr>
      <?php

  for($i=0;$i<sizeof($datos_factura_paciente);$i++){

?>
  <td colspan="40" style="color:black;font-size:11px;border: 1px solid white;font-family: Helvetica, Arial, sans-serif;width: 40%"><strong>CLIENTE:</strong> <?php echo $datos_factura_paciente[$i]["nombres"];?></td>

    <td colspan="40" style="color:black;font-size:11px;border: 1px solidwhite;font-family: Helvetica, Arial, sans-serif;width: 40%"><strong>DIRECCION:</strong> <?php echo $datos_factura_paciente[$i]["direccion"];?></td>

    <td colspan="20" style="color:black;font-size:11px;border: 1px solid white;font-family: Helvetica, Arial, sans-serif;width: 40%"><strong>TELEFONO:</strong> <?php echo $datos_factura_paciente[$i]["telefono"];?></td>
    <?php
  }
?>
</tr>
</table>
<table id="table2" width="100%">
<tr>
    <th bgcolor="#0061a9" colspan="10" style="color:white;font-size:8px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;width: 10%"><span class="Estilo11">CANT.</span></th>
    <th bgcolor="#0061a9" colspan="50" style="color:white;font-size:8px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;width: 50%"><span class="Estilo11">DESCRIPCIÓN</span></th>
    <th bgcolor="#0061a9" colspan="10" style="color:white;font-size:8px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;width: 10%"><span class="Estilo11">P/UNITARIO</span></th>
    <th bgcolor="#0061a9" colspan="10" style="color:white;font-size:8px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;width: 10%"><span class="Estilo11">VENTAS NO SUJETAS</span></th>
    <th bgcolor="#0061a9" colspan="10" style="color:white;font-size:8px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;width:10% "><span class="Estilo11">VENTAS EXENTAS</span></th>
    <th bgcolor="#0061a9" colspan="10" style="color:white;font-size:8px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;width: 10%"><span class="Estilo11">VENTAS AFECTAS</span></th>
</tr>

<tr style="height:55px;">
  <td colspan="10" style="border: 1px solid black;font-family: Helvetica, Arial, sans-serif;font-size: 11px;text-align: center;height: 95px">
 <?php 
    for ($i=0; $i < sizeof($datos_factura_cantidad); $i++) {
     echo $datos_factura_cantidad[$i]["cantidad_venta"]?><br>
     <?php } ?>     
  </td>
 
  <td colspan="50" style="border: 1px solid black;font-family: Helvetica, Arial, sans-serif;font-size: 11px;text-align: center">
     <?php 
    for ($i=0; $i < sizeof($datos_factura_producto); $i++) {
     echo $datos_factura_producto[$i]["producto"]?><br>
     <?php } ?>    
  </td>
 
  <td colspan="10" style="border: 1px solid black;font-family: Helvetica, Arial, sans-serif;font-size:11px;text-align: center">

    <?php 
    for ($i=0; $i < sizeof($datos_factura_precio_u); $i++) {
     echo "$".number_format(($datos_factura_precio_u[$i]["precio_venta"]),2,".",",");?><br>
     <?php } ?> 
    
  </td>
  <td colspan="10" style="border: 1px solid black">
      
  </td>
  <td colspan="10" style="border: 1px solid black">
      
  </td>
  <td colspan="10" style="border: 1px solid black;font-family: Helvetica, Arial, sans-serif;font-size:11px;text-align: center">

    <?php 
    $subtotal=0;
    for ($i=0; $i < sizeof($datos_factura_subtotal); $i++) {
      $subtotal=$subtotal+$datos_factura_subtotal[$i]["subtotal"];
      echo "$".number_format(($datos_factura_subtotal[$i]["subtotal"]),2,".",",");?><br>

     <?php } ?>
   
  </td>
</tr>

<tr>
  <td colspan="60" rowspan="2" class="stilot1" style="width: 60%;text-align: left">Son: </td>
  <td colspan="10" class="stilot1" style="font-size:11px">SUMAS</td>
  <td colspan="10" class="stilot1"></td>
  <td colspan="10" class="stilot1"></td>
  <td colspan="10" class="stilot1" style="font-size:11px"><?php echo "$".number_format($subtotal,2,".",","); ?></td>
</tr>
<tr>
  <td colspan="20" class="stilot1" style="font-size:11px">VENTA EXENTA</td>
  <td colspan="10" class="stilot1"></td>
  <td colspan="10" class="stilot1"></td>
</tr>
<tr>
  <td colspan="60" class="stilot1" style="font-size:8px">LLENAR SI LA OPERACIÓN IGUAL O MAYOR A $200.00</td>
  <td colspan="20" class="stilot1"></td>
  <td colspan="20" class="stilot1"></td>
</tr>

<tr>
  <td colspan="30" rowspan="4" class="stilot1" style="width: 60%;text-align: left;font-size: 9px">
  Entregado por:<br>
  Nombre:<br>
  DUI:<br>
  Firma:<br>
  </td>
  <td colspan="30" rowspan="4" class="stilot1" style="width: 60%;text-align: left;font-size: 9px">
  Entregado por:<br>
  Nombre:<br>
  DUI:<br>
  Firma:<br>
  </td>
  <td colspan="20" class="stilot1" style="font-size:10px">SUBTOTAL</td>
  <td colspan="10" class="stilot1"></td>
  <td colspan="10" class="stilot1"></td>
</tr>
<tr>
  <td colspan="20" class="stilot1" style="font-size:8px">(-)IVA RETENIDO</td>
  <td colspan="10" class="stilot1"></td>
  <td colspan="10" class="stilot1"></td>
</tr>
<tr>
  <td colspan="20" class="stilot1" style="font-size:8px">VENTA NO SUJETA</td>
  <td colspan="10" class="stilot1"></td>
  <td colspan="10" class="stilot1"></td>
</tr>
<tr>
  <td colspan="20" class="stilot1" style="font-size:10px"><strong>TOTAL</strong></td>
  <td colspan="20" class="stilot1"><strong><?php echo "$".number_format($subtotal,2,".",",");?></strong></td>
</tr>
</table>
<?php
  for($i=0;$i<sizeof($datos_factura_venta);$i++){
 ?>
<p style="font-size: 10px;text-align: right;">No.Venta:<?php echo $datos_factura_venta[$i]["numero_venta"];?>&nbsp;&nbsp;user:&nbsp;<?php echo $datos_factura_venta[$i]["id_usuario"];?>&nbsp;&nbsp;opto:&nbsp;<?php echo $datos_factura_venta[$i]["optometra"];?>&nbsp;&nbsp;-&nbsp;&nbsp;<?php echo $datos_factura_venta[$i]["fecha_venta"];?>&nbsp;&nbsp;<?php echo $datos_factura_venta[$i]["sucursal"];?></p>
    <?php
  }
?>
</div>


</body>
</html>
<?php
$salida_html = ob_get_contents();

  //$user=$_SESSION["id_usuario"];

  ob_end_clean();
$dompdf = new Dompdf();
$dompdf->loadHtml($salida_html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('letter', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
//$dompdf->stream();
$dompdf->stream('document', array('Attachment'=>'0'));
?>