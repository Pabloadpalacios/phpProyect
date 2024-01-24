<?php 
	include "conexion.php";
	$Cod_Categoria=$_GET['cod_categoria'];
	$Nombre_Categoria=$_GET['nombre_categoria'];
	$Valor_Categoria=$_GET['valor_categoria'];
	$sql="INSERT INTO categorias (cod_categoria,nombre_categoria,valor_categoria) values ('$Cod_Categoria','$Nombre_Categoria',$Valor_Categoria)";
	mysqli_query($conexion,$sql) or die(sql . mysqli_error($conexion));
?>
<script>
	alert("Categoria agregada correctamente");
	location.replace("AltaCategoria.php");
</script>