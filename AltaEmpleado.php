<!DOCTYPE html>
<html>
<head>
	<title>Alta Empleado</title>
</head>
<body bgcolor="291d1c">
	<br><br>
	<?php
		include "conexion.php"; 
	 ?>
	<form name="empleados" action="InsertarEmpleado.php" method="GET">
		<table bgcolor="3561f3" align="center" border="3">
			<th align="center">Alta Empleado</th>
			<tr>
				<td>Nombre y apellido</td><td>
					<input type="text" name="nombre_apellido">
				</td>
			</tr>
			<tr>
				<td>DNI</td><td>
					<input type="number" name="dni">
				</td>
			</tr>
			<tr>
				<td>Direccion calle</td><td>
					<input type="text" name="direccion_calle">
				</td>
			</tr>
			<tr>
			<tr>
				<td>Direccion numero</td><td>
					<input type="number" name="direccion_numero">
				</td>
			</tr>
				<td>Provincia</td><td>
					<select name="cod_provincia">
						<?php
							$sql="SELECT cod_provincia,provincia FROM provincias ORDER BY provincia ";
							$resul=mysqli_query($conexion,$sql) or die ($sql . mysqli_error($conexion));
							while($file=mysqli_fetch_array($resul)){
						?>
							 
						 <option value="<?php echo $file['cod_provincia'];?>"> <?php echo $file['provincia'];?> 
						</option>
						 <?php 
						 	}
						  ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Localidad</td><td>				
					<select name="codigo_postal">
						<?php 
							$sql2="SELECT codigo_postal,localidad FROM localidades ORDER BY localidad";
							$resul2=mysqli_query($conexion,$sql2) or die($sql2 . mysqli_error($conexion));
							while($file2=mysqli_fetch_array($resul2)){
						 ?>
							 <option value="<?php echo $file2['codigo_postal'];?>"> <?php echo $file2['localidad'];?>
							 </option>
						 <?php 
						 	}
						  ?>
					</select>  
				</td>
			</tr>			
			<tr>
				<tbody></tbody>
				<td>
					<input type="submit" name="Boton" value="Enviar">
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