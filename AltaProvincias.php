<!DOCTYPE html>
<html>
<head>
	<title>Alta Provincias</title>
</head>
<body bgcolor="291d1c">
	<br><br>
		<form name="provincias" action="InsertarProvincias.php" method="GET">
			<table bgcolor="3561f3" align="center" border="3">
				<th align="center">Alta de Provincias</th>
				<tr>
					<td>Codigo de Provincia</td><td>
						<input type="number" name="cod_provincia">
					</td>
				</tr>
				<tr>
					<td>Provincia</td><td>
						<input type="text" name="provincia">
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