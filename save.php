<?php 

    include 'db_connect.php';

    $nombre = $_POST['nombre'];
    $desc = $_POST['desc'];
    $precio = $_POST['precio'];
    $tipo = $_POST['tipo'];

    $sql = "INSERT INTO `productos`( `nombre`, `descripcion`, `precio`, `tipo_producto`) 
    VALUES ('$nombre','$desc','$precio','$tipo')";

    if (mysqli_query($conn, $sql)) {
        echo json_encode(array("statusCode"=>200));
    } 
    else {
        echo json_encode(array("statusCode"=>201));
    }
    mysqli_close($conn);
?>