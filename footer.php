
<!DOCTYPE html>
<html>
    <head>
       
        <title>IDS</title>
        
    </head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" tipe="text/css" href="Estilos.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <body>
            <!-- Footer -->
<footer class="page-footer font-small indigo">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
  
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Paginas de nuestro sitio</h5>
  
          <ul class="list-unstyled">
            <li>
            <?php 
             if($_SESSION["rol"]=="administrador"){
             echo '<a href="Opciones_administrador.php">Acceder al registro</a>';
            }
            ?>
            </li>
            <li>
              <a href="Index.php">Inicio</a>
            </li>
            <li>
              <a href="Mujeres.php">Mujeres</a>
            </li>
            <li>
              <a href="Hombres.php">Hombres</a>
            </li>
            <li>
              <a href="Niños.php">Niños</a>
            </li>
            <li>
                <a href="Googles.php">Googles</a>
              </li>   
              <li>
                <a href="Quienes_somos.php">¿Quienes somos?</a>
              </li> 
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
  
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Marcas preferidas</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!">Arena</a>
            </li>
            <li>
              <a href="#!">Speedo</a>
            </li>
            <li>
              <a href="#!">Phelps</a>
            </li><li>
              <a href="#!">Finis</a>
            </li>
            
            
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none">
  
       
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
  
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Informacion de contacto</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="Contactos.php#oficinas">Oficinas</a>
            </li>
            <li>
              <a href="Contactos.php#clientes">Atencion a clientes</a>
            </li>
            <li>
                <a href="Contactos.php#administracion">Administracion</a>
              </li>
              <li>
                <a href="Contactos.php#humanos">Recursos humanos</a>
              </li>
            <li>
              <a href="Contactos.php#facebook">Facebook</a>
            </li>
            <li>
                <a href="Contactos.php#instagram">Instagram</a>
              </li>
              <li>
                <a href="Comentarios.html" target="_blank" onclick="window.open(this.href, this.target, 'width=400,height=400'); return false;">Comentarios</a>
              </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
  </footer>
  <!-- Footer -->

  <br>


<!---------------------------------------------------------------------------------------->

                
        </body>
    
</html>