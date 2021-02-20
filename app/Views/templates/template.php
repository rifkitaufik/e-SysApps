<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sasoft - Software Landing Page">

    <!-- ========== Page Title ========== -->
    <title><?= $title; ?></title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/assets/css/themify-icons.css" rel="stylesheet" />
    <link href="/assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="/assets/css/animate.css" rel="stylesheet" />
    <link href="/assets/css/bootsnav.css" rel="stylesheet" />
    <link href="/assets/style.css" rel="stylesheet">
    <link href="/assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="/assets/js/html5/html5shiv.min.js"></script>
      <script src="/assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav on no-full">

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="button"><a href="https://wa.me/+6281343042761" target="_blank">Hubungi</a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="http://localhost:8080/">
                        <img src="/assets/img/logo.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="#" data-out="#">
                        <li>
                            <a href="#" class="smooth-menu active">Home</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#fitur">Fitur</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#aplikasi">Aplikasi</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#harga">Harga</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- isi konten landing page -->
    <?= $this->renderSection('konten'); ?>
    <!-- akhir isi konten landing page -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <!-- Shape -->
        <div class="footer-shape">
            <img src="/assets/img/shape/4.png" alt="Shape">
        </div>
        <!-- Shape -->
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="/assets/img/logo-light.png" alt="Logo E-Sys Application">
                            <p>
                                E-Sys Application adalah sistem aplikasi pemasaran pihak kedua yang bekerjasama dengan pengembang utama, dalam hal ini E-Sys Application sebagai jasa perantara antara developer dan client. Dan membantu client dalam hal kebutuhan aplikasi yang sesuai dengan rekomendasi E-Sys Application.
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Quick Link</h4>
                            <ul>
                                <li>
                                    <a href="/"><i class="fas fa-angle-right"></i> Home</a>
                                </li>
                                <li>
                                    <a href="/tentang"><i class="fas fa-angle-right"></i> Tentang Kami</a>
                                </li>
                                <li>
                                    <a href="/kerjasama"><i class="fas fa-angle-right"></i> Kerjasama</a>
                                </li>
                                <li>
                                    <a href="/apa-itu-esis"><i class="fas fa-angle-right"></i> Apa itu E-Sys?</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item twitter-widget">
                            <h4 class="widget-title">Kontak</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Alamat:</strong>
                                            Bogor - Indonesia
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Email:</strong>
                                            <a href="mailto:rifkitaufik01@gmail.com">rifkitaufik01@gmail.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <strong>WhatsApp:</strong>
                                            <a href="https://wa.me/+6281343042761" target="_blank">0813 4304 2761</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright <?= date('Y'); ?>. All Rights Reserved by <a href="https://sayawrt.com" target="_blank">SayaWRT Media Blog</a></p>
                    </div>
                    <!-- <div class="col-lg-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="/assets/js/jquery-1.12.4.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.appear.js"></script>
    <script src="/assets/js/jquery.easing.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/modernizr.custom.13711.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/progress-bar.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/count-to.js"></script>
    <script src="/assets/js/YTPlayer.min.js"></script>
    <script src="/assets/js/bootsnav.js"></script>
    <script src="/assets/js/main.js"></script>

</body>

</html>