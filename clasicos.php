<?php

include_once "model/conexion.php";
$sentencia = $BD -> query('SELECT * FROM vehiculo WHERE modelo_idmodelo = 3');
$vehiculo = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($vehiculo);



require_once "template/plantilla.php";

?>
