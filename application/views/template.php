<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Filip Portfolio</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/satner-master/') ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/satner-master/') ?>vendors/linericon/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/satner-master/') ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/satner-master/') ?>vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/satner-master/') ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url('assets/satner-master/') ?>vendors/nice-select/css/nice-select.css">
    <!-- main css -->
    <link rel="stylesheet" href="<?= base_url('assets/satner-master/') ?>css/style.css">
</head>

<body>

    <!--================ Start Header Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="<?= base_url('home') ?>"><img src="<?= base_url('assets/satner-master/') ?>img/logof.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav justify-content-end">
                            <li class="nav-item active"><a class="nav-link" href="<?= base_url('home') ?>">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="#hobby">Hobby</a></li>
                            <li class="nav-item"><a class="nav-link" href="#portofolio">Portfolio</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lainnya</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="#riwayat">Riwayat Pendidikan</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#event">Events</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?= base_url('home/galeri') ?>">Galeri</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('home/kontak') ?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ End Header Area =================-->
    <div class="container">
        <div class="row">
            <?= $contents ?>
        </div>
    </div>
    <!--================Footer Area =================-->
    <footer class="footer_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="footer_top flex-column">
                        <div class="footer_logo">
                            <a href="">
                                <img src="<?= base_url('assets/satner-master/') ?>img/logof.png" alt="">
                            </a>
                            <h4>Follow Me</h4>
                        </div>
                        <div class="footer_social">
                            <a href="https://github.com/mydwii"><i class="fa fa-github"></i></a>
                            <a href="https://www.instagram.com/yoo.dwiio?igsh=ZTllMHpxdXlwNWtx"><i class="fa fa-instagram"></i></a>
                            <a href="https://wa.link/nlr2dk"><i class="fa fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer_bottom justify-content-center">
                <p class="col-lg-8 col-sm-12 footer-text">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/satner-master/') ?>js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url('assets/satner-master/') ?>js/popper.js"></script>
    <script src="<?= base_url('assets/satner-master/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/satner-master/') ?>js/stellar.js"></script>
    <script src="<?= base_url('assets/satner-master/') ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('assets/satner-master/') ?>vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url('assets/satner-master/') ?>vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url('assets/satner-master/') ?>vendors/isotope/isotope-min.js"></script>
    <script src="<?= base_url('assets/satner-master/') ?>vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/satner-master/') ?>js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url('assets/satner-master/') ?>js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="<?= base_url('assets/satner-master/') ?>js/gmaps.min.js"></script>
    <script src="<?= base_url('assets/satner-master/') ?>js/theme.js"></script>
</body>

</html>