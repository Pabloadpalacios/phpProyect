<!DOCTYPE html>
<html>
<head>
	<title>Liquidar</title>
</head>
<body bgcolor="291d1c">
	<br><br>
	<?php 
		include "conexion.php";
		$legajo= $_GET['legajo'];		
	 ?>
	 
	 <form name="Liquidar" action="InsertarLiquidacion.php" method="GET">
	 	<table bgcolor="3561f3" align="center" border="3">
	 		<th>Liquidar</th>
	 		<tr>
	 			<td>Legajo</td>
	 			<td>
	 				<input type="text" name="legajo" readonly="readonly" value="<?php echo $legajo;?>">	 				
	 			</td>
	 		</tr>
	 		<tr>
	 			<td>Convenio</td>
	 			<td>
	 				<select name="cod_convenio">
						<?php
							$sql1="SELECT cod_convenio,nombre_convenio,descuento_convenio FROM convenios ORDER BY  nombre_convenio";
							$resul1=mysqli_query($conexion,$sql1) or die ($sql1 . mysqli_error($conexion));
							while($file1=mysqli_fetch_array($resul1)){
						?>
							 
						 <option value="<?php echo $file1['cod_convenio'];?>"> <?php echo $file1['nombre_convenio'];?> 
						</option>
						 <?php 
						 	}
						  ?>
					</select>
	 			</td>
	 		</tr>
	 		<tr>
	 			<td>Categoria</td>
	 			<td>
	 				<select name="cod_categoria">
						<?php
							$sql3="SELECT cod_categoria,nombre_categoria,valor_categoria FROM categorias ORDER BY  nombre_categoria";
							$resul3=mysqli_query($conexion,$sql3) or die ($sql3 . mysqli_error($conexion));
							while($file3=mysqli_fetch_array($resul3)){
						?>
							 
						 <option value="<?php echo $file3['cod_categoria'];?>"> <?php echo $file3['nombre_categoria'];?> 
						</option>
						 <?php 
						 	}
						  ?>
					</select>
	 			</td>
	 		</tr>
	 		<tr>
	 			<td>Tipo de liquidacion</td>
	 			<td>
	 				<select name="cod_tipo_liquidacion">
	 					<?php
	 						$sql2="SELECT cod_tipo_liquidacion,tipo_liquidacion FROM tipo_liquidacion ORDER BY tipo_liquidacion";
	 						$resul2=mysqli_query($conexion,$sql2) or die ($sql2 . mysql_error($conexion));
	 						while($file2=mysqli_fetch_array($resul2)){
	 					?>
	 						<option value="<?php echo $file2['cod_tipo_liquidacion'];?>"> <?php echo $file2['tipo_liquidacion'];?> 
	 						</option>
	 						<?php  
	 						}
	 						?>
	 				</select>
	 			</td>
	 		</tr>
	 		<tr>
	 			<td>Fecha de liquidacion</td>
	 			<td>
	 				<input type="date" name="fecha_liquidacion">
	 			</td>
	 		</tr>	 		
	 		<tr>
	 			<td>Horas normales</td>
	 			<td>
	 				<input type="number" name="hs_normales">
	 			</td>
	 		</tr>	 		
	 		<tr>
	 		<tr>
	 			<td>Horas al 50%</td>
	 			<td>
	 				<input type="number" name="hs_50">
	 			</td>
	 		</tr>
	 		<tr>
	 		<tr>
	 			<td>Horas al 100%</td>
	 			<td>
	 				<input type="number" name="hs_100">
	 			</td>
	 		</tr>		 		
	 		<tr>	 			
	 			<td></td>
		 		<td>
					<input type="submit" name="Boton" value="Liquidar legajo">
				</td>
	 		</tr>
	 		<tr>
				<td></td><td>
					<a href="menu.php">Volver al menu</a>
				</td>
			</tr>
			<tr>
				<td></td><td>
					<a href="buscaempleado.php">Volver a la busqueda de empleados</a>
				</td>
			</tr>	
	 	</table>	 	
	 </form>
</body>
</html>