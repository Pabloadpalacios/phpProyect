<!DOCTYPE html>
<html>
<head>
	<?php 
		include "conexion.php";
	 ?>
	<title>Modifica convenio</title>
</head>
<body bgcolor="291d1c">
	<br><br>
	<form name="cod_convenio" action="ConvenioModifica1.php" method="GET">
		<h2 align="center"><font color="white">Elegir convenio a modificar</font></h2>
		<table bgcolor="3561f3" align="center" border="3">
			<tr>
				<td>Convenio</td><td>
					<select name="cod_convenio">
						<?php 
							$sql="SELECT * FROM convenios ORDER BY nombre_convenio";
							$resultado=mysqli_query($conexion,$sql) or die($sql . mysqli_error($conexion));
							while ($a=mysqli_fetch_array($resultado)){								
						 ?>
						 <option value="<?php echo $a['cod_convenio'];?>"><?php echo $a['nombre_convenio'];?></option>
						 <?php 
						 	}
						  ?>						
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="Enviar" value="Modificar">
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