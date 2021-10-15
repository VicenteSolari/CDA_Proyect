<?php 

    include 'db_connect.php';

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $desc = $_POST['desc'];
    $precio = $_POST['precio'];
    $tipo = $_POST['tipo'];
    
    $sql = "UPDATE `productos` 
	SET `nombre`='$nombre',
	`descripcion`='$desc',
	`precio`='$precio',
	`tipo_producto`='$tipo' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo json_encode(array("statusCode"=>200));
    } 
    else {
        echo json_encode(array("statusCode"=>201));
    }
    mysqli_close($conn);
?>