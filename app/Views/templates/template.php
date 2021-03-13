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
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="<?= base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/css/themify-icons.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/css/animate.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/css/bootsnav.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?= base_url(); ?>/assets/js/html5/html5shiv.min.js"></script>
      <script src="<?= base_url(); ?>/assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- isi navbar dibawah, ngambil dari templates -->
    <?= $this->include('templates/navbar'); ?>

    <!-- isi konten landing page -->
    <?= $this->renderSection('konten'); ?>
    <!-- akhir isi konten landing page -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <!-- Shape -->
        <div class="footer-shape">
            <img src="<?= base_url(); ?>/assets/img/shape/4.png" alt="Shape">
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
                                    <a href="<?= base_url(); ?>"><i class="fas fa-angle-right"></i> Home</a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>/tentang"><i class="fas fa-angle-right"></i> Tentang Kami</a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>/kerjasama"><i class="fas fa-angle-right"></i> Kerjasama</a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>/apa-itu-esis"><i class="fas fa-angle-right"></i> Apa itu E-Sys?</a>
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
    <script src="<?= base_url(); ?>/assets/js/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/jquery.appear.js"></script>
    <script src="<?= base_url(); ?>/assets/js/jquery.easing.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/modernizr.custom.13711.js"></script>
    <script src="<?= base_url(); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/wow.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/progress-bar.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/count-to.js"></script>
    <script src="<?= base_url(); ?>/assets/js/YTPlayer.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/bootsnav.js"></script>
    <script src="<?= base_url(); ?>/assets/js/main.js"></script>

</body>

</html>