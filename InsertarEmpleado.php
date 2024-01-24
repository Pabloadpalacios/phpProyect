<?php 
	include "conexion.php";
	$Nombre_Apellido= $_GET['nombre_apellido'];
	$DNI=$_GET['dni'];
	$Direccion_Calle=$_GET['direccion_calle'];
	$Direccion_Numero=$_GET['direccion_numero'];
	$Cod_Provincia=$_GET['cod_provincia'];	
	$Codigo_Postal=$_GET['codigo_postal'];

	$sql="INSERT INTO empleados (nombre_apellido,dni,direccion_calle,direccion_numero,cod_provincia,codigo_postal) values ('$Nombre_Apellido','$DNI','$Direccion_Calle','$Direccion_Numero','$Cod_Provincia','$Codigo_Postal')";	
	mysqli_query($conexion,$sql) or die($sql . mysqli_error($conexion));

?>
<script>
	alert("Empleado agregado correctamente");
	location.replace("AltaEmpleado.php");
</script>