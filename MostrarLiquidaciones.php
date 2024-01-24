<?php
include 'conexion.php';

$sql1 = "SELECT * FROM liquidacion ";

$Mostrarliquidaciones =mysqli_query($conexion,$sql1);
?>
<table border="3">
      <thead>
          <th>Legajo</th>
          <th>Empleado</th>
          <th>Tipo de liquidacion</th>
          <th>Fecha de liquidacion</th>
          <th>Convenio</th>
          <th>Categoria</th>
          <th>Hs Normales</th>
          <th>Hs al 50</th>
          <th>Hs al 100</th>
          <th>Valor Hs normales</th>
          <th>Valor hs 50</th>
          <th>Valor hs 100</th>
          <th>Descuentos</th>
          <th>Bruto</th>
          <th>Neto</th>
      </thead>
      <tbody>

          <?php         
          
          while($filas1 = mysqli_fetch_assoc($Mostrarliquidaciones)) {

          $cod_tipo_liquidacion=$filas1['cod_tipo_liquidacion'];
          $consulta1="SELECT tipo_liquidacion.tipo_liquidacion FROM liquidacion 
          LEFT JOIN tipo_liquidacion ON (tipo_liquidacion.cod_tipo_liquidacion=liquidacion.cod_tipo_liquidacion) 
          WHERE tipo_liquidacion.cod_tipo_liquidacion=$cod_tipo_liquidacion";
          $resul1=mysqli_query($conexion,$consulta1) or die($consulta1 . mysqli_error($conexion));
          $filas2=mysqli_fetch_array($resul1);

          $cod_convenio=$filas1['cod_convenio'];
          $consulta2="SELECT convenios.nombre_convenio 
          FROM liquidacion LEFT JOIN convenios 
          ON (convenios.cod_convenio=liquidacion.cod_convenio) 
          WHERE convenios.cod_convenio=$cod_convenio";
          $resul2=mysqli_query($conexion,$consulta2) or die($consulta2 . mysqli_error($conexion));
          $filas3=mysqli_fetch_array($resul2);

          $cod_categoria=$filas1['cod_categoria'];
          $consulta3="SELECT categorias.nombre_categoria 
          FROM liquidacion LEFT JOIN categorias
          ON (categorias.cod_categoria=liquidacion.cod_categoria)
          WHERE categorias.cod_categoria=$cod_categoria";
          $resul3=mysqli_query($conexion,$consulta3) or die($consulta3 . mysqli_error($conexion));
          $filas4=mysqli_fetch_array($resul3);

          $legajo=$filas1['legajo'];
          $consulta4="SELECT empleados.nombre_apellido
          FROM liquidacion LEFT JOIN empleados
          ON (empleados.legajo=liquidacion.legajo)
          WHERE empleados.legajo=$legajo";
          $resul4=mysqli_query($conexion,$consulta4) or die(consulta4 . mysqli_error($conexion));
          $filas5=mysqli_fetch_array($resul4);

          ?>
            <tr>
                <td><?php echo $filas1['legajo'] ?></td>
                <td nowrap=""><?php echo $filas5['nombre_apellido'] ?></td>
                <td><?php echo $filas2['tipo_liquidacion'] ?></td>
                <td><?php echo $filas1['fecha_liquidacion'] ?></td>
                <td nowrap=""><?php echo $filas3['nombre_convenio'] ?></td>
                <td nowrap=""><?php echo $filas4['nombre_categoria'] ?></td>
                <td><?php echo $filas1['hs_normales'] ?></td>
                <td><?php echo $filas1['hs_50'] ?></td>
                <td><?php echo $filas1['hs_100'] ?></td>
                <td><?php echo $filas1['valor_hs_normales'] ?></td>
                <td><?php echo $filas1['valor_hs_50'] ?></td>
                <td><?php echo $filas1['valor_hs_100'] ?></td>
                <td><?php echo $filas1['descuentos'] ?></td>
                <td><?php echo $filas1['bruto'] ?></td>
                <td><?php echo $filas1['neto'] ?></td>
            </tr>
          <?php }?>
      </tbody>      
</table>
<a href="menu.php">Volver al menu</a>
