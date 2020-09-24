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
<table style="width: 100%;margin-top:25px">
<tr>
<td width="10%"><h1 style="text-align: left; margin-right:2px;"><img src="images/logooficial.jpg" width="150" height="80"  /></h1></td>

<td width="70%">
<table style="width:95%;">

 <tr>
    <td style="text-align:center; font-size:11px";font-family: Helvetica, Arial, sans-serif;><strong>OPTICA AVPLUS S.A de C.V.</strong></td>
  </tr>

  <tr>
    <td style="text-align:center; font-size:11px;font-family: Helvetica, Arial, sans-serif;"><strong>GIRO: </strong>OTROS SERVICIO RELACIONADOS CON LA SALUD</td>
  </tr>
  <tr>
    <td style="text-align:center; font-size:11px;font-family: Helvetica, Arial, sans-serif;">Boulevard de los Heroes. Centro Comercial Metrocentro Local#7 San Salvador&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="date"></span></td>
  </tr>
  <tr>
    <td style="text-align:center; font-size:11px;font-family: Helvetica, Arial, sans-serif;"><span>Telefonos: 2260-1653&nbsp;&nbsp;&nbsp;</span>E-mail: metrocentro@opticaavplussv.com<br><span style="text-align:center; font-size:11px"><?php date_default_timezone_set('America/El_Salvador'); $hoy = date("d-m-Y H:i:s"); echo $hoy; ?></span></td>
  </tr>


</table><!--fin segunda tabla-->
</td>
<td width="35%">
<table>

  <tr>
    <td style="text-align:right; font-size:12px"><strong>RECIBO</strong></td>
  </tr>
  <tr>
    <td style="color:red;text-align:right; font-size:12px"><strong >No.&nbsp;<span><?php echo $n_recibo;?></strong></td>
  </tr>

</table><!--fin segunda tabla-->
</td> <!--fin segunda columna-->
</tr>
</table>

<div style="height:420px;width:100%;margin-top:0px;"><!--Emisor--->
	
<table width="100%" id="table2">

<tr>
    <th bgcolor="#0061a9" colspan="30" style="color:white;font-size:12px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;"><span class="Estilo11">RECIBI DE</span></th>
    <th bgcolor="#0061a9" colspan="30" style="color:white;font-size:12px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;"><span class="Estilo11">SERVICIO PARA</span></th>
    <th bgcolor="#0061a9" colspan="40" style="color:white;font-size:12px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;"><span class="Estilo11">EMPRESA</span></th>
</tr>


<?php

  for($i=0;$i<sizeof($datos_recibo);$i++){

?>

<tr style="font-size:10pt" class="even_row">
    <td style="text-align: center" colspan="30" class="stilot1"><?php echo $datos_recibo[$i]["recibi_de"];?></td>
    <td style="text-align: center" colspan="30" class="stilot1"><div align="center"><span class=""><?php echo $datos_recibo[$i]["servicio_para"];?></span></div></td>
    <td style="text-align: right" colspan="40" class="stilot1"><div align="center"><span class=""><?php echo $datos_recibo[$i]["empresa"];?></span></div></td>
</tr>

<tr>
    <td style="text-align: left" colspan="60" class="stilot1"><span style="font-size: 12px"><strong>CANTIDAD EN LETRAS: </strong> <?php echo $datos_recibo[$i]["cant_letras"];?></span></td>
    <td colspan="40" class="stilot1"><span class="" style="font-size: 12px;text-align: left !important;"><strong>PROXIMO ABONO: </strong><?php echo $datos_recibo[$i]["prox_abono"];?></span></td>
</tr>

<tr>
    <td  colspan="100" style="border: white 1px solid;padding: 5px"></td>

</tr>
<tr>
    <th bgcolor="#0061a9" colspan="19" style="font-size:12px;border:#0061a9 1px solid;color:white;font-family: Helvetica, Arial, sans-serif;"><span class="Estilo11">MONTO</span></th>
    <th bgcolor="#0061a9" colspan="19" style="font-size:12px;border:#0061a9 1px solid;color:white;font-family: Helvetica, Arial, sans-serif;"><span class="Estilo11">ABONO ANT.</span></th>
    <th bgcolor="#0061a9" colspan="19" style="font-size:12px;border:#0061a9 1px solid;color:white;font-family: Helvetica, Arial, sans-serif;"><span class="Estilo11">ABONO ACTUAL</span></th>
    <th bgcolor="#0061a9" colspan="19" style="font-size:12px;border:#0061a9 1px solid;color:white;font-family: Helvetica, Arial, sans-serif;"><span class="Estilo11">SALDO</span></th>
    <th bgcolor="#0061a9" colspan="24" style="font-size:12px;border:#0061a9 1px solid;color:white;font-family: Helvetica, Arial, sans-serif;"><span class="Estilo11">FORMA DE PAGO</span></th>
</tr>

<tr style="font-size:10pt" class="even_row">
    <td style="text-align: center" colspan="19" class="stilot1"><span class=""><?php echo "$ ".$datos_recibo[$i]["monto"];?></span></td>
    <td style="text-align: center" colspan="19" class="stilot1"><span class=""><?php echo $datos_recibo[$i]["a_anteriores"];?></span></td>
    <td style="text-align: center" colspan="19" class="stilot1"><span class=""><?php echo "$ ".$datos_recibo[$i]["abono_act"];?></span></td>
    <td style="text-align: center" colspan="19" class="stilot1"><span class=""><?php echo "$ ".$datos_recibo[$i]["saldo"];?></span></td>
    <td style="text-align: center" colspan="24" class="stilot1"><span class=""><?php echo $datos_recibo[$i]["forma_pago"];?></span></td>
</tr>

<tr style="font-size:10pt" class="even_row">
    <td style="text-align: center" colspan="19" class="stilot1"><span class="">Marca Aro</span></td>
    <td style="text-align: center;color:#034f84;font-size:11px" colspan="19" class="stilot1"><span class=""><strong><?php echo $datos_recibo[$i]["marca_aro"];?></strong></span></td>
    <td style="text-align: center" colspan="19" class="stilot1"><span class="">Modelo</span></td>
    <td style="text-align: center;color:#034f84;font-size:11px" colspan="19" class="stilot1"><span class=""><strong><?php echo $datos_recibo[$i]["modelo_aro"];?></strong></span></td>
    <td style="text-align: center" colspan="8" class="stilot1"><span class="">Color</span></td>
    <td style="text-align: center;color:#034f84;font-size:11px" colspan="16" class="stilot1"><span class=""><strong><?php echo $datos_recibo[$i]["color_aro"];?></strong></span></td>
</tr>

<tr class="even_row" style="font-size:10pt">
  <td style="text-align: center;background:#D0D0D0;font-size:11px" colspan="8" class="stilot1"><span class="">LENTE:</span></td>
  <td colspan="30" class="stilot2">&nbsp;<?php echo ucfirst($datos_recibo[$i]["lente"]);?></td>
  <td style="text-align: center;background:#D0D0D0;font-size:11px" colspan="4" class="stilot1"><span class="">AR:</span></td>
  <td colspan="30" class="stilot2">&nbsp;<?php echo ucfirst($datos_recibo[$i]["anti_r"]);?></td>
  <td style="text-align: center;background:#D0D0D0;font-size:11px" colspan="4" class="stilot1"><span class="">PHOTO:</span></td>
  <td colspan="24" class="stilot2">&nbsp;<?php echo ucfirst($datos_recibo[$i]["photo"]);?></td>
</tr>

<tr>
    <td style="text-align: center" colspan="19" class="stilot1"><div align="center"><span>OBSERVACIONES</span></div></td>
    <td style="text-align: center" colspan="81" class="stilot1"><span class=""><?php echo $datos_recibo[$i]["observaciones"];?></span></td>
</tr>

<tr>
    <td  colspan="100" style="border: white 1px solid;padding: 5px"></td>

</tr>
<tr>
    <td  colspan="100" class="stilot3"><span>Nota: Yo&nbsp;<?php echo $datos_recibo[$i]["recibi_de"];?>: Declaro que me fue explicada de forma detallada y explícita las caracteristicas del aro,lentes,accesorios o tratamientos que estoy adquiriendo con el servicio recibido de lo cual firmo conforme. </span></td>
</tr>
<tr>
    <td  colspan="100" style="border: white 1px solid;padding: 5px"></td>

</tr>
<tr>
    <td  colspan="40" class="stilot3">Firma paciente:___________________________</td>
    <td  colspan="30" class="stilot3"><div align="center"><span class=""><?php echo "Asesor:".": ".$datos_recibo[$i]["id_usuario"];?></span></div></td>
    <td  colspan="30" class="stilot3"><?php echo $datos_recibo[$i]["numero_venta"];?></span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px"><strong>Original: Emisor</strong></span></td>
</tr>
<?php
  }
?>
</table>
	
</div><!--Fin Emisor--->
<span style="text-align: center">

<table style="width: 100%;">
<tr>
<td width="10%"><h1 style="text-align: left; margin-right:2px;"><img src="images/logooficial.jpg" width="150" height="80"  /></h1></td>

<td width="70%">
<table style="width:95%;">

 <tr>
    <td style="text-align:center; font-size:11px";font-family: Helvetica, Arial, sans-serif;><strong>OPTICA AVPLUS S.A de C.V.</strong></td>
  </tr>

  <tr>
    <td style="text-align:center; font-size:11px;font-family: Helvetica, Arial, sans-serif;"><strong>GIRO: </strong>OTROS SERVICIO RELACIONADOS CON LA SALUD</td>
  </tr>
  <tr>
    <td style="text-align:center; font-size:11px;font-family: Helvetica, Arial, sans-serif;">Boulevard de los Heroes. Centro Comercial Metrocentro Local#7 San Salvador&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="date"></span></td>
  </tr>
  <tr>
    <td style="text-align:center; font-size:11px;font-family: Helvetica, Arial, sans-serif;"><span>Telefonos: 2260-1653&nbsp;&nbsp;&nbsp;</span>E-mail: metrocentro@opticaavplussv.com<br><span style="text-align:center; font-size:11px"><?php date_default_timezone_set('America/El_Salvador'); $hoy = date("d-m-Y H:i:s"); echo $hoy; ?></span></td>
  </tr>


</table><!--fin segunda tabla-->
</td>
<td width="35%">
<table>

  <tr>
    <td style="text-align:right; font-size:12px"><strong>RECIBO</strong></td>
  </tr>
  <tr>
    <td style="color:red;text-align:right; font-size:12px"><strong >No.&nbsp;<span><?php echo $n_recibo;?></strong></td>
  </tr>

</table><!--fin segunda tabla-->
</td> <!--fin segunda columna-->
</tr>
</table>

<div style="height:420px;width:100%;margin-top:0px;"><!--Emisor--->
  
<table width="100%" id="table2">

<tr>
    <th bgcolor="#0061a9" colspan="30" style="color:white;font-size:12px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;"><span class="Estilo11">RECIBI DE</span></th>
    <th bgcolor="#0061a9" colspan="30" style="color:white;font-size:12px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;"><span class="Estilo11">SERVICIO PARA</span></th>
    <th bgcolor="#0061a9" colspan="40" style="color:white;font-size:12px;border: 1px solid #034f84;font-family: Helvetica, Arial, sans-serif;"><span class="Estilo11">EMPRESA</span></th>
</tr>


<?php

  for($i=0;$i<sizeof($datos_recibo);$i++){

?>

<tr style="font-size:10pt" class="even_row">
    <td style="text-align: center" colspan="30" class="stilot1"><?php echo $datos_recibo[$i]["recibi_de"];?></td>
    <td style="text-align: center" colspan="30" class="stilot1"><div align="center"><span class=""><?php echo $datos_recibo[$i]["servicio_para"];?></span></div></td>
    <td style="text-align: right" colspan="40" class="stilot1"><div align="center"><span class=""><?php echo $datos_recibo[$i]["empresa"];?></span></div></td>
</tr>

<tr>
    <td style="text-align: left" colspan="60" class="stilot1"><span style="font-size: 12px"><strong>CANTIDAD EN LETRAS: </strong> <?php echo $datos_recibo[$i]["cant_letras"];?></span></td>
    <td colspan="40" class="stilot1"><span class="" style="font-size: 12px;text-align: left !important;"><strong>PROXIMO ABONO: </strong><?php echo $datos_recibo[$i]["prox_abono"];?></span></td>
</tr>

<tr>
    <td  colspan="100" style="border: white 1px solid;padding: 5px"></td>

</tr>
<tr>
    <th bgcolor="#0061a9" colspan="19" style="font-size:12px;border:#0061a9 1px solid;color:white;font-family: Helvetica, Arial, sans-serif;"><span class="Estilo11">MONTO</span></th>
    <th bgcolor="#0061a9" colspan="19" style="font-size:12px;border:#0061a9 1px solid;color:white;font-family: Helvetica, Arial, sans-serif;"><span class="Estilo11">ABONO ANT.</span></th>
    <th bgcolor="#0061a9" colspan="19" style="font-size:12px;border:#0061a9 1px solid;color:white;font-family: Helvetica, Arial, sans-serif;"><span class="Estilo11">ABONO ACTUAL</span></th>
    <th bgcolor="#0061a9" colspan="19" style="font-size:12px;border:#0061a9 1px solid;color:white;font-family: Helvetica, Arial, sans-serif;"><span class="Estilo11">SALDO</span></th>
    <th bgcolor="#0061a9" colspan="24" style="font-size:12px;border:#0061a9 1px solid;color:white;font-family: Helvetica, Arial, sans-serif;"><span class="Estilo11">FORMA DE PAGO</span></th>
</tr>

<tr style="font-size:10pt" class="even_row">
    <td style="text-align: center" colspan="19" class="stilot1"><span class=""><?php echo "$ ".$datos_recibo[$i]["monto"];?></span></td>
    <td style="text-align: center" colspan="19" class="stilot1"><span class=""><?php echo $datos_recibo[$i]["a_anteriores"];?></span></td>
    <td style="text-align: center" colspan="19" class="stilot1"><span class=""><?php echo "$ ".$datos_recibo[$i]["abono_act"];?></span></td>
    <td style="text-align: center" colspan="19" class="stilot1"><span class=""><?php echo "$ ".$datos_recibo[$i]["saldo"];?></span></td>
    <td style="text-align: center" colspan="24" class="stilot1"><span class=""><?php echo $datos_recibo[$i]["forma_pago"];?></span></td>
</tr>

<tr style="font-size:10pt" class="even_row">
    <td style="text-align: center" colspan="19" class="stilot1"><span class="">Marca Aro</span></td>
    <td style="text-align: center;color:#034f84;font-size:11px" colspan="19" class="stilot1"><span class=""><strong><?php echo $datos_recibo[$i]["marca_aro"];?></strong></span></td>
    <td style="text-align: center" colspan="19" class="stilot1"><span class="">Modelo</span></td>
    <td style="text-align: center;color:#034f84;font-size:11px" colspan="19" class="stilot1"><span class=""><strong><?php echo $datos_recibo[$i]["modelo_aro"];?></strong></span></td>
    <td style="text-align: center" colspan="8" class="stilot1"><span class="">Color</span></td>
    <td style="text-align: center;color:#034f84;font-size:11px" colspan="16" class="stilot1"><span class=""><strong><?php echo $datos_recibo[$i]["color_aro"];?></strong></span></td>
</tr>

<tr class="even_row" style="font-size:10pt">
  <td style="text-align: center;background:#D0D0D0;font-size:11px" colspan="8" class="stilot1"><span class="">LENTE:</span></td>
  <td colspan="30" class="stilot2">&nbsp;<?php echo ucfirst($datos_recibo[$i]["lente"]);?></td>
  <td style="text-align: center;background:#D0D0D0;font-size:11px" colspan="4" class="stilot1"><span class="">AR:</span></td>
  <td colspan="30" class="stilot2">&nbsp;<?php echo ucfirst($datos_recibo[$i]["anti_r"]);?></td>
  <td style="text-align: center;background:#D0D0D0;font-size:11px" colspan="4" class="stilot1"><span class="">PHOTO:</span></td>
  <td colspan="24" class="stilot2">&nbsp;<?php echo ucfirst($datos_recibo[$i]["photo"]);?></td>
</tr>

<tr>
    <td style="text-align: center" colspan="19" class="stilot1"><div align="center"><span>OBSERVACIONES</span></div></td>
    <td style="text-align: center" colspan="81" class="stilot1"><span class=""><?php echo $datos_recibo[$i]["observaciones"];?></span></td>
</tr>

<tr>
    <td  colspan="100" style="border: white 1px solid;padding: 5px"></td>

</tr>
<tr>
    <td  colspan="100" class="stilot3"><span>Nota: Yo&nbsp;<?php echo $datos_recibo[$i]["recibi_de"];?>: Declaro que me fue explicada de forma detallada y explícita las caracteristicas del aro,lentes,accesorios o tratamientos que estoy adquiriendo con el servicio recibido de lo cual firmo conforme. </span></td>
</tr>
<tr>
    <td  colspan="100" style="border: white 1px solid;padding: 5px"></td>

</tr>
<tr>
    <td  colspan="40" class="stilot3">Firma paciente:___________________________</td>
    <td  colspan="30" class="stilot3"><div align="center"><span class=""><?php echo "Asesor:".": ".$datos_recibo[$i]["id_usuario"];?></span></div></td>
    <td  colspan="30" class="stilot3"><?php echo $datos_recibo[$i]["numero_venta"];?></span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px"><strong>Duplicado: Cliente</strong></span></td>
</tr>
<?php
  }
?>
</table>
  
</div><!--Fin Duplicado--->
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