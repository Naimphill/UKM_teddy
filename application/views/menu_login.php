<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LOGIN</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/mdi/css/materialdesignicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/css/vendor.bundle.base.css'); ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo-ukm.svg'); ?>" />
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="<?php echo base_url('assets/allert/package/dist/sweetalert2.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/allert/package/dist/sweetalert2.min.css'); ?>">
    <!-- end seet allert -->
    <style>
        .img-container {
            display: inline-block;
            /* atau block, tergantung pada konteks */
            transition: transform 0.3s;
            /* Efek transisi saat scaling */
        }

        .img-container:hover {
            transform: scale(1.2);
            /* Skala gambar 20% lebih besar saat hover */
        }
    </style>
</head>

<body>
    <?php if ($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="col-md-12">
                    <center>
                        <img style="max-width: 25%; height: auto;"
                            src="<?php echo base_url('assets/images/logo-ukm.svg'); ?>" alt="">
                    </center>
                    <h3 class="text-center">Pengajuan Laporan Kegiatan</h3><br>
                    <p class="text-center">Login Sebagai</p><br>

                    <div class="row">
                        <div class="col-md-3">
                            <center>
                                <div class="card">
                                    <a href="<?php echo site_url('UKM') ?>">
                                        <div class="img-container">
                                            <img style="max-width: 100%; height: auto;"
                                                src="<?php echo base_url('assets/images/login_ukm.png') ?>" alt="Ukm">
                                        </div>
                                    </a>
                                    <h1>UKM</h1>
                                </div>
                            </center>
                        </div>
                        <div class="col-md-3">
                            <center>
                                <div class="card">
                                    <a href="<?php echo site_url('Adminpanel') ?>">
                                        <div class="img-container">
                                            <img style="max-width: 100%; height: auto;"
                                                src="<?php echo base_url('assets/images/login_diret.png') ?>"
                                                alt="Admin">
                                        </div>
                                    </a>
                                    <h1>Kemahasiswaan</h1>
                                    <!-- <p>(Kemahasiswaan, Direktur, Warek)</p> -->

                                </div>
                            </center>
                        </div>
                        <div class="col-md-3">
                            <center>
                                <div class="card">
                                    <a href="<?php echo site_url('Adminpanel') ?>">
                                        <div class="img-container">
                                            <img style="max-width: 100%; height: auto;"
                                                src="<?php echo base_url('assets/images/login_km.png') ?>" alt="Admin">
                                        </div>
                                    </a>
                                    <h1>Direktur<br></h1>
                                    <!-- <p>(Kemahasiswaan, Direktur, Warek)</p> -->

                                </div>
                            </center>
                        </div>
                        <div class="col-md-3">
                            <center>
                                <div class="card">
                                    <a href="<?php echo site_url('Adminpanel') ?>">
                                        <div class="img-container">
                                            <img style="max-width: 100%; height: auto;"
                                                src="<?php echo base_url('assets/images/login_warek.png') ?>"
                                                alt="Admin">
                                        </div>
                                    </a>
                                    <h1>Warek<br></h1>
                                    <!-- <p>(Kemahasiswaan, Direktur, Warek)</p> -->

                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url('assets/vendors/js/vendor.bundle.base.js') ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url('assets/js/off-canvas.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/hoverable-collapse.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/misc.js') ?>"></script>
    <!-- endinject -->
    <!-- Sweet Alert Script -->
    <script src="<?php echo base_url('assets/allert/package/dist/sweetalert2.all.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/allert/package/dist/myalert.js'); ?>"></script>
    <script>
        const flashData = $('.flash-data').data('flashdata');
        if (flashData) {
            Swal.fire({
                title: 'Login Gagal',
                text: '' + flashData,
                icon: 'error'
            });
        }
    </script>
    <!-- End sweet allert -->
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var passwordVisibilityIcon = document.querySelector("#password + .input-group-append .btn i");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordVisibilityIcon.classList.remove("mdi-eye-off");
                passwordVisibilityIcon.classList.add("mdi-eye");
            } else {
                passwordInput.type = "password";
                passwordVisibilityIcon.classList.remove("mdi-eye");
                passwordVisibilityIcon.classList.add("mdi-eye-off");
            }
        }
    </script>
</body>

</html>