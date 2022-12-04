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
  <?php include 'menu.php'; ?>

    <?php
        if($_GET["termino"] == ""){
    ?>
        <br>
        <div class="alert alert-danger">No existen registros con ese término de búsqueda</div><br><br>
        <a href="consultarDatos.php">Regresar</a>
    <?php } else { 
        $sql = "SELECT * from productosenventa WHERE nombre_producto LIKE '%".$_GET["termino"]."%'";
        $producto = $conexion->query($sql);
        if($producto->num_rows == 0) {
            echo "<br><div class='alert alert-danger'>No existen registros con ese término de búsqueda</div><br><br>";
        } else {
    ?>
            <!------------------------------------------------------------------------------------>
            <div class="alert fondo" role="alert">
            <div align="center">
                <h3>Productos recomendados a la busqueda:</h3><br><br><br>
                <div class="container">
                <div class="row row-cols-1 row-cols-md-4">
                    <?php if($producto->num_rows > 0) { 
                        while($row = $producto->fetch_assoc()) {
                    ?>
                        <div class="card">
                            <img src="<?php echo $row["imagen"]; ?>" class="card-img-top" width="20px">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row["nombre_producto"]; ?></h5>
                            <p class="card-text" align="right">$<?php echo $row["precio"]; ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="vistaProductos.php?id=<?php echo $row["id_productosenventa"]; ?>" type="button" class="btn btn-primary">Mas información</a>
                        </div>
                        </div>

                    <?php 
                            } 
                        }
                        $conexion->close();
                    ?>
                </div>
                </div>
            </div>
            </div>
            <!------------------------------------------------------------------------------------>
    <?php } } ?>



  <footer class="text-center">
      <br>  
      2022 &copy; Cetis107 BonIce
  </footer>
  <script src="js/bootstrap.js"></script>
</body>
</html>