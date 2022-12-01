<?php

    include '../conexionConBD.php';

    $id = $_POST["id"];

    $sql = "UPDATE productosenVenta SET nombre_producto='1' ". "WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        include 'vistaCarrito.php';
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();

?>