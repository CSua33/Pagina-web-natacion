
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" tipe="text/css" href="Estilos.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <title>Document</title>
<body>
<?php
            include("cabecera.php");
            ?>

            <h3><center>Registrar articulo nuevo</center></h3>
            <hr> <br>
<!---------------------------------------------------------------------------------------->  
      

       <!---------------------------------------------------------------------------------------->
       <section>
        <div style="width: 1300px; padding-left: 50px;">
          <form name="form" method="POST" action="REGISTRO_INSERT.php">
              <div class="form-group">
                  <label for="">IdProducto</label>
                  <input type="text" name="IdProducto" class="form-control" id="IdProducto" >
                </div>
              <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="Nombre" class="form-control" id="Nombre">
              </div>
              <div class="form-group">
                <label for="">Tipo</label>
                <input type="text" name="Tipo" class="form-control" id="Tipo">
              </div>
              <div class="form-group">
                <label for="">Genero</label>
                <input type="text" name="Genero" class="form-control" id="Genero">
              </div>
          <div class="form-group">
              <label for="">Talla</label>
              <input type="text" name="Talla" class="form-control" id="Talla">
            </div>
            <div class="form-group">
              <label for="">Precio</label>
              <input type="text" name=Precio class="form-control" id="Precio">
            </div>
            <div class="form-group">
              <label for="">Color</label>
              <input type="text" name=Color class="form-control" id="Color">
            </div>
            <div class="form-group">
                <label for="">Marca</label>
                <input type="text" name=Marca class="form-control" id="Marca">
              </div>
              <div class="form-group">
                <label for="">Cantidad</label>
                <input type="text" name=Cantidad class="form-control" id="Cantidad">
              </div>
              <div class="form-group">
                <label for="">Imagen</label>
                <input type="text" name=Imagen class="form-control" id="Imagen">
              </div>
  
              <br>
              <button type="submit" name="enviar" class="btn btn-primary">Guardar</button>
              
            </form>
        </div>
      </section>
      <!---------------------------------------------------------------------------------------->
      
    






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