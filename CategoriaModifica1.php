<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="291d1c">
	<br><br>
	<?php 
		include "conexion.php";
		$cod_categoria=$_GET['cod_categoria'];
		$sql="SELECT * FROM categorias WHERE cod_categoria=$cod_categoria";
		$resultado=mysqli_query($conexion,$sql) or die ($sql . mysqli_error($conexion));
		$m=mysqli_fetch_array($resultado);
	 ?>
	 <form name="nombre_categoria" action="CategoriaModificaGraba.php" method="GET">
	 	<h2 align="center"><font color="white">Modifica Categoria</font></h2>
	 	<table bgcolor="3561f3" align="center" border="3">
	 		<tr>
	 			<td>Codigo de categoria</td><td>
	 				<input type="text" name="cod_categoria" value="<?php echo $m['cod_categoria'];?>" readonly>
	 			</td>
	 		</tr>
	 		<tr>
	 			<td>Nombre categoria</td><td>
	 				<input type="text" name="nombre_categoria" value="<?php echo $m['nombre_categoria'];?>">
	 			</td>
	 		</tr>
	 		<tr>
	 			<td>Valor categoria</td><td>
	 				<input type="text" name="valor_categoria" value="<?php echo $m['valor_categoria'];?>">
	 			</td>
	 		</tr>
	 		<tr>
	 			<td></td>
	 			<td>
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