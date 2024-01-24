<!DOCTYPE html>
<html>
<head>
	<title>Alta de convenios</title>
</head>
<body bgcolor="291d1c">
	<br><br>	
	<form name="convenios" action="InsertarConvenios.php" method="GET">
		<table bgcolor="3561f3" align="center" border="3">
			<th align="center">Alta de convenios</th>
			<tr>
				<td>Codigo de convenio</td><td>
					<input type="number" name="cod_convenio">
				</td>
			</tr>
			<tr>
				<td>Nombre del convenio</td><td>
					<input type="text" name="nombre_convenio">
				</td>
			</tr>
			<tr>
				<td>Descuento del convenio</td><td>
					<input type="number" name="descuento_convenio">
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