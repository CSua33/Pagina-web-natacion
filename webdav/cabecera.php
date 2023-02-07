<?php
include ("seguridad.php"); 
?>
<!DOCTYPE html>
<html>


<br>
            <center>
            Bienvenido <strong><?php echo $_SESSION["correo"];?></strong>&nbsp;&nbsp;&nbsp;&nbsp;
            <strong><?php echo $_SESSION["rol"];?></strong>&nbsp;&nbsp;&nbsp;&nbsp;
            <strong><?php echo $_SESSION['nombre'];?></strong>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="desconectar.php"> Cerrar sesión </a>
            </center>
            <hr>

<!------------------------------------------------------------------------------------------------------>
            <header>
            
                <div class="container-fluid">

                     <nav class="navbar navbar-default" style="background-color: white"> 
                        <div class="col-xs-2">
                        <a href="index.php"><img src="img/Logo.PNG" alt="" ></a>
                        </div>
                        
                        <div class="col-xs-6">
                         <a href="index.php">Inicio</a>
                         <a href="Mujeres.php">Mujeres</a>
                         <a href="Hombres.php">Hombres</a>
                         <a href="Niños.php">Niños</a>
                         <a href="Googles.php">Googles</a>
                         <a href="Quienes_somos.php">¿Quienes somos?</a>
                         <a href="carrito.php">Carrito</a>
                         <a href="descargas.php">Descargas</a>
                        </div>
                      
                        <div class="col-xs-1">
                         <input id="buscar" type="text" class="form-control" placeholder="Search">  </div>
                         <script type="text/javascript" src="Objetos.js"></script>
     
                </div>
            </header>
            <hr>  
            </body>
    
    </html>