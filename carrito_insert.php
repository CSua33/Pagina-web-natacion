<?php
include ("seguridad.php"); 
?>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto";

$conn=new mysqli($servername, $username, $password, $dbname) or die("No ha sido posible conectarse. ".mysql_error());

$idProducto = $_GET['idProducto'];

	$sql_3="SELECT idProducto, Cantidad FROM producto WHERE idProducto=$idProducto";
    $query=$conn->query($sql_3);
    
    
	if($query==true)
        {
            while($row= mysqli_fetch_object($query))
            {
                echo $Cantidad=$row->Cantidad;
            }
            $correo=$_SESSION["correo"];
            $sql_2="SELECT idUsuario, Rol, Nombre, Correo, Contrasena FROM Usuario WHERE Correo='$correo'";
            $query=$conn->query($sql_2);
            if($query==true)
                {
                    $row= mysqli_fetch_object($query);
                    {
                        $a=$row->idUsuario;
            } }
        
        
        $sql= "INSERT INTO  pedido (idProducto,idUsuario) VALUES ($idProducto,'$a')";
        
        if($conn->query($sql)==TRUE){
        echo "<script lenguaje='javaScript'>
                alert('PRODUCTO AÑADIDO AL CARRITO');
                window.location.href=\"carrito.php\";
                </script>";
        }
    
        else{
            
            echo "<script lenguaje='javaScript'>
            alert('EL articulo no se encuentra disponible');
            window.location.href=\"Mujeres.php\";
            </script>";
        }           
    } 
    
    
$conn->close();

?>