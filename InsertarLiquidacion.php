<?php 
	include "conexion.php";
	$legajo=$_GET['legajo'];
	$cod_tipo_liquidacion= $_GET['cod_tipo_liquidacion'];
	$fecha_liquidacion=$_GET['fecha_liquidacion'];	
	$cod_convenio=$_GET['cod_convenio'];
	$cod_categoria=$_GET['cod_categoria'];
	$hs_normales=$_GET['hs_normales'];
	$hs_50=$_GET['hs_50'];	
	$hs_100=$_GET['hs_100'];

	$sql="INSERT INTO liquidacion (legajo,cod_tipo_liquidacion,fecha_liquidacion,cod_convenio,cod_categoria,hs_normales,hs_50,hs_100) values ('$legajo','$cod_tipo_liquidacion','$fecha_liquidacion','$cod_convenio','$cod_categoria','$hs_normales','$hs_50','$hs_100')";	
	mysqli_query($conexion,$sql) or die($sql . mysqli_error($conexion));
	
	$consulta="SELECT convenios.descuento_convenio FROM liquidacion
	LEFT JOIN convenios ON (convenios.cod_convenio=liquidacion.cod_convenio)
	WHERE convenios.cod_convenio = $cod_convenio";
	$resul=mysqli_query($conexion,$consulta) or die($consulta . mysqli_error($conexion));
	$file=mysqli_fetch_array($resul);

	$consulta2="SELECT categorias.valor_categoria FROM liquidacion
	LEFT JOIN categorias ON (categorias.cod_categoria=liquidacion.cod_categoria) 
	WHERE categorias.cod_categoria = $cod_categoria ";
	$resul2=mysqli_query($conexion,$consulta2) or die($consulta2 . mysqli_error($conexion));
	$file2=mysqli_fetch_array($resul2);

	$descuento_convenio = $file['descuento_convenio'];
	$valor_hs_normales = $file2['valor_categoria'];
	$valor_hs_50 = $valor_hs_normales*1.5;	
	$valor_hs_100=$valor_hs_normales*2;
	$bruto=($hs_normales*$valor_hs_normales)+($hs_50*$valor_hs_50)+($hs_100*$valor_hs_100);	
	$descuentos=($bruto*$descuento_convenio/100);
	$neto=($bruto-$descuentos);
	
	$sql3="UPDATE liquidacion SET 
	valor_hs_normales = '$valor_hs_normales', 
	valor_hs_50 = '$valor_hs_50',
	valor_hs_100 = '$valor_hs_100',
	descuentos = '$descuentos',
	bruto = '$bruto',
	neto = '$neto' WHERE legajo = $legajo and cod_tipo_liquidacion LIKE '$cod_tipo_liquidacion' and 
	fecha_liquidacion LIKE '$fecha_liquidacion'";
	mysqli_query($conexion,$sql3) or die($sql3 . mysqli_error($conexion));

?>
<script>
	alert("Empleado liquidado correctamente");
	location.replace("buscaempleado.php");
</script>