<!DOCTYPE html>
<html>
<head>
	<title>Alta de localidades</title>
</head>
<body bgcolor="291d1c">
	<br><br>
	<form name="localidades" action="InsertarLocalidades.php" method="GET">
		<table bgcolor="3561f3" align="center" border="3">
			<th align="center">Alta de Localidades</th>
			<tr>
				<td>Codigo postal</td><td>
					<input type="number" name="codigo_postal">
				</td>
			</tr>
			<tr>
				<td>Localidad</td><td>
					<input type="text" name="localidad">
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