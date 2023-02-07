
<?php
$correo=$_POST['correo'];
$contrasena =$_POST['contrasena'];
$rol ="administrador";
$rol_2 ="usuario";
	include("conexion.php");
	$sql= "SELECT correo FROM usuario WHERE correo='$correo'";
	$myusuario= $conn->query($sql);
	$nmyusuario= mysqli_num_rows($myusuario);
	
	
	
	 if ($nmyusuario !=0){
		 
		 $sql= "select correo, Nombre
		 from usuario 
		 where correo= '".$correo."'
		 and contrasena= '".$contrasena."'
		 and rol= '".$rol."'";
		 $myclave= $conn->query($sql);
		 $nmyclave = mysqli_num_rows($myclave);
		
		
		if($nmyclave !=0){
			echo "El usuario y clave son correctos y están activos en la DB";
			$dato=$conn->query($sql);
			$row = mysqli_fetch_object($dato);
			session_start();
			$_SESSION["autentica"] = "Si";
			$_SESSION["usuarioactual"] = $dato->$correo;
			$_SESSION["correo"]=$correo;
			$_SESSION["rol"]=$rol;
			$_SESSION['nombre']=$row->Nombre;

			
			
			
		
			
			
			header("Location: Opciones_administrador.php");
		

		}



		$sql= "select correo, Nombre
		 from usuario 
		 where correo= '".$correo."'
		 and contrasena= '".$contrasena."'
		 and rol= '".$rol_2."'";
		 $myclave= $conn->query($sql);
		 $nmyclave = mysqli_num_rows($myclave);
		
		if($nmyclave !=0){
			echo "El usuario y clave son correctos y están activos en la DB";
			$dato=$conn->query($sql);
			$row = mysqli_fetch_object($dato);
			session_start();
			$_SESSION["autentica"] = "Si";
			$_SESSION["usuarioactual"] = $dato->$correo;
			$_SESSION["correo"]=$correo;
			$_SESSION["rol"]=$rol_2;
			$_SESSION['nombre']=$row->Nombre;
			
			header("Location: index.php");

		}

		


		else{
			echo " <script language='JavaScript'>
							alert('La contrasena del usuario no es correcta'); window.location.href=\"login_2.php\";
					</script>";
		}
	 }
	 
	 
	 else{
			echo " <script language='JavaScript'>
							alert('El usuario no existe'); window.location.href=\"login_2.php\";
					</script>";
		}
	 
	 $conn->close();
	 
?>