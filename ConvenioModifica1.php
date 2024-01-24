<!DOCTYPE html>
<html>
<head>
	<?php  
		include "conexion.php";
		$cod_convenio = $_GET['cod_convenio'];
		$sql = "SELECT * FROM convenios WHERE cod_convenio = $cod_convenio";
		$resultado = mysqli_query($conexion,$sql) or die ($sql . mysqli_error($conexion));
		$a = mysqli_fetch_array($resultado);
	?>	
	<title>Modifica convenio</title>
</head>
<body bgcolor="291d1c">
	<br><br>
	<form name="cod_convenio" action="ConvenioModificaGraba.php" method="GET">
		<table bgcolor="3561f3" align="center" border="3">
			<tr>
				<td>Codigo de convenio</td><td>
					<input type="text" name="cod_convenio" value="<?php echo $a['cod_convenio'];?>" readonly>
				</td>
			</tr>
			<tr>
				<td>Nombre del convenio</td><td>
					<input type="text" name="nombre_convenio" value="<?php echo $a['nombre_convenio'];?>">
				</td>
			</tr>
			<tr>
				<td>Descuento del convenio</td><td>
					<input type="text" name="descuento_convenio" value="<?php echo $a['descuento_convenio'];?>">
				</td>
			</tr>
			<tr>
				<td>
					<td>
						<input type="submit" name="Enviar" value="Confirmar modificacion">
					</td>
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