<?php
    session_start();
    include '../conexionConBD.php';

    $idUsuario  = $_SESSION['id_perfil_registro'];
    $idProducto = $_GET["id"];

    $sql = "DELETE carrito FROM carrito, usuarios, productosenventa
        WHERE id_usuario   = ".$idUsuario."
            AND	id_usuario = idUsuario
            AND idProducto = ".$idProducto."
            AND idProducto = productosenventa.id_productosenventa";

            
            "DELETE carrito FROM carrito, usuarios, productosenventa
        WHERE usuarios.id_usuario = 1 
            AND	usuarios.id_usuario = carrito.idUsuario
            AND carrito.idProducto = 1
            AND carrito.idProducto = productosenventa.id_productosenventa";

    if($conexion->query($sql) === TRUE){

        echo '<script>';
            echo 'window.location.href="vistaCarrito.php";';
        echo '</script>';
    } 

?>