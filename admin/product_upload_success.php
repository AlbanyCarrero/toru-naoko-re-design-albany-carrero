<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Administrador</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <!-- Font Awesome CSS -->
    <script src="https://kit.fontawesome.com/e16411afed.js" crossorigin="anonymous"></script>

    <!-- Google Fonts - Nunito Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,300;0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;0,6..12,800;0,6..12,900;0,6..12,1000;1,6..12,200;1,6..12,300;1,6..12,400;1,6..12,500;1,6..12,600;1,6..12,700;1,6..12,800;1,6..12,900;1,6..12,1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">

    <!-- Own styles -->
    <link rel="stylesheet" href="../css/styles.css">
     
</head>

<body style="background-color: #151311;">

<header class="header container-fluid" id="header-a">
    
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">

        <div class="container">

            <h1 class="fs-6 mt-2 text-white">Administrador de Productos</h1>
    
            <!-- Toggle btn -->
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!-- End Toggle btn -->
    
            <div class="sidebar offcanvas offcanvas-start sidebar-solid" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    
                <div class="offcanvas-header">
                    <a class="navbar-brand" href="index.html">
                        <img src="img/logo-toru&naoko-light.png" alt="">
                    </a>
                    <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
        
                <div class="offcanvas-body d-flex flex-column flex-lg-row p-2 p-lg-0">
                    <ul class="navbar-nav justify-content-center align-items-center fs-6 flex-grow-1">
                    <li class="nav-item mx-2">
                            <a class="nav-link" href="../index.html">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="../shop.php">Productos</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="../sobrenosotros.html">Sobre Nosotros</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="../index.html#contact">Contacto</a>
                        </li>
                    </ul>
                    
                </div>
            </div>

        </div>

    </nav>

</header>

<section class="container d-flex justify-content-center align-items-center py-5">

        <div class="position-relative bg-white rounded-3 w-100 border border-2 border-white rounded-3">

            <form action="product_upload.php" method="POST" class="d-flex">

                <div class="bg-white rounded-3 w-100">

                    <div class="p-5">

                        <div class="text-form">
                            <h3>Producto registrado</h3>
                            <p>Revisa la tabla "products" en la base de datos para comprobar que todo se haya registrado de manera adecuada.</p>
                        </div>

                        <div class="buttons mt-5">
                            <a href="index.php" class="btn btn-dark">Regresar</a>
                        </div>

                    </div>

                </div>
            </form>

        </div>

    </section>

<footer class="container-fluid mt-5" id="footer-distribution-a">

        <div class="row bg-dark footer-bottom">
            <p>Proyecto para Contenidos y Creatividad III/Materiales y Procesos II - Albany Carrero y Lucia de Bernardi - Universidad de Palermo</p>
        </div>

    </footer>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!--Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!--Own JS -->
    <script src="../js/script.js"></script>

</body>

</html>