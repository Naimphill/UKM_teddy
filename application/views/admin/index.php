<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title;  ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('assets/vendors/mdi/css/materialdesignicons.min.css');  ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/css/vendor.bundle.base.css');  ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')  ?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.png')  ?>" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="../../index.html"><img src="<?= base_url('assets/images/logo-ukm.svg');  ?>" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="<?= base_url('assets/images/logo-ukm-mini.svg'); ?>" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <div class="search-field d-none d-md-block">
                    <form class="d-flex align-items-center h-100" action="#">
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">

                            </div>

                        </div>
                    </form>
                </div>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="<?= base_url('assets/images/profile/') . $user['image']  ?>">
                                <span class="availability-status online"></span>
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black"><?= $user['name']; ?></p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">
                                <i class="mdi mdi-logout mr-2 text-primary"></i> LOGOUT </a>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block full-screen-link">
                        <a class="nav-link">
                            <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                        </a>
                    </li>

                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <hr class="sidebar-divider">
                            <span class="menu-title">ADMINISTRATOR</span>
                            <i class="mdi mdi-access-point menu-icon  mdi-spin"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('admin') ?>">
                            <span class="menu-title">Dashboard</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Data_admin') ?>">
                            <span class="menu-title">Data Admin</span>
                            <i class="mdi mdi-contacts menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/forms/basic_elements.html">
                            <span class="menu-title">Data UKM Amikom</span>
                            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                        </a>
                        <!-- <li class="nav-item">
                        <a class="nav-link" href="../../pages/forms/basic_elements.html">
                            <span class="menu-title">Fakultas</span>
                            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                        </a>
                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/forms/basic_elements.html">
                            <span class="menu-title">Anggota</span>
                            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth/logout') ?>">
                            <span class="menu-title">Logout</span>
                            <i class="mdi mdi-logout menu-icon"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                                <i class="mdi mdi-home"></i>
                            </span> <?= $title;  ?>
                        </h3>
                    </div>
                    <div class="row">
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-danger card-img-holder text-white">
                                <div class="card-body">
                                    <img src="<?php base_url('assets/images/dashboard/circle.svg') ?>" class="card-img-absolute" alt="<?php base_url('circle-image') ?>" />
                                    <h4 class="font-weight-normal mb-3">Total UKM <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                                    </h4>
                                    <h2 class="mb-5">lolll</h2>
                                    <h6 class="card-text">Data</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-info card-img-holder text-white">
                                <div class="card-body">
                                    <img src="<?php base_url('assets/images/dashboard/circle.svg') ?>" class="card-img-absolute" alt="<?php base_url('circle-image') ?>" />
                                    <h4 class="font-weight-normal mb-3">Total Anggota <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                                    </h4>
                                    <h2 class="mb-5">Lolll</h2>
                                    <h6 class="card-text">Data</h6>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-success card-img-holder text-white">
                                <div class="card-body">
                                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Visitors Online <i class="mdi mdi-diamond mdi-24px float-right"></i>
                                    </h4>
                                    <h2 class="mb-5">95,5741</h2>
                                    <h6 class="card-text">Increased by 5%</h6>
                                </div>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>


        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">KUNJUNGI <a href="https://kemahasiswaan.amikom.ac.id/" target="_blank">KEMAHASISWAAN <?= date('Y') ?></a>.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">SADBOY<i class="mdi mdi-heart text-danger"></i></span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
    <!-- page-body-wrapper ends -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url('assets/vendors/js/vendor.bundle.base.js');  ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url('assets/js/off-canvas.js');  ?>"></script>
    <script src="<?= base_url('assets/js/hoverable-collapse.js');  ?>"></script>
    <script src="<?= base_url('assets/js/misc.js');  ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
</body>

</html>