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
        background: rgb(23,101,190);
        background: linear-gradient(0deg, rgba(23,101,190,1) 0%, rgba(247,247,247,1) 100%);
    }
</style>
</head>
<body>
    
    <?php include '../administrarSesion.php'; ?>
    <?php include "menu.php"; ?>
    <br><br>
    
    <div class="container bg-light ">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Usuario</h1><hr>
                <form method="post" action="guardarProducto.php" enctype="multipart/form-data">
                    <div class="form-row align-items-center">
                        <div class="col-auto"><br>
                            <label for="">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Teclea el nombre del producto" required>
                        </div>
                        <div class="col-auto">
                            <label for="">Categoria:</label><br>
                            <select name="categoria" >
                                <option value="">--Selecciona una categoria--</option>
                                <option value="Telefonos">Télefono</option>
                                <option value="Mouse">Mouse</option>
                                <option value="Pantalla">Pantalla o Monitor</option>
                                <option value="Relojes">Reloj</option>
                                <option value="Altavoces">Altavoces</option>
                                <option value="Auriculares">Audífonos y Auriculares</option>
                            </select>                        
                        </div>
                    </div><br>

                    <div class="form-row align-items-center">
                        <div class="col-auto">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <input name="precio" type="number" class="form-control" id="inlineFormInputGroup" placeholder="Precio" required> 
                            </div>
                        </div>
                        <div class="col-auto">
                            <input type="file" name="file1">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Descripción:</label>
                        <textarea name="descripcion" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-danger" value="Vender Producto">
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>


    <footer class="text-center text-white">
        <br><br><br> 
        2022 &copy; Cetis107 CetisTech
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>