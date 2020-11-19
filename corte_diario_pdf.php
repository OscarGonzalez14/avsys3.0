<?php ob_start();
use Dompdf\Dompdf;
use Dompdf\Options;

require_once 'dompdf/autoload.inc.php';

require_once("modelos/Reporteria.php");
require_once("config/conexion.php");
if(isset($_SESSION["usuario"])){
echo $_SESSION["sucursal"];
date_default_timezone_set('America/El_Salvador');$fecha = date("d-m-Y");
$reporteria=new Reporteria();
//$fecha = "02-10-2020";

$fecha =  date("d-m-Y",strtotime($_POST["fecha_corte"]));
echo $fecha;
$datos_ventas_contado = $reporteria->get_datos_ventas_cobros_contado($fecha);
$datos_ventas_empresarial = $reporteria->get_datos_ventas_empresarial($fecha);
$datos_ventas_c_auto = $reporteria->get_datos_ventas_cargo($fecha);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
   <style>
      html{
      	margin-top: 0;
        margin-left: 18px;
        margin-right:18px; 
        margin-bottom: 0;
    }
    .stilot1{
       border: 1px solid black;
       padding: 5px;
       font-size: 10px;
       font-family: Helvetica, Arial, sans-serif;
       text-align: center;
    }

    .stilot2{      
       text-align: center;
       font-size: 10px;
       font-family: Helvetica, Arial, sans-serif;
       color:white;
    }
    .stilot3{
       text-align: center;
       font-size: 10px;
       font-family: Helvetica, Arial, sans-serif;
    }

    .table2 {
       border-collapse: collapse;
    }
    .vendedor{
      text-transform: uppercase;
    }
   </style>
  </head>
  <body>

<!-- VENTAS CONTADO-->
<table width="100%" class="table2" style="margin-top: 25px">
      <tr>
      <th style="text-align: center;font-size: 12px" colspan="105">VENTAS DE CONTADO</th>
    </tr>
  <thead>
  <tr>
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">FACTURA</span></th>
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">RECIBO</span></th>
    <th bgcolor="#004e00" colspan="50" class="stilot2"><span class="Estilo11">NOMBRE CLIENTE</span></th>
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">VENDEDOR</span></th>
    <th bgcolor="#004e00" colspan="10" class="stilot2"><span class="Estilo11">TOTAL FACTURA</span></th>
    <th bgcolor="#004e00" colspan="20" class="stilot2"><span class="Estilo11 vendedor">FORMA DE COBRO</span></th>
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">TOTAL COBRADO</span></th>
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">SALDO</span></th>
  </tr>
</thead>
<tbody>

<?php for($j=0;$j<count($datos_ventas_contado);$j++){?>
	<tr>
<td colspan="5" class="stilot1"><?php echo "";?></td>
<td colspan="5" class="stilot1"><?php echo $datos_ventas_contado[$j]["n_recibo"];?></td>
<td colspan="50" class="stilot1"><?php echo $datos_ventas_contado[$j]["paciente"];?></td>
<td colspan="5" class="stilot1 vendedor"><?php echo $datos_ventas_contado[$j]["usuario"];?></td>
<td colspan="10" class="stilot1"><?php echo "$".number_format($datos_ventas_contado[$j]["total_factura"],2,".",",");?></td>
<td colspan="20" class="stilot1 vendedor"><?php echo $datos_ventas_contado[$j]["forma_cobro"];?></td>
<td colspan="5" class="stilot1"><?php echo "$".number_format($datos_ventas_contado[$j]["monto_cobrado"],2,".",",");?></td>
<td colspan="5" class="stilot1"><?php echo "$".number_format($datos_ventas_contado[$j]["saldo_credito"],2,".",",");?></td>
</tr>
<?php
  }
?>
</tbody>
</table>
<!-- VENTAS EMPRESARIAL-->

<table width="100%" class="table2" style="margin-top: 25px">
      <tr>
      <th style="text-align: center;font-size: 12px" colspan="105">VENTAS EMPRESARIAL</th>
    </tr>
  <thead>
  <tr>    
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">FACTURA</span></th>
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">RECIBO</span></th>
    <th bgcolor="#004e00" colspan="35" class="stilot2"><span class="Estilo11">NOMBRE CLIENTE</span></th>
    <th bgcolor="#004e00" colspan="20" class="stilot2"><span class="Estilo11">EMPRESA</span></th>
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">VENDEDOR</span></th>
    <th bgcolor="#004e00" colspan="10" class="stilot2"><span class="Estilo11">TOTAL FACTURA</span></th>
    <th bgcolor="#004e00" colspan="15" class="stilot2"><span class="Estilo11 vendedor">FORMA DE COBRO</span></th>
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">TOTAL COBRADO</span></th>
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">SALDO</span></th>
  </tr>
</thead>
<tbody>

<?php for($j=0;$j<count($datos_ventas_empresarial);$j++){

if(($datos_ventas_empresarial[$j]["monto_cobrado"])>0){
  $monto_c = $datos_ventas_empresarial[$j]["monto_cobrado"];
}else{
  $monto_c = 0;
}
?>  

<tr>
<td colspan="5" class="stilot1"><?php echo "";?></td>
<td colspan="5" class="stilot1"><?php echo $datos_ventas_empresarial[$j]["n_recibo"];?></td>
<td colspan="35" class="stilot1"><?php echo $datos_ventas_empresarial[$j]["nombres"];?></td>
<td colspan="20" class="stilot1"><?php echo $datos_ventas_empresarial[$j]["empresas"];?></td>
<td colspan="5" class="stilot1 vendedor"><?php echo $datos_ventas_empresarial[$j]["usuario"];?></td>
<td colspan="10" class="stilot1"><?php echo "$".number_format($datos_ventas_empresarial[$j]["total_factura"],2,".",",");?></td>
<td colspan="15" class="stilot1 vendedor"><?php echo $datos_ventas_empresarial[$j]["forma_cobro"];?></td>
<td colspan="5" class="stilot1"><?php echo "$".number_format($monto_c,2,".",",");?></td>
<td colspan="5" class="stilot1"><?php echo "$".number_format($datos_ventas_empresarial[$j]["saldo_credito"],2,".",",");?></td>
</tr>
<?php
  }
?>

</tbody>
</table>

<!-- VENTAS CARGO AUTOMATICO-->

<table width="100%" class="table2" style="margin-top: 25px">
      <tr>
      <th style="text-align: center;font-size: 12px" colspan="105">VENTAS CARGO AUTOMATICO</th>
    </tr>
  <thead>
  <tr>    
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">FACTURA</span></th>
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">RECIBO</span></th>
    <th bgcolor="#004e00" colspan="50" class="stilot2"><span class="Estilo11">NOMBRE CLIENTE</span></th>
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">VENDEDOR</span></th>
    <th bgcolor="#004e00" colspan="10" class="stilot2"><span class="Estilo11">TOTAL FACTURA</span></th>
    <th bgcolor="#004e00" colspan="20" class="stilot2"><span class="Estilo11 vendedor">FORMA DE COBRO</span></th>
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">TOTAL COBRADO</span></th>
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">SALDO</span></th>
  </tr>
</thead>
<tbody>

<?php for($j=0;$j<count($datos_ventas_c_auto);$j++){

if(($datos_ventas_empresarial[$j]["monto_cobrado"])>0){
  $monto_c = $datos_ventas_c_auto[$j]["monto_cobrado"];
}else{
  $monto_c = 0;
}
?>  

<tr>
<td colspan="5" class="stilot1"><?php echo "";?></td>
<td colspan="5" class="stilot1"><?php echo $datos_ventas_c_auto[$j]["n_recibo"];?></td>
<td colspan="50" class="stilot1"><?php echo $datos_ventas_c_auto[$j]["paciente"];?></td>
<td colspan="5" class="stilot1  vendedor"><?php echo $datos_ventas_c_auto[$j]["usuario"];?></td>
<td colspan="10" class="stilot1"><?php echo "$".number_format($datos_ventas_c_auto[$j]["total_factura"],2,".",",");?></td>
<td colspan="20" class="stilot1 vendedor"><?php echo $datos_ventas_c_auto[$j]["forma_cobro"];?></td>
<td colspan="5" class="stilot1"><?php echo "$".number_format($monto_c,2,".",",");?></td>
<td colspan="5" class="stilot1"><?php echo "$".number_format($datos_ventas_c_auto[$j]["saldo_credito"],2,".",",");?></td>
</tr>
<?php
  }
?>

</tbody>
</table>

</body>

</html>
<?php
$salida_html = ob_get_contents();

  //$user=$_SESSION["id_usuario"];

  ob_end_clean();
$dompdf = new Dompdf();
$dompdf->loadHtml($salida_html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('letter', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
//$dompdf->stream();
$dompdf->stream('document', array('Attachment'=>'0'));
?>


   <?php } else{
echo "Acceso denegado";
  } ?>
