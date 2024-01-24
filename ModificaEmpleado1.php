<!DOCTYPE html>
<html>
<head>
	<?php 
		include "conexion.php";
		$legajo = $_GET['legajo'];
		$sql = "SELECT * FROM empleados WHERE legajo = $legajo";
		$resultado = mysqli_query($conexion,$sql) or die ($sql . mysqli_error($conexion));
		$a = mysqli_fetch_array($resultado);
	 ?>
	<title>Modificar Empleado</title>
</head>
<body bgcolor="291d1c">
	<br><br>
	<form name="legajo" action="ModificaEmpleadoGraba.php" method="GET">
		<table bgcolor="3561f3" align="center" border="3">
			<tr>
				<td>Legajo</td><td>
					<input type="text" name="legajo" value="<?php echo $a['legajo']?>" readonly>
				</td>
			</tr>
			<tr>
				<td>Nombre y apellido</td><td>
					<input type="text" name="nombre_apellido" value="<?php echo $a['nombre_apellido']?>">	
				</td>
			</tr>
			<tr>
				<td>DNI</td><td>
					<input type="text" name="dni" value="<?php echo $a['dni']?>">
				</td>
			</tr>
			<tr>
				<td>Direccion calle</td><td>
					<input type="text" name="direccion_calle" value="<?php echo $a['direccion_calle']?>">
				</td>
			</tr>
			<tr>
				<td>Direccion numero</td><td>
					<input type="text" name="direccion_numero" value="<?php echo $a['direccion_numero']?>">
				</td>
			</tr>			
			<tr>
				<td></td><td>
					<input type="submit" name="Confirmar modificacion" value="Confirmar modificacion">
				</td>
			</tr>
			<tr>
				<td></td><td>
					<a href="menu.php">Volver al menu</a>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>