<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Topbuilder Construction Template</title>

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
                <li><a href="#"><i class="fa fa-envelope-o"></i>info@thethemspro.com</a></li>
                <li><a href="#"><i class="fa fa-clock-o"></i>Mon - Sat 12:00 - 20:00</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right social_nav">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
	    </div>
	</section> -->
    <!-- End Top Header_Area -->

    <!-- Header_Area -->
    <?php
        require_once("menu.php");
    ?>
    <!-- End Header_Area -->

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>¡Pongámonos en Contacto!</h2>
        <ol class="breadcrumb">

        </ol>
    </section>
    <!-- End Banner area -->

    <!-- All contact Info -->
    <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-6 contact_info">
                    <h2>Información</h2>
                    <div class="location">
                        <div class="location_laft">
                            <a href="#">Tel</a>
                            <a href="#">Tel</a>
                            <a href="#">Email</a>
                        </div>
                        <div class="address">
                            <a href="tel:+50229113075">(502) 5911 3075</a>
                            <a href="tel:+50241517950">(502) 4151 7950</a>
                            <a href="mailto:info@sensumconstrucciones.com">info@sensumconstrucciones.com</a>
                        </div>  |
                    </div>
                </div>
                <div class="col-sm-6 contact_info send_message">
                    <h2>Envíanos un mensaje</h2>
                    <form class="form-inline contact_box">
                        <input type="text" class="form-control input_box" placeholder="Nombre *">
                        <input type="text" class="form-control input_box" placeholder="Email *">
                        <input type="text" class="form-control input_box" placeholder="Asunto">
                        <textarea class="form-control input_box" placeholder="Mensaje"></textarea>
                        <button type="submit" class="btn btn-default">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End All contact Info -->

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
    <!-- Map JS -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="vendors/map/topbuilder_map.min.js"></script>
    <!-- Theme JS -->
    <script src="js/theme.js"></script>
</body>

</html>