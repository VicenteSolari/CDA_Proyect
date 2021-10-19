<?php

	include 'db_connect.php';
	$id = $_POST['id'];

	$sentencia = $conn->prepare("DELETE FROM productos WHERE id = ?;");

    $result = $sentencia->execute([$id]);

    if($result){
        header('Location: index.php');
    }

?>