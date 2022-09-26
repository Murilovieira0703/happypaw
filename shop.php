<?php
include('global.php'); 
include('conexao.php');


if(!isset($_SESSION)) {
    session_start();
    $start = 1;
    $sqltotal = "SELECT id FROM animais";
    $quantidade = 9;
    $pagina = (isset($_GET['pagina']))?(int)$_GET['pagina']:1;
    $inicio = ($quantidade * $pagina) - $quantidade;
                    $qrtotal = mysqli_query($conexao,$sqltotal) or die( mysqli_error($conexao));
                    $numtotal = mysqli_num_rows($qrtotal);
                    $totalpagina = ceil($numtotal/$quantidade);
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

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">Adoção</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Adoção</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- shop-area -->
            <div class="shop-area pt-110 pb-110">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-8 order-2 order-lg-0">
                            <aside class="shop-sidebar">
                                <div class="widget">
                                    <div class="sidebar-search">
                                        <form action="" method="POST" accept-charset='UTF-8'>
                                            <input type="text" placeholder="Procure um nome" name="txt_pesquisa">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="widget">
                                    <h4 class="sidebar-title">Categorias</h4>
                                    <div class="shop-cat-list">
                                        <ul>
                                            <li><a href="shop.html">Squeaky <span>+</span></a></li>
                                            <li><a href="shop.html">Dog Food <span>+</span></a></li>
                                            <li><a href="shop.html">Dog-Kit <span>+</span></a></li>
                                            <li><a href="shop.html">Dog Home <span>+</span></a></li>
                                            <li><a href="shop.html">Safety-Suits <span>+</span></a></li>
                                            <li><a href="shop.html">Pet Protect <span>+</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget shop-widget-banner">
                                    <a href="shop.html"><img src="img/product/shop_add.jpg" alt=""></a>
                                </div>
                            </aside>
                        </div>
                        <div class="col-lg-9">
                            <div class="shop-wrap">
                                <h4 class="title">Adote já</h4>
                                <?php echo "Total de animais: $numtotal ";?>
                                <div class="row justify-content-center">
                                <?php

                    $txt_pesquisa = (isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"]:"";

                    $sql = "SELECT * FROM Animais WHERE nome LIKE '%{$txt_pesquisa}%' or animal LIKE '{$txt_pesquisa}' or idade LIKE '{$txt_pesquisa}' or sexo LIKE '{$txt_pesquisa}' or vacina LIKE '{$txt_pesquisa}' or obs LIKE '{$txt_pesquisa}' or cor LIKE '{$txt_pesquisa}' or raca LIKE '{$txt_pesquisa}' or castracao LIKE '{$txt_pesquisa}' LIMIT $inicio , $quantidade";
                    $rs = mysqli_query($conexao,$sql) or die("Erro ao gerar a consulta no banco de dados" . mysqli_error($conexao)); 

                    while ($dados = mysqli_fetch_assoc($rs)){

                ?>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="shop-item mb-55">
                                            
                                            <div class="shop-thumb">
                                                <a href="card.php?id=<?=$dados["id"] ?>"><img src="img/product/shop_item01.jpg" alt=""></a>
                                            </div>
                                            <div class="shop-content">
                                                <span><?=$dados["animal"] ?></span>
                                                <h4 class="title"><a href="shop-details.html"><?=$dados["nome"] ?></a></h4>
                                                <div class="shop-content-bottom">
                                                    <span class="price"><?=$dados["idade"] ?> Anos</span>
                                                    <span class="add-cart"><a href="shop-details.html"><?=$dados["sexo"] ?></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                    }
                ?>

                                </div>
                                    <div class="shop-pagination">
                                        <ul>
                                            <?php
                                            if($pagina>6){
                                                ?>
                                                <li><a href="?pagina=<?php echo $pagina-1?>"><i class="fas fa-angle-double-left"></i></a></li>
                                                <?php
                                            }

                                            for($i=1;$i<=$totalpagina;$i++){
                                                if($i>=($pagina-4) && $i <= ($pagina+4)){
                                                    if($i==$pagina){ 
                                                        echo "<li class='active'><a href='#'> $i </a></li>";
                                                    }else{
                                                        
                                                        echo "<li><a href='?pagina=$i'> $i </a></li>";
                                                    }
                                                }
                                            }
                                            ?>
                                            <?php
                                                if($pagina< ($totalpagina-5)){
                                                    ?>
                                                        <li><a href="?pagina=<?php echo $pagina+1 ?>"><i class="fas fa-angle-double-right"></i></a></li>
                                                    <?php    
                                                }
                                                ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shop-area-end -->
            <!-- faq-area -->
            <section class="faq-area-two faq-bg">
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
                                                <button class="btn btn-link btn-block text-left" type="button"
                                                    data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Working for dog adoption
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                The best overall dog DNA test is embark breed & health Kit (view atths Chewy), which
                                                provides you with a breed brwn and ition on provides ancestors most dogs.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    Competitions & Awards
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                The best overall dog DNA test is embark breed & health Kit (view atths Chewy), which
                                                provides you with a breed brwn and ition on provides ancestors most dogs.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                    The puppies are 3 months old
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                The best overall dog DNA test is embark breed & health Kit (view atths Chewy), which
                                                provides you with a breed brwn and ition on provides ancestors most dogs.
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
