<?php

    $servername = "localhost";
    $username = "vicente";
    $password = "test1234";
    $db="cda_proyect"; 


    try{
        $conn = new PDO('mysql:host=localhost;dbname=cda_proyect', $username, $password);
    }catch(Exception $e){ 
        echo"Error en la conexión" .$e->getMessage();
    }
?>