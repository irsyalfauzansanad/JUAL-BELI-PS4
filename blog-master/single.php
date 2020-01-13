    <!-- head -->
    <?php
    include('layouts/includes/head.php');
    include('config/koneksi.php');
    $user = new Database();
    ?>
    <!-- End Head -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Egames - Gaming Magazine Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
	<link rel="stylesheet" href="style.css">
	
	        <link rel="stylesheet" href="/XIRPL2/blog-master/assets/egames/css/animate.css.css">
			<link rel="stylesheet" href="/XIRPL2/blog-master/assets/egames/css/bootstrap.min.css">
			<link rel="stylesheet" href="/XIRPL2/blog-master/assets/egames/css/classy-nav.css">
			<link rel="stylesheet" href="/XIRPL2/blog-master/assets/egames/css/font-awesome.min.css">
			<link rel="stylesheet" href="/XIRPL2/blog-master/assets/egames/css/magnific-popup.css">	
			<link rel="stylesheet" href="/XIRPL2/blog-master/assets/egames/css/nice-select.css">							
			<link rel="stylesheet" href="/XIRPL2/blog-master/assets/egames/css/owl.carousel.min.css">
			<link rel="stylesheet" href="/XIRPL2/blog-master/assets/egames/scss/_fonts.scss">
			<link rel="stylesheet" href="/XIRPL2/blog-master/assets/egames/scss/_mixin.scss">
			<link rel="stylesheet" href="/XIRPL2/blog-master/assets/egames/scss/_responsive.scss">
			<link rel="stylesheet" href="/XIRPL2/blog-master/assets/egames/scss/_theme_color.scss">
			<link rel="stylesheet" href="/XIRPL2/blog-master/assets/egames/scss/_variables.scss">
			<link rel="stylesheet" href="/XIRPL2/blog-master/assets/egames/scss/style.scss">
			<link rel="stylesheet" href="/XIRPL2/blog-master/assets/egames/style.css">
			<link rel="stylesheet" href="/XIRPL2/blog-master/assets/egames/style.css.map">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area wow fadeInDown" data-wow-delay="500ms">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="index.html"><img src="/XIRPL2/blog-master/assets/egames/img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Search & Login Area -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="egames-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="egamesNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="game-review.html">Games</a>
                                    </li>
                                    <li><a href="#">Pages</a>
                                    </li>
                                    <li><a href="post.html">Articles</a>
                                    </li>
                                    <li><a href="single-game-review.html">Reviews</a>
                                        <ul class="dropdown">
                                            <li><a href="game-review.html">Game Review</a></li>
                                            <li><a href="single-game-review.html">Single Game Review</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Top Social Info -->
                        <div class="top-social-info">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->

    <!-- ##### Hero Area End ##### -->

    <!-- ##### Games Area Start ##### -->

    <!-- ##### Games Area End ##### -->

    <!-- ##### Monthly Picks Area Start ##### -->
    <?php
    $artikel = new Artikel();
    foreach ($artikel->show($_GET['id']) as $data) {
        $id = $data['id'];
        $judul = $data['judul'];
        $konten = $data['konten'];
        $foto = $data['foto'];
        $tgl = $data['tgl'];
        $kategori = $data['nama_kategori'];
        $penulis = $data['nama_penulis'];
    }
    // var_dump($artikel);                                    
    ?>


    <footer class="footer-area">
        <div class="copywrite-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-sm-12">
                        <!-- Copywrite Text -->
                        <h2 align="center" style="color: white"><label class="cui-date"><?php echo $judul ?></label>
                        </h2>
                    </div>
                    <div class="col-12 col-sm-7">
                        <!-- Footer Nav -->

                    </div>
                </div>
            </div>
        </div>
    </footer>    
                        <!-- Header -->

                        <!-- End Header -->



    <div class="card-body">

        <p align="right"> <i class="icons cui-note"></i> Dibuat : <?php echo date('d F Y', strtotime($data['tgl'])) ?></p>

    </div>
    <div class="single-articles-area style-2 d-flex flex-wrap mb-30 wow fadeInUp" data-wow-delay="300ms">
        <div class="article-thumbnail">
            <img class="img-fluid" src="/XIRPL2/blog-master/admin/artikel/img/<?php echo $data['foto'] ?>" alt="" style="height:500px;">
        </div>
        <div class="article-content">
            <div class="post-meta">
            </div>
            <h4><?php echo $data['konten']?></h4>
            <p class="cui-date">Kategori : <?php echo $kategori ?></p>
        </div>
    </div>
 
    <footer class="footer-area">
        </section>
        <div class="copywrite-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-sm-5">
                        <!-- Copywrite Text -->
                        <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> | KELOMPOK 6
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                    <div class="col-12 col-sm-7">
                        <!-- Footer Nav -->

                    </div>
                </div>
            </div>
        </div>
    </footer>       
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->

    <!-- jQuery-2.2.4 js -->
    <script src="/XIRPL2/blog-master/assets/egames/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/XIRPL2/blog-master/assets/egames/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/XIRPL2/blog-master/assets/egames/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="/XIRPL2/blog-master/assets/egames/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="/XIRPL2/blog-master/assets/egames/js/active.js"></script>
</body>

</html>
