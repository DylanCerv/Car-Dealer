<?php

// $userName = "root";
// $password = "root" ;
// $name_BD = "vehiculos";

// $name_BD = "id18453814_proyectos";
// $userName = "id18453814_root";
// $password = "*z~4)+]MV>oD^#GQ" ;

$name_BD = 'id18453814_proyectos';
$userName = 'id18453814_root';
$password = '*z~4)+]MV>oD^#GQ';


try {
    $BD = new PDO(
        'mysql:host=localhost;'. //PARA LA CONEXION DE LA BASE DE DATOS DE 000webhost.com
        // 'mysql:host=localhost:3307;
        'dbname='.$name_BD,
        $userName,
        $password
    );
} catch (PDOException $e) {
    echo "Conexion Fallida: ".$e->getMessage();
}




?>