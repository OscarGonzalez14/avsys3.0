<?php ob_start();
use Dompdf\Dompdf;
use Dompdf\Options;

require_once 'dompdf/autoload.inc.php';

require_once("modelos/Reporteria.php");
$reporteria=new Reporteria();
$id_paciente =$_GET["id_paciente"];
$n_venta =$_GET["n_venta"];
$n_recibo =$_GET["n_recibo"];
$datos_recibo = $reporteria->print_recibo_paciente($_GET["n_recibo"],$_GET["n_venta"],$_GET["id_paciente"]);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
   <style>
      html{
        margin-top: 10px;
        margin-left: 30px;
        margin-right:20px; 
        margin-bottom: 0px;
    }
    .stilot1{
       border: 1px solid black;
       padding: 5px;
       font-size: 12px;
       font-family: Helvetica, Arial, sans-serif;
    }

    .stilot2{
       border: 1px solid black;
       text-align: center;
       font-size: 12px;
       font-family: Helvetica, Arial, sans-serif;
    }
    .stilot3{
       text-align: center;
       font-size: 12px;
       font-family: Helvetica, Arial, sans-serif;
    }

    .table2 {
       border-collapse: collapse;
    }
   </style>
  </head>
  <body>
<table style="width: 100%;margin-top:10px">
<tr>
<td width="10%"><img src="images/logooficial.jpg" width="180" height="100"  /></td>

<td width="70%">
<table style="width:95%;">

 <tr>
    <td style="text-align:center; font-size:20px";font-family: Helvetica, Arial, sans-serif;><strong>OPTICA AVPLUS S.A de C.V.</strong></td>
  </tr>

  <tr>
    <td style="text-align:center; font-size:14px;font-family: Helvetica, Arial, sans-serif;"><strong>GIRO: </strong>OTROS SERVICIO RELACIONADOS CON LA SALUD</td>
  </tr>
  <tr>
    <td style="text-align:center; font-size:11px;font-family: Helvetica, Arial, sans-serif;">Boulevard de los Heroes. Centro Comercial Metrocentro Local#7 San Salvador&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="date"></span></td>
  </tr>
  <tr>
    <td style="text-align:center; font-size:11px;font-family: Helvetica, Arial, sans-serif;"><span><strong>Telefono:</strong> 2260-1653&nbsp;&nbsp;&nbsp;</span><span><strong>Whatsapp:</strong> 7469-2542&nbsp;&nbsp;&nbsp;<br></span>E-mail: metrocentro@opticaavplussv.com</td>
  </tr>


</table><!--fin segunda tabla-->
</td>
<td width="35%">
<table>

  <tr>
    <td style="text-align:right; font-size:12px"><strong>RECIBO</strong></td>
  </tr>
  <tr>
    <td style="color:red;text-align:right; font-size:14px"><strong >No.&nbsp;<span><?php echo $n_recibo;?></strong></td>
  </tr>

</table><!--fin segunda tabla-->
</td> <!--fin segunda columna-->
</tr>
</table>

<div style="height:420px;width:100%;margin-top:0px;"><!--Cliente--->
  <table width="100%" class="table2">

<tr>
    <th bgcolor="#0061a9" colspan="30" style="color:white;font-size:12px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;width:30%"><span class="Estilo11">RECIBI DE</span></th>
    <th bgcolor="#0061a9" colspan="30" style="color:white;font-size:12px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;width:30%"><span class="Estilo11">SERVICIO PARA</span></th>
    <th bgcolor="#0061a9" colspan="20" style="color:white;font-size:12px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;width:20%"><span class="Estilo11">EMPRESA</span></th>
    <th bgcolor="#0061a9" colspan="20" style="color:white;font-size:12px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;width:20%"><span class="Estilo11">FECHA</span></th>
</tr>

<?php

  for($i=0;$i<sizeof($datos_recibo);$i++){

?>

<tr style="font-size:12px" class="even_row">
    <td style="text-align: center;width:30%" colspan="30" class="stilot1"><?php echo $datos_recibo[$i]["recibi_de"];?></td>
    <td style="text-align: center;width:30%" colspan="30" class="stilot1"><span class=""><?php echo $datos_recibo[$i]["servicio_para"];?></span></td>
    <td style="text-align: center;width:20%" colspan="20" class="stilot1"><span class=""><?php echo $datos_recibo[$i]["empresa"];?></span></td>
    <td style="text-align: center;width:20%" colspan="20" class="stilot1"><span class=""><span style="text-align:center; font-size:12px"><?php date_default_timezone_set('America/El_Salvador'); $hoy = date("d-m-Y H:i:s"); echo $hoy; ?></span></td>
    <?php echo $datos_recibo[$i]["telefono"];?></span>

</tr>
</table>
<table width="100%" class="table2">
<tr>
    <td class="stilot1" colspan="60" style="width: 60%;text-align: center;color:white" bgcolor="#0061a9"><strong>CANTIDAD EN LETRAS: </strong> </span></td>
    <td class="stilot1" colspan="25" bgcolor="#0061a9" style="color: white;font-size:12px;text-align:center;width:20%">TELEFONO</td>
    <td class="stilot1" colspan="25" bgcolor="#0061a9" style="color: white;font-size:12px;text-align:center;width:20%">PROX. ABONO</td>    
  </tr>
  <tr>
    <td class="stilot1" colspan="60" style="width: 60%;text-align: center;"><?php echo $datos_recibo[$i]["cant_letras"];?></td>
    <td class="stilot1" colspan="25" style="text-align:center"><span style="text-align:center; font-size:12px"><?php echo $datos_recibo[$i]["telefono"];?></span></td>
    <td class="stilot1" colspan="25" style="text-align:center"><?php echo $datos_recibo[$i]["prox_abono"];?></td>
  </tr>
</table>

<table width="100%" class="table2">
  <tr>
    <td  colspan="100" style="border: white 1px solid;"></td>

</tr>
<tr>
    <th bgcolor="#0061a9" colspan="20" style="font-size:12px;border:#0061a9 1px solid;color:white;font-family: Helvetica, Arial, sans-serif;width: 20%"><span class="Estilo11">MONTO</span></th>
    <th bgcolor="#0061a9" colspan="20" style="font-size:12px;border:#0061a9 1px solid;color:white;font-family: Helvetica, Arial, sans-serif;width: 20%"><span class="Estilo11">ABONO ANT.</span></th>
    <th bgcolor="#0061a9" colspan="20" style="font-size:12px;border:#0061a9 1px solid;color:white;font-family: Helvetica, Arial, sans-serif;width: 20%"><span class="Estilo11">ABONO ACTUAL</span></th>
    <th bgcolor="#0061a9" colspan="20" style="font-size:12px;border:#0061a9 1px solid;color:white;font-family: Helvetica, Arial, sans-serif;width: 20%"><span class="Estilo11">SALDO</span></th>
    <th bgcolor="#0061a9" colspan="20" style="font-size:12px;border:#0061a9 1px solid;color:white;font-family: Helvetica, Arial, sans-serif;width: 20%"><span class="Estilo11">FORMA DE PAGO</span></th>
</tr>

<tr style="font-size:10pt" class="even_row">
    <td style="text-align: center;width: 20%" colspan="20" class="stilot1"><span class=""><?php echo "$ ".$datos_recibo[$i]["monto"];?></span></td>
    <td style="text-align: center" colspan="20" class="stilot1"><span class=""><?php echo "$".number_format($datos_recibo[$i]["a_anteriores"],2,".",",");?></span></td>

    <td style="text-align: center;width: 20%" colspan="20" class="stilot1"><span class=""><?php echo "$ ".number_format($datos_recibo[$i]["abono_act"],2,".",",");?></span></td>
    <td style="text-align: center;width: 20%" colspan="20" class="stilot1"><span class=""><?php echo "$ ".$datos_recibo[$i]["saldo"];?></span></td>
    <td style="text-align: center;width: 20%" colspan="20" class="stilot1"><span class=""><?php echo $datos_recibo[$i]["forma_pago"];?></span></td>
</tr>
</table><br>
<table  width="100%" class="table2">
  <tr>
    <th bgcolor="#C8C8C8" colspan="34" style="font-size:12px;border:#0061a9 1px solid;color:black;font-family: Helvetica, Arial, sans-serif;width: 34%"><span class="Estilo11">MARCA ARO</span></th>
    <th bgcolor="#C8C8C8" colspan="33" style="font-size:12px;border:#0061a9 1px solid;color:black;font-family: Helvetica, Arial, sans-serif;width: 33%"><span class="Estilo11">MODELO</span></th>
    <th bgcolor="#C8C8C8" colspan="33" style="font-size:12px;border:#0061a9 1px solid;color:black;font-family: Helvetica, Arial, sans-serif;width: 33%"><span class="Estilo11">COLOR</span></th>
</tr>
<tr style="font-size:10pt" class="even_row">
    <td style="text-align: center" colspan="34" class="stilot1"><span class=""><span style="color:white">.</span><?php echo $datos_recibo[$i]["marca_aro"];?></span></td>
    <td style="text-align: center" colspan="33" class="stilot1"><span class=""><span style="color:white">.</span><?php echo $datos_recibo[$i]["modelo_aro"];?></span></td>
    <td style="text-align: center" colspan="33" class="stilot1"><span class=""><span style="color:white">.</span><?php echo $datos_recibo[$i]["color_aro"];?></span></td>
</tr>
 <tr>
    <th bgcolor="#C8C8C8" colspan="34" style="font-size:12px;border:#0061a9 1px solid;color:black;font-family: Helvetica, Arial, sans-serif;width: 34%"><span class="Estilo11">LENTE</span></th>
    <th bgcolor="#C8C8C8" colspan="33" style="font-size:12px;border:#0061a9 1px solid;color:black;font-family: Helvetica, Arial, sans-serif;width: 33%"><span class="Estilo11">AR</span></th>
    <th bgcolor="#C8C8C8" colspan="33" style="font-size:12px;border:#0061a9 1px solid;color:black;font-family: Helvetica, Arial, sans-serif;width: 33%"><span class="Estilo11">PHOTOSENSIBLE</span></th>
</tr>
<tr style="font-size:10pt" class="even_row">
    <td style="text-align: center" colspan="34" class="stilot1"><span class=""><span style="color:white">.</span><?php echo $datos_recibo[$i]["lente"];?></span></td>
    <td style="text-align: center" colspan="33" class="stilot1"><span class=""><span style="color:white">.</span><?php echo $datos_recibo[$i]["anti_r"];?></span></td>
    <td style="text-align: center" colspan="33" class="stilot1"><span class=""><span style="color:white">.</span><?php echo $datos_recibo[$i]["photo"];?></span></td>
</tr>
<tr style="font-size:10pt" class="even_row">
    <td style="text-align: left;" colspan="100" class="stilot1"><span class="">OBSERVACIONES:&nbsp;<?php echo $datos_recibo[$i]["observaciones"];?></span></td>
    
</tr>
<tr>
    <td  colspan="100" style="border: white 1px solid;padding: 5px"></td>

</tr>
<tr>
    <td  colspan="100" class="stilot3"><span>Nota: Yo&nbsp;<?php echo $datos_recibo[$i]["recibi_de"];?>: Declaro que me fue explicada de forma detallada y explícita las caracteristicas del aro,lentes,accesorios o tratamientos que estoy adquiriendo con el servicio recibido de lo cual firmo conforme. </span></td>
</tr>
<tr>
    <td  colspan="100" style="border: white 1px solid;padding: 5px">.</td>

</tr>
<tr>
    <td  colspan="40" class="stilot3">Firma paciente:___________________________</td>
    <td  colspan="30" class="stilot3"><div align="center"><span class=""><?php echo "Asesor:".": ".$datos_recibo[$i]["id_usuario"];?></span></div></td>
    <td  colspan="30" class="stilot3"><?php echo $datos_recibo[$i]["numero_venta"];?></span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px"><strong>Original: Emisor</strong></span></td>
</tr>

</table>
<?php
  }
?>
</div><!--Fin primera parte-->

<!--**///////////////SEGUNDA PARTE-->
<table style="width: 100%;margin-top:0px">
  <tr>
    <td><span style="color: white">H</span></td>
  </tr>
<tr>
<td width="10%"><img src="images/logooficial.jpg" width="180" height="100"  /></td>

<td width="70%">
<table style="width:95%;">

 <tr>
    <td style="text-align:center; font-size:20px";font-family: Helvetica, Arial, sans-serif;><strong>OPTICA AVPLUS S.A de C.V.</strong></td>
  </tr>

  <tr>
    <td style="text-align:center; font-size:14px;font-family: Helvetica, Arial, sans-serif;"><strong>GIRO: </strong>OTROS SERVICIO RELACIONADOS CON LA SALUD</td>
  </tr>
  <tr>
    <td style="text-align:center; font-size:11px;font-family: Helvetica, Arial, sans-serif;">Boulevard de los Heroes. Centro Comercial Metrocentro Local#7 San Salvador&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="date"></span></td>
  </tr>
  <tr>
   <td style="text-align:center; font-size:11px;font-family: Helvetica, Arial, sans-serif;"><span><strong>Telefono:</strong> 2260-1653&nbsp;&nbsp;&nbsp;</span><span><strong>Whatsapp:</strong> 7469-2542&nbsp;&nbsp;&nbsp;<br></span>E-mail: metrocentro@opticaavplussv.com</td>
  </tr>


</table><!--fin segunda tabla-->
</td>
<td width="35%">
<table>

  <tr>
    <td style="text-align:right; font-size:12px"><strong>RECIBO</strong></td>
  </tr>
  <tr>
    <td style="color:red;text-align:right; font-size:14px"><strong >No.&nbsp;<span><?php echo $n_recibo;?></strong></td>
  </tr>

</table><!--fin segunda tabla-->
</td> <!--fin segunda columna-->
</tr>
</table>

<div style="height:400px;width:100%;margin-top:0px;"><!--Cliente--->
 <table width="100%" class="table2">

<tr>
    <th bgcolor="#0061a9" colspan="30" style="color:white;font-size:12px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;width:30%"><span class="Estilo11">RECIBI DE</span></th>
    <th bgcolor="#0061a9" colspan="30" style="color:white;font-size:12px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;width:30%"><span class="Estilo11">SERVICIO PARA</span></th>
    <th bgcolor="#0061a9" colspan="20" style="color:white;font-size:12px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;width:20%"><span class="Estilo11">EMPRESA</span></th>
    <th bgcolor="#0061a9" colspan="20" style="color:white;font-size:12px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;width:20%"><span class="Estilo11">FECHA</span></th>
</tr>

<?php

  for($i=0;$i<sizeof($datos_recibo);$i++){

?>

<tr style="font-size:12px" class="even_row">
    <td style="text-align: center;width:30%" colspan="30" class="stilot1"><?php echo $datos_recibo[$i]["recibi_de"];?></td>
    <td style="text-align: center;width:30%" colspan="30" class="stilot1"><span class=""><?php echo $datos_recibo[$i]["servicio_para"];?></span></td>
    <td style="text-align: center;width:20%" colspan="20" class="stilot1"><span class=""><?php echo $datos_recibo[$i]["empresa"];?></span></td>
    <td style="text-align: center;width:20%" colspan="20" class="stilot1"><span class=""><span style="text-align:center; font-size:12px"><?php date_default_timezone_set('America/El_Salvador'); $hoy = date("d-m-Y H:i:s"); echo $hoy; ?></span></td>
    <?php echo $datos_recibo[$i]["telefono"];?></span>

</tr>
</table>
<table width="100%" class="table2">
<tr>
    <td class="stilot1" colspan="60" style="width: 60%;text-align: center;color:white" bgcolor="#0061a9"><strong>CANTIDAD EN LETRAS: </strong> </span></td>
    <td class="stilot1" colspan="25" bgcolor="#0061a9" style="color: white;font-size:12px;text-align:center;width:20%">TELEFONO</td>
    <td class="stilot1" colspan="25" bgcolor="#0061a9" style="color: white;font-size:12px;text-align:center;width:20%">PROX. ABONO</td>    
  </tr>
  <tr>
    <td class="stilot1" colspan="60" style="width: 60%;text-align: center;"><?php echo $datos_recibo[$i]["cant_letras"];?></td>
    <td class="stilot1" colspan="25" style="text-align:center"><span style="text-align:center; font-size:12px"><?php echo $datos_recibo[$i]["telefono"];?></span></td>
    <td class="stilot1" colspan="25" style="text-align:center"><?php echo $datos_recibo[$i]["prox_abono"];?></td>
  </tr>
</table>

<table width="100%" class="table2">
  <tr>
    <td  colspan="100" style="border: white 1px solid;"></td>

</tr>
<tr>
    <th bgcolor="#0061a9" colspan="20" style="font-size:12px;border:#0061a9 1px solid;color:white;font-family: Helvetica, Arial, sans-serif;width: 20%"><span class="Estilo11">MONTO</span></th>
    <th bgcolor="#0061a9" colspan="20" style="font-size:12px;border:#0061a9 1px solid;color:white;font-family: Helvetica, Arial, sans-serif;width: 20%"><span class="Estilo11">ABONO ANT.</span></th>
    <th bgcolor="#0061a9" colspan="20" style="font-size:12px;border:#0061a9 1px solid;color:white;font-family: Helvetica, Arial, sans-serif;width: 20%"><span class="Estilo11">ABONO ACTUAL</span></th>
    <th bgcolor="#0061a9" colspan="20" style="font-size:12px;border:#0061a9 1px solid;color:white;font-family: Helvetica, Arial, sans-serif;width: 20%"><span class="Estilo11">SALDO</span></th>
    <th bgcolor="#0061a9" colspan="20" style="font-size:12px;border:#0061a9 1px solid;color:white;font-family: Helvetica, Arial, sans-serif;width: 20%"><span class="Estilo11">FORMA DE PAGO</span></th>
</tr>

<tr style="font-size:10pt" class="even_row">
    <td style="text-align: center;width: 20%" colspan="20" class="stilot1"><span class=""><?php echo "$ ".$datos_recibo[$i]["monto"];?></span></td>
    <td style="text-align: center" colspan="20" class="stilot1"><span class=""><?php echo "$".number_format($datos_recibo[$i]["a_anteriores"],2,".",",");?></span></td>

    <td style="text-align: center;width: 20%" colspan="20" class="stilot1"><span class=""><?php echo "$ ".number_format($datos_recibo[$i]["abono_act"],2,".",",");?></span></td>
    <td style="text-align: center;width: 20%" colspan="20" class="stilot1"><span class=""><?php echo "$ ".$datos_recibo[$i]["saldo"];?></span></td>
    <td style="text-align: center;width: 20%" colspan="20" class="stilot1"><span class=""><?php echo $datos_recibo[$i]["forma_pago"];?></span></td>
</tr>
</table><br>
<table  width="100%" class="table2">
  <tr>
    <th bgcolor="#C8C8C8" colspan="34" style="font-size:12px;border:#0061a9 1px solid;color:black;font-family: Helvetica, Arial, sans-serif;width: 34%"><span class="Estilo11">MARCA ARO</span></th>
    <th bgcolor="#C8C8C8" colspan="33" style="font-size:12px;border:#0061a9 1px solid;color:black;font-family: Helvetica, Arial, sans-serif;width: 33%"><span class="Estilo11">MODELO</span></th>
    <th bgcolor="#C8C8C8" colspan="33" style="font-size:12px;border:#0061a9 1px solid;color:black;font-family: Helvetica, Arial, sans-serif;width: 33%"><span class="Estilo11">COLOR</span></th>
</tr>
<tr style="font-size:10pt" class="even_row">
    <td style="text-align: center" colspan="34" class="stilot1"><span class=""><span style="color:white">.</span><?php echo $datos_recibo[$i]["marca_aro"];?></span></td>
    <td style="text-align: center" colspan="33" class="stilot1"><span class=""><span style="color:white">.</span><?php echo $datos_recibo[$i]["modelo_aro"];?></span></td>
    <td style="text-align: center" colspan="33" class="stilot1"><span class=""><span style="color:white">.</span><?php echo $datos_recibo[$i]["color_aro"];?></span></td>
</tr>
 <tr>
    <th bgcolor="#C8C8C8" colspan="34" style="font-size:12px;border:#0061a9 1px solid;color:black;font-family: Helvetica, Arial, sans-serif;width: 34%"><span class="Estilo11">LENTE</span></th>
    <th bgcolor="#C8C8C8" colspan="33" style="font-size:12px;border:#0061a9 1px solid;color:black;font-family: Helvetica, Arial, sans-serif;width: 33%"><span class="Estilo11">AR</span></th>
    <th bgcolor="#C8C8C8" colspan="33" style="font-size:12px;border:#0061a9 1px solid;color:black;font-family: Helvetica, Arial, sans-serif;width: 33%"><span class="Estilo11">PHOTOSENSIBLE</span></th>
</tr>
<tr style="font-size:10pt" class="even_row">
    <td style="text-align: center" colspan="34" class="stilot1"><span class=""><span style="color:white">.</span><?php echo $datos_recibo[$i]["lente"];?></span></td>
    <td style="text-align: center" colspan="33" class="stilot1"><span class=""><span style="color:white">.</span><?php echo $datos_recibo[$i]["anti_r"];?></span></td>
    <td style="text-align: center" colspan="33" class="stilot1"><span class=""><span style="color:white">.</span><?php echo $datos_recibo[$i]["photo"];?></span></td>
</tr>
<tr style="font-size:10pt" class="even_row">
    <td style="text-align: left;" colspan="100" class="stilot1"><span class="">OBSERVACIONES:&nbsp;<?php echo $datos_recibo[$i]["observaciones"];?></span></td>
    
</tr>

<tr>
    <td  colspan="100" class="stilot3"><span>Nota: Yo&nbsp;<?php echo $datos_recibo[$i]["recibi_de"];?>: Declaro que me fue explicada de forma detallada y explícita las caracteristicas del aro,lentes,accesorios o tratamientos que estoy adquiriendo con el servicio recibido de lo cual firmo conforme. </span></td>
</tr>
<tr>
  <td><span style="color:white">.</span>
  </td>
</tr>
<tr>
    <td  colspan="40" class="stilot3">Firma paciente:___________________________</td>
    <td  colspan="30" class="stilot3"><div align="center"><span class=""><?php echo "Asesor:".": ".$datos_recibo[$i]["id_usuario"];?></span></div></td>
    <td  colspan="30" class="stilot3"><?php echo $datos_recibo[$i]["numero_venta"];?></span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px"><strong>Duplicado: Cliente</strong></span></td>
</tr>
</table>
<?php
  }
?>
</div><!--Fin primera parte-->
</body>
</html>
<?php
$salida_html = ob_get_contents();

  //$user=$_SESSION["id_usuario"];

  ob_end_clean();
$dompdf = new Dompdf();
$dompdf->loadHtml($salida_html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
//$dompdf->stream();
$dompdf->stream('document', array('Attachment'=>'0'));
?>