<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sensum - Construciones</title>

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
    <link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.css" media="all">

    <!--Theme Styles CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Top Header_Area -->
    <!-- <section class="top_header_area">
        <div class="container">
            <ul class="nav navbar-nav top_nav">
                <li><a href="#"><i class="fa fa-phone"></i>+1 (168) 314 5016</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i>info@sensumconstrucciones.com</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right social_nav">
                <li><a href="https://www.facebook.com/SensumConstruccion/" target="_blanck"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </section> -->
    <!-- End Top Header_Area -->

    <!-- Header_Area -->
    <?php
        require_once("menu.php");
    ?>
    <!-- End Header_Area -->

    <!-- Slider area -->
    <section class="slider_area row m0">
        <div class="slider_inner">
            <div data-thumb="images/slider-1.jpg" data-src="images/slider-1.jpg">
                <div class="camera_caption">
                    <div class="container">
                        <h5 class=" wow fadeInUp animated">Bienvenidos a</h5>
                        <h1 class=" wow fadeInUp animated" data-wow-delay="0.5s">SENSUM</h1>
                    </div>
                </div>
            </div>
            <div data-thumb="images/slider-2.jpg" data-src="images/slider-2.jpg">
                <div class="camera_caption">
                    <div class="container">
                        <h5 class=" wow fadeInUp animated">Tu mejor opción en </h5>
                        <h1 class=" wow fadeInUp animated" data-wow-delay="0.5s">SERVICIOS EN CONTRUCCIÓN</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Slider area -->

    <!-- About Us Area -->
    <section class="about_us_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>¡Comencemos!</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="row about_row">
                <div class="who_we_area col-md-7 col-sm-6">
                    <div class="subtittle">
                        <h2 style="font-weight: lighter">Sensum Construcciones</h2>
                    </div>
                    <p>
                        Sensum se distingue de la competencia, basados en los valores de la atención personalizada que el cliente requiere ante sus necesidades.
                        Ofreciéndole soluciones innovadoras y prácticas a sus solicitudes, se provee de material de la más alta calidad del mercado y mano de obra
                        calificada para su manipulación, manteniendo los precios más justos del mercado.
                    </p>
                    <br>
                    <br>
                    <div class="subtittle">
                        <h3>Descarga nuestro Currícum y Portafolio digital</h3>
                    </div>
                    <br>
                    <a href="#" class="button_all"> <i class="fa fa-download"></i> CV</a>
                </div>
                <div class="col-md-5 col-sm-6 about_client">
                    <img src="images/home.jpg" alt="" class="homeImg">
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->

    <!-- What ew offer Area -->
    <section class="what_we_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Nuestra Empresa</h2>
                <h4>Conoce un poco más sobre nuestros objetivos y planes de trabajo</h4>
            </div>
            <div class="row construction_iner">
                <div class="col-md-6 col-sm-6 construction">
                    <div class="cns-content">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                        <a href="#">Visión</a>
                        <p>
                            En 5 años convertirnos en empresa líder en servicios generales de construcción del Municipio de Guatemala, con influencia en el interior del país.
                            <br><br>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 construction">
                    <div class="cns-content">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <a href="#">Misión</a>
                        <p>
                            Somos una empresa que provee servicios profesionales en el área de diseño y la construcción, realizando intervenciones en remodelaciones, ampliaciones y proyectos desde su concepción.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End What ew offer Area -->

    <!-- Our Achievments Area -->
    <section class="our_achievments_area" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Un poco más</h2>
                <h4>Nuestras Estadisticas</h4>
            </div>
            <div class="achievments_row row">
                <div class="col-md-4 col-sm-6 p0 completed">
                    <i class="fa fa-connectdevelop" aria-hidden="true"></i>
                    <span class="counter">168</span>
                    <h6>Proyectos Completados</h6>
                </div>
                <div class="col-md-4 col-sm-6 p0 completed">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="counter">82</span>
                    <h6>Proyectos Renovados</h6>
                </div>
                <div class="col-md-4 col-sm-6 p0 completed">
                    <i class="fa fa-child" aria-hidden="true"></i>
                    <span class="counter">58</span>
                    <h6>Clientes Satisfechosa</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Achievments Area -->

    <!-- Footer Area -->
    <?php

    require_once("footer.php");

    ?>
    <!-- End Footer Area -->

    <!-- jQuery JS -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Animate JS -->
    <script src="vendors/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="vendors/camera-slider/jquery.easing.1.3.js"></script>
    <script src="vendors/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="vendors/stellar/jquery.stellar.js"></script>
    <!-- Theme JS -->
    <script src="js/theme.js"></script>
</body>

</html>