<?php include("conexion.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login para usuario</title>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td,tr {
    text-align: center;
    padding: 4px;
}
</style>
</head>
<link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" tipe="text/css" href="Estilos.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        

    <body>
    <?php
            include("cabecera.php");
            ?>

<!---------------------------------------------------------------------------------------->
        
        <h3><center>Lista de usuarios registrados</center></h3>
        <hr>
        <br> 
        <div class="centro">
            

   
    </div>
   <!------------------------------------------------------------------------------->
  

   
   <table border="0" width="100%">
	<tr bgcolor="#007bff">
        <th width=""><font color="white">idUsuario</font></th>
        <th width=""><font color="white">Rol</font></th>
        <th width=""><font color="white">Nombre</font></th>
        <th width=""><font color="white">Correo</font></th>
        <th width=""><font color="white">Contraseña</font></th>
        <th width="9%"><font color="white">Opcion</font></th>
	</tr>
<?php 
	$sql="SELECT idUsuario, Rol, Nombre, Correo, Contrasena FROM Usuario";
    $query=$conn->query($sql);
	while($row = mysqli_fetch_object($query)){
	?>
	<tr>
		<td><?php echo $row->idUsuario;?></td>
        <td><?php echo $row->Rol;?></td>
        <td><?php echo $row->Nombre;?></td>
        <td><?php echo $row->Correo;?></td>
        <td><?php echo $row->Contrasena;?></td>
		<td>
        <a href="eliminar_datos_usuarios.php?idUsuario=<?php echo $row->idUsuario;?>"><button type="button" class="btn btn-primary btn-xs"><font color="white">Eliminar</font></button></a>
        </td>
	</tr>
    <?php } ?>
   
</table>

<br>
   <!------------------------------------------------------------------------------->

    <?php $conn->close(); ?>
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