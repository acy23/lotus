<?php
    include 'config.php';
    try{
        $id = $_GET['id'];
        $sql = "select * from services where Id = $id";
        $result = $con->query($sql);
        $row = $result->fetch_assoc();
    } 
    catch (Exception $e) {
        header("Location: error.php");
    }
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Medilax - Medical and Health Care HTML Template - Services Details</title>
    <meta name="author" content="Vecuro">
    <meta name="description" content="Medilax - Medical and Health Care HTML Template">
    <meta name="keywords" content="Medilax - Medical and Health Care HTML Template" />
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--==============================
	   Google Web Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Quicksand:wght@400;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">


    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Layerslider -->
    <link rel="stylesheet" href="assets/css/layerslider.min.css">
    <!-- jQuery DatePicker -->
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Theme Color CSS -->
    <link rel="stylesheet" href="assets/css/theme-color1.css">

</head>

<body>


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here 
	******************************** -->




    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader  ">
        <button class="vs-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <svg width="88px" height="108px" viewBox="0 0 54 64">
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path class="beat-loader" d="M0.5,38.5 L16,38.5 L19,25.5 L24.5,57.5 L31.5,7.5 L37.5,46.5 L43,38.5 L53.5,38.5" id="Path-2" stroke-width="2"></path>
                </g>
            </svg>
        </div>
    </div>
    <!--==============================
    Mobile Menu
  ============================== -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html"><img src="assets/img/logo-mobile.png" alt="Medilax"></a>
            </div>
            <form action="#" class="mobile-menu-form">
                <input type="text" class="form-control" placeholder="Search...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
            <div class="vs-mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home One</a></li>
                            <li><a href="index-2.html">Home Two</a></li>
                            <li><a href="index-3.html">Home Three</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="service.html">Services</a>
                        <ul class="sub-menu">
                            <li><a href="service.html">Services</a></li>
                            <li><a href="service-details.html">Services Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="blog.html">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="team.html">Team</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="shop-details.html">Shop Details</a></li>
                            <li><a href="project.html">Projects</a></li>
                            <li><a href="appointment.html">Appointment</a></li>
                            <li><a href="error.html">Error Page</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Sidemenu
============================== -->
    <div class="sidemenu-wrapper d-none d-lg-block  ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget woocommerce widget_shopping_cart">
                <h3 class="widget_title">Shopping cart</h3>
                <div class="widget_shopping_cart_content">
                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/cart/cart-img-1-1.png" alt="Cart Image">Adderall</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>40.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/cart/cart-img-1-2.png" alt="Cart Image">Januvia</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>99.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/cart/cart-img-1-3.png" alt="Cart Image">Zubsolv</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>56.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/cart/cart-img-1-4.png" alt="Cart Image">Invokana</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>23.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/cart/cart-img-1-5.png" alt="Cart Image">Sublocade</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>100.00</span>
                            </span>
                        </li>
                    </ul>
                    <p class="woocommerce-mini-cart__total total">
                        <strong>Subtotal:</strong>
                        <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">$</span>318.00</span>
                    </p>
                    <p class="woocommerce-mini-cart__buttons buttons">
                        <a href="cart.html" class="vs-btn style1 wc-forward">View cart</a>
                        <a href="checkout.html" class="vs-btn style1 checkout wc-forward">Checkout</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Popup Search Box
    ============================== -->
    <div class="popup-search-box d-none d-lg-block  ">
        <button class="searchClose border-theme text-theme"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" class="border-theme" placeholder="What are you looking for">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <!--==============================
        Header Area
    ==============================-->
    
    <?php include 'layout.php'; ?>
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper ">
        <div class="parallax" data-parallax-image="<?php echo $row['BackgroundImageTop'] ?>"></div>
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"> <?php echo $row['Name'] ?></h1>
                <div class="breadcumb-menu-wrap">
                    <i class="far fa-home-lg"></i>
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><?php echo $row['Name']?> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Service Area
    ==============================-->
    <section class="vs-service-wrapper space-top space-md-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-content mb-30">
                        <div class="vs-surface wow" data-wow-delay="0.02s">
                            <img src="<?php echo $row['BackgroundImageMain'] ?>" alt="Service Image" class="w-100">
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-11 col-xxl-10 ">
                                <div class="service-bar">
                                    <div class="row justify-content-between align-items-center gy-4 text-center text-lg-start">
                                        <div class="col-sm-6 col-lg-auto">
                                            <span class="fs-xs">Treatment Name</span>
                                            <h2 class="h5 mb-0"><?php echo $row['Name'] ?></h2>
                                        </div>
                                        <div class="col-sm-6 col-lg-auto">
                                            <span class="fs-xs">Time Duration</span>
                                            <h2 class="h5 mb-0"><?php echo $row['TimeDuration'] ?></h2>
                                        </div>
                                        <div class="col-sm-6 col-lg-auto">
                                            <span class="fs-xs">Doctor Name</span>
                                            <h2 class="h5 mb-0">Dr. David Smith</h2>
                                        </div>
                                        <div class="col-sm-6 col-lg-auto">
                                            <a href="appointment.html" class="vs-btn style2">Appointment<i class="fal fa-calendar-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="fs-md text-title mb-4 pb-2"><?php echo $row['BigText'] ?></p>
                        <p><?php echo $row['Textt'] ?></p>
                        <div class="row mt-40 mb-20">
                            <div class="col-lg-4 mb-30">
                                <img src="<?php echo $row['ReferenceImg1'] ?>" alt="Service Image" class="w-100">
                            </div>
                            <div class="col-lg-4 mb-30">
                                <img src="<?php echo $row['ReferenceImg2'] ?>" alt="Service Image" class="w-100">
                            </div>
                            <div class="col-lg-4 mb-30">
                                <img src="<?php echo $row['ReferenceImg3'] ?>" alt="Service Image" class="w-100">
                            </div>
                        </div>
                        <h3><?php echo $row['Question'] ?></h3>
                        <p><?php echo $row['Answer'] ?></p>
                        <?php if($row["Question2"]){ ?>
                            <h3><?php echo $row['Question2'] ?></h3>
                            <p><?php echo $row['Answer2'] ?></p>
                        <?php } ?>

                        <?php if($row["Question3"])
                            { 
                        ?>
                            <h3><?php echo $row['Question3'] ?></h3>
                            <p><?php echo $row['Answer3'] ?></p>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
			Footer Area
	==============================-->
    <footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/bg-shape-4.png">
        <div class="container">
            <div class="footer-top">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-6 col-md-auto text-center text-sm-start">
                        <div class="footer1-logo bg-white">
                            <a href="index.html"><img src="assets/img/logo-1.png" alt="Logo"></a>
                        </div>
                    </div>
                    <div class=" col-sm-6 col-md-auto pt-20 pt-sm-0 pb-20 pb-sm-0 text-center text-sm-end">
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="far fa-basketball-ball"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-lg-3 col-xl-3">
                        <div class="widget footer-widget  ">
                            <h3 class="widget_title">About Us</h3>
                            <div class="vs-widget-about">
                                <p>Energistically reintermediate worldwide interfaces vis-a-vis emerging integrate leadership skills.</p>
                                <h4><a class="text-theme" href="tel:693232512456"><i class="fas fa-phone-volume me-2 pe-1"></i> 693 2325 12456</a></h4>
                                <div class="d-flex mt-3 pt-1">
                                    <div class="avater-small mr-20">
                                        <img src="assets/img/author/author-2-3.jpg" alt="Avater Image">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h5 class="mb-0 font-body lh-1 text-white">Dr. David Smith</h5>
                                        <span class="text-theme fs-12 lh-1">Senior Consultant</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-auto col-xl-auto">
                        <div class="widget footer-widget widget_nav_menu   ">
                            <h3 class="widget_title">Services</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="#">Body Surgery</a></li>
                                    <li><a href="#">Major Operation</a></li>
                                    <li><a href="#">Child Care</a></li>
                                    <li><a href="#">Heart Surgery</a></li>
                                    <li><a href="#">Mental Health</a></li>
                                    <li><a href="#">Urgent Care</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-auto">
                        <div class="widget footer-widget  ">
                            <h4 class="widget_title">Gallery Posts</h4>
                            <div class="footer-gallery">
                                <div class="gal-item">
                                    <a href="#"><img src="assets/img/widget/gal-1-1.jpg" alt="Gallery Image" class="w-100"></a>
                                </div>
                                <div class="gal-item">
                                    <a href="#"><img src="assets/img/widget/gal-1-2.jpg" alt="Gallery Image" class="w-100"></a>
                                </div>
                                <div class="gal-item">
                                    <a href="#"><img src="assets/img/widget/gal-1-3.jpg" alt="Gallery Image" class="w-100"></a>
                                </div>
                                <div class="gal-item">
                                    <a href="#"><img src="assets/img/widget/gal-1-4.jpg" alt="Gallery Image" class="w-100"></a>
                                </div>
                                <div class="gal-item">
                                    <a href="#"><img src="assets/img/widget/gal-1-5.jpg" alt="Gallery Image" class="w-100"></a>
                                </div>
                                <div class="gal-item">
                                    <a href="#"><img src="assets/img/widget/gal-1-6.jpg" alt="Gallery Image" class="w-100"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3">
                        <div class="widget footer-widget   ">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="footer-table">
                                <table>
                                    <tr>
                                        <td>Mon - Fri:</td>
                                        <td>8:00 am - 8:00 pm</td>
                                    </tr>
                                    <tr>
                                        <td>Saturday:</td>
                                        <td>9:00 am - 6:00 pm</td>
                                    </tr>
                                    <tr>
                                        <td>Sunday:</td>
                                        <td>9:00 am - 6:00 pm</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="address-line">
                                <i class="far fa-map-marker-alt text-theme fs-md"></i>
                                <a href="#" class="text-reset fs-md">374 William S Canning Blvd, Fall River MA 2721</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright bg-theme">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto text-center text-md-end">
                        <p class="mb-0 text-white">Copyright <i class="fal fa-copyright"></i> 2022 <a class="text-white" href="index.html">Medilax</a>. All Rights Reserved by <a class="text-white" href="https://www.templatemonster.com/authors/vecuro/" target="_blank">Vecuro</a>.</p>
                    </div>
                    <div class="col-auto d-none d-md-block">
                        <ul class="footer-bottom-menu">
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">About</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!--********************************
			Code End  Here 
	******************************** -->


    <!-- Scroll To Top -->
    <a href="#" class="scrollToTop scroll-bottom  style2"><i class="fas fa-arrow-alt-up"></i></a>



    <!--==============================
        All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Slick Slider -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Layerslider -->
    <script src="assets/js/layerslider.utils.js"></script>
    <script src="assets/js/layerslider.transitions.js"></script>
    <script src="assets/js/layerslider.kreaturamedia.jquery.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- jQuery Datepicker -->
    <script src="assets/js/jquery.datetimepicker.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Isotope Filter -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Parallax Scroll -->
    <script src="assets/js/universal-parallax.min.js"></script>
    <!-- WOW Animation -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom Carousel -->
    <script src="assets/js/vscustom-carousel.min.js"></script>
    <!-- Form Js -->
    <script src="assets/js/ajax-mail.js"></script>
    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>

</body>

</html>