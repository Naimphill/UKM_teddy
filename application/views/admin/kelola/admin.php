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
                        <a class="nav-link" href="<?php base_url('') ?>">
                            <span class="menu-title">Dashboard</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php base_url('admin/kelola/admin') ?>">
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
                    <div class="col-lg-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h4 class="card-title">Table with contextual classes</h4> -->
                                <li>
                                    <a href="<?php echo site_url(''); ?>" class="btn btn-primary">Tambah (+)</a>
                                </li>
                                </p>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th> No </th>
                                            <th> Foto </th>
                                            <th> Nama </th>
                                            <th> Email </th>
                                            <th> Password </th>
                                            <th> Aksi </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-info">
                                            <td> 1 </td>
                                            <td> Herman Beck </td>
                                            <td> Photoshop </td>
                                            <td> $ 77.99 </td>
                                            <td> May 15, 2015 </td>
                                            <td> - </td>
                                        </tr>
                                        <tr class="table-warning">
                                            <td> 2 </td>
                                            <td> Messsy Adam </td>
                                            <td> Flash </td>
                                            <td> $245.30 </td>
                                            <td> July 1, 2015 </td>
                                            <td> - </td>
                                        </tr>
                                        <tr class="table-danger">
                                            <td> 3 </td>
                                            <td> John Richards </td>
                                            <td> Premeire </td>
                                            <td> $138.00 </td>
                                            <td> Apr 12, 2015 </td>
                                            <td> - </td>
                                        </tr>
                                        <tr class="table-success">
                                            <td> 4 </td>
                                            <td> Peter Meggik </td>
                                            <td> After effects </td>
                                            <td> $ 77.99 </td>
                                            <td> May 15, 2015 </td>
                                            <td> - </td>
                                        </tr>
                                        <tr class="table-primary">
                                            <td> 5 </td>
                                            <td> Edward </td>
                                            <td> Illustrator </td>
                                            <td> $ 160.25 </td>
                                            <td> May 03, 2015 </td>
                                            <td> - </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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