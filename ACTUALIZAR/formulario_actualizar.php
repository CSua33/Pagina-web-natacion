<?php include("conexion.php"); 
$id=$_POST["id"];
?>
<html>
    <link rel="stylesheet" tipe="text/css" href="Estilos.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <body>

    <body style="background-color:rgba(242, 252, 113, 0.979);"> 
        <br><hr>
        
        <h3><center>"ACTUALIZAR PRODUCTOS"</center></h3>
        <hr>
        <br> <br> <br>
        <div class="centro">
            <div class="comentario">

    <form name="actualizar" action="actualizar_datos.php" method="POST">
    <center><br>
    <?php
        $sql="SELECT * FROM cosas WHERE id=$id";
        $query=$conn->query($sql);

        if($query==true)
        {
            $info= mysqli_fetch_array($query);
            {
                echo 'ID: <input type="text" value="'.$info['id'].'" name="id_" disabled=disabled> <br><br>';
                echo '<input type="text" value="'.$info['id'].'" name="id" hidden>';
                echo 'NOMBRE: <input type="text" value="'.$info['nombre'].'" name="nombre"> <br><br>';
                echo 'DESCRIPCION: <input type="text" value="'.$info['descripcion'].'" name="descripcion"> <br><br>';
                echo 'CANTIDAD: <input type="text" value="'.$info['cantidad'].'" name="cantidad"> <br><br>';
            }
        }
    ?>

    <div><input type="submit" name="Actualizar"/></div>
    </center>
    </form>
    <?php $conn->close(); ?>
    </body>
</html>