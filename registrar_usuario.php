<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login para usuario</title>

</head>
<link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" tipe="text/css" href="Estilos.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <br>
        <hr>
<!------------------------------------------------------------------------------------------------------>
        <header>
            
            <center><img src="img/Logo.PNG" alt="" ></center>
        </header>
        <hr>  

    <body>
<!---------------------------------------------------------------------------------------->


    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:50vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form name="login" action="registrar_usuario_insert.php" method="POST">
                        <div class="form-group">
                            Nombre de usuario<input type="text" class="form-control" name="nombre">
                        </div>
                            <div class="form-group">
                                Correo<input type="text" class="form-control" name="correo">
                            </div>
                            <div class="form-group">
                                 Contraseña<input type="password" class="form-control" name="contrasena">
                            </div>
                            
                            <button type="submit" id="sendlogin" class="btn btn-primary">Registrarse</button>&nbsp;&nbsp;&nbsp;
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>




	<!---------------------------------------------------------------------------------------->
    <br>
 <hr>
 <br>       
 



<!----------------------------------------------------------------------------------------> 
    </body>
 </html>