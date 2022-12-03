<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de interaccion con DB</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
<style>
    body{
        background: #7EDAF3;
        background linear-gradient(to right, #6CD2EE, #7EDAF3);
    }
    .bg{
        background-image: url(entro/img/BG.jpg);
        background-position: center center;
    }
</style>
</head>
<body>
    
    <div class="container w-75 bg-light mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block">

            </div>
            <div class="col">
                <div class="text-end text-right">
                    <img src="entro/img/logotech3.png" width="48" alt="">
                </div>

                <h2 class="fw-bold text-center py-5">Bienvenido</h2>
                <!-- LOGIN -->
                <form method="POST" action="procesarLogin.php">
                    <div class="mb-4">
                        <label for="inputUsuario" class="form-label">Correo electrónico o usuario:</label>
                        <input type="text" class="form-control" name="inputUsuario" required>
                    </div>
                    <div class="mb-4">
                        <label for="inputPassword" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" name="inputPassword" required>
                    </div>
                    <div class="mb-4"></div>
                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    </div>
                    <div class="my-3">No tienes cuenta? <a href="nuevo_usuario.php">Registrate</a></div>
                </form>            
            </div>
        </div>
    </div>



    <script src="js/bootstrap.js"></script>
</body>
</html>