<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login para usuario</title>
</head>
<link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" tipe="text/css" href="Estilos.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<body>

<?php
            include("cabecera.php");
            ?>
                <h3><center>Opciones del administrador</center></h3>
                <hr> <br>
<!---------------------------------------------------------------------------------------->

<ul class="list-group">

    <li class="list-group-item"><a href="Lista_articulos.php">Ver lista de articulos registrados</a></li>
    <li class="list-group-item"><a href="Registro.php">Registrar articulo nuevo</a></li>
    <li class="list-group-item"><a href="formulario_seleccionar_productos.php">Modificar registro de articulo almacenado</a></li>
    <li class="list-group-item"><a href="formulario_seleccionar_eliminar.php">Eliminar articulos del registro</a></li>
    <li class="list-group-item"><a href="Lista_usuarios.php">Registro de usuarios</a></li>
  </ul>


<!---------------------------------------------------------------------------------------->       
<br>
<hr>
<br>       
<?php
            include("footer.php");
            ?>




<!----------------------------------------------------------------------------------------> 
</body>
</html>