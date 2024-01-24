<?php 
	include "conexion.php";
	$legajo = $_GET['legajo'];
	$nombre_apellido = $_GET['nombre_apellido'];
	$dni = $_GET['dni'];
	$direccion_calle = $_GET['direccion_calle'];
	$direccion_numero = $_GET['direccion_numero'];
	$sql = "UPDATE empleados SET legajo = '$legajo',nombre_apellido = '$nombre_apellido', 
	dni = '$dni', direccion_calle = '$direccion_calle', direccion_numero = '$direccion_numero' WHERE legajo = $legajo ";
	$resultado = mysqli_query($conexion,$sql) or die ($sql . mysqli_error ($conexion));	
 ?>
 <script>
	alert("Empleado modificado correctamente");
	location.replace("ModificaEmpleado.php");
</script>