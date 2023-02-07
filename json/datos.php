<?php

$Producto = $_POST ['Producto'];
$Nombre = $_POST ['Nombre'];
$Marca = $_POST ['Marca'];
$Talla = $_POST ['Talla'];
$Color = $_POST ['Color'];
$Precio = $_POST ['Precio'];
$Genero = $_POST ['Genero'];

   
$datos = array(

       'Producto' => $Producto,
       'Nombre' => $Nombre,
       'Marca' => $Marca,
       'Talla' => $Talla,
       'Color' => $Color,
       'Precio' => $Precio,
       'Genero' => $Genero,
    
);


//creamos JSON
$json_string = json_encode($datos);
$file = "datos.json";
$actual = file_get_contents($file); // toma los datos que estan en el archivo json
if(empty($actual)){
    $actual = "[\n";
    $actual .= $json_string . "]";
}else{
    $actual = str_replace("]","",$actual); // el primer parametro es el que se va a sustituir, el segundo es por el cual se va a sustituir y el tercero es la cadena donde lo va a sustituir
    $actual .= ",\n" . $json_string . "]";
}

file_put_contents($file,$actual); 





?>

<center><p>formulario guardado con exito</p></center>
<center><a href="http://localhost/Proyecto/json/Registro.html"> Favor de llenar el formulario de nuevo </a></center>