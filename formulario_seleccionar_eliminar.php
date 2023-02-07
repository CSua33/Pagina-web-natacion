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
        
        <h3><center>Eliminar articulos</center></h3>
        <hr>
        <br> 
        <div class="centro">
            

   
    </div>
   <!------------------------------------------------------------------------------->
  

   
   <table border="0" width="50%">
	<tr bgcolor="#007bff">
        <th width=""><font color="white">IdProducto</font></th>
        <th width=""><font color="white">Nombre</font></th>
        <th width=""><font color="white">Tipo</font></th>
        <th width=""><font color="white">Genero</font></th>
        <th width=""><font color="white">Talla</font></th>
        <th width=""><font color="white">Precio</font></th>
        <th width=""><font color="white">Color</font></th>
        <th width=""><font color="white">Marca</font></th>
        <th width=""><font color="white">Cantidad</font></th>
        <th width=""><font color="white">Imagen</font></th>
		<th width="9%"><font color="white">Opcion</font></th>
	</tr>
<?php 
	$sql="SELECT idProducto, Nombre, Tipo, Genero, Talla, Precio, Color, Marca, Cantidad, Imagen FROM producto";
    $query=$conn->query($sql);
	while($row = mysqli_fetch_object($query)){
	?>
	<tr>
		<td><?php echo $row->idProducto;?></td>
        <td><?php echo $row->Nombre;?></td>
        <td><?php echo $row->Tipo;?></td>
        <td><?php echo $row->Genero;?></td>
        <td><?php echo $row->Talla;?></td>
        <td><?php echo $row->Precio;?></td>
        <td><?php echo $row->Color;?></td>
        <td><?php echo $row->Marca;?></td>
        <td><?php echo $row->Cantidad;?></td>
        <td><?php echo" <img src='".$row->Imagen."' width=100 height=100/>";?></td>
		<td>
        <a href="eliminar_datos.php?idProducto=<?php echo $row->idProducto;?>"><button type="button" class="btn btn-primary btn-xs"><font color="white">Eliminar</font></button></a>
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