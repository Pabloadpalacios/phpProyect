<!DOCTYPE html>
<html>
<head>
	<title>Modificar localidad</title>
	<?php 
		include "conexion.php";

	 ?>
</head>
<body bgcolor="291d1c">
	<br><br>
	<form name="codigo_postal" action="ModificaLocalidad1.php" method="GET">
		<table bgcolor="3561f3" align="center" border="3">
			<h2 align="center"><font color="white">Modificar localidad</font></h2>
			<tr>
				<td>Localidad</td><td>
					<select name="codigo_postal">
						<?php  
							$sql = "SELECT * FROM localidades ORDER BY localidad";
							$resultado = mysqli_query($conexion,$sql) or die ($sql . mysqli_error($conexion));
							while ($a = mysqli_fetch_array($resultado)){ 
						?>
							<option value="<?php echo $a['codigo_postal'];?>"> <?php echo $a['localidad'];?> </option>	
						<?php 
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td><td>
					<input type="submit" name="Enviar" value="Confirmar modificacion">
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