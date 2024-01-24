<?php 
	include "conexion.php";
	$legajo=$_GET['legajo'];
	$sql="UPDATE empleados SET baja_empleado=1 WHERE legajo=$legajo";
	$resultado=mysqli_query($conexion,$sql) or die($sql . mysqli_error($conexion));
 ?>
 <script>
 	alert("Baja efectuada correctamente");
 	location.replace("BajaEmpleado.php");
 </script>