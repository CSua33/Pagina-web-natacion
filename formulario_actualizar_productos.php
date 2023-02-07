<?php include("conexion.php"); 
$idProducto= $_GET['idProducto'];
?>
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
    width: 50%;
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
   
<form name="actualizar" action="actualizar_datos_productos.php" method="GET">
    <center><br>
   
<table border="0" width="100%">
	<tr bgcolor="#007bff">
        <th width="50%"><font color="white">idProducto</font></th>
        <th width=""><font color="white">Nombre</font></th>
        <th width=""><font color="white">Tipo</font></th>
        <th width=""><font color="white">Genero</font></th>
        <th width=""><font color="white">Talla</font></th>
    </tr>
    
<?php 
    $sql="SELECT idProducto, Nombre, Tipo, Genero, Talla, Precio, Color, Marca, Cantidad,Imagen FROM producto WHERE idProducto=$idProducto";
    $query=$conn->query($sql);

	if($query==true)
        {
            $info= mysqli_fetch_array($query);
            {
    ?>
    
	<tr>
        
        <td><?php echo '<input type="text" value="'.$info['idProducto'].'" name="idProducto" disabled=disabled> ';echo '<input type="text" value="'.$info['idProducto'].'" name="idProducto" hidden>';?></td>
        <td><?php echo '<input type="text" value="'.$info['Nombre'].'" name="Nombre"> ';?></td>
        <td><?php echo '<input type="text" value="'.$info['Tipo'].'" name="Tipo"> ';?></td>
        <td><?php echo '<input type="text" value="'.$info['Genero'].'" name="Genero"> ';?></td>
        <td><?php echo '<input type="text" value="'.$info['Talla'].'" name="Talla"> ';?></td>
	</tr>

    <tr bgcolor="#007bff">
        <th width=""><font color="white">Precio</font></th>
        <th width=""><font color="white">Color</font></th>
        <th width=""><font color="white">Marca</font></th>
        <th width=""><font color="white">Cantidad</font></th>
        <th width=""><font color="white">Imagen</font></th>
    </tr>
   
    <td><?php echo '<input type="text" value="'.$info['Precio'].'" name="Precio"> ';?></td>
        <td><?php echo '<input type="text" value="'.$info['Color'].'" name="Color"> ';?></td>
        <td><?php echo '<input type="text" value="'.$info['Marca'].'" name="Marca"> ';?></td>
        <td><?php echo '<input type="text" value="'.$info['Cantidad'].'" name="Cantidad"> ';?></td>
        <td><?php echo '<input type="text" value="'.$info['Imagen'].'" name="Imagen"> ';?></td>
    </tr>
    
    <tr>
    <td> </td>
    <td> </td>
    <td> <input type="submit" name="Actualizar"/></td>
    </tr>

    <?php }} ?>
</table>
    </center>
    </form>
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

</head>
</body>
    
</body>
</html>