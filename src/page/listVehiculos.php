
<?php
include_once "src/page/template/plantilla.php";
?>










<!--VEHICULOS-->
<div class="list-vehiculo">
    <div class="grid-v">
    <?php foreach ($vehiculo as $dato) { ?>
        <div class="container-list-vehiculo  text-center">
            <a href="src/page/detalle-vehiculo.php?codigo=<?php echo $dato->idvehiculo; ?>">
                <img src="assets/img/<?php echo $dato->foto; ?>" alt="<?php echo $dato->nameVehiculo; ?>" class="img-fluid">
            </a>
            <hr>
            <div class="container-description-v p-2">
                <h2><?php echo $dato->nameVehiculo; ?></h2>
                <p><?php echo "$ ".$dato->precio." USD"; ?></p>
                <a href="src/page/detalle-vehiculo.php?codigo=<?php echo $dato->idvehiculo; ?>" class="btn btn-primary button-d">Ver Detalles</a>
            </div>
        </div>
    <?php } ?>
    </div>
</div>