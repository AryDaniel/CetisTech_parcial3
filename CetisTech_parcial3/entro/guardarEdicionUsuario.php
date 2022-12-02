<?php
    include '../administrarSesion.php';
    include '../conexionConBD.php';
    
    $id = $_SESSION['id_perfil_registro'];
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "UPDATE usuarios 
    SET usuario='".$usuario."' , email= '".$email."',". 
    "password = '".$password."' ". 
    "WHERE id_usuario=".$id;

    if ($_FILES["file1"]["error"] > 0)
	{
	} else 
	{

		$nom_archivo=$_FILES['file1']['name']; // Para conocer el nombre del archivo
		$ruta = "imgUsuario/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
		$archivo = $_FILES['file1']['tmp_name']; //el arhivo a subir
		$subir=move_uploaded_file($archivo, $ruta); //se sube el archivo
		
		include '../conexionConBD.php';
		$sentencia_img="UPDATE usuarios SET imagen='$ruta' WHERE id_usuario='".$_SESSION['id_perfil_registro']."' ";
		$conexion->query($sentencia_img) or die ("Error al actualizar datos".mysqli_error($conexion));
		
	}

    if($conexion->query($sql) === TRUE){
        echo '<script>';
            echo 'alert("Registro actualizado correctamente");';
            echo 'window.location.href="perfil.php";';
        echo '</script>';
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();

?>