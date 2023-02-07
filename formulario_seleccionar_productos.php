<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" tipe="text/css" href="Estilos.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
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
    
    <title>Document</title>
<body>
<?php
            include("cabecera.php");
            ?>
            <h3><center>Actualizar productos</center></h3>
            <hr> <br>
<!---------------------------------------------------------------------------------------->  

   
 <table border="0" width="100%">
	<tr bgcolor="#007bff">
        <th width=""><font color="white">idProducto</font></th>
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
    $sql="SELECT idProducto, Nombre, Tipo, Genero, Talla, Precio, Color, Marca, Cantidad,Imagen FROM producto";
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
        <a href="formulario_actualizar_productos.php?idProducto=<?php echo $row->idProducto;?>"><button type="button" class="btn btn-primary btn-xs"><font color="white">Actualizar</font></button></a>
        </td>
	</tr>
    <?php } ?>
   
</table>

<br>
   <!------------------------------------------------------------------------------->

    <?php $conn->close(); ?>
 <!---------------------------------------------------------------------------------------->
 <!---------------------------------------------------------------------------------------->       
 <br>
            <hr>
            <br>       
            <?php
            include("footer.php");
            ?>




<!---------------------------------------------------------------------------------------->  

</head>
</body>
    
</body>
</html>