<?php

if (!isset($_GET['codigo'])) {
    header('Location: ../../index.php');
}
$codigo = $_GET['codigo'];

include_once "../conexion/conexion.php";

$sentencia = $BD->prepare("SELECT * FROM vehiculo WHERE idvehiculo = ?;");
$sentencia->execute([$codigo]);
$vehiculo = $sentencia->fetch(PDO::FETCH_OBJ);


include_once "template/plantilla.php";
?>

<!--CONTENIDO DEL DETALLE-->
<div class="container mt-2 p-4">
    <div class="row d-vehiculo">
        <div class="col-md-6">
            <img src="../../assets/img/<?php echo $vehiculo->foto; ?>" alt="<?php echo $vehiculo->nameVehiculo; ?>" class="img-fluid">
        </div>
        <div class="d-text-vehiculo col-md-6 p-3">
            <h1><?php echo $vehiculo->nameVehiculo ;?></h1>
            <h6><?php echo "$ " . $vehiculo->precio . " USD"; ?></h6>
            <hr>
            <p><?php echo $vehiculo->detalle; ?></p>
        </div>
    </div>
</div>
<!--FIN DEL DETALLE-->



<?php

include_once "template/footer.php";

require_once "template/js-bootstrap.php";
?>


