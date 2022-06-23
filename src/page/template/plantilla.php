<!doctype html>
<html lang="es">
<head>
    <title>Concesionario Autos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    

    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    
    <link rel="stylesheet" href="../../assets/css/main-category.css">
    <link rel="stylesheet" href="../../assets/css/detalle.css">
    <link rel="stylesheet" href="../../assets/css/footer-detalle.css">


</head>
<body>

    <header class="container m-0 p-0 container-nav">
        <div class="navbar-color">
            <nav class="navbar navbar-expand-lg navbar-dark text-info bg-dark padding-costados">
                <div class="container-fluid">

                    <?php if(!empty($_GET['codigo'])){ ?>

                        <a class="navbar-brand" href="../../">
                            <img src="../../assets/img/logo.png" alt="Logo" height="50px">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="../../index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://portafoliodylangowner.000webhostapp.com/" target="_BLANK">Portfolio</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Modelos de VEHICULOS
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="motos.php?codigo=xs">Motos</a></li>
                                        <li><a class="dropdown-item" href="autos.php?codigo=xs">Autos</a></li>
                                        <li><a class="dropdown-item" href="clasicos.php?codigo=xs">Clasicos</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="../../index.php">Ver Todos</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!--<form class="d-flex" action="buscador.php">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="busqueda" id="busqueda">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>-->
                        </div>

                    <?php }else{ ?>
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/img/logo.png" alt="Logo" height="50px"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://portafoliodylangowner.000webhostapp.com/" target="_BLANK">Portfolio</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Modelos de VEHICULOS
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="src/page/motos.php?codigo=xs">Motos</a></li>
                                        <li><a class="dropdown-item" href="src/page/autos.php?codigo=xs">Autos</a></li>
                                        <li><a class="dropdown-item" href="src/page/clasicos.php?codigo=xs">Clasicos</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="index.php">Ver Todos</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!--<form class="d-flex" action="buscador.php">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="busqueda" id="busqueda">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>-->
                        </div>
                    <?php } ?>

                    
                </div>
            </nav>
        </div>
    </header>






<!--     
</body>
</html> -->