<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de interaccion con DB</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    
    <br><br><br><br>
    <div class="container">
    <div class="col-12">
    <div class="jumbotron bg-dark text-light">
        
        <div class="text-center">
            <h2>Iniciar sesion</h2>
            <form  method="POST" action="procesarLogin.php" >
                <br><br>
                <br><br>
                <img src="entro/img/logotech.png" style="float: left"  width="340px" class="img-thumbnail">

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip01">Nombre usuario O Correo</label>
                        <input name="inputUsuario" type="text" class="form-control" placeholder="Nombre de usuario" required>  
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip02">Contraseña</label>
                        <input name="inputPassword" type="password" class="form-control" placeholder="Contraseña" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <button type="submit" class="btn btn-primary">  Iniciar sesión  </button>
                    </div>
                </div>
                <br>
            </form>
                
            <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <a href="nuevo_usuario.php"><button type="button" class="btn btn-primary">Nuevo usuario</button></a>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    </div>
    </div>


    


    <script src="js/bootstrap.js"></script>
</body>
</html>