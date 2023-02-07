<?php include("conexion.php"); 
$idUsuario = $_GET['idUsuario'];

$sql_2="SELECT idProducto FROM pedido WHERE idUsuario=$idUsuario";
        $query=$conn->query($sql_2);

while( $row= mysqli_fetch_object($query))
                            {
                                $idProducto=$row->idProducto;

                                $sql="SELECT idProducto, Nombre, Tipo, Genero, Talla, Precio, Color, Marca, Cantidad FROM producto WHERE idProducto=$idProducto";
                                $query_2=$conn->query($sql);
                                while($row_2 = mysqli_fetch_object($query_2)){
                                  

                                    echo $cantidad=$row_2->Cantidad-1;
                                    $sql_3="UPDATE producto SET Cantidad='$cantidad' WHERE idProducto=$idProducto ";
                                    $query_3=$conn->query($sql_3);
                                    $sql_4= "DELETE FROM pedido WHERE idProducto=$idProducto";
                                    $query_4=$conn->query($sql_4);

                                    if ($cantidad==0){
                                        echo "Este producto se ha agotado";
                                        $sql_4= "DELETE FROM producto WHERE idProducto=$idProducto";
                                        $query_4=$conn->query($sql_4);

                                    }

                                    

                                }    
                               
                            }


                            if($conn->query($sql)==TRUE){
                                echo "<script lenguaje='javaScript'>
                                        alert('Gracias su compra');
                                        window.location.href=\"carrito.php\";
                                        </script>";
                                }
                                else{
                                    echo "Error:".$sql."<br>".$conn->error;
                                }
                            
?>
<?php $conn->close(); ?>