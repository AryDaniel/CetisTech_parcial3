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
</head>
<body class="fondo2">
  <?php include 'menu.php'; 
  echo $_SESSION['id_perfil_registro'];
  ?>


  <?php
    include '../conexionConBD.php';
    $id = $_SESSION['id_perfil_registro'];
    $sql = "SELECT * FROM usuarios WHERE id_usuario=" . $id;
    $resultado = $conexion->query($sql);
    $registro = $resultado->fetch_assoc();
?>


    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="img/login.png" width="400px">
                            </div>


                            <div class="col-lg-6 px-xl-10">
                                    <br><br><br>
                                    <h2 class="mb-0">Usuario:</h2>
                                    <h2 class="mb-0"><?php echo $registro["usuario"]; ?></h2>
                                    <br>
                                    <h2 class="mb-0">Correo:</h2>
                                    <h2 class="mb-0"><?php echo $registro["email"]; ?></h2>
                                    
                                    <br><br>
                                    <p>
                                        <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Visualizar contraseña</a>
                                    </p>
                                    <div class="row">
                                        <div class="col">
                                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                                                <div class="card card-body">
                                                    <?php echo $registro["password"]; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
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