<?php
    include 'db_connect.php';

    $nombre = $_POST['nombre'];
    $desc = $_POST['desc'];
    $precio = $_POST['precio'];
    $tipo = $_POST['tipo'];

    $sentencia = $conn->prepare("INSERT INTO productos(nombre, descripcion, precio, tipo_producto) VALUES 
        (?,?,?,?);");
    $result = $sentencia->execute([$nombre, $desc, $precio, $tipo]);

    if($result){
        header('Location: index.php');
    }
?>