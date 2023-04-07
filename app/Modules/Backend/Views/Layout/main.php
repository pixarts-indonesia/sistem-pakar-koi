<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title><?= $title ?></title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon.png'); ?>">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/libs/chartist/dist/chartist.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css'); ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/dist/css/style.min.css'); ?>" rel="stylesheet">
    <script src="<?= base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <?php if (isset($main)) : ?>
            <header class="topbar" data-navbarbg="skin6">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <div class="navbar-header" data-logobg="skin6">
                        <a class="navbar-brand" href="<?= base_url('/admin'); ?>">
                            <b class="logo-icon">
                                <img src="<?= base_url('assets/images/logo-icon.png'); ?>" alt="homepage" class="dark-logo" />
                                <img src="<?= base_url('assets/images/logo-light-icon.png'); ?>" alt="homepage" class="light-logo" />
                            </b>
                            <span class="logo-text">
                                <h1 alt="homepage" class="dark-logo">Admin</h1>
                                <h1 class="light-logo" alt="homepage">Admin</h1>
                            </span>
                        </a>
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                                class="mdi mdi-menu"></i></a>
                    </div>
                    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                        <ul class="navbar-nav float-start me-auto">
                        </ul>
                        <ul class="navbar-nav float-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="<?= base_url('assets/images/logo-icon.png'); ?>" alt="user" class="rounded-circle" width="31">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                    <!-- <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>
                                        My Profile</a> -->
                                    <a class="dropdown-item" href="<?= base_url('admin/logout') ?>"><i class="mdi mdi-logout m-r-5 m-l-5"></i>
                                        Logout</a>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class="left-sidebar" data-sidebarbg="skin6">
                <div class="scroll-sidebar">
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="<?= base_url('/admin') ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                        class="hide-menu">Dashboard</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="<?= base_url('/admin/user') ?>" aria-expanded="false"><i
                                        class="mdi mdi-account-network"></i><span class="hide-menu">User</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="<?= base_url('/admin/penyakit') ?>" aria-expanded="false"><i class="mdi mdi-dna"></i><span
                                        class="hide-menu">Penyakit</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="<?= base_url('/admin/gejala') ?>" aria-expanded="false"><i class="mdi mdi-dns"></i><span
                                        class="hide-menu">Gejala</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="<?= base_url('/admin/rules') ?>" aria-expanded="false"><i class="mdi mdi-file-document"></i><span
                                        class="hide-menu">Rules</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="<?= base_url('/admin/histori') ?>" aria-expanded="false"><i class="mdi mdi-history"></i><span
                                        class="hide-menu">Histori</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="<?= base_url('/admin/responden') ?>" aria-expanded="false"><i class="mdi mdi-file-document-box"></i><span
                                        class="hide-menu">Responden</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="<?= base_url('/admin/hasil-responden') ?>" aria-expanded="false"><i class="mdi mdi-file-document-box"></i><span
                                        class="hide-menu">Hasil Responden</span></a></li>
                        </ul>

                    </nav>
                </div>
            </aside>
        <?php endif; ?>
        <div class="<?= (isset($main)) ? 'page-wrapper' : '' ?>">
            <?php if (session()->getFlashData('error')) : ?>
                <?= view_cell('\App\Libraries\Widget::error'); ?>
            <?php endif; ?>
            <?php if (session()->getFlashData('info')) : ?>
                <?= view_cell('\App\Libraries\Widget::info'); ?>
            <?php endif; ?>
            <?php if (session()->getFlashData('success')) : ?>
                <?= view_cell('\App\Libraries\Widget::success'); ?>
            <?php endif; ?>
            <?= $this->renderSection('content') ?>
            <?php if (isset($main)) : ?>
                <footer class="footer text-center">
                    <p>© <?= date('Y'); ?> All Rights Reserved.</p>
                </footer>
            <?php endif; ?>
        </div>
    </div>
    <script src="<?= base_url('assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/dist/js/app-style-switcher.js'); ?>"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('assets/dist/js/waves.js'); ?>"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url('assets/dist/js/sidebarmenu.js'); ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url('assets/dist/js/custom.js'); ?>"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="<?= base_url('assets/libs/chartist/dist/chartist.min.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js'); ?>"></script>
    <script src="<?= base_url('assets/dist/js/pages/dashboards/dashboard1.js'); ?>"></script>
</body>

</html>