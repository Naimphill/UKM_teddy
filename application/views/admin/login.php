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
</head>

<body>
    <?php if ($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <div>
                                    <center><img src="<?php echo base_url('assets/images/logo-ukm.svg'); ?>"> </center>
                                </div>
                            </div>
                            <h4>LOGIN</h4>
                            <form class="pt-3" method="post" action="<?php echo site_url('Login/aksi_login'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1"
                                        name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="Enter your password" required="">
                                        <div class="input-group-append">
                                            <button class="btn btn-sm btn-light" type="button"
                                                onclick="togglePasswordVisibility()" id="button-addon2">
                                                <i class="mdi mdi-eye-off" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- <input type="password" class="form-control form-control-lg" id="password"
                                        name="password" placeholder="Password"> -->
                                </div>
                                <div class="mt-3">
                                    <button
                                        class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn "
                                        type="submit">Login</button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                            </form>
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