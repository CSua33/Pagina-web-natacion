<?php
$servername="localhost";
$username="root";
$password="";
$dbname="PROYECTO";

$conn=new mysqli($servername, $username, $password, $dbname) or die("No ha sido posible conectarse. ".mysql_error());

$IdProducto=$_POST['IdProducto'];
$Nombre=$_POST['Nombre'];
$Tipo=$_POST['Tipo'];
$Genero=$_POST['Genero'];
$Talla=$_POST['Talla'];
$Precio=$_POST['Precio'];
$Color=$_POST['Color'];
$Marca=$_POST['Marca'];
$Cantidad=$_POST['Cantidad'];
$Imagen=$_POST['Imagen'];


$sql= "INSERT INTO Producto (IdProducto, Nombre, Tipo, Genero, Talla, Precio, Color, Marca, Cantidad,Imagen) VALUES ($IdProducto,'$Nombre', '$Tipo','$Genero','$Talla', $Precio,'$Color','$Marca', $Cantidad,'$Imagen')";

if($conn->query($sql)==TRUE){
echo "<script lenguaje='javaScript'>
        alert('EL REGISTRO FUE GUARDADO CORRECTAMENTE');
        window.location.href=\"Registro.php\";
        </script>";
}
else{
    echo "Error:".$sql."<br>".$conn->error;
}
$conn->close();

?>