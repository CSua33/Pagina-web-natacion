<?php
    include("conexion.php");

    $id=$_POST['id'];

    $sql= "DELETE FROM cosas WHERE id=$id";

    if($conn->query($sql)==TRUE){
        echo "<script lenguaje='javaScript'>
                alert('EL REGISTRO FUE ELIMINADO CORRECTAMENTE');
                window.location.href=\"formulario_seleccionar.php\";
                </script>";
        }
        else{
            echo "Error:".$sql."<br>".$conn->error;
        }
        $conn->close();
?>