<?php
    include("conexion.php");

   
    $id = $_GET['idProducto'];
    $sql= "DELETE FROM producto WHERE idProducto=$id";

    if($conn->query($sql)==TRUE){
        echo "<script lenguaje='javaScript'>
                alert('EL REGISTRO FUE ELIMINADO CORRECTAMENTE');
                window.location.href=\"formulario_seleccionar_eliminar.php\";
                </script>";
        }
        else{
            echo "Error:".$sql."<br>".$conn->error;
        }
        $conn->close();
?>