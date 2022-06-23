<?php

include_once "../conexion/conexion.php";
$sentencia = $BD -> query('SELECT * FROM vehiculo WHERE modelo_idmodelo = 3');
$vehiculo = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($vehiculo);



require_once "template/plantilla.php";
?>


<!--VEHICULOS-->
<div class="list-vehiculo">
    <div class="grid-v">
    <?php foreach ($vehiculo as $dato) { ?>
        <div class="container-list-vehiculo  text-center">
            <a href="detalle-vehiculo.php?codigo=<?php echo $dato->idvehiculo; ?>">
                <img src="../../assets/img/<?php echo $dato->foto; ?>" alt="<?php echo $dato->nameVehiculo; ?>" class="img-fluid">
            </a>
            <hr>
            <div class="container-description-v p-2">
                <h2><?php echo $dato->nameVehiculo; ?></h2>
                <p><?php echo "$ ".$dato->precio." USD"; ?></p>
                <a href="detalle-vehiculo.php?codigo=<?php echo $dato->idvehiculo; ?>" class="btn btn-primary">Ver Detalles</a>
            </div>
        </div>
    <?php } ?>
    </div>
</div>


<?php

include_once "template/footer.php";

require_once "template/js-bootstrap.php";
?>