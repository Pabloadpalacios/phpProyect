<?php 
	include "conexion.php";
	$cod_categoria = $_GET['cod_categoria'];
	$nombre_categoria = $_GET['nombre_categoria'];
	$valor_categoria = $_GET['valor_categoria'];
	
	$sql="UPDATE categorias SET nombre_categoria = '$nombre_categoria',
	valor_categoria = '$valor_categoria' 
	WHERE cod_categoria = $cod_categoria";

	$resultado=mysqli_query($conexion,$sql) or die ($sql . mysqli_error($conexion));
?>
<script>
	alert("Categoria modificada correctamente");
	location.replace("CategoriaModifica.php");
</script>