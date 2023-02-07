<?php
    include("conexion.php");

    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $cantidad=$_POST['cantidad'];

    $sql="UPDATE cosas SET nombre='$nombre', descripcion='$descripcion', cantidad=$cantidad WHERE id=$id ";

    if($conn->query($sql)==TRUE){
        echo "<script lenguaje='javaScript'>
                alert('EL REGISTRO FUE GUARDADO CORRECTAMENTE');
                window.location.href=\"formulario_seleccionar.php\";
                </script>";
        }
        else{
            echo "Error:".$sql."<br>".$conn->error;
        }
        $conn->close();
?>