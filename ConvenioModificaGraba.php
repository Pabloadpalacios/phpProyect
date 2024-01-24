<?php 
	include "conexion.php";
	$cod_convenio = $_GET['cod_convenio'];
	$nombre_convenio = $_GET['nombre_convenio'];
	$descuento_convenio = $_GET['descuento_convenio'];
	$sql = "UPDATE convenios SET nombre_convenio = '$nombre_convenio',descuento_convenio = '$descuento_convenio' WHERE cod_convenio = $cod_convenio ";
	$resultado = mysqli_query($conexion,$sql) or die($sql . mysqli_error($conexion));

 ?>
 <script>
	alert("Convenio modificado correctamente");
	location.replace("ConvenioModifica.php");
</script>