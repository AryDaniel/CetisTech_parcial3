<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de interaccion con DB</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="contenido">

        <div id="login" style="width: 200px; margin: auto;">
            <form  method="POST" action="procesarLogin.php">
                <h2>Iniciar sesion</h2>
                <br><br>
                <br><br>
                <label for="inputEmail" >Nombre usuario O Correo</label>
                <br>
                <input type="text" name="inputUsuario"  placeholder="Nombre de usuario" required autofocus>
                
                <br><br>
                <label for="inputPassword" >Contraseña</label>
                <br>
                <input type="password" name="inputPassword" placeholder="Contraseña" required>

                <br><br>
                <button type="submit">  Iniciar sesión  </button>
                <br><br>
            </form>
            <a href="nuevo_usuario.php"><button type="button">Nuevo usuario</button></a>
        </div>
    </div>
</body>
</html>