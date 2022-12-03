


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
<style>
        body{
        background: #98E96A;
        background linear-gradient(to right, #86E84F, #98E96A);
    }
    .bg{
        background-image: url(entro/img/BG2.jpg);
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
                    <img src="entro/img/logotech4.png" width="48" alt="">
                </div>

                <h2 class="fw-bold text-center py-3">Registrate</h2>
                <!-- LOGIN -->
                <form method="POST" action="nuevo_usuario2.php">
                    <div class="mb-4">
                        <label for="inputUsuario" class="form-label">Nombre completo:</label>
                        <input type="text" class="form-control" name="nombre" required>
                    </div>
                    <div class="mb-4">
                        <label for="inputPassword" class="form-label">Correo electronico:</label>
                        <input type="email" class="form-control" name="correo" required>
                    </div>
                    <div class="mb-4">
                        <label for="inputPassword" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" name="contrasena" required>
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Crear cuenta</button>
                        <div class="my-3">Ya tienes una cuenta? <a href="index.php">Inicia sesión</a></div>
                    </div>
                    <br>
                </form>            
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>