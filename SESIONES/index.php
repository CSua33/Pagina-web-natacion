<?php
include ("seguridad.php");
?>
<html>

<body>
<a href="">Bienvenido <strong><?php echo $_SESSION['usuarioactual'];?>
<a href=""><strong><?php echo $_SESSION['rol'];?>
	<p> <a href="formulario_alta.php"> Alta </a> </p>
	<p> <a href="formulario_seleccionar.php"> Actualizar </a> </p>
	<p> <a href="formulario_seleccionar_.php"> Eliminar </a> </p>
</body>
</html>