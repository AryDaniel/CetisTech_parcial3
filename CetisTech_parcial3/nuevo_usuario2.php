<?php
	session_start();
    
    $correo = $_POST['correo'];
    $usuario = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];

    if(buscaEmailRepetido($correo)>=1){
        echo '<script>';
            echo 'alert("El correo ya se a registrado");';
            echo 'window.location.href="index.php";';
        echo '</script>';
    }elseif(buscaUsuarioRepetido($usuario)>=1){
        echo '<script>';
            echo 'alert("El usuario ya se a registrado");';
            echo 'window.location.href="index.php";';
        echo '</script>';        
    }else{
        include 'conexionConBD.php';

        $sentencia="INSERT INTO usuarios (email, usuario, password) 
        VALUES('".$correo."','".$usuario."','".$contrasena."')   ";
        $conexion->query($sentencia);
        
        
        $sql = "SELECT id_usuario FROM usuarios WHERE email=" . $correo;
        $id_perfil = $conexion->query($sql);
        $id_perfil_registro = $id_perfil->fetch_assoc();
        
        $_SESSION['id_perfil_registro'] = $id_perfil_registro['id_usuario'];
        $estado='activo';
        $_SESSION['estado']=$estado;
        
        echo '<script>';
            echo 'window.location.href="entro/index.php";';
        echo '</script>';
    }

    function buscaEmailRepetido($correo){
        include 'conexionConBD.php';

        $sql="SELECT * FROM usuarios 
            WHERE email='$correo'";

        $contar = $conexion->query($sql);
        if(mysqli_num_rows($contar) > 0){
            return 1;
        }else{
            return 0;
        }
    }
    
    function buscaUsuarioRepetido($usuario){
        include 'conexionConBD.php';

        $sql="SELECT * FROM usuarios 
            WHERE usuario='$usuario'";

        $contar = $conexion->query($sql);
        if(mysqli_num_rows($contar) > 0){
            return 1;
        }else{
            return 0;
        }
    }