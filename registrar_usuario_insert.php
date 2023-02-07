<?php
$servername="localhost";
$username="root";
$password="";
$dbname="PROYECTO";

$conn=new mysqli($servername, $username, $password, $dbname) or die("No ha sido posible conectarse. ".mysql_error());

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$rol="usuario";


$sql= "INSERT INTO usuario (nombre, correo, contrasena, rol) VALUES ('$nombre', '$correo','$contrasena','$rol')";

if($conn->query($sql)==TRUE){
echo "<script lenguaje='javaScript'>
        alert('Usted se ha registrado correctamente');
        window.location.href=\"login_2.php\";
        </script>";
}
else{
    echo "Error:".$sql."<br>".$conn->error;
}
$conn->close();

?>