<?php
$servername="localhost";
$username="root";
$password="";
$dbname="practica1";

$conn=new mysqli($servername, $username, $password, $dbname) or die("No ha sido posible conectarse. ".mysql_error());

$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];

$sql= "INSERT INTO cosas (nombre, descripcion, cantidad) VALUES ('$nombre', '$descripcion', $cantidad)";

if($conn->query($sql)==TRUE){
echo "<script lenguaje='javaScript'>
        alert('EL REGISTRO FUE GUARDADO CORRECTAMENTE');
        window.location.href=\"index.html\";
        </script>";
}
else{
    echo "Error:".$sql."<br>".$conn->error;
}
$conn->close();

?>