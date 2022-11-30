<?php
	session_start();
    
    $correo = $_POST['correo'];
    $usuario = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];

    if(buscaRepetido($correo)==1){
        echo '<script>';
            echo 'alert("El correo ya se a registrado");';
            echo 'window.location.href="index.php";';
        echo '</script>';
    }else{
        include 'conexionConBD.php';

        $sentencia="INSERT INTO usuarios (correo, usuario, password) 
        VALUES('".$correo."','".$usuario."','".$contrasena."')   ";
        
        $estado='activo';
        $_SESSION['estado']=$estado;
        
        $conexion->query($sentencia);

        echo '<script>';
            echo 'window.location.href="entro/index.php";';
        echo '</script>';
    }

    function buscaRepetido($email){
        include 'conexionConBD.php';

        $sql="SELECT * FROM usuarios 
            WHERE correo='$email'";

        $contar = $conexion->query($sql);
        if(mysqli_num_rows($contar) > 0){
            return 1;
        }else{
            return 0;
        }
    }