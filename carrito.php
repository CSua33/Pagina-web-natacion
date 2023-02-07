<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scale=no, inicial-scale=1.0, maximum-scale=1.0, minium-scale=1.0">
        
        <title>IDS</title>
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
        
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" tipe="text/css" href="Estilos.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <body>
            
        <?php
            include("cabecera.php");
            ?>
            <h3><center>Carrito de compras</center></h3>
            <hr> <br>
            <!---------------------------------------------------------------------------------------->
            
            <input id="prodId" name="prodId" type="hidden" value="xm234jq">
           

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
        
	</tr>
<?php 
$correo=$_SESSION["correo"];

        $sql_3="SELECT idUsuario FROM Usuario WHERE Correo='$correo'";

                $query=$conn->query($sql_3);
                        if($query==true)
                        {
                             $row= mysqli_fetch_object($query);
                             {
                                 $idUsuario=$row->idUsuario;
                            } 
                        }

        $sql_2="SELECT idProducto FROM pedido WHERE idUsuario=$idUsuario";
        $query=$conn->query($sql_2);
               
        while( $row= mysqli_fetch_object($query))
                            {
                                $idProducto=$row->idProducto;

                                $sql="SELECT idProducto, Nombre, Tipo, Genero, Talla, Precio, Color, Marca, Cantidad, Imagen FROM producto WHERE idProducto=$idProducto";
                                $query_2=$conn->query($sql);
                                while($row_2 = mysqli_fetch_object($query_2)){
                                    echo"<tr>";
                                    echo "<td>". $row_2->idProducto."</td>";
                                    echo "<td>".$row_2->Nombre."</td>";
                                    echo "<td>".$row_2->Tipo."</td>";
                                    echo "<td>".$row_2->Genero."</td>";
                                    echo "<td>". $row_2->Talla."</td>";
                                    echo "<td>".$row_2->Precio."</td>";
                                    echo "<td>".$row_2->Color."</td>";
                                    echo "<td>".$row_2->Marca."</td>";
                                    echo "<td>".$cantidad="1"."</td>";
                                    echo"<td> <img src='".$row_2->Imagen."' width=100 height=100/></td>";
                                   
                                }    
                               
                            } 

                            echo "</tr>";
                            echo "</table>";

                            echo"<br>";
                            
                            
    ?>
   
    <center><a href="carrito_venta.php?idUsuario=<?php echo $idUsuario;?>"><button type="button" class="btn btn-primary btn-xs"><font color="white">Continuar con la compra</font></button></a> </center>
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
    </head>
</html>