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

    <?php include 'menu.php';?>
    <br>

    <!--------------------------------------->       
    <?php
        include '../conexionConBD.php';
        $sql = "SELECT * FROM venderProductos 
        WHERE id_usuario=" . $_SESSION['id_perfil_registro'];
        $resultado = $conexion->query($sql);
    ?>
    
    <div class="container">
    <div class="row row-cols-1 row-cols-md-4">
        <?php if($resultado->num_rows > 0) { 
            while($registro = $resultado->fetch_assoc()) {
        ?>
        <div class="col mb-4">
            <div class="card h-100">
                <img src="<?php echo $registro["imagen"]; ?>" class="card-img-top" whidt="70">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $registro["nombre"]; ?></h5>
                    <p class="card-text">$<?php echo $registro["precio"]; ?></p>
                    <p class="card-text"><?php echo $registro["descripcion"]; ?></p>
                </div>
            </div>
        </div>
        <?php 
                } 
            }
            $conexion->close();
        ?>
    </div>
    </div>


    <!--------------------------------------->       



  <footer class="text-center">
      <br><br>   
      2022 &copy; Cetis107 CetisTech
  </footer>
  <script src="js/bootstrap.js"></script>
</body>
</html>