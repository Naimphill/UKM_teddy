<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <title>UKM Amikom</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/fe/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url('assets/fe/assets/css/fontawesome.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fe/assets/css/templatemo-seo-dream.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fe/assets/css/animated.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fe/assets/css/owl.css') ?>">
    <!--

TemplateMo 563 SEO Dream

https://templatemo.com/tm-563-seo-dream

-->
    <style>
        .dess {
            /* width: 200px; */
            /* Sesuaikan lebar sesuai kebutuhan */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown " data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="<?php echo site_url('Dashboard') ?>" class="logo">
                            <h4>UKM Amikom<img sty src="<?php echo base_url('assets/images/logo-ukm-mini.svg'); ?>" alt=""></h4>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Dashboard</a></li>
                            <li class="scroll-to-section"><a href="#features">Kegiatan UKM</a></li>

                            <li class="scroll-to-section"><a href="#portfolio">Portfolio</a></li>
                            <li class="scroll-to-section"><a href="#contact">Contact Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>UKM Amikom</h2>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="main-green-button scroll-to-section">
                                            <a href="#features">Lihat Kegiatan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="<?php echo base_url('assets/fe/assets/images/banner-right-image.png') ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="features" class="features section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="features-content">
                        <div class="row">
                            <?php $no = 1;
                            foreach ($kegiatan as $key) {
                                $idk = $key->id_kegiatan;
                                foreach ($rencana as $val) {
                                    $idr = $val->id_rencana;
                                    if ($key->id_rencana == $idr) { ?>
                                        <div class="col-lg-4">
                                            <div class="features-item second-feature last-features-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                                                <div class="fourth-number number">
                                                    <h6>
                                                        <?php echo $no++; ?>
                                                    </h6>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h4>
                                                            <?php echo $val->judul; ?>
                                                        </h4>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h4>
                                                            <?php foreach ($ukm as $dkm) {
                                                                if ($val->id_ukm == $dkm->id_ukm) {
                                                                    echo $dkm->nm_ukm;
                                                                }
                                                            } ?>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="line-dec"></div>
                                                <p class="dess">
                                                    <?php echo $val->deskripsi; ?>
                                                </p>
                                                <div class="line-dec"></div>
                                                <h6 class="mb-0 pb-0"><b>
                                                        <?php echo $val->tempat . ' | ' . $val->waktu; ?>
                                                    </b>
                                                </h6>
                                            </div>
                                        </div>

                            <?php }
                                }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="portfolio" class="our-portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6>Galery</h6>
                        <h2>Temukan Pengalaman <em>Kamu</em> dan <span>Tunjukan Pada Kami</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
            <div class="row">
                <div class="col-lg-12">
                    <div class="loop owl-carousel">
                        <div class="item">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="<?php echo base_url('assets/fe/assets/images/Amikom-01.jpg') ?>" alt="">
                                    <div class="hover-content">
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4>Awesome Project 101</h4>
                                            </a>
                                            <span>Marketing</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="<?php echo base_url('assets/fe/assets/images/Amikom-04.jpg') ?>" alt="">
                                    <div class="hover-content">
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4>Awesome Project 102</h4>
                                            </a>
                                            <span>Branding</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="<?php echo base_url('assets/fe/assets/images/Amikom-02.jpg') ?>" alt="">
                                    <div class="hover-content">
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4>Awesome Project 103</h4>
                                            </a>
                                            <span>Consulting</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="<?php echo base_url('assets/fe/assets/images/Amikom-05.jpg') ?>" alt="">
                                    <div class="hover-content">
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4>Awesome Project 104</h4>
                                            </a>
                                            <span>Artwork</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="<?php echo base_url('assets/fe/assets/images/Amikom-03.jpg') ?>" alt="">
                                    <div class="hover-content">
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4>Awesome Project 105</h4>
                                            </a>
                                            <span>Branding</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="<?php echo base_url('assets/fe/assets/images/Amikom-06.jpg') ?>" alt="">
                                    <div class="hover-content">
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4>Awesome Project 106</h4>
                                            </a>
                                            <span>Artwork</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="<?php echo base_url('assets/fe/assets/images/Amikom-04.jpg') ?>" alt="">
                                    <div class="hover-content">
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4>Awesome Project 107</h4>
                                            </a>
                                            <span>Creative</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="<?php echo base_url('assets/fe/assets/images/Amikom-01.jpg') ?>" alt="">
                                    <div class="hover-content">
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4>Awesome Project 108</h4>
                                            </a>
                                            <span>Consulting</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <div class="section-heading">
                                    <h6>Contact Us</h6>
                                    <h2>Fill Out The Form Below To <span>Get</span> In <em>Touch</em> With Us</h2>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="main-button">Send Message
                                                Now</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="contact-info">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <img src="<?php echo base_url('assets/fe/assets/images/contact-icon-01.png') ?>" alt="email icon">
                                            </div>
                                            <a href="#">info@company.com</a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="<?php echo base_url('assets/fe/assets/images/contact-icon-02.png') ?>" alt="phone">
                                            </div>
                                            <a href="#">+001-002-0034</a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="<?php echo base_url('assets/fe/assets/images/contact-icon-03.png') ?>" alt="location">
                                            </div>
                                            <a href="#">26th Street, Digital Villa</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Sistem Informasi | Amikom Yogyakarta.

                        <br><a rel="nofollow" href="https://kemahasiswaan.amikom.ac.id/" title="free CSS templates">Kemahasiswaan</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="<?php echo base_url('assets/fe/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/fe/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/fe/assets/js/owl-carousel.js') ?>"></script>
    <script src="<?php echo base_url('assets/fe/assets/js/animation.js') ?>"></script>
    <script src="<?php echo base_url('assets/fe/assets/js/imagesloaded.js') ?>"></script>
    <script src="<?php echo base_url('assets/fe/assets/js/custom.js') ?>"></script>

</body>

</html>