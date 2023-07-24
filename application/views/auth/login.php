<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-5 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img src="<?= base_url('assets/images/logo.svg') ?>">
                            </div>
                            <h4>LOGIN</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>

                            <?= $this->session->flashdata('message');  ?>

                            <form class="pt-3" method="post" action="<?= base_url('auth') ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                    <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                                    <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" type="submit">Login</button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                    </div>
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div>
                                <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="<?= base_url('auth/register') ?>" class="text-primary">Create</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>