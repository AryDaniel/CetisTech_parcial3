<?php include '../administrarSesion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetis Tecnologia</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <style>
        .banner{
            position: absolute;
            background-color: #1765be;
            width: 100%;
            height: 125px;
            position: center center;

        }
        .img-redonda{
            position: relative;
            border-radius: 50%;
            border: 3px solid #fff;
            box-shadow: 0 2px 5px #4B4D4A;
        }
    </style>
</head>
<body class="fondo2">
  <?php include 'menu.php'; ?>


  <?php
    include '../conexionConBD.php';
    $id = $_SESSION['id_perfil_registro'];
    $sql = "SELECT * FROM usuarios WHERE id_usuario=" . $id;
    $resultado = $conexion->query($sql);
    $registro = $resultado->fetch_assoc();
?>

                             <!-- INFO PERFIL -->  

    <div class="container w-50 bg-light mt-5 align-left rounded shadow">
        <div class="row align-items-stretch">
            <div class="col">    
                     <div class="row">                   
                     <div class="banner">
                     </div>  
                     </div>
                     <div class="mb-4 mt-3 text-center">
                        <img class="img-redonda" width="200px" height="150px" src="<?php echo $registro['imagen']; ?>">
                    </div>
                    <div class="mb-4">
                        <label for="inputUsuario" class="form-label">Nombre completo:</label>
                        <input type="text" class="form-control" name="inputUsuario" value="<?php echo $registro["usuario"]; ?>"disabled>
                    </div>
                    <div class="mb-4">
                        <label for="inputUsuario" class="form-label">Correo electronico:</label>
                        <input type="text" class="form-control" name="inputUsuario" value="<?php echo $registro["email"]; ?>"disabled>
                    </div>
                    <div class="mb-4">
                        <label for="inputPassword" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" name="inputPassword" value="<?php echo $registro["password"]; ?>"disabled>
                    </div>
                    <ul class="list-unstyled mb-1-9">
                                    <br><br>
                                    <?php 
                                        include "editarPerfil.php";
                                    ?>
                                </ul>
                            
            </div>
        </div>
    </div>


  <footer class="text-center">
      <br>  
      2022 &copy; Cetis107 CetisTech
  </footer>
  <script src="js/bootstrap.js"></script>
</body>
</html>