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
        <h2>Servicios</h2>
        <ol class="breadcrumb">
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Our Services Area -->
    <section class="our_services_tow">
        <div class="container">
            <div class="architecture_area services_pages">
                <div class="portfolio_filter portfolio_filter_2">
                    <ul>
                        <li data-filter=".disArchit" class="active"><a href=""><i class="fa fa-wrench" aria-hidden="true"></i>Diseño Arquitectonico</a></li>
                        <li data-filter=".remodelacion"><a hrexf=""><i class="fa fa-cogs" aria-hidden="true"></i>Remodelación</a></li>
                        <li data-filter=".mantPrevent"><a href=""><i class="fa fa-cog" aria-hidden="true"></i>Mantenimiento Preventivo</a></li>
                        <li data-filter=".aplicTec"><a href=""><i class="fa fa-heart" aria-hidden="true"></i>Aplicaciones Tecnicas</a></li>
                        <li data-filter=".instalGeneral"><a href=""><i class="fa fa-paint-brush" aria-hidden="true"></i>Instalaciones Generales</a></li>
                        <li data-filter=".obraCivil"><a href=""><i class="fa fa-paint-brush" aria-hidden="true"></i>Obra Civil</a></li>
                    </ul>
                </div>

                <!-- Dis Archit -->
                <div class="portfolio_item portfolio_2">
                    <div class="grid-sizer-2"></div>
                    <div class="single_facilities col-sm-7 disArchit" aria-hidden="false">
                        <div class="who_we_area">
                            <div class="subtittle">
                                <h2>Diseño Arquitectonico</h2>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alter-ation in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to
                                use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrass-ing hidden in the middle of text.</p>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                                to using</p>
                            <a href="#" class="button_all">Contact Now</a>
                        </div>
                    </div>
                    <div class="single_facilities col-sm-5 disArchit">
                        <img src="images/feature-man-4.jpg" alt="">
                    </div>

                <!-- Remodelación -->
                    <div class="single_facilities col-sm-7 remodelacion">
                        <div class="who_we_area">
                            <div class="subtittle">
                                <h2>Remodelacion</h2>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alter-ation in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to
                                use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrass-ing hidden in the middle of text.</p>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                                to using</p>
                            <a href="#" class="button_all">Contact Now</a>
                        </div>
                    </div>
                    <div class="single_facilities col-sm-5 remodelacion">
                        <img src="images/feature-man-4.jpg" alt="">
                    </div>

                <!-- Mant prevent -->
                    <div class="single_facilities col-sm-7 mantPrevent">
                        <div class="who_we_area">
                            <div class="subtittle">
                                <h2>ARCHITECTURE</h2>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alter-ation in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to
                                use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrass-ing hidden in the middle of text.</p>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                                to using</p>
                            <a href="#" class="button_all">Contact Now</a>
                        </div>
                    </div>
                    <div class="single_facilities col-sm-5 mantPrevent">
                        <img src="images/feature-man-4.jpg" alt="">
                    </div>
                </div>

                <!-- aplic tec -->
                <div class="portfolio_item portfolio_2">
                    <div class="grid-sizer-2"></div>
                    <div class="single_facilities col-sm-7 aplicTec">
                        <div class="who_we_area">
                            <div class="subtittle">
                                <h2>ARCHITECTURE</h2>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alter-ation in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to
                                use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrass-ing hidden in the middle of text.</p>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                                to using</p>
                            <a href="#" class="button_all">Contact Now</a>
                        </div>
                    </div>
                    <div class="single_facilities col-sm-5 aplicTec">
                        <img src="images/feature-man-4.jpg" alt="">
                    </div>
                </div>

                <!-- instal general -->
                <div class="portfolio_item portfolio_2">
                    <div class="grid-sizer-2"></div>
                    <div class="single_facilities col-sm-7 instalGeneral">
                        <div class="who_we_area">
                            <div class="subtittle">
                                <h2>ARCHITECTURE</h2>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alter-ation in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to
                                use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrass-ing hidden in the middle of text.</p>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                                to using</p>
                            <a href="#" class="button_all">Contact Now</a>
                        </div>
                    </div>
                    <div class="single_facilities col-sm-5 instalGeneral">
                        <img src="images/feature-man-4.jpg" alt="">
                    </div>
                </div>

                <!-- obra civil -->
                <div class="portfolio_item portfolio_2">
                    <div class="grid-sizer-2"></div>
                    <div class="single_facilities col-sm-7 obraCivil">
                        <div class="who_we_area">
                            <div class="subtittle">
                                <h2>ARCHITECTURE</h2>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alter-ation in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to
                                use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrass-ing hidden in the middle of text.</p>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                                to using</p>
                            <a href="#" class="button_all">Contact Now</a>
                        </div>
                    </div>
                    <div class="single_facilities col-sm-5 obraCivil">
                        <img src="images/feature-man-4.jpg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Our Services Area -->

    <!-- Our Featured Works Area -->
    <!-- <section class="featured_works row" data-stellar-background-ratio="0.3">
        <div class="tittle wow fadeInUp">
            <h2>Our Featured Works</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class="featured_gallery">
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-1.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-2.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-3.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-4.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-5.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-6.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-7.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-8.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Our Featured Works Area -->

    <!-- Our Team Area -->
    <!-- <section class="our_team_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Team</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="row team_row">
                <div class="col-md-3 col-sm-6 wow fadeInUp">
                    <div class="team_membar">
                        <img src="images/team/tm-1.jpg" alt="">
                        <div class="team_content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="#" class="name">Prodip Ghosh</a>
                            <h6>Founder &amp; CEO</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team_membar">
                        <img src="images/team/tm-2.jpg" alt="">
                        <div class="team_content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="#" class="name">Emran Khan</a>
                            <h6>Web-Developer</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team_membar">
                        <img src="images/team/tm-3.jpg" alt="">
                        <div class="team_content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="#" class="name">Prodip Ghosh</a>
                            <h6>Founder &amp; CEO</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team_membar">
                        <img src="images/team/tm-4.jpg" alt="">
                        <div class="team_content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="#" class="name">Jakaria Khan</a>
                            <h6>Founder &amp; CEO</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Our Team Area -->

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