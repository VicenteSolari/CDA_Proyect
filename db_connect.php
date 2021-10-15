<?php

    $servername = "localhost";
    $username = "vicente";
    $password = "test1234";
    $db="cda_proyect"; 

    $conn = mysqli_connect($servername, $username, $password, $db);

    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
?>