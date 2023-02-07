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
    width: 100%;
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
            <h3><center>Registro</center></h3>
            <hr> <br>
<!---------------------------------------------------------------------------------------->  

<?php 
     
     $sql="SELECT idProducto, Nombre, Tipo, Genero, Talla, Precio, Color, Marca, Cantidad, Imagen FROM producto";

      function connectDB()
      {

        $servername="localhost";
        $username="root";
        $password="";
        $dbname="PROYECTO";

        $conexion = mysqli_connect($servername, $username, $password, $dbname);

        if($conexion){}
        else{
            echo "<script lenguaje='javaScript'>
                alert('Ha sucedido un error inexperado en la conexion de la base de datos');
                </script>";
        }

            return $conexion;
        }

        function disconnectDB($conexion){

            $close = mysqli_close($conexion);
        
                if($close){}
                else{
                    echo "<script lenguaje='javaScript'>
                    alert('Ha sucedido un error inexperado en la desconexion de la base de datos');
                    </script>";
                    
                }   
        
            return $close;
        }

        function getArraySQL($sql){
            //Creamos la conexión con la función anterior
            $conexion = connectDB();
        
            //generamos la consulta
        
                mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
        
            if(!$result = mysqli_query($conexion, $sql)) die(); //si la conexión cancelar programa
        
            $rawdata = array(); //creamos un array
        
            //guardamos en un array multidimensional todos los datos de la consulta
            $i=0;
        
            while($row = mysqli_fetch_array($result))
            {
                $rawdata[$i] = $row;
                $i++;
            }
        
            disconnectDB($conexion); //desconectamos la base de datos
        
            return $rawdata; //devolvemos el array
        }
        
                $myArray = getArraySQL($sql);
                $a=json_encode($myArray);
                

                $array = json_decode($a);
                

                $json_string = json_encode($a);
                $file = 'Registro.json';
                file_put_contents($file, $a);
                ?>
                
                <div class="centro">
                <?php 
               
               echo "<table border=0 width=100%>";
               echo "<tr bgcolor=#007bff >";
                    echo"<th><font color=white>ID</font></th>";
                    echo"<th><font color=white>Nombre</font></th>";
                    echo"<th><font color=white>Tipo</font></th>";
                    echo"<th><font color=white>Genero</font></th>";
                    echo"<th><font color=white>Talla</font></th>";
                    echo"<th><font color=white>Precio</font></th>";
                    echo"<th><font color=white>Color</font></th>";
                    echo"<th><font color=white>Marca</font></th>";
                    echo"<th><font color=white>Cantidad</font></th>";
                    echo"<th><font color=white>Imagen</font></th>";
                echo "</tr>";
                
                for($i=0;$i<count($array);$i++){ 
                    echo "<tr>";
                    $idProducto = $array[$i]->idProducto;
                    $Nombre = $array[$i]->Nombre;
                    $Tipo = $array[$i]->Tipo;
                    $Genero = $array[$i]->Genero;
                    $Talla = $array[$i]->Talla;
                    $Precio = $array[$i]->Precio;
                    $Color = $array[$i]->Color;
                    $Marca = $array[$i]->Marca;
                    $Cantidad = $array[$i]->Cantidad;
                    $Imagen = $array[$i]->Imagen;
                    echo"<td>$idProducto</td>";
                    echo"<td>$Nombre</td>";
                    echo"<td>$Tipo</td>";
                    echo"<td>$Genero</td>";
                    echo"<td>$Talla</td>";
                    echo"<td>$Precio</td>";
                    echo"<td>$Color</td>";
                    echo"<td>$Marca</td>";
                    echo"<td>$Cantidad</td>";
                  
                    echo"<td> <img src='".$Imagen."' width=100 height=100/></td>";
                   
                    echo "</tr>";     
                }
                echo "</table>";
                echo "</div>";
                ?>
                </div>
        



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
                
       


      
    