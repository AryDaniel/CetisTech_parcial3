<?php
	session_start();

	ConsultarUsuario($_POST['inputUsuario'], $_POST['inputPassword']);

	function ConsultarUsuario($usuario, $password)
	{
		include 'conexionConBD.php';
		$sentencia= "SELECT * FROM usuarios 
        WHERE usuario='".$usuario."' AND password='".$password."' OR  email='".$usuario."' AND password='".$password."'";
		$resultado=$conexion->query($sentencia);
		$count = mysqli_num_rows($resultado); //Numero de filas del resultado de la consulta

		if($count > 0) //si la variable count es mayor a 0
		{
			include 'conexionConBD.php';

			$estado='activo';
			$_SESSION['estado']=$estado;
        
			$sql = "SELECT * FROM usuarios 
			WHERE usuario='".$usuario."' OR email='".$usuario."'";

			$id_perfil = $conexion->query($sql);
			$id_perfil_registro = $id_perfil->fetch_assoc();
			$_SESSION['id_perfil_registro'] = $id_perfil_registro['id_usuario'];

			echo '<script>';
				echo 'window.location.href="entro/index.php";';
			echo '</script>';
		}
		else
		{
			echo '<script>';
				echo 'window.alert("Usuario, correo o contraseña Incorrecta");';
				echo 'window.location.href="index.php";';
			echo '</script>';
		}
	}
?>