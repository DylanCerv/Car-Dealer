<?php

if (!isset($_GET['codigo'])) {
    header('Location: index.php');
}
$codigo = $_GET['codigo'];

    include_once "model/conexion.php";
$sentencia = $BD->prepare("SELECT * FROM vehiculo WHERE idvehiculo = ?;");
$sentencia->execute([$codigo]);
$vehiculo = $sentencia->fetch(PDO::FETCH_OBJ);

//print_r($vehiculo);
?>
    <?php include_once "template/bootstrap5.php"; ?>


<!--INICIO MENU-->
    <?php include_once "maqueta/menu.inc"; ?>
<!--FIN MENU-->

<!--CONTENIDO DEL DETALLE-->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="img/<?php echo $vehiculo->foto; ?>" alt="<?php echo $vehiculo->nameVehiculo; ?>" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h1><?php echo $vehiculo->nameVehiculo ;?></h1>
            <h6><?php echo "$ " . $vehiculo->precio . " USD"; ?></h6>
            <p><?php echo $vehiculo->detalle; ?></p>
        </div>
    </div>
</div>
<!--FIN DEL DETALLE-->