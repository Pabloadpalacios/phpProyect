<!DOCTYPE html>
<html>
<head>
	<title>Alta de Categorias</title>
</head>
<body bgcolor="291d1c">
	<br><br>
	<form name="categorias" action="InsertarCategorias.php" method="GET">
		<table bgcolor="3561f3" align="center" border="3">
			<th align="center">Alta de Cateogorias</th>
			<tr>
				<td>Codigo de categoria</td><td>
					<input type="number" name="cod_categoria">
				</td>
			</tr>
			<tr>
				<td>Nombre de categoria</td><td>
					<input type="text" name="nombre_categoria">
				</td>
			</tr>
			<tr>
				<td>Valor categoria</td><td>
					<input type="number" name="valor_categoria">
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