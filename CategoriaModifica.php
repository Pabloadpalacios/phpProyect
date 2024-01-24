<!DOCTYPE html>
<html>
<head>
	<title>Modifica cagtegoria</title>
</head>
<body bgcolor="291d1c">
	<br><br>
	<?php 
		include "conexion.php";
	 ?>
	 <form name="cod_categoria" action="CategoriaModifica1.php" method="GET">
	 	<h2 align="center"><font color="white">Elegir categoria a modificar</font></h2>
	 	<table bgcolor="3561f3" align="center" border="3">
	 		<tr>
	 			<td>Catogoria</td><td>
	 				<select name="cod_categoria">
	 					<?php 
	 						$sql="SELECT * FROM categorias ORDER BY nombre_categoria";
	 						$resultado= mysqli_query($conexion,$sql) or die ($sql . mysqli_error($conexion));
	 						while ($a=mysqli_fetch_array($resultado)) {
	 						
	 					?>
	 						<option value="<?php echo $a['cod_categoria'];?>"> <?php echo $a['nombre_categoria'];?></option>
	 					<?php	
	 						}
	 					?>
	 				</select>	 
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