


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
</head>
<body>


<br><br>
<div class="card text-center" style="width: 320px; margin: auto; width: 18rem;">
    <img src="entro/img/logotech.png" class="card-img-top" alt="...">
    <div class="card-body">
        <form action="nuevo_usuario2.php" method="POST" >

            <label for="">Correo:</label>
            <div class="form-row">
                <input name="correo" type="text" class="form-control" placeholder="Nombre de usuario" required>  
            </div>
            <br>
            <label for="">Nombre:</label>
            <div class="form-row">
                <input name="nombre" type="text" class="form-control" placeholder="Contraseña" required>
            </div>
            <br>
            <label for="">Contraseña</label>
            <div class="form-row">
                <input name="contrasena" type="password" class="form-control" placeholder="Contraseña" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">   Crear usuario  </button>
            <br>

        </form>
    </div> 
</div>

    <script src="js/bootstrap.js"></script>
</body>
</html>