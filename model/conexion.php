<?php

$userName = "root";
$password = "root" ;
$name_BD = "vehiculos";




try {
    $BD = new PDO(
        'mysql:host=localhost:3307;
        dbname='.$name_BD,
        $userName,
        $password
    );
} catch (PDOException $e) {
    echo "Conexion Fallida: ".$e->getMessage();
}




?>