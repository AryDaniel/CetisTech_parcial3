<?php

    session_start();
        
    include '../conexionConBD.php';
    
    $idUsuario  = $_SESSION['id_perfil_registro'];
    $idProducto = $_POST["idProducto"];

    $sql = "INSERT INTO carrito (idProducto, idUsuario) 
    VALUES('".$idProducto."','".$idUsuario."') ";

    if($conexion->query($sql) === TRUE){

        echo '<script>';
            echo 'window.location.href="index.php";';
            echo 'window.alert("Producto añadido al carrito");';
        echo '</script>';
    } 

 
?>