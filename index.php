
<?php

include_once "src/conexion/conexion.php";
$sentencia = $BD -> query('SELECT * FROM vehiculo');
$vehiculo = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($vehiculo);


require_once "src/page/listVehiculos.php";

require_once "src/page/template/js-bootstrap.php";

require_once "src/page/template/footer.php";


?>


