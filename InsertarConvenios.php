<?php 
	include "conexion.php";
	$Cod_Convenio=$_GET['cod_convenio'];
	$Nombre_Convenio=$_GET['nombre_convenio'];
	$Descuento_Convenio=$_GET['descuento_convenio'];
	$sql="INSERT INTO convenios(cod_convenio,nombre_convenio,descuento_convenio) values('$Cod_Convenio','$Nombre_Convenio','$Descuento_Convenio')";
	mysqli_query($conexion,$sql) or die ($sql . mysqli_error($conexion));
?>
<script>
	alert("Convenio agregado correctamente");
	location.replace("AltaConvenios.php");
</script>