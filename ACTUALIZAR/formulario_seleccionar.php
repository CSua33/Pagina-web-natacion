<?php include("conexion.php"); ?>
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

    <form name="mostrar" action="formulario_actualizar.php" method="POST">
    <center><br>
    <select name="id">
    <?php
        $sql="SELECT id, nombre FROM cosas";
        $query=$conn->query($sql);

        if($query==true)
        {
            while($info=mysqli_fetch_array($query))
            {
                echo '<option value="'.$info['id'].'">'.$info['id'].'-'.$info['nombre'].'</option>';
            }
        }
    ?> 
    </select>
    <input type="submit" name="Seleccionar"/>
    </form>
    </center>
    <?php $conn->close(); ?>
    </body>
 </html>