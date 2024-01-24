<?php 
	include "conexion.php";
	$Cod_Provincia=$_GET['cod_provincia'];
	$Provincia=$_GET['provincia'];
	$sql="INSERT INTO provincias(cod_provincia,provincia) values ('$Cod_Provincia','$Provincia') ";
	mysqli_query($conexion,$sql) or die ($sql . mysqli_error($conexion));
?>
<script>
	alert("Provincia agregada correctamente");
	location.replace("AltaProvincias.php");
</script>