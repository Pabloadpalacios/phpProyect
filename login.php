<?PHP

require("conexion.php");
$valida_usr="SELECT * FROM usuarios WHERE usuario='".$_POST["usuario"]."'"; 
$valida_usr_res=mysqli_query($conexion,$valida_usr) or die($valida_usr);
$cta_valida_usr=mysqli_num_rows($valida_usr_res); 
if($cta_valida_usr==0) 
	{
	
	echo "<script>
	alert('EL USUARIO NO EXISTE');
    history.go(-1);
	      </script>";
	
	exit;
	}
	else 
	{
	$valida_baja="SELECT * FROM usuarios WHERE usuario='".$_POST["usuario"]."' AND fecha_baja='0000-00-00'"; 
	$valida_baja_res=mysqli_query($conexion,$valida_baja) or die($valida_baja);
	$cta_valida_baja=mysqli_num_rows($valida_baja_res);
	if($cta_valida_baja==0) 
		{
		
	    echo "<script>alert('EL USUARIO ESTA INACTIVO');
	     history.go(-1);
	    </script>";

   
		exit;
		}
		else 
		{
		$valida_pass="SELECT * FROM usuarios WHERE usuario='".$_POST["usuario"]."' AND fecha_baja='0000-00-00' AND password='".$_POST["password"]."'";
			
		$valida_pass_res=mysqli_query($conexion,$valida_pass) or die($valida_pass);
		$cta_valida_pass=mysqli_num_rows($valida_pass_res);
		if($cta_valida_pass==0)
			{
			
			 echo "<script>alert('CONTRASEÑA INCORRECTA');
	     history.go(-1);
	    </script>";
			exit;
			}
			else   
			{

				 echo "<script>alert('EL USUARIO HA SIDO VALIDADO CON EXITO');

				 location.replace('menu.php');
				 </script>";

			}
		}	
	}

?>
