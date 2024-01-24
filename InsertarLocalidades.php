<?php 
	include "conexion.php";
	$Codigo_Postal=$_GET['codigo_postal'];
	$Localidad=$_GET['localidad'];
	$sql="INSERT INTO localidades (codigo_postal,localidad) values ('$Codigo_Postal','$Localidad')";
	mysqli_query($conexion,$sql) or die (sql . mysqli_error($conexion));
?>
<script>
	alert("Localidad agregada correctamente");
	location.replace("AltaLocalidades.php");
</script>