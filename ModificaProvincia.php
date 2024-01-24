<!DOCTYPE html>
<html>
<head>
	<title>Modificar provincia</title>
	<?php 
		include "conexion.php";
	 ?>
</head>

<body>
	<form name="cod_provincia" action="ModificaProvincia1.php" method="GET">
		<table>
			<h2>Modificar provincia</h2>
			<tr>
				<td>Provincia</td><td>
					<select name="cod_provincia">
						<?php 
							$sql = "SELECT * FROM provincias ORDER BY  provincia";
							$resultado = mysqli_query($conexion,$sql) or die ($sql . mysqli_error($conexion));
							while ($a = mysqli_fetch_array($resultado)){			
						?>
						 	<option value="<?php echo $a['cod_provincia'];?>"> <?php echo $a['provincia'];?> </option>
						<?php 
						 	}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td><td>
					<input type="submit" name="Enviar" value="Enviar">
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