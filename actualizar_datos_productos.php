<?php
    include("conexion.php");

    $idProducto= $_GET['idProducto'];
    $Nombre=$_GET['Nombre'];
    $Tipo=$_GET['Tipo'];
    $Genero=$_GET['Genero'];
    $Talla=$_GET['Talla'];
    $Precio=$_GET['Precio'];
    $Color=$_GET['Color'];
    $Marca=$_GET['Marca'];
    $Cantidad=$_GET['Cantidad'];
    $Imagen=$_GET['Imagen'];

    $sql="UPDATE producto SET Nombre='$Nombre', Tipo='$Tipo', Genero='$Genero', Talla='$Talla',Precio=$Precio,Color='$Color' ,Marca='$Marca', Cantidad='$Cantidad', Imagen='$Imagen'  WHERE idProducto=$idProducto";

    if($conn->query($sql)==TRUE){
        echo "<script lenguaje='javaScript'>
                alert('EL REGISTRO FUE GUARDADO CORRECTAMENTE');
                window.location.href=\"formulario_seleccionar_productos.php\";
                </script>";
        }
        else{
            echo "Error:".$sql."<br>".$conn->error;
        }
        $conn->close();
?>