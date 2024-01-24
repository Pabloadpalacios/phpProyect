<!DOCTYPE html>
<html>
<head>
	<title>Alta de Tipo de liquidacion</title>
</head>
<body bgcolor="291d1c">
	<br><br>
	<form name="tipo_liquidacion" action="InsertarTipoLiquidacion.php" method="GET">
		<table bgcolor="3561f3" align="center" border="3">
			<th align="center">Alta de Tipo de liquidacion</th>
			<tr>
				<td>Codigo de Tipo de liquidacion</td><td>
					<input type="number" name="cod_tipo_liquidacion">
				</td>
			</tr>
			<tr>
				<td>Nombre del Tipo de liquidacion</td><td>
					<input type="text" name="tipo_liquidacion">
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