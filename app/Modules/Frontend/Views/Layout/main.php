<?php

use Config\Services;

$request = (new Services)::request();
$uri = $request->uri->getSegment(1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="<?= base_url('/'); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/favicon.ico') ?>">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/slicknav.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/flaticon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/fontawesome-all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/icons/font-awesome/css/fontawesome-all.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/slick.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/nice-select.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<!-- body -->

<body class="main-layout inner_header contact_page">
    <?php if (session()->getFlashData('error')) : ?>
        <?= view_cell('\App\Libraries\Widget::error'); ?>
    <?php endif; ?>
    <?php if (session()->getFlashData('info')) : ?>
        <?= view_cell('\App\Libraries\Widget::info'); ?>
    <?php endif; ?>
    <?php if (session()->getFlashData('success')) : ?>
        <?= view_cell('\App\Libraries\Widget::success'); ?>
    <?php endif; ?>
    <?php if (isset($main)) : ?>
        <!-- header -->
        <header>
            <!-- Header Start -->
            <div class="header-area">
                <div class="main-header">
                    <div class="header-bottom header-sticky">
                        <div class="container">
                            <div class="row align-items-center">
                                <!-- Logo -->
                                <div class="col-xl-2 col-lg-2">
                                    <div class="logo">
                                        <a href="<?= base_url('/'); ?>">
                                            <b>SISTEM PAKAR<span class="text-danger h2">.</span></b>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-10">
                                    <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                        <!-- Main-menu -->
                                        <div class="main-menu d-none d-lg-block">
                                            <nav>
                                                <ul id="navigation">
                                                    <li><a href="<?= base_url('/'); ?>">Home</a></li>
                                                    <?php if (session('user')) : ?>
                                                        <li><a href="<?= base_url('/diagnosa'); ?>">Diagnosa</a></li>
                                                        <li><a href="<?= base_url('/responden'); ?>">Responden</a></li>
                                                        <li><a href="<?= base_url('/akun'); ?>">Akun</a></li>
                                                        <li><a href="<?= base_url('/logout'); ?>">Keluar</a></li>
                                                    <?php endif; ?>
                                                    <?php if (!session('user')) : ?>
                                                        <li><a href="<?= base_url('/login'); ?>">Masuk</a></li>
                                                    <?php endif; ?>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mobile Menu -->
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>
        <!-- end header -->
    <?php endif; ?>

    <!-- content -->
    <main role="main" class="flex-shrink-0 bg-light">
        <?= $this->renderSection('content') ?>
    </main>
    <!-- end content -->

    <?php if (isset($main)) : ?>
        <!--  footer -->
        <footer>
            <!--? Footer Start-->
            <div class="footer-area section-bg" data-background="assets/img/gallery/footer_bg.jpg">
                <div class="container">
                    <div class="footer-top footer-padding">
                        <div class="row d-flex justify-content-between">
                            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8">
                                <div class="single-footer-caption mb-50">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="<?= base_url('/'); ?>">
                                            <h3 class="text-white">SISTEM PAKAR<span class="text-danger h2">.</span></h3>
                                        </a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p class="info1">Identifikasi Penyakit Ikan Koi Dengan Menggunakan Metode Case Based Reasoning</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Link</h4>
                                        <ul>
                                            <li><a href="<?= base_url('/') ?>">Halaman Home</a></li>
                                            <li><a href="<?= base_url('/diagnosa') ?>">Halaman Diagnosa</a></li>
                                            <li><a href="<?= base_url('/responden') ?>">Halaman Responden</a></li>
                                            <li><a href="<?= base_url('/akun') ?>">Halaman Akun</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Location</h4>
                                    </div>
                                    <!-- Form -->
                                    <div class="footer-form">
                                        <div style="width: 100%"><iframe width="100%" height="80%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=80%25&amp;hl=en&amp;q=Yogyakarta+(Lokasi)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps systems</a></iframe> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-bottom">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-xl-9 col-lg-8">
                                    <div class="footer-copy-right">
                                        <p>
                                            Copyright &copy;
                                            <script>
                                                document.write(new Date().getFullYear());
                                            </script>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End-->
        </footer>
        <!-- end footer -->
    <?php endif; ?>
    <!-- JS here -->
    <script src="<?= base_url('assets/js/modernizr-3.5.0.min.js') ?>"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?= base_url('assets/js/jquery-1.12.4.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?= base_url('assets/js/jquery.slicknav.min.js') ?>"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/slick.min.js') ?>"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/animated.headline.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.magnific-popup.js') ?>"></script>

    <!-- Nice-select, sticky -->
    <script src="<?= base_url('assets/js/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.sticky.js') ?>"></script>

    <!-- counter , waypoint -->
    <script src="<?= base_url('assets/js/jquery.counterup.min.js') ?>"></script>

    <!-- contact js -->
    <script src="<?= base_url('assets/js/contact.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.form.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.validate.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/mail-script.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.ajaxchimp.min.js') ?>"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="<?= base_url('assets/js/plugins.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
</body>

</html>