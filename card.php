<?php
include('global.php'); 
include('conexao.php');
include('protect.php');

$id = $_GET["id"];
$sql = "SELECT * FROM animais WHERE id= '{$id}'";
$rs = mysqli_query($conexao,$sql) or die("Erro ao recuperar os dados do registro. " . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);

$nome = $dados["nome"];
$nome = ucfirst($nome);
$animal = $dados["animal"];
$idade = $dados["idade"];
$animal = ucfirst($animal);
$sexo = $dados["sexo"];
$sexo = ucfirst($sexo);
$vacina = $dados["vacina"];
$vacina = ucfirst($vacina);
$obs = $dados["obs"];
$obs = ucfirst($obs);
$porte = $dados["porte"];
$porte = ucfirst($porte);
$cor = $dados["cor"];
$cor = ucfirst($cor);
$castracao = $dados["castracao"];
$castracao = ucfirst($castracao);

?>
<!doctype html>
<html lang="pt-br">
<head>
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta name="keywords" content="adoção, adotar, cachorro, gato, animais,  ong, adotar animais">
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Happy Paw | <?=$nome ?></title>
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

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">Adote <?=$nome ?></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><?=$nome ?></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- shop-details-area -->
            <section class="shop-details-area pt-110 pb-50">
                <div class="container">
                    <div class="shop-details-wrap">
                        <div class="row">
                            <div class="col-7">
                                <div class="shop-details-img-wrap">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane show active" id="item-one" role="tabpanel" aria-labelledby="item-one-tab">
                                            <div class="shop-details-img">
                                                <img src="img/product/shop_details01.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="item-two" role="tabpanel" aria-labelledby="item-two-tab">
                                            <div class="shop-details-img">
                                                <img src="img/product/shop_details02.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="item-three" role="tabpanel" aria-labelledby="item-three-tab">
                                            <div class="shop-details-img">
                                                <img src="img/product/shop_details03.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="item-four" role="tabpanel" aria-labelledby="item-four-tab">
                                            <div class="shop-details-img">
                                                <img src="img/product/shop_details04.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-details-nav-wrap">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="item-one-tab" data-toggle="tab" href="#item-one" role="tab"
                                                aria-controls="item-one" aria-selected="true"><img src="img/product/shop_nav_img01.jpg" alt=""></a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="item-two-tab" data-toggle="tab" href="#item-two" role="tab" aria-controls="item-two"
                                                aria-selected="false"><img src="img/product/shop_nav_img02.jpg" alt=""></a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="item-three-tab" data-toggle="tab" href="#item-three" role="tab"
                                                aria-controls="item-three" aria-selected="false"><img src="img/product/shop_nav_img03.jpg" alt=""></a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="item-four-tab" data-toggle="tab" href="#item-four" role="tab"
                                                aria-controls="item-four" aria-selected="false"><img src="img/product/shop_nav_img04.jpg" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="shop-details-content">
                                    <span><?=$animal ?></span>
                                    <h2 class="title"><?=$nome ?></h2>
                                    <div class="shop-details-review">
                                        <h5>Idade: <?=$idade?></h5>
                                    </div>
                                    <div class="shop-details-price">
                                        <h4 class="price"><?=$sexo?></h4>
                                        <h5 class="stock-status"><?=$vacina?></h5>
                                    </div>
                                    <p><?=$obs?></p>
                                    <div class="shop-details-dimension">
                                        <span>Porte : <?=$porte?></span>
                                    </div>
                                    <div class="shop-details-color">
                                        <span>Color : <?=$cor?></span>
                                    </div>
                                    <div class="shop-details-quantity">
                                        <span>Castração : <?=$castracao?></span>
                                        <a href="shop-details.html" class="wishlist-btn"><i class="fas fa-heart"></i> Adicionar aos favoritos</a>
                                    </div>
                                    <div class="shop-details-bottom">
                                        <ul>
                                            <li class="sd-category">
                                                <span class="title">Categories :</span>
                                                <a href="shop.html">Hand,</a>
                                                <a href="shop.html">Sanitizer,</a>
                                                <a href="shop.html">Covid - 19</a>
                                            </li>
                                            <li class="sd-sku">
                                                <span class="title">SKU :</span>
                                                <a href="shop.html">H#21546</a>
                                            </li>
                                            <li class="sd-share">
                                                <span class="title">Share Now :</span>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="product-desc-wrap">
                                <ul class="nav nav-tabs" id="myTabTwo" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="details-tab" data-toggle="tab" href="#details" role="tab"
                                            aria-controls="details" aria-selected="true">Details More</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="val-tab" data-toggle="tab" href="#val" role="tab" aria-controls="val"
                                            aria-selected="false">Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab"
                                            aria-controls="review" aria-selected="false">Reviews (0)</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContentTwo">
                                    <div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details-tab">
                                        <div class="product-desc-content">
                                            <p>The domestic dog is a doiated dendant of the wolf. The dog derived from an ancient, extinct wolf, and the modern grey wolf is the dog's nearest living relative. The dog was the first species to be domesticated, by hunter–gatherers. These will include the core vaccines, which are administered in a series of three: at 6-, 12-, and 16 weeks old. doiated dendant of the wolf. The dog derived from an ancient, extinct wolf, and the modern grey wolf is the dog's nearest</p>
                                            <p>These will include the core vaccines, which are administered in a series of three: at 6-, 12-, and 16 weeks old. doiated dendant of the wolf. The dog derived from an ancient, extinct wolf, and the modern grey wolf is the dog's nearest include the core vaccines, which are administered.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="val" role="tabpanel" aria-labelledby="val-tab">
                                        <div class="product-desc-info">
                                            <div class="row">
                                                <div class="col-xl-3 col-md-5">
                                                    <div class="product-desc-img">
                                                        <img src="img/product/desc_img.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-md-7">
                                                    <h5 class="small-title">100% Knit Knacks</h5>
                                                    <p>Cramond Leopard & Pythong Print Anorak Jacket In Beige but also the leap into
                                                        electronic typesetting, remaining lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                    <ul class="product-desc-list">
                                                        <li>65% poly, 35% rayon</li>
                                                        <li>Partially lined</li>
                                                        <li>Hidden front button closure with keyhole accents</li>
                                                        <li>Button cuff sleeves</li>
                                                        <li>Lightweight semi-sheer fabrication</li>
                                                        <li>Made in USA</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                        <div class="product-desc-review">
                                            <div class="review-title mb-20">
                                                <h4 class="title">Customer Reviews (0)</h4>
                                            </div>
                                            <div class="left-rc">
                                                <p>No reviews yet</p>
                                            </div>
                                            <div class="right-rc">
                                                <a href="#">Write a review</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="related-products-wrap">
                        <h2 class="title">Related Products</h2>
                        <div class="row related-product-active">
                            <div class="col-lg-3">
                                <div class="shop-item mb-55">
                                    <div class="shop-thumb">
                                        <a href="shop-details.html"><img src="img/product/shop_item01.jpg" alt=""></a>
                                    </div>
                                    <div class="shop-content">
                                        <span>Dog toy’s</span>
                                        <h4 class="title"><a href="shop-details.html">Pet Knit Knacks</a></h4>
                                        <div class="shop-content-bottom">
                                            <span class="price">$28.00</span>
                                            <span class="add-cart"><a href="shop-details.html">ADD +</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="shop-item mb-55">
                                    <div class="shop-thumb">
                                        <a href="shop-details.html"><img src="img/product/shop_item02.jpg" alt=""></a>
                                    </div>
                                    <div class="shop-content">
                                        <span>Dog toy’s</span>
                                        <h4 class="title"><a href="shop-details.html">Squeaky Dog</a></h4>
                                        <div class="shop-content-bottom">
                                            <span class="price">$19.00</span>
                                            <span class="add-cart"><a href="shop-details.html">ADD +</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="shop-item mb-55">
                                    <div class="shop-thumb">
                                        <a href="shop-details.html"><img src="img/product/shop_item03.jpg" alt=""></a>
                                    </div>
                                    <div class="shop-content">
                                        <span>Dog toy’s</span>
                                        <h4 class="title"><a href="shop-details.html">Pet Knit Knacks</a></h4>
                                        <div class="shop-content-bottom">
                                            <span class="price">$29.00</span>
                                            <span class="add-cart"><a href="shop-details.html">ADD +</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="shop-item mb-55">
                                    <div class="shop-thumb">
                                        <a href="shop-details.html"><img src="img/product/shop_item04.jpg" alt=""></a>
                                    </div>
                                    <div class="shop-content">
                                        <span>Dog toy’s</span>
                                        <h4 class="title"><a href="shop-details.html">Yoda Carriage</a></h4>
                                        <div class="shop-content-bottom">
                                            <span class="price">$49.00</span>
                                            <span class="add-cart"><a href="shop-details.html">ADD +</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="shop-item mb-55">
                                    <div class="shop-thumb">
                                        <a href="shop-details.html"><img src="img/product/shop_item05.jpg" alt=""></a>
                                    </div>
                                    <div class="shop-content">
                                        <span>Dog toy’s</span>
                                        <h4 class="title"><a href="shop-details.html">Pet Carriage</a></h4>
                                        <div class="shop-content-bottom">
                                            <span class="price">$09.00</span>
                                            <span class="add-cart"><a href="shop-details.html">ADD +</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- shop-details-area-end -->

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
                                    <a href="index.html"><img src="img/logo/logo.png" alt=""></a>
                                </div>
                                <div class="footer-text">
                                    <p>The best overall dog DNA test Embark Breed & Health Kit (view at Chewy) which provides overall dog you.</p>
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
                                <p>Copyright &copy; 2021 Petco. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-none d-md-block">
                            <div class="footer-lang">
                                <div class="dropdown">
                                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <img src="img/icon/united-states.png" alt=""> English
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item" href="index.html"><img src="img/icon/russia.png" alt="">Russia</a>
                                        <a class="dropdown-item" href="index.html"><img src="img/icon//thailand.png" alt="">Thailand</a>
                                        <a class="dropdown-item" href="index.html"><img src="img/icon/india.png" alt="">India</a>
                                    </div>
                                </div>
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
