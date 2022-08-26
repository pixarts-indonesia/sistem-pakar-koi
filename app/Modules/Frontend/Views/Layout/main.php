<?php
use Config\Services;
$request = (new Services)::request();
$uri = $request->uri->getSegment(1);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <title><?= $title; ?></title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- bootstrap css -->
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
        <!-- style css -->
        <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css'); ?>">
        <!-- Responsive-->
        <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css'); ?>">
        <!-- fevicon -->
        <link rel="icon" href="<?= base_url('assets/images/fevicon.png'); ?>" type="image/gif" />
        <!-- Icons -->
        <link rel="stylesheet" href="<?= base_url('assets/css/icomoon.css'); ?>">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/css/jquery.mCustomScrollbar.min.css'); ?>">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
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
                <!-- header inner -->
                <div class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                                <div class="full">
                                    <div class="center-desk">
                                        <div class="logo">
                                            <h1 class="text-white">Sistem Pakar</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                                <nav class="navigation navbar navbar-expand-md navbar-dark ">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarsExample04">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item <?= (!$uri) ? 'active' : ''; ?> ">
                                                <a class="nav-link" href="<?= base_url('/'); ?>">Home</a>
                                            </li>
                                            <?php if (session('user')) : ?>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?= base_url('/diagnosa'); ?>">Diagnosa</a>
                                                </li>
                                                <li class="nav-item <?= ($uri === 'responden') ? 'active' : ''; ?>">
                                                    <a class="nav-link" href="<?= base_url('/responden'); ?>">Responden</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?= base_url('/akun'); ?>">Akun</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?= base_url('/logout'); ?>">Keluar</a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (!session('user')) : ?>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?= base_url('/login'); ?>">Masuk</a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end header inner -->
            </header>
            <!-- end header -->
        <?php endif; ?>

        <!-- content -->
        <main role="main" class="flex-shrink-0">
            <?= $this->renderSection('content') ?>
        </main>
        <!-- end content -->
    
        <?php if (isset($main)) : ?>
            <!--  footer -->
            <footer>
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <h1 class="text-white text-lg-left h2">Sistem Pakar</h1>
                                <ul class="about_us">
                                    <li>
                                        Muja muju UH II,<br>
                                        Umbulharjo,<br>
                                        Daerah Istemewa Yogyakarta
                                    </li>
                                </ul>
                                <ul class="social_icon">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <h3>Link</h3>
                                <ul class="link_menu">
                                    <li><a href="#">Halaman Home</a></li>
                                    <li><a href="#">Halaman Riwayat</a></li>
                                    <li><a href="#">Halaman Masukan</a></li>
                                    <li><a href="#">Halaman Akun</a></li>
                                    <li><a href="#">Halaman Login</a></li>
                                </ul>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <h3>Services</h3>
                                <ul class="link_menu">
                                    <li><a href="#">Diagnosa Sekarang</a></li>
                                </ul>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <h3>Maps</h3>
                                <iframe
                                    frameborder="0"
                                    scrolling="no"
                                    marginheight="0"
                                    marginwidth="0"
                                    height="80%"
                                    src="https://www.openstreetmap.org/export/embed.html?bbox=110.30616760253908%2C-7.860320943290676%2C110.43766021728517%2C-7.756918621788646&amp;layer=mapnik"
                                ></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="copyright">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <p>© <?= date('Y'); ?> All Rights Reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end footer -->
        <?php endif; ?>
        <!-- Javascript files-->
        <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/main.js'); ?>"></script>
        <!-- sidebar -->
        <script src="<?= base_url('assets/js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/custom.js'); ?>"></script>
   </body>
</html>