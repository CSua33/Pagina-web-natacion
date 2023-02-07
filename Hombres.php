<?php include("conexion.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login para usuario</title>
</head>
<style>
table {
    border-collapse: collapse;
    width:85%;
}
th, td,tr {
    text-align: center;
    padding: 15px;
}
</style>
<link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" tipe="text/css" href="Estilos.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<body><?php
            include("cabecera.php");
            ?>
        
        
            <h3><center>Trajes para hombre</center></h3>
            <hr> <br>
            <!---------------------------------------------------------------------------------------->

          
          <center>
          <table  border="0" width="100%">
          <tr bgcolor="#007bff">
        <th width=""><font color="white">Nombre</font></th>
        <th width=""><font color="white">Tipo</font></th>
        <th width=""><font color="white">Marca</font></th>
        <th width=""><font color="white">Color</font></th>
        <th width=""><font color="white">Disponibles</font></th>
        <th width=""><font color="white">Precio</font></th>
        <th width=""><font color="white"></font></th>
        <th width="15%"><font color="white">Opcion</font></th>
	</tr>
<?php 
	$sql="SELECT idProducto, Nombre, Tipo, Genero, Talla, Precio, Color, Marca, Cantidad, Imagen FROM producto where Genero='HOMBRE'";
    $query=$conn->query($sql);
    
	while($row = mysqli_fetch_object($query)){
	?>
  
	<tr>
       <td><h5><?php echo $Nombre=$row->Nombre;?></h5></td> 
       <td><h5><?php echo $Tipo=$row->Tipo;?></h5></td> 
       <td><h5><?php echo $Marca=$row->Marca;?></h5></td> 
       <td><h5><?php echo $Color=$row->Color;?></h5></td>
       <td><h5><?php echo $Cantidad=$row->Cantidad;?></h5></td>
       <td><h5>$<?php echo $Precio=$row->Precio;?></h5></td>
       <td><?php echo"<img class=fotos src='".$row->Imagen."'/><br><br>";?></td>
       <td><h5><a href="carrito_insert.php?idProducto=<?php echo $row->idProducto;?>"><button type="button" class="btn btn-primary btn-xs"><font color="white">Añadir al carrito</font></button></a></h5><br><br></td>
	</tr>
 

<?php } ?>

</table> 

</center>

<br>
   <!------------------------------------------------------------------------------->

    <?php $conn->close(); ?>

           <!---------------------------------------------------------------------------------------->
            <br>
            <hr> 
            <br>


            <!---------------------------------------------------------------------------------------->

            
            <?php
            include("footer.php");
            ?>




<!---------------------------------------------------------------------------------------->

                
        </body>
    </head>
</html>