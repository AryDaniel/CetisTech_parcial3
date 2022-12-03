<?php

    include '../conexionConBD.php';

    $id = $_GET["id"];

    $sql = "UPDATE productosenVenta SET carrito='0' ". "WHERE id=".$id;

    if($conexion->query($sql) === TRUE){

        echo '<script>';
            echo 'window.location.href="vistaCarrito.php";';
        echo '</script>';
    } 

 

?>