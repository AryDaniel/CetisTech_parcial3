<?php

    include '../conexionConBD.php';

    $id = $_POST["id"];

    $sql = "UPDATE productosenVenta SET carrito='1' ". "WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        include 'vistaCarrito.php';
    } 

    $conexion->close();

?>