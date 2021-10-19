<?php

include 'db_connect.php';

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $desc = $_POST['desc'];
    $precio = $_POST['precio'];
    $tipo = $_POST['tipo'];

    $sentencia = $conn->prepare("UPDATE productos SET nombre = ?, descripcion = ?, precio = ?, tipo_producto = ?
                                WHERE id = ?;");

    $result = $sentencia->execute([$nombre, $desc, $precio, $tipo, $id]);

    if($result){
        header('Location: index.php');
    }

?>