<body bgcolor="291d1c">
<legend><font color="white">Buscar empleado para dar de baja</font></legend><br>
<form action="BajaEmpleado.php" method="GET">
	<label><font color="white">Nombre</font></label>
	<input type="text" name="busqueda" placeholder="Ingrese una palabra clave"> <br><br>
	<input type="submit" value="buscar">
</form>
<?php
include "conexion.php";
if (isset($_GET['busqueda'])) {
	$nombre_apellido= $_GET['busqueda'];	

$sql="SELECT * FROM empleados WHERE nombre_apellido LIKE '%$nombre_apellido%' AND baja_empleado=0 ORDER BY nombre_apellido";
$resul=mysqli_query($conexion,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Buscar empleado</title>
</head>

	<table bgcolor="3561f3" border="3">
      <thead>
          <th>Legajo</th>
          <th>Nombre y apellido</th>
          <th>DNI</th>
          <th>Accion</th>          
      </thead>
      <tbody>
          <?php
          while($filas = mysqli_fetch_assoc($resul)) {          		
          ?>
          <tr>
              <td><?php echo $filas['legajo'] ?></td>
              <td><?php echo $filas['nombre_apellido'] ?></td>
              <td><?php echo $filas['dni'] ?></td>                            
              <td>
                  <a href="BajaEmpleadoGraba.php?legajo=<?php echo $filas['legajo']?>">Dar de baja</a>
              </td>
          </tr>
          <br>          
          <?php }?>
      </tbody>
  </table>
<?php   
}
?>
	<a href="menu.php">Volver al menu</a>
</body>
</html>

