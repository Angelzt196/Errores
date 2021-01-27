<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - BIT-CoDev</title>

    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="sweetalert/sweetalert2.min.css">
</head>

<style>
   body{
       background-color:  #e0e0d1;
   }

   .menu{
        background-image: url(img/menu-bg.jpg);
        background-position: center center;
        background-size: cover;
        height: 250px;
        display: flex;
        align-items: center;
    }

    .menu:hover{
        opacity: 1.0;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="d-flex justify-content-center">
                    <a href="index.php">
                        <img src="img/logo.png" alt="Logo BitCoDev" class="img-fluid" width="400px">
                    </a>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="d-flex justify-content-center">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php">Inicio</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Desarrollo Web</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Marketing</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Extras
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Soporte a equipos de cómputo</a>
                                        <a class="dropdown-item" href="#">Mantenimiento a equipos de cómputo</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Cotización</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contacto.php">Contacto</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="nosotros.php">Nosotros</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>