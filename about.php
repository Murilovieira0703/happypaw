<?php
include('global.php'); 

if(!isset($_SESSION)) {
    session_start();
}
?>

<html lang="pt-br">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta name="keywords" content="adoção, adotar, cachorro, gato, animais,  ong, adotar animais">
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Happy Paw | Sobre nós</title>
        <meta name="description" content="Happy Paw! Adote já o seu amiguinho e seja feliz!">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->
		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/odometer.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

        <style>
            .iconbla{
                color: #0a303a;
            }
            .iconbla:hover{
                color: #40db93;
            }
        </style>
    </head>
    <body>
        <!-- Preloader -->
        <div id="preloader">
            <img src="img/preloader.gif" alt="">
        </div>
        <!-- Preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header>
            <div id="sticky-header" class="menu-area">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo"><a href="index.php"><img src="img/logo/logo.png" alt="logo"></a></div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li><a href="index.php">início</a></li>
                                            <li><a href="ongs.php">ONGS</a></li>
                                            <li><a href="animais.php">Animais</a></li>
                                            <li><a href="contact.php">Contato</a></li>
                                        </ul>
                                        <div class="footer-social cell">
                                            <ul class="footer-social-icons">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    </li>
                                    <?php 
                                    if(isset($_SESSION['id'])) {
                                        if(!empty($_SESSION['id'])) {
                                            echo '<h5 class="mb-0 mr-3">Bem Vindo!</h5> <a href="logout.php"><i class="iconbla fas fa-sign-out-alt"></i><a>';
                                        }
                                    }else {
                                    echo '
                                    <div class="header-action d-none d-md-block headerlogin">
                                        <li class="header-btn"><a href="cadastrar.php" class="btn">Login | Cadastro <img src="img/icon/w_pawprint.png" alt=""></a></li>
                                    </div>';}
                                    ?>
                                    
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fas fa-times"></i></div>
                                    <div class="nav-logo"><a href="index.php"><img src="img/logo/logo.png" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
                <div class="header-shape" data-background="img/bg/header_shape.png"></div>
            </div>
        </header>
        <!-- header-area-end -->


        <!-- main-area -->
        <main>

            <!-- slider-area -->
            <section id="start" class="slider-area">
                <div class="slider-active">
                    <div class="single-slider slider-bg d-flex align-items-center" data-background="img/slider/slider_bg01.jpg">
                        <div class="container custom-container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-7 col-md-10">
                                    <div class="slider-content">
                                        <div class="slider-title">
                                            <h2 class="title" data-animation="fadeInUpBig" data-delay=".2s" data-duration="1.2s">Seu melhor amigo Feliz!</h2>
                                        </div>
                                        <div class="slider-desc">
                                            <p class="desc" data-animation="fadeInUpBig" data-delay=".4s" data-duration="1.2s">Human Shampoo on Dogs After six days of delirat, the jury found Hernandez guilty of first-degree murder</p>
                                        </div>
                                        <a href="dog-list.html" class="btn" data-animation="fadeInUpBig" data-delay=".6s" data-duration="1.2s">Veja mais! <img src="img/icon/w_pawprint.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider slider-bg d-flex align-items-center" data-background="img/slider/slider_bg02.jpg">
                        <div class="container custom-container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-7 col-md-10">
                                    <div class="slider-content">
                                        <div class="slider-title">
                                            <h2 class="title" data-animation="fadeInUpBig" data-delay=".2s" data-duration="1.2s">Seu melhor amigo<span>Feliz!</span></h2>
                                        </div>
                                        <div class="slider-desc">
                                            <p class="desc" data-animation="fadeInUpBig" data-delay=".4s" data-duration="1.2s">Human Shampoo on Dogs After six days of delirat, the jury found Hernandez guilty of first-degree murder</p>
                                        </div>
                                        <a href="dog-list.html" class="btn" data-animation="fadeInUpBig" data-delay=".6s" data-duration="1.2s">Veja mais! <img src="img/icon/w_pawprint.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-shape"><img src="img/slider/slider_shape01.png" alt=""></div>
                <div class="slider-shape shape-two"><img src="img/slider/slider_shape02.png" alt=""></div>
            </section>

        </main>
        <!-- main-area-end -->


        <!-- footer-start -->
        <footer>
        <div class="footer-top-area footer-bg">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-3">
                        <div class="footer-widget">
                            <div class="f-logo">
                                <a href="index.php"><img src="img/logo/logo.png" alt=""></a>
                            </div>
                            <div class="footer-text">
                                <p>The best overall dog DNA test Embark Breed & Health Kit (view at Chewy) which
                                    provides overall dog you.</p>
                            </div>
                            <div class="footer-contact">
                                <div class="icon"><i class="fas fa-headphones"></i></div>
                                <div class="content">
                                    <h4 class="title"><a href="tel:0987654321">747-800-9880</a></h4>
                                    <span>Call Now</span>
                                </div>
                            </div>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="footer-widget">
                            <h4 class="fw-title">Our Policies</h4>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="contact.html">Privacy Policy</a></li>
                                    <li><a href="contact.html">Terms and Conditions</a></li>
                                    <li><a href="contact.html">Editorial Policy</a></li>
                                    <li><a href="contact.html">Return Policy</a></li>
                                    <li><a href="contact.html">IP Policy</a></li>
                                    <li><a href="contact.html">Grievance Redressal Policy</a></li>
                                    <li><a href="contact.html">Terms and Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="footer-widget">
                            <h4 class="fw-title">Our Services</h4>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="breeder.html">Our Breeder</a></li>
                                    <li><a href="adoption.html">Our Adoption</a></li>
                                    <li><a href="contact.html">Editorial Policy</a></li>
                                    <li><a href="contact.html">Return Policy</a></li>
                                    <li><a href="contact.html">Grievance Policy</a></li>
                                    <li><a href="contact.html">Redressal Policy</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="footer-widget">
                            <h4 class="fw-title">Instagram</h4>
                            <div class="fw-insta">
                                <ul>
                                    <li><a href="#"><img src="img/images/insta_img01.png" alt=""></a></li>
                                    <li><a href="#"><img src="img/images/insta_img02.png" alt=""></a></li>
                                    <li><a href="#"><img src="img/images/insta_img03.png" alt=""></a></li>
                                    <li><a href="#"><img src="img/images/insta_img04.png" alt=""></a></li>
                                    <li><a href="#"><img src="img/images/insta_img05.png" alt=""></a></li>
                                    <li><a href="#"><img src="img/images/insta_img06.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-shape"><img src="img/images/footer_shape01.png" alt=""></div>
            <div class="footer-shape shape-two"><img src="img/images/footer_shape02.png" alt=""></div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2022 Happy Paw. Todos direitos reservados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        <!-- footer-end -->





		<!-- JS here -->
        <script src="js/vendor/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.odometer.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>