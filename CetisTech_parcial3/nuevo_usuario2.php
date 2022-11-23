<?php

    NuevoUsuario($_POST['correo'],$_POST['nombre'],$_POST['contrasena']);

    function NuevoUsuario($correo, $usuario, $contrasena){
        include 'conexionConBD.php';

        $sentencia="INSERT INTO usuarios (correo, usuario, password) 
        VALUES('".$correo."','".$usuario."','".$contrasena."')   ";

        $conexion->query($sentencia);

        echo '<script>';
            echo 'window.location.href="entro/index.php";';
        echo '</script>';
    }