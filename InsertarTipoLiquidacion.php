<?php 
	include "conexion.php";
	$cod_tipo_liquidacion=$_GET['cod_tipo_liquidacion'];
	$tipo_liquidacion=$_GET['tipo_liquidacion'];	
	$sql="INSERT INTO tipo_liquidacion (cod_tipo_liquidacion,tipo_liquidacion) values ('$cod_tipo_liquidacion','$tipo_liquidacion')";
	mysqli_query($conexion,$sql) or die(sql . mysqli_error($conexion));
?>
<script>
	alert("Tipo de liquidacion agregado correctamente");
	location.replace("AltaTipoLiquidacion.php");
</script>