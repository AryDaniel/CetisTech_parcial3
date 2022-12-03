<?php
	session_start();
    
    $id_usuario = $_SESSION['id_perfil_registro'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];

    include '../conexionConBD.php';
    
    $nom_archivo=$_FILES['file1']['name']; // Para conocer el nombre del archivo
    $ruta = "imgUsuarioVenta/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
    $archivo = $_FILES['file1']['tmp_name']; //el arhivo a subir
    $subir=move_uploaded_file($archivo, $ruta); //se sube el archivo

    $sentencia="INSERT INTO venderproductos(nombre, precio, descripcion, imagen, categoria, id_usuario) 
    VALUES('".$nombre."','".$precio."','".$descripcion."', '".$ruta."', '".$categoria."', '".$id_usuario."')   ";

    $conexion->query($sentencia);


    echo '<script>';
        echo 'window.location.href="vistaVenderProductos.php";';
    echo '</script>';

    $conexion->close();
    
    
    
    
?>

