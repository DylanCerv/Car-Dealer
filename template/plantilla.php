
        <?php
            include_once "template/bootstrap5.php";
        ?>



        <!--INICIO MENU-->
        <?php
            include_once "maqueta/menu.inc";
        ?>
        <!--FIN MENU-->


        <!--VEHICULOS-->
        <div class="container">
            <div class="row">

                <?php

                    foreach ($vehiculo as $dato) {

                ?>

                <div class="col-md-4 mt-4 text-center">
                    <a href="detalle-vehiculo.php?codigo=<?php echo $dato->idvehiculo; ?>">
                        <img src="img/<?php echo $dato->foto; ?>" alt="<?php echo $dato->nameVehiculo; ?>" class="img-fluid">
                    </a>
                    <h2><?php echo $dato->nameVehiculo; ?></h2>
                    <p><?php echo "$ ".$dato->precio." USD"; ?></p>
                    <a href="detalle-vehiculo.php?codigo=<?php echo $dato->idvehiculo; ?>" class="btn btn-primary">Ver Detalles</a>
                </div>

                <?php
                    }
                ?>

            </div>
        </div>

        <!--FIN VEHICULOS-->

    </body>
</html>