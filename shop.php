<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tienda</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <script src="https://kit.fontawesome.com/e16411afed.js" crossorigin="anonymous"></script>

    <!-- Google Fonts - Nunito Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,300;0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;0,6..12,800;0,6..12,900;0,6..12,1000;1,6..12,200;1,6..12,300;1,6..12,400;1,6..12,500;1,6..12,600;1,6..12,700;1,6..12,800;1,6..12,900;1,6..12,1000&display=swap" rel="stylesheet">

    <!-- Own styles -->
    <link rel="stylesheet" href="css/styles.css">
     
</head>

<body>

    <header class="header container-fluid" id="header-a">
    
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
    
            <div class="container">

                <a class="navbar-brand" href="index.html">
                    <img src="img/logo-toru&naoko-light.png" alt="">
                </a>
        
                <!-- Toggle btn -->
                <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <!-- End Toggle btn -->
        
                <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        
                    <div class="offcanvas-header">
                        <a class="navbar-brand" href="index.html">
                            <img src="img/logo-toru&naoko-light.png" alt="">
                        </a>
                        <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
            
                    <div class="offcanvas-body d-flex flex-column flex-lg-row p-2 p-lg-0">
                        <ul class="navbar-nav justify-content-center align-items-center fs-6 flex-grow-1">
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="shop.php">Productos</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="sobrenosotros.html">Sobre Nosotros</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="index.html#contact">Contacto</a>
                            </li>
                        </ul>
            
                        <div class="d-flex justify-content-center align-items-center gap-3">
                            <ul class="nav-socials flex-row navbar-nav justify-content-center flex-grow-1 pe-3">
                                <li class="nav-item mx-2"><a href="" target=""><i class="fa-solid fa-heart"></i></a></li>
                                <li class="nav-item mx-2"><a href="" target=""><i class="fa-solid fa-bag-shopping"></i></a></li>
                                <li class="nav-item mx-2"><a href="login.html" target=""><i class="fa-solid fa-user"></i></a></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>

            </div>
    
        </nav>
    
    </header>

    <section class="container">
        <div class="container mt-5 py-3 px-5" id="text-area-a">
            <div class="title-a">
                <h2>Tienda</h2>
            </div>
            <div class="subtitle-a mt-1"></div>
        </div>
    </section>

    <section class="container" id="">
        <div class="row">
            <div class="col mt-5 mb-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html" class="text-decoration-none text-secondary">Inicio</a></li>
                      <li class="breadcrumb-item"><a href="shop.php" class="text-decoration-none text-secondary">Productos</a></li>
                      <li class="breadcrumb-item active fw-semibold" aria-current="page"><a href="shop.php" class="text-decoration-none text-dark">Todos los productos</a></li>
                    </ol>
                  </nav>
            </div>
        </div>
    </section>

    <section class="container mt-3" id="products">

        <div class="row">

            <div class="filter-a d-none d-lg-block col-lg-3">

                <div class="accordion" id="accordion-filter">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            Colección
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <ul class="list-unstyled list-group list-group-horizontal d-flex flex-wrap">
                                    <li class="m-1">
                                        <a href="shop.php?collection=Retro Rendezvous" class="text-decoration-none btn-sm btn btn-outline-dark">Retro Rendezvous</a>
                                    </li>
                                    <li class="m-1">
                                        <a href="shop.php?collection=New Basics" class="text-decoration-none btn-sm btn btn-outline-dark">New Basics</a
                                        ></li>
                                    <li class="m-1">
                                        <a href="shop.php?collection=Elements" class="text-decoration-none btn-sm btn btn-outline-dark">Elements</a>
                                    </li>
                                    <li class="m-1">
                                        <a href="shop.php?collection=After Dark" class="text-decoration-none btn-sm btn btn-outline-dark">After Dark</a>
                                    </li>
                                    <li class="m-1">
                                        <a href="shop.php?collection=Heart to heart" class="text-decoration-none btn-sm btn btn-outline-dark">Heart to Heart</a>
                                    </li>
                                    <li class="m-1">
                                        <a href="shop.php?collection=Garden dreams" class="text-decoration-none btn-sm btn btn-outline-dark">Garden Dreams</a>
                                    </li>
                                    <li class="m-1">
                                        <a href="shop.php" class="text-decoration-none btn-sm btn btn-outline-dark">Todas las colecciones</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            Tipo de Producto
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul class="list-unstyled list-group list-group-horizontal d-flex flex-wrap">
                                    <li class="m-1">
                                        <a href="shop.php?category=Sostenes" class="text-decoration-none btn-sm btn btn-outline-dark">Sostenes</a>
                                    </li>
                                    <li class="m-1">
                                        <a href="shop.php?category=Panties" class="text-decoration-none btn-sm btn btn-outline-dark">Panties</a>
                                    </li>
                                    <li class="m-1">
                                        <a href="shop.php?category=Tops" class="text-decoration-none btn-sm btn btn-outline-dark">Tops</a>
                                    </li>
                                    <li class="m-1">
                                        <a href="shop.php?category=Bottoms" class="text-decoration-none btn-sm btn btn-outline-dark">Bottoms</a>
                                    </li>
                                    <li class="m-1">
                                        <a href="shop.php?category=Vestidos" class="text-decoration-none btn-sm btn btn-outline-dark">Vestidos</a>
                                    </li>
                                    <li class="m-1">
                                        <a href="shop.php?category=Pijamas" class="text-decoration-none btn-sm btn btn-outline-dark">Pijamas</a>
                                    </li>
                                    <li class="m-1">
                                        <a href="shop.php" class="text-decoration-none btn-sm btn btn-outline-dark">Todos los productos</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Talla
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul class="list-unstyled list-group list-group-horizontal d-flex flex-wrap">
                                    <li class="m-1">
                                        <a href="#" class="text-decoration-none btn-sm btn btn-outline-dark">XS</a>
                                    </li>
                                    <li class="m-1">
                                        <a href="#" class="text-decoration-none btn-sm btn btn-outline-dark">S</a
                                        ></li>
                                    <li class="m-1">
                                        <a href="#" class="text-decoration-none btn-sm btn btn-outline-dark">M</a>
                                    </li>
                                    <li class="m-1">
                                        <a href="#" class="text-decoration-none btn-sm btn btn-outline-dark">L</a>
                                    </li>
                                    <li class="m-1">
                                        <a href="#" class="text-decoration-none btn-sm btn btn-outline-dark">XL</a>
                                    </li>
                                    <li class="m-1">
                                        <a href="#" class="text-decoration-none btn-sm btn btn-outline-dark">XXL</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Color
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                            <div class="accordion-body">
                               <ul class="list-unstyled list-group list-group-horizontal d-flex flex-wrap">
                                    <li class="m-1">
                                        <a href="shop.php?color=Negro" class="text-decoration-none btn-sm btn btn-outline-dark"><i class="fa-solid fa-square text-black" style="margin-right: 4px;"></i>Negro</a>
                                    </li>
                                    <li class="m-1">
                                        <a href="shop.php?color=Blanco" class="text-decoration-none btn-sm btn btn-outline-dark"><i class="fa-solid fa-square text-white border border-dark rounded-1" style="margin-right: 4px;"></i>Blanco</a
                                        ></li>
                                    <li class="m-1">
                                        <a href="shop.php?color=Gris" class="text-decoration-none btn-sm btn btn-outline-dark"><i class="fa-solid fa-square" style="color: #ababab; margin-right: 4px;"></i>Gris</a>
                                    </li>
                                    <li class="m-1">
                                        <a href="shop.php?color=Beige" class="text-decoration-none btn-sm btn btn-outline-dark"><i class="fa-solid fa-square" style="color: #ffd7b3; margin-right: 4px;"></i>Beige</a>
                                    </li>
                                    <li class="m-1">
                                        <a href="shop.php?color=Rojo" class="text-decoration-none btn-sm btn btn-outline-dark"><i class="fa-solid fa-square" style="color: #e00000; margin-right: 4px;"></i>Rojo</a>
                                    </li>
                                    <li class="m-1">
                                        <a href="shop.php?color=Rosa" class="text-decoration-none btn-sm btn btn-outline-dark"><i class="fa-solid fa-square" style="color: #ff7ab4; margin-right: 4px;"></i>Rosa</a>
                                    </li>
                                    <li class="m-1">
                                        <a href="shop.php?color=Azul" class="text-decoration-none btn-sm btn btn-outline-dark"><i class="fa-solid fa-square" style="color: #000ba8; margin-right: 4px;"></i>Azul</a>
                                    </li>
                                    <li class="m-1">
                                        <a href="shop.php?color=Verde" class="text-decoration-none btn-sm btn btn-outline-dark"><i class="fa-solid fa-square" style="color: #00c281; margin-right: 4px;"></i>Verde</a>
                                    </li>
                                </ul> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-9 gx-5">

                <div class="row">
                <?php
                include("conexion.php");

                $collection = isset($_GET['collection']) ? $_GET['collection'] : null;
                $category = isset($_GET['category']) ? $_GET['category'] : null;
                $color = isset($_GET['color']) ? $_GET['color'] : null;

                if ($collection && $category) {
                    $condition = "p_collection = '$collection' AND p_category = '$category' AND p_color = '$color'";
                } elseif ($collection) {
                    $condition = "p_collection = '$collection'";
                } elseif ($category) {
                    $condition = "p_category = '$category'";
                } elseif ($color) {
                    $condition = "p_color = '$color'";
                } else {
                    $condition = '1';
                }

                $query_p = mysqli_query($conexion, "SELECT * FROM products WHERE $condition");

                while ($list_p = mysqli_fetch_assoc($query_p)) {
                ?>
                    <div class="col-lg-4 col-md-6 mb-3">

                        <div class="card">
                            <img src="img/<?php echo $list_p['p_img'];?>" class="card-img" alt="...">
                            <div class="card-img-overlay d-flex flex-column justify-content-end p-0">
                                <span class="badge text-bg-dark rounded-0"><?php echo $list_p['p_availability'];?></span>
                                <div class="card-content px-4 py-3">
                                    <a href="" class="card-icon" ><i class="fa-regular fa-heart"></i></a>
                                    
                                    <div>
                                        <span class="card-text card-product-name"><?php echo $list_p['p_name'];?></span>
                                        <span class="card-text card-text-tag">$<?php echo $list_p['p_price'];?> CLP</span>
                                    </div>

                                    <a href="" class="card-icon"><i class="fa-solid fa-bag-shopping"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php
                }
                ?>
                </div> 

            </div>   

        </div>

    </section>

    

    


    <footer class="container-fluid mt-5" id="footer-distribution-a">

        <div class="row p-5 bg-dark text-white">

            <div class="col-lg-6 mt-5">
                <div class="footer-widget">
                    <a class="footer-brand" href="index.html">
                        <img src="img/logo-toru&naoko-light.png" alt="">
                    </a>
                    <p class="mt-3">Crafting confidence with care.</p>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-2 mt-md-5">
                <div class="footer-widget">
                    <h5 class="widget-title mb-2">Navegación</h5>
                    <div class="footer_menu">
                    <ul>
                        <li><a href="shop.php">Productos</a></li>
                        <li><a href="sobrenosotros.html">Sobre Nosotros</a></li>
                        <li><a href="index.html#contact">Contacto</a></li>
                    </ul>
                    </div>
                </div>
            </div>
           
            <div class="col-md-4 col-lg-2 mt-md-5">
                <div class="footer-widget">
                    <h5 class="widget-title">Información</h5>
                    <div class="footer_menu">
                    <ul>
                        <li><a href="#">Tabla de tallas</a></li>
                        <li><a href="#">Sostenibilidad</a></li>
                        <li><a href="#">Envíos &amp; devoluciones</a></li>
                        <li><a href="#">Políticas de privacidad</a></li>
                    </ul>
                    </div>
                </div>
            </div>  
            
            <div class="col-md-4 col-lg-2 mt-md-5">
                <div class="footer-widget">
                    <h5 class="widget-title">Redes Sociales</h5>
                    <div class="footer-social mt-3">
                        <a href="https://web.facebook.com/toruandnaoko/photos?locale=es_LA" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/toruandnaoko" target="_blank"><i class="fa-brands fa-instagram"></i></i></a>
                    </div>
                </div>
            </div>  
        </div>

        <div class="row footer-bottom">
            <p>Proyecto para Contenidos y Creatividad III/Materiales y Procesos II - Albany Carrero y Lucia de Bernardi - Universidad de Palermo</p>
        </div>

    </footer>


   
     
    
   
    <!--Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!--Own JS -->
    <script src="js/script.js"></script>
</body>

</html>