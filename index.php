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
        <title>Happy Paw</title>
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
                                            <li><a href="#start">início</a></li>
                                            <li><a href="ongs.php">ONGS</a></li>
                                            <li><a href="about.php">Desenvolvedores</a></li>
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
            <!-- slider-area-end -->
            <!-- find-area -->
            <div class="find-area">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <form action="#">
                                <div class="find-wrap">
                                    <div class="location">
                                        <i class="flaticon-location"></i>
                                        <input type="text" value="Enter City, State. or Zip">
                                    </div>
                                    <div class="find-category">
                                        <ul>
                                            <li><a href="shop.html"><i class="flaticon-dog"></i> Find Your Dog</a></li>
                                            <li><a href="shop.html"><i class="flaticon-happy"></i> Find Your Cat</a></li>
                                            <li><a href="shop.html"><i class="flaticon-dove"></i> Find Your Birds</a></li>
                                        </ul>
                                    </div>
                                    <div class="other-find">
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Find Other Pets
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="shop.html">Find Your Dog</a>
                                                <a class="dropdown-item" href="shop.html">Find Your Cat</a>
                                                <a class="dropdown-item" href="shop.html">Find Your Birds</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- find-area-end -->
            <!-- counter-area -->
            <section class="counter-area counter-bg" data-background="img/bg/counter_bg.jpg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="counter-title text-center mb-65">
                                <h6 class="sub-title">Why Choose Us?</h6>
                                <h2 class="title">Best Service to Breeds Your Loved Dog Explore</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="counter-item">
                                <h2 class="count"><span class="odometer" data-count="73"></span>%</h2>
                                <p>dogs are first bred</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="counter-item">
                                <h2 class="count"><span class="odometer" data-count="259"></span>+</h2>
                                <p>Most dogs are first</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="counter-item">
                                <h2 class="count"><span class="odometer" data-count="39"></span>K</h2>
                                <p>Dog Breeding</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="counter-item">
                                <h2 class="count"><span class="odometer" data-count="45"></span>+</h2>
                                <p>Years Of History</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- counter-area-end -->

            <!-- adoption-area -->
            <section class="adoption-area">
                <div class="container">
                    <div class="row align-items-center align-items-xl-end justify-content-center">
                        <div class="col-xl-7 col-lg-6 col-md-10 order-0 order-lg-2">
                            <div class="adoption-img">
                                <img src="img/images/adoption_img.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="adoption-content">
                                <h2 class="title">Working For <br> Dog <span>Adoption</span> Free, Happy Time</h2>
                                <p>The best overall dog DNA test is Embark Breed & Health Kit (view at Chewy), which provides you with a breed brwn and information.</p>
                                <a href="adoption.html" class="btn">Adoption <img src="img/icon/w_pawprint.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="adoption-shape"><img src="img/images/adoption_shape.png" alt=""></div>
            </section>
            <!-- adoption-area-end -->
            <!-- faq-area -->
            <section class="faq-area faq-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="faq-img-wrap">
                                <img src="img/images/faq_tv.png" class="img-frame" alt="">
                                <img src="img/images/faq_img.png" class="main-img" alt="">
                                <a href="https://www.youtube.com/watch?v=XdFfCPK5ycw" class="popup-video"></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="faq-wrapper">
                                <div class="section-title mb-35">
                                    <h5 class="sub-title">FAQ Question</h5>
                                    <h2 class="title">History & Family Adoption</h2>
                                </div>
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Working for dog adoption
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                The best overall dog DNA test is embark breed & health Kit (view atths Chewy), which provides you with a breed brwn and ition on provides ancestors most dogs.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Competitions & Awards
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                The best overall dog DNA test is embark breed & health Kit (view atths Chewy), which provides you with a breed brwn and ition on provides ancestors most dogs.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    The puppies are 3 months old
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                The best overall dog DNA test is embark breed & health Kit (view atths Chewy), which provides you with a breed brwn and ition on provides ancestors most dogs.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-shape"><img src="img/images/faq_shape.png" alt=""></div>
            </section>
            <!-- faq-area-end -->
            <!-- adoption-shop-area -->
            <section class="adoption-shop-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-9">
                            <div class="section-title text-center mb-65">
                                <div class="section-icon"><img src="img/icon/pawprint.png" alt=""></div>
                                < h5 class="sub-title">Meet the animals</>
                                <h2 class="title">Puppies Waiting for Adoption</h2>
                                <p>The best overall dog DNA test is Embark Breed & Health Kit (view at Chewy), which provides you with a
                                    breed brwn and information Most dogs</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="adoption-shop-item">
                                <div class="adoption-shop-thumb">
                                    <img src="img/product/adoption_shop_thumb01.jpg" alt="">
                                    <a href="shop-details.html" class="btn">Adoption <img src="img/icon/w_pawprint.png" alt=""></a>
                                </div>
                                <div class="adoption-shop-content">
                                    <h4 class="title"><a href="shop-details.html">Mister Tartosh</a></h4>
                                    <div class="adoption-meta">
                                        <ul>
                                            <li><i class="fas fa-cog"></i><a href="#">Siberian Husky</a></li>
                                            <li><i class="far fa-calendar-alt"></i> Birth : 2021</li>
                                        </ul>
                                    </div>
                                    <div class="adoption-rating">
                                        <ul>
                                            <li class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li class="price">Total Price : <span>Free</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="adoption-shop-item">
                                <div class="adoption-shop-thumb">
                                    <img src="img/product/adoption_shop_thumb02.jpg" alt="">
                                    <a href="shop-details.html" class="btn">Adoption <img src="img/icon/w_pawprint.png" alt=""></a>
                                </div>
                                <div class="adoption-shop-content">
                                    <h4 class="title"><a href="shop-details.html">Charlie</a></h4>
                                    <div class="adoption-meta">
                                        <ul>
                                            <li><i class="fas fa-cog"></i><a href="#">Golden Retriever</a></li>
                                            <li><i class="far fa-calendar-alt"></i> Birth : 2020</li>
                                        </ul>
                                    </div>
                                    <div class="adoption-rating">
                                        <ul>
                                            <li class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li class="price">Total Price : <span>$30</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="adoption-shop-item">
                                <div class="adoption-shop-thumb">
                                    <img src="img/product/adoption_shop_thumb03.jpg" alt="">
                                    <a href="shop-details.html" class="btn">Adoption <img src="img/icon/w_pawprint.png" alt=""></a>
                                </div>
                                <div class="adoption-shop-content">
                                    <h4 class="title"><a href="shop-details.html">Alessia Max</a></h4>
                                    <div class="adoption-meta">
                                        <ul>
                                            <li><i class="fas fa-cog"></i><a href="#">German Sherped</a></li>
                                            <li><i class="far fa-calendar-alt"></i> Birth : 2020</li>
                                        </ul>
                                    </div>
                                    <div class="adoption-rating">
                                        <ul>
                                            <li class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li class="price">Total Price : <span>$29</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="adoption-shop-item">
                                <div class="adoption-shop-thumb">
                                    <img src="img/product/adoption_shop_thumb04.jpg" alt="">
                                    <a href="shop-details.html" class="btn">Adoption <img src="img/icon/w_pawprint.png" alt=""></a>
                                </div>
                                <div class="adoption-shop-content">
                                    <h4 class="title"><a href="shop-details.html">Canadian</a></h4>
                                    <div class="adoption-meta">
                                        <ul>
                                            <li><i class="fas fa-cog"></i><a href="#">German Sherped</a></li>
                                            <li><i class="far fa-calendar-alt"></i> Birth : 2021</li>
                                        </ul>
                                    </div>
                                    <div class="adoption-rating">
                                        <ul>
                                            <li class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li class="price">Total Price : <span>$39</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="adoption-shop-item">
                                <div class="adoption-shop-thumb">
                                    <img src="img/product/adoption_shop_thumb05.jpg" alt="">
                                    <a href="shop-details.html" class="btn">Adoption <img src="img/icon/w_pawprint.png" alt=""></a>
                                </div>
                                <div class="adoption-shop-content">
                                    <h4 class="title"><a href="shop-details.html">Entertainment</a></h4>
                                    <div class="adoption-meta">
                                        <ul>
                                            <li><i class="fas fa-cog"></i><a href="#">Siberian Husky</a></li>
                                            <li><i class="far fa-calendar-alt"></i> Birth : 2021</li>
                                        </ul>
                                    </div>
                                    <div class="adoption-rating">
                                        <ul>
                                            <li class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li class="price">Total Price : <span>Free</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="adoption-shop-item">
                                <div class="adoption-shop-thumb">
                                    <img src="img/product/adoption_shop_thumb06.jpg" alt="">
                                    <a href="shop-details.html" class="btn">Adoption <img src="img/icon/w_pawprint.png" alt=""></a>
                                </div>
                                <div class="adoption-shop-content">
                                    <h4 class="title"><a href="shop-details.html">Dangerous</a></h4>
                                    <div class="adoption-meta">
                                        <ul>
                                            <li><i class="fas fa-cog"></i><a href="#">Golden Retriever</a></li>
                                            <li><i class="far fa-calendar-alt"></i> Birth : 2021</li>
                                        </ul>
                                    </div>
                                    <div class="adoption-rating">
                                        <ul>
                                            <li class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li class="price">Total Price : <span>Free</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- adoption-shop-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area testimonial-bg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-9">
                            <div class="section-title text-center mb-65">
                                <div class="section-icon"><img src="img/icon/pawprint.png" alt=""></div>
                                <h5 class="sub-title">Testimonials</h5>
                                <h2 class="title">Our Happy Customers</h2>
                                <p>The best overall dog DNA test is Embark Breed & Health Kit (view at Chewy), which provides you with a
                                    breed brwn and information Most dogs</p>
                            </div>
                        </div>
                    </div>
                    <div class="row testimonial-active">
                        <div class="col-lg-6">
                            <div class="testimonial-item">
                                <div class="testi-avatar-thumb">
                                    <img src="img/images/testi_avatar01.png" alt="">
                                </div>
                                <div class="testi-content">
                                    <p>“ The best overall dog DNA test Embark Breed & Health Kit (view at Chewy), which provides with a breed brwn and information ”</p>
                                    <div class="testi-avatar-info">
                                        <h5 class="title">Alessia Cara</h5>
                                        <span>Googel CEO</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testimonial-item">
                                <div class="testi-avatar-thumb">
                                    <img src="img/images/testi_avatar02.png" alt="">
                                </div>
                                <div class="testi-content">
                                    <p>“ The best overall dog DNA test Embark Breed & Health Kit (view at Chewy), which provides with a breed brwn and information ”</p>
                                    <div class="testi-avatar-info">
                                        <h5 class="title">Alessia Cara</h5>
                                        <span>Googel CEO</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testimonial-item">
                                <div class="testi-avatar-thumb">
                                    <img src="img/images/testi_avatar01.png" alt="">
                                </div>
                                <div class="testi-content">
                                    <p>“ The best overall dog DNA test Embark Breed & Health Kit (view at Chewy), which provides with a breed brwn and information ”</p>
                                    <div class="testi-avatar-info">
                                        <h5 class="title">Alessia Cara</h5>
                                        <span>Googel CEO</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testimonial-item">
                                <div class="testi-avatar-thumb">
                                    <img src="img/images/testi_avatar02.png" alt="">
                                </div>
                                <div class="testi-content">
                                    <p>“ The best overall dog DNA test Embark Breed & Health Kit (view at Chewy), which provides with a breed brwn and information ”</p>
                                    <div class="testi-avatar-info">
                                        <h5 class="title">Alessia Cara</h5>
                                        <span>Googel CEO</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- blog-area -->
            <section class="blog-area pt-110 pb-60">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-9">
                            <div class="section-title text-center mb-65">
                                <div class="section-icon"><img src="img/icon/pawprint.png" alt=""></div>
                                <h5 class="sub-title">Our News</h5>
                                <h2 class="title">Latest News Update</h2>
                                <p>The best overall dog DNA test is Embark Breed & Health Kit (view at Chewy), which provides you with a
                                    breed brwn and information Most dogs</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-post-item mb-50">
                                <div class="blog-post-thumb">
                                    <a href="blog-details.html"><img src="img/blog/blog_post_thumb01.jpg" alt=""></a>
                                    <div class="blog-post-tag">
                                        <a href="#"><i class="flaticon-bookmark-1"></i>Sharped</a>
                                    </div>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-post-meta">
                                        <ul>
                                            <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                            <li><i class="far fa-bell"></i> Mar 10, 2021</li>
                                        </ul>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Working For Dog Adoption</a></h3>
                                    <p>The best overall dog test is Embark Breed & Health Kit view at Chewy.</p>
                                    <a href="blog-details.html" class="read-more">Read More <img src="img/icon/pawprint.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-post-item mb-50">
                                <div class="blog-post-thumb">
                                    <a href="blog-details.html"><img src="img/blog/blog_post_thumb02.jpg" alt=""></a>
                                    <div class="blog-post-tag">
                                        <a href="#"><i class="flaticon-bookmark-1"></i>Creative</a>
                                    </div>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-post-meta">
                                        <ul>
                                            <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                            <li><i class="far fa-bell"></i> Mar 12, 2021</li>
                                        </ul>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Dog Derived From an Ancient</a></h3>
                                    <p>The best overall dog test is Embark Breed & Health Kit view at Chewy.</p>
                                    <a href="blog-details.html" class="read-more">Read More <img src="img/icon/pawprint.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-post-item mb-50">
                                <div class="blog-post-thumb">
                                    <a href="blog-details.html"><img src="img/blog/blog_post_thumb03.jpg" alt=""></a>
                                    <div class="blog-post-tag">
                                        <a href="#"><i class="flaticon-bookmark-1"></i>Business</a>
                                    </div>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-post-meta">
                                        <ul>
                                            <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                            <li><i class="far fa-bell"></i> Mar 12, 2021</li>
                                        </ul>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Ten Dog Breeds are Noted</a></h3>
                                    <p>The best overall dog test is Embark Breed & Health Kit view at Chewy.</p>
                                    <a href="blog-details.html" class="read-more">Read More <img src="img/icon/pawprint.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->

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