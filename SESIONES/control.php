<?php
$email=$_POST['email'];
$clave =$_POST['password'];
$Rol ="admin";
	include("conexion.php");
	$sql= "SELECT email FROM usuarios WHERE email='$email'";
	$myusuario= $conn->query($sql);
	$nmyusuario= mysqli_num_rows($myusuario);
	
	
	
	 if ($nmyusuario !=0){
		 
		 $sql= "select email 
		 from usuarios 
		 where email= '".$email."'
		 and password= '".$clave."'
		 and Rol= '".$Rol."'";
		 $myclave= $conn->query($sql);
		 $nmyclave = mysqli_num_rows($myclave);
		
		if($nmyclave !=0){
			echo "El usuario y clave son correctos y están activos en la DB";
			$dato=$conn->query($sql);
			session_start();
			$_SESSION["autentica"] = "Si";
			$_SESSION["usuarioactual"] =$email;
			$_SESSION["rol"] ="admin";
			
			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			header("Location: index.php");

		}
		else{
			echo " <script language='JavaScript'>
							alert('La contrasena del usuario no es correcta'); window.location.href=\"login.php\";
					</script>";
		}
	 }else{
			echo " <script language='JavaScript'>
							alert('El usuario no existe'); window.location.href=\"login.php\";
					</script>";
		}
	 
	 $conn->close();
	 
?>