<?php ob_start();
use Dompdf\Dompdf;
use Dompdf\Options;

require_once 'dompdf/autoload.inc.php';

require_once("modelos/Reporteria.php");
require_once("config/conexion.php");
if(isset($_SESSION["usuario"])){
//echo $_SESSION["sucursal"];
date_default_timezone_set('America/El_Salvador');$fecha = date("d-m-Y");
$reporteria=new Reporteria();
//$fecha = "02-10-2020";

$fecha =  date("d-m-Y",strtotime($_POST["fecha_corte"]));
//echo $fecha;
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
       font-size: 8px;
       font-family: Helvetica, Arial, sans-serif;
       text-align: center;
    }

    .stilot2{      
       text-align: center;
       font-size: 8px;
       font-family: Helvetica, Arial, sans-serif;
       color:white;
    }
    .stilot3{
       text-align: center;
       font-size: 8px;
       font-family: Helvetica, Arial, sans-serif;
    }

    .table2 {
       border-collapse: collapse;
    }
    .vendedor{
      text-transform: uppercase;

    }

        @page { margin: 180px 50px; } 
    #header { position: fixed; left: 0px; top: -180px; right: 0px; height: 150px; background-color: orange; text-align: center; } 
    #footer { position: fixed; left: 0px; bottom: -180px; right: 0px; height: 150px; background-color: lightblue; } 
    #footer .page:after { content: counter(page, upper-roman); } 
   </style>
  </head>
  <body>

<!-- VENTAS CONTADO-->
<table width="100%" class="table2" style="margin-top: 15px">
      <tr>
      <th style="text-align: center;font-size: 12px;background: #C0C0C0" colspan="105">VENTAS DE CONTADO</th>
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

<?php for($j=0;$j<count($datos_ventas_contado);$j++){
if(($datos_ventas_contado[$j]["monto_cobrado"])>0){
  $monto_c = $datos_ventas_contado[$j]["monto_cobrado"];
}else{
  $monto_c = 0;
}

?>
	<tr>
<td colspan="5" class="stilot1"><?php echo "";?></td>
<td colspan="5" class="stilot1"><?php echo $datos_ventas_contado[$j]["n_recibo"];?></td>
<td colspan="50" class="stilot1"><?php echo $datos_ventas_contado[$j]["paciente"];?></td>
<td colspan="5" class="stilot1 vendedor"><?php echo $datos_ventas_contado[$j]["usuario"];?></td>
<td colspan="10" class="stilot1"><?php echo "$".number_format($datos_ventas_contado[$j]["total_factura"],2,".",",");?></td>
<td colspan="20" class="stilot1 vendedor"><?php echo $datos_ventas_contado[$j]["forma_cobro"];?></td>
<td colspan="5" class="stilot1" style="color: blue"><?php echo "$".number_format($monto_c,2,".",",");?></td>
<td colspan="5" class="stilot1"><?php echo "$".number_format($datos_ventas_contado[$j]["saldo_credito"],2,".",",");?></td>
</tr>
<?php
  }
?>
</tbody>
</table>
<!-- VENTAS EMPRESARIAL-->

<table width="100%" class="table2" style="margin-top: 2px">
      <tr>
      <th style="text-align: center;font-size: 12px;background: #C0C0C0" colspan="105">VENTAS EMPRESARIAL</th>
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

<table width="100%" class="table2" style="margin-top: 2px;">
      <tr>
      <th style="text-align: center;font-size: 12px;background: #C0C0C0" colspan="105">VENTAS CARGO AUTOMATICO</th>
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

if(($datos_ventas_c_auto[$j]["monto_cobrado"])>0){
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

<!-- RRECUPERADO CONTADO-->
<?php 
  $recuperado_contado = $reporteria->get_datos_recuperado_contado($fecha);
?>
<table width="100%" class="table2" style="margin-top: 2px;background: #C0C0C0">
      <tr>
      <th style="text-align: center;font-size: 12px" colspan="105">RECUPERADO CONTADO</th>
    </tr>
  <thead>
  <tr>    
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">FACTURA</span></th>
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">RECIBO</span></th>
    <th bgcolor="#004e00" colspan="30" class="stilot2"><span class="Estilo11">NOMBRE PACIENTE</span></th>
    <th bgcolor="#004e00" colspan="10" class="stilot2"><span class="Estilo11">VENDEDOR</span></th>
    <th bgcolor="#004e00" colspan="10" class="stilot2"><span class="Estilo11">TOTAL FACTURA</span></th>
    <th bgcolor="#004e00" colspan="10" class="stilot2"><span class="Estilo11">ANTICIPOS ANT.</span></th>
    <th bgcolor="#004e00" colspan="10" class="stilot2"><span class="Estilo11">SALDO ANT.</span></th>
    <th bgcolor="#004e00" colspan="15" class="stilot2"><span class="Estilo11 vendedor">FORMA DE COBRO</span></th>
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">TOTAL COBRADO</span></th>
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">NUEVO SALDO</span></th>
  </tr>
</thead>
<tbody>

<?php for($j=0;$j<count($recuperado_contado);$j++){

if(($recuperado_contado[$j]["monto_cobrado"])>0){
  $monto_c = $recuperado_contado[$j]["monto_cobrado"];
}else{
  $monto_c = 0;
}
?>  

<tr>
<td colspan="5" class="stilot1"><?php echo "";?></td>
<td colspan="5" class="stilot1"><?php echo $recuperado_contado[$j]["n_recibo"];?></td>
<td colspan="30" class="stilot1"><?php echo $recuperado_contado[$j]["paciente"];?></td>
<td colspan="10" class="stilot1  vendedor"><?php echo $recuperado_contado[$j]["usuario"];?></td>
<td colspan="10" class="stilot1"><?php echo "$".number_format($recuperado_contado[$j]["total_factura"],2,".",",");?></td>
<td colspan="10" class="stilot1 vendedor"><?php echo $recuperado_contado[$j]["abono_anterior"];?></td>
<td colspan="10" class="stilot1"><?php echo "$".number_format($recuperado_contado[$j]["saldo_anterior"],2,".",",");?></td>
<td colspan="15" class="stilot1 vendedor"><?php echo $recuperado_contado[$j]["forma_cobro"];?></td>
<td colspan="5" class="stilot1" style="color:blue"><?php echo "$".number_format($monto_c,2,".",",");?></td>
<td colspan="5" class="stilot1"><?php echo "$".number_format($recuperado_contado[$j]["saldo_credito"],2,".",",");?></td>
</tr>
<?php
  }
?>

</tbody>
</table>


<!-- RECUPERADO EMPRESARIAL-->
<?php 
  $recuperado_emp = $reporteria->get_datos_recuperado_empresarial($fecha);
?>
<table width="100%" class="table2" style="margin-top: 2px;">
      <tr>
      <th style="text-align: center;font-size: 12px;background: #C0C0C0" colspan="105">RECUPERADO EMPRESARIAL</th>
    </tr>
  <thead>
  <tr>    
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">FACTURA</span></th>
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">RECIBO</span></th>
    <th bgcolor="#004e00" colspan="30" class="stilot2"><span class="Estilo11">NOMBRE PACIENTE</span></th>
    <th bgcolor="#004e00" colspan="10" class="stilot2"><span class="Estilo11">VENDEDOR</span></th>
    <th bgcolor="#004e00" colspan="10" class="stilot2"><span class="Estilo11">TOTAL FACTURA</span></th>
    <th bgcolor="#004e00" colspan="10" class="stilot2"><span class="Estilo11">ANTICIPOS ANT.</span></th>
    <th bgcolor="#004e00" colspan="10" class="stilot2"><span class="Estilo11">SALDO ANT.</span></th>
    <th bgcolor="#004e00" colspan="15" class="stilot2"><span class="Estilo11 vendedor">FORMA DE COBRO</span></th>
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">TOTAL COBRADO</span></th>
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">NUEVO SALDO</span></th>
  </tr>
</thead>
<tbody>

<?php for($j=0;$j<count($recuperado_emp);$j++){

if(($recuperado_emp[$j]["monto_cobrado"])>0){
  $monto_c = $recuperado_emp[$j]["monto_cobrado"];
}else{
  $monto_c = 0;
}
?>  

<tr>
<td colspan="5" class="stilot1"><?php echo "";?></td>
<td colspan="5" class="stilot1"><?php echo $recuperado_emp[$j]["n_recibo"];?></td>
<td colspan="30" class="stilot1"><?php echo $recuperado_emp[$j]["paciente"];?></td>
<td colspan="10" class="stilot1  vendedor"><?php echo $recuperado_emp[$j]["usuario"];?></td>
<td colspan="10" class="stilot1"><?php echo "$".number_format($recuperado_emp[$j]["total_factura"],2,".",",");?></td>
<td colspan="10" class="stilot1 vendedor"><?php echo $recuperado_emp[$j]["abono_anterior"];?></td>
<td colspan="10" class="stilot1"><?php echo "$".number_format($recuperado_emp[$j]["saldo_anterior"],2,".",",");?></td>
<td colspan="15" class="stilot1 vendedor"><?php echo $recuperado_emp[$j]["forma_cobro"];?></td>
<td colspan="5" class="stilot1" style="color:blue"><?php echo "$".number_format($monto_c,2,".",",");?></td>
<td colspan="5" class="stilot1"><?php echo "$".number_format($recuperado_emp[$j]["saldo_credito"],2,".",",");?></td>
</tr>
<?php
  }
?>

</tbody>
</table>

<!-- RECUPERADO CARGO AUTOMATICO-->
<?php 
  $recuperado_cargo = $reporteria->get_datos_recuperado_cargo($fecha);
?>
<table width="100%" class="table2" style="margin-top: 2px;">
      <tr>
      <th style="text-align: center;font-size: 12px;background: #C0C0C0" colspan="105">RECUPERADO CARGO AUTOMATICO</th>
    </tr>
  <thead>
  <tr>    
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">FACTURA</span></th>
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">RECIBO</span></th>
    <th bgcolor="#004e00" colspan="30" class="stilot2"><span class="Estilo11">NOMBRE PACIENTE</span></th>
    <th bgcolor="#004e00" colspan="10" class="stilot2"><span class="Estilo11">VENDEDOR</span></th>
    <th bgcolor="#004e00" colspan="10" class="stilot2"><span class="Estilo11">TOTAL FACTURA</span></th>
    <th bgcolor="#004e00" colspan="10" class="stilot2"><span class="Estilo11">ANTICIPOS ANT.</span></th>
    <th bgcolor="#004e00" colspan="10" class="stilot2"><span class="Estilo11">SALDO ANT.</span></th>
    <th bgcolor="#004e00" colspan="15" class="stilot2"><span class="Estilo11 vendedor">FORMA DE COBRO</span></th>
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">TOTAL COBRADO</span></th>
    <th bgcolor="#004e00" colspan="5" class="stilot2"><span class="Estilo11">NUEVO SALDO</span></th>
  </tr>
</thead>
<tbody>

<?php for($j=0;$j<count($recuperado_cargo);$j++){

if(($recuperado_cargo[$j]["monto_cobrado"])>0){
  $monto_c = $recuperado_cargo[$j]["monto_cobrado"];
}else{
  $monto_c = 0;
}
?>  

<tr>
<td colspan="5" class="stilot1"><?php echo "";?></td>
<td colspan="5" class="stilot1"><?php echo $recuperado_cargo[$j]["n_recibo"];?></td>
<td colspan="30" class="stilot1"><?php echo $recuperado_cargo[$j]["paciente"];?></td>
<td colspan="10" class="stilot1  vendedor"><?php echo $recuperado_cargo[$j]["usuario"];?></td>
<td colspan="10" class="stilot1"><?php echo "$".number_format($recuperado_cargo[$j]["total_factura"],2,".",",");?></td>
<td colspan="10" class="stilot1 vendedor"><?php echo $recuperado_cargo[$j]["abono_anterior"];?></td>
<td colspan="10" class="stilot1"><?php echo "$".number_format($recuperado_cargo[$j]["saldo_anterior"],2,".",",");?></td>
<td colspan="15" class="stilot1 vendedor"><?php echo $recuperado_cargo[$j]["forma_cobro"];?></td>
<td colspan="5" class="stilot1" style="color:blue"><?php echo "$".number_format($monto_c,2,".",",");?></td>
<td colspan="5" class="stilot1"><?php echo "$".number_format($recuperado_cargo[$j]["saldo_credito"],2,".",",");?></td>
</tr>
<?php
  }
?>

</tbody>
</table>


<!--GET DATA RESUMEN DE COBROS Y VENTAS-->

<?php
  
  $resumen_ventas_cobros = $reporteria->get_resumen_ventas_cobros($fecha);

  $ventas_contado=0;
  $ventas_credito=0;
  $cobros_contado_efectivo=0;
  $cobros_contado_cheque=0;
  $cobros_contado_serfinsa=0;
  $cobros_contado_credomatic=0;
  $cobros_contado_agricola=0;
  $cobros_contado_cuscatlan=0;
  $cobros_credito_cheque=0;  


  for($i=0;$i<count($resumen_ventas_cobros);$i++){
    
    if ($resumen_ventas_cobros[$i]["tipo_venta"]=="Contado"  and ($resumen_ventas_cobros[$i]["tipo_ingreso"]=="Venta")) {
       $ventas_contado= $ventas_contado+$resumen_ventas_cobros[$i]["total_factura"];

        if($resumen_ventas_cobros[$i]["forma_cobro"]=="Efectivo"){
          $cobros_contado_efectivo=$cobros_contado_efectivo+$resumen_ventas_cobros[$i]["monto_cobrado"];
        }elseif($resumen_ventas_cobros[$i]["forma_cobro"]=="Cheque"){
          $cobros_contado_cheque=$cobros_contado_cheque+$resumen_ventas_cobros[$i]["monto_cobrado"];
        }elseif($resumen_ventas_cobros[$i]["forma_cobro"]=="Serfinsa" and $resumen_ventas_cobros[$i]["monto_cobrado"]>0){
          $cobros_contado_serfinsa=$cobros_contado_serfinsa+$resumen_ventas_cobros[$i]["monto_cobrado"];
        }elseif($resumen_ventas_cobros[$i]["forma_cobro"]=="Credomatic" and $resumen_ventas_cobros[$i]["monto_cobrado"]>0){
          $cobros_contado_credomatic=$cobros_contado_credomatic+$resumen_ventas_cobros[$i]["monto_cobrado"];
        }elseif($resumen_ventas_cobros[$i]["forma_cobro"]=="Agricola" and $resumen_ventas_cobros[$i]["monto_cobrado"]>0){
          $cobros_contado_agricola=$cobros_contado_agricola+$resumen_ventas_cobros[$i]["monto_cobrado"];
        }elseif($resumen_ventas_cobros[$i]["forma_cobro"]=="Agricola" and $resumen_ventas_cobros[$i]["monto_cobrado"]>0){
          $cobros_contado_agricola=$cobros_contado_agricola+$resumen_ventas_cobros[$i]["monto_cobrado"];
        }elseif($resumen_ventas_cobros[$i]["forma_cobro"]=="Cuscatlan" and $resumen_ventas_cobros[$i]["monto_cobrado"]>0){
          $cobros_contado_cuscatlan=$cobros_contado_cuscatlan+$resumen_ventas_cobros[$i]["monto_cobrado"];
        }
        $suma_cobros_venta_contado = $cobros_contado_efectivo+$cobros_contado_cheque+$cobros_contado_serfinsa+$cobros_contado_credomatic+$cobros_contado_agricola+$cobros_contado_cuscatlan;

    }elseif($resumen_ventas_cobros[$i]["tipo_venta"]=="Credito"  and ($resumen_ventas_cobros[$i]["tipo_ingreso"]=="Venta")){
      $ventas_credito= $ventas_credito+$resumen_ventas_cobros[$i]["total_factura"];

      if($resumen_ventas_cobros[$i]["forma_cobro"]=="Cheque"){
          $cobros_credito_cheque=$cobros_credito_cheque + $resumen_ventas_cobros[$i]["monto_cobrado"];
      }
    }
  }
?>

<!--DETALLES Y RESUMEN-->
<table  width="100%" class="table2" style="margin-top: 5px">
  <tr>
    <th colspan="30"></th>
    <th style="text-align: center;background: #c5e2f6;border-radius: 8px;border:0px" colspan="75" class="stilot1"> DETALLE COBROS VENTAS</th>
  </tr>
  <tr>
    <th style="text-align: center;background: #c5e2f6" colspan="30" class="stilot1">RESUMEN VENTAS</th>
    <th colspan="10" style="width:10%" class="stilot1">EFECTIVO</th>
    <th colspan="10" style="width:10%" class="stilot1">CHEQUES</th>
    <th colspan="10" style="width:10%" class="stilot1">SERFINSA</th>
    <th colspan="10" style="width:10%" class="stilot1">CREDOMATIC</th>
    <th colspan="10" style="width:10%" class="stilot1">AGRICOLA</th>
    <th colspan="10" style="width:10%" class="stilot1">CUSCATLAN</th>
    <th colspan="15" style="width:15%" class="stilot1">TOTAL</th>
      <!--<th style="text-align: center;" colspan="75" class="stilot1">RESUMEN VENTAS Y COBROS</th>-->
    </tr>
  <tr>
    <th colspan="15" style="width:15%" class="stilot1">CONTADO</th>
    <th colspan="15" style="width:15%" class="stilot1"><?php echo "$".number_format($ventas_contado,2,".",","); ?></th>
    <th colspan="10" style="width:10%" class="stilot1"><?php echo "$".number_format($cobros_contado_efectivo,2,".",","); ?></th>
    <th colspan="10" style="width:10%" class="stilot1"><?php echo "$".number_format($cobros_contado_cheque,2,".",","); ?></th>
    <th colspan="10" style="width:10%" class="stilot1"><?php echo "$".number_format($cobros_contado_serfinsa,2,".",","); ?></th>
    <th colspan="10" style="width:10%" class="stilot1"><?php echo "$".number_format($cobros_contado_credomatic,2,".",","); ?></th>
    <th colspan="10" style="width:10%" class="stilot1"><?php echo "$".number_format($cobros_contado_agricola,2,".",","); ?></th>
    <th colspan="10" style="width:10%" class="stilot1"><?php echo "$".number_format($cobros_contado_cuscatlan,2,".",","); ?></th>
    <th colspan="15" style="width:15%" class="stilot1"><?php echo "$".number_format($suma_cobros_venta_contado,2,".",","); ?></th>
    
  </tr>

  <tr>
    <th colspan="15" style="width:15%" class="stilot1">CREDITO</th>
    <th colspan="15" style="width:15%" class="stilot1"><?php echo "$".number_format($ventas_credito,2,".",","); ?></th>
    <th colspan="10" style="width:10%" class="stilot1"></th>
    <th colspan="10" style="width:10%" class="stilot1"><?php echo "$".number_format($cobros_credito_cheque,2,".",","); ?></th>
    <th colspan="10" style="width:10%" class="stilot1">$</th>
    <th colspan="10" style="width:10%" class="stilot1">$</th>
    <th colspan="10" style="width:10%" class="stilot1">$</th>
    <th colspan="10" style="width:10%" class="stilot1">$</th>
    <th colspan="15" style="width:15%" class="stilot1">$</th>    
  </tr>

  <?php $ventas_diarias = $ventas_contado+$ventas_credito; ?>

  <tr>
    <td colspan="15" class="stilot1" style="width:15%">TOTAL</td>
    <td colspan="15" class="stilot1" style="width:15%;font-size: 10px"><?php echo "$".number_format($ventas_diarias,2,".",","); ?></td>
    <th colspan="10" style="width:10%" class="stilot1">$</th>
    <th colspan="10" style="width:10%" class="stilot1">$</th>
    <th colspan="10" style="width:10%" class="stilot1">$</th>
    <th colspan="10" style="width:10%" class="stilot1">$</th>
    <th colspan="10" style="width:10%" class="stilot1">$</th>
    <th colspan="10" style="width:15%" class="stilot1">$</th>
    <th colspan="15" style="width:15%" class="stilot1">$</th>
  </tr>

  <tr>
    <th colspan="30" class="stilot1" style="text-align: center;background: #c5e2f6">RESUMEN COBROS</th>
    <th colspan="75" class="stilot1" style="text-align: center;background: #c5e2f6;border-radius: 5px" >DETALLE COBRO DE RECUPERADO</th>
  </tr>

  <tr>
    <td colspan="15" class="stilot1">CONTADO</td>
    <td colspan="15" class="stilot1">0</td>
    <th colspan="10" style="width:10%" class="stilot1">EFECTIVO</th>
    <th colspan="10" style="width:10%" class="stilot1">CHEQUES</th>
    <th colspan="10" style="width:10%" class="stilot1">SERFINSA</th>
    <th colspan="10" style="width:10%" class="stilot1">CREDOMATIC</th>
    <th colspan="10" style="width:10%" class="stilot1">AGRICOLA</th>
    <th colspan="10" style="width:10%" class="stilot1">CUSCATLAN</th>
    <th colspan="15" style="width:15%" class="stilot1">TOTAL</th>
  </tr>

  <tr>
    <th colspan="15" style="width:15%" class="stilot1">CREDITO</th>
    <th colspan="15" style="width:15%" class="stilot1">$$</th>
    <th colspan="10" style="width:10%" class="stilot1">$</th>
    <th colspan="10" style="width:10%" class="stilot1">$</th>
    <th colspan="10" style="width:10%" class="stilot1">$</th>
    <th colspan="10" style="width:10%" class="stilot1">$</th>
    <th colspan="10" style="width:10%" class="stilot1">$</th>
    <th colspan="10" style="width:10%" class="stilot1">$</th>
    <th colspan="15" style="width:15%" class="stilot1">$</th> 
    
  </tr>

  <tr>
    <th colspan="15" style="width:15%" class="stilot1">TOTAL</th>
    <th colspan="15" style="width:15%" class="stilot1">$$</th>
    <th colspan="10" style="width:10%" class="stilot1">$</th>
    <th colspan="10" style="width:10%" class="stilot1">$</th>
    <th colspan="10" style="width:10%" class="stilot1">$</th>
    <th colspan="10" style="width:10%" class="stilot1">$</th>
    <th colspan="10" style="width:10%" class="stilot1">$</th>
    <th colspan="10" style="width:10%" class="stilot1">$</th>
    <th colspan="15" style="width:15%" class="stilot1">$</th>
   
  </tr>

</table>


<!--<div id="footer"> 
    <p class="page">Page <?php //$PAGE_NUM ?></p> 
    </div> 
    <div id="content"> 
    <p>the first page</p> 
    <p style="page-break-before: always;">the second page</p> 
    </div> -->

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
