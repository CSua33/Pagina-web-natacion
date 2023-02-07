<?php
    include("conexion.php");

   
    $id = $_GET['idUsuario'];
    $sql= "DELETE FROM usuario WHERE idUsuario=$id";

    if($conn->query($sql)==TRUE){
        echo "<script lenguaje='javaScript'>
                alert('EL REGISTRO FUE ELIMINADO CORRECTAMENTE');
                window.location.href=\"Lista_usuarios.php\";
                </script>";
        }
        else{
            echo "Error:".$sql."<br>".$conn->error;
        }
        $conn->close();
?>