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
                            <h4>New here?</h4>
                            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                            <form class="pt-3" method="post" action="<?= base_url('auth/register') ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Nama Lengkap" value="<?= set_value('name') ?>">
                                    <?= form_error('name', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
                                    <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class=" form-group">
                                    <input type="password" class="form-control form-control-lg" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="password2" name="password2" placeholder="Ulangi Password">
                                </div>
                                <div class="mb-4">
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" type="submit">REGISTER</button>
                                </div>
                                <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="<?= base_url('auth') ?>" class="text-primary">Login</a>
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