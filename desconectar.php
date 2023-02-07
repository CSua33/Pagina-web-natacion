<?php 
session_start();
if($_SESSION["autentica"] !="Si"){	
	
    session_unset($_SESSION['nombre']);
	session_destroy();
	header("location:login_2.php");
}
else{
	header("location:login_2.php");
}
?>