<?php
//include '../sesi.php';
include 'koneksi.php';
include_once "assets/inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>E-Surat Desa Bitung</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="index.php">
                            <img src="images/icon/logo-blc2.png" alt="E-Surdes" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li>
                                <a href="index.php">
                                    <i class="fas fa-home"></i>
                                    <span class="bot-line"></span>HOME</a>
                            </li>
                            <li>
                                <a href="tentang.php">
                                    <i class="fas fa-book"></i>
                                    <span class="bot-line"></span>TENTANG</a>
                            </li>
                            <li>
                                <a href="struktur_organisasi.php">
                                    <i class="fas fa-book"></i>
                                    <span class="bot-line"></span>STRUKTUR ORGANISASI</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item--style2">
                                 <div class="content">
                                    <a class="js-acc-btn" href="login.php">Login Admin</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/icon/logo-W.png" alt="E-Surdes" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                                <a href="index.php">
                                    <i class="fas fa-home"></i>
                                    <span class="bot-line"></span>HOME</a>
                            </li>
                        <li>
                                <a href="tentang.php">
                                    <i class="fas fa-book"></i>
                                    <span class="bot-line"></span>TENTANG</a>
                            </li>
                        <li>
                                <a href="struktur_organisasi.php">
                                    <i class="fas fa-book"></i>
                                    <span class="bot-line"></span>STRUKTUR ORGANISASI</a>
                        </li>    
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item--style2">
                         <div class="content">
                                    <a class="js-acc-btn" href="login.php">Login Admin</a>
                                </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->

            <!-- BREADCRUMB-->

    <section class="p-t-100 p-b-160" style="background: url(assets/pattern/purty_wood.png) repeat;">
    <div class="text-center">
    <img src="images/icon/SK.png" width="1000" height="100">
    <br> <!-- Tambahkan baris baru di sini -->
    <div style="margin-top: 30px;">
        <img src="images/icon/SB.png" width="1000" height="100">
    </div>
</div>
            <!-- END BREADCRUMB-->

            <!-- COPYRIGHT-->
            <section class="p-t-20 p-b-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2023 <b> Jawahir Ilham Ramadhan </b>. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>


    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
<script src="assets/js/jquery.min.js"></script> <!-- untuk Pemanggilan data penduduk -->

 <script type="text/javascript">
            function isinik(){
                var nik = $("#nik").val();
                $.ajax({
                    url: 'data/panggildatawarga.php',
                    data:"nik="+nik ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#nama').val(obj.nama);
                    $('#jk').val(obj.jk);
                    $('#tmp_lahir').val(obj.tmp_lahir);
                    $('#tgl_lahir').val(obj.tgl_lahir);
                    $('#kwng').val(obj.kwng);
                    $('#agama').val(obj.agama);
                    $('#pkjn').val(obj.kerjaan);
                    $('#status').val(obj.status);
                    $('#pend').val(obj.pend);
                    $('#kerjaan').val(obj.kerjaan);
                    $('#rt').val(obj.rt);
                    $('#dusun').val(obj.dusun);
                });
            }
        </script>
                <script type="text/javascript">
            function isiredaksi(){
                var nmsurat = $("#nmsurat").val();
                $.ajax({
                    url: 'data/panggiljenissurat.php',
                    data:"nmsurat="+nmsurat ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#kode').val(obj.kode);
                    $('#page').val(obj.page);
                    $('#rdtengah').val(obj.rdtengah);
                    $('#rdakhir').val(obj.rdakhir);
                });
            }
        </script>
</body>

</html>
<!-- end document-->
