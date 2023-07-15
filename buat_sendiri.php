<?php
include 'sesi_warga.php';
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
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="?page=warga">
                            <img src="images/icon/logo-blc.png" alt="CoolAdmin" />
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
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-folder"></i>Umum</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li><a href='?page=suketusaha' title='Suket Usaha'>Usaha</a></li>
                        <li><a href='?page=sukettmpusaha' title='Suket Tempat Usaha'>Tempat Usaha</a></li>
                        <li><a href='?page=suketpbarang' title='Suket Pengantar Barang'>Pengantar Barang</a></li>
                        <li><a href='?page=suketpternak' title='Suket Pengantar Ternak'>Pengantar Ternak</a></li>
                        <li><a href='?page=sukettmampuv1' title='Suket Keterangan Tidak Mampu Personal'>Tdk. Mampu V1</a></li>
                        <li><a href='?page=sukettmampuv2' title='Suket Keterangan Tidak Mampu Keluarga'>Tdk. Mampu V2</a></li>
                        <li><a href='?page=suketrtm' title='Suket Keterangan Rumah Tangga Miskin'>RTM</a></li>
                        <li><a href='?page=suketpenghasilan' title='Suket Keterangan Penghasilan'>Penghasilan</a></li>
                        <li><a href='?page=suketortu' title='Suket Keterangan Orang Tua'>Orang Tua</a></li>
                        <li><a href='?page=suketanak' title='Suket Keterangan Anak'>Anak</a></li>
                        <li><a href='?page=suketmenikah' title='Suket Keterangan Menikah'>Menikah</a></li>
                        <li><a href='?page=suketkematian' title='Suket Keterangan Kematian'>Kematian</a></li>
                        <li><a href='?page=suketbepergian' title='Suket Keterangan Bepergian'>Bepergian</a></li>
                        <li><a href='?page=suketbedaid' title='Suket Keterangan Beda Identitas'>Beda Id</a></li>
                        <li><a href='?page=suketdomisililbg' title='Suket Keterangan Domilisi Lembaga'>Domisili Lembaga</a></li>
                        <li><a href='?page=suketaw' title='Suket Ahli Waris'>Ahli Waris</a></li>
                        <li><a href='?page=skkb' title='Surat Keterangan Kelakuan Baik'>SKKB</a></li>
                        <li><a href='?page=suketlain2' title='Suket Keterangan Lain2'>Lainnya</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-users"></i>Kependudukan</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li><a href='?page=suketdomisili' title='Suket Domisili'>Domisili</a></li>
                        <li><a href='?page=sutarpindah' title='Sutar Pindah'>Pengantar Pindah</a></li>
                        <li><a href='?page=suketkelahiran' title='Suket Kelahiran'>Kelahiran</a></li>
                        <li><a href='?page=suketpenguburan' title='Suket Penguburan'>Penguburan</a></li>
                        <li><a href='?page=f121' title='Suket Permohonan KTP'>Permohonan KTP</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-heart"></i>Pernikahan</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li><a href='?page=n1-n6' title='Pengantar Pernikahan'>N1-N6</a></li>
                        <li><a href='?page=pernahnikah' title='Suket Pernah Menikah'>Pernah Nikah</a></li>
                        <li><a href='?page=belumnikah' title='Suket Belum Menikah'>Belum Nikah</a></li>
                        <li><a href='?page=dudajanda' title='Suket Duda atau Janda'>Duda/Janda</a></li>
                        <li><a href='?page=pstatus' title='Pernyataan Status Perkawinan'>Status</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-map"></i>Pertanahan</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li><a href='?page=sukettanah' title='Suket Kepemilikan Tanah'>Tanah</a></li>
                        <li><a href='?page=sporadik' title='Pernyataan Penguasaan Fisik Bidang Tanah'>Sporadik</a></li>
                        <li><a href='?page=sewatanah' title='Perjanjian Sewa Tanah'>Sewa Tanah</a></li>
                        <li><a href='?page=jualbelitanah' title='Suket Jual Beli Tanah'>Jual/Beli Tanah</a></li>
                        <li><a href='?page=gadai' title='Perjanjian Jal Beli Sanda'>Jual Beli Sanda</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>Warga</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="logout_warga.php">Keluar</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href='?page=warga'>
                    <img src="images/icon/logo-blc.png" alt="Cool Admin" />
                </a>
            </div>

            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-folder"></i>Umum</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li><a href='?page=suketusaha' title='Suket Usaha'>Usaha</a></li>
                        <li><a href='?page=sukettmpusaha' title='Suket Tempat Usaha'>Tempat Usaha</a></li>
                        <li><a href='?page=suketpbarang' title='Suket Pengantar Barang'>Pengantar Barang</a></li>
                        <li><a href='?page=suketpternak' title='Suket Pengantar Ternak'>Pengantar Ternak</a></li>
                        <li><a href='?page=sukettmampuv1' title='Suket Keterangan Tidak Mampu Personal'>Tdk. Mampu V1</a></li>
                        <li><a href='?page=sukettmampuv2' title='Suket Keterangan Tidak Mampu Keluarga'>Tdk. Mampu V2</a></li>
                        <li><a href='?page=suketrtm' title='Suket Keterangan Rumah Tangga Miskin'>RTM</a></li>
                        <li><a href='?page=suketpenghasilan' title='Suket Keterangan Penghasilan'>Penghasilan</a></li>
                        <li><a href='?page=suketortu' title='Suket Keterangan Orang Tua'>Orang Tua</a></li>
                        <li><a href='?page=suketanak' title='Suket Keterangan Anak'>Anak</a></li>
                        <li><a href='?page=suketmenikah' title='Suket Keterangan Menikah'>Menikah</a></li>
                        <li><a href='?page=suketkematian' title='Suket Keterangan Kematian'>Kematian</a></li>
                        <li><a href='?page=suketbepergian' title='Suket Keterangan Bepergian'>Bepergian</a></li>
                        <li><a href='?page=suketbedaid' title='Suket Keterangan Beda Identitas'>Beda Id</a></li>
                        <li><a href='?page=suketdomisililbg' title='Suket Keterangan Domilisi Lembaga'>Domisili Lembaga</a></li>
                        <li><a href='?page=suketaw' title='Suket Ahli Waris'>Ahli Waris</a></li>
                        <li><a href='?page=skkb' title='Surat Keterangan Kelakuan Baik'>SKKB</a></li>
                        <li><a href='?page=suketlain2' title='Suket Keterangan Lain2'>Lainnya</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-users"></i>Kependudukan</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li><a href='?page=suketdomisili' title='Suket Domisili'>Domisili</a></li>
                        <li><a href='?page=sutarpindah' title='Sutar Pindah'>Pengantar Pindah</a></li>
                        <li><a href='?page=suketkelahiran' title='Suket Kelahiran'>Kelahiran</a></li>
                        <li><a href='?page=suketpenguburan' title='Suket Penguburan'>Penguburan</a></li>
                        <li><a href='?page=f121' title='Suket Permohonan KTP'>Permohonan KTP</a></li>
                            </ul>
                        </li>
                       <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-heart"></i>Pernikahan</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li><a href='?page=n1-n6' title='Pengantar Pernikahan'>N1-N6</a></li>
                        <li><a href='?page=pernahnikah' title='Suket Pernah Menikah'>Pernah Nikah</a></li>
                        <li><a href='?page=belumnikah' title='Suket Belum Menikah'>Belum Nikah</a></li>
                        <li><a href='?page=dudajanda' title='Suket Duda atau Janda'>Duda/Janda</a></li>
                        <li><a href='?page=pstatus' title='Pernyataan Status Perkawinan'>Status</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-map"></i>Pertanahan</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li><a href='?page=sukettanah' title='Suket Kepemilikan Tanah'>Tanah</a></li>
                        <li><a href='?page=sporadik' title='Pernyataan Penguasaan Fisik Bidang Tanah'>Sporadik</a></li>
                        <li><a href='?page=sewatanah' title='Perjanjian Sewa Tanah'>Sewa Tanah</a></li>
                        <li><a href='?page=jualbelitanah' title='Suket Jual Beli Tanah'>Jual/Beli Tanah</a></li>
                        <li><a href='?page=gadai' title='Perjanjian Jal Beli Sanda'>Jual Beli Sanda</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>Warga</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="logout_warga.php">Keluar</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <?php 
                            $nik=$_SESSION['nik'];
                            $query = mysqli_query ($con, "SELECT count(*) AS jp, t_permohonan.* FROM t_permohonan WHERE nik='$nik'");
                            while ($r = mysqli_fetch_array($query)){
                            ?>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="fa fa-files-o"></i>
                                        <span class="quantity"><?php echo $r['jp'];?></span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p><?php echo $r['jp'];?> permohonan surat dalam proses</p>
                                            </div><?php } ?>
                                            <?php 
                            $queryy = mysqli_query ($con, "SELECT * FROM t_permohonan WHERE nik='$nik' ORDER BY id ASC limit 4");
                            while ($rr = mysqli_fetch_array($queryy)){
                            ?>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="fotowarga/<?php echo $rr['foto'];?>" alt="nopic" />
                                                </div>
                                                <div class="content">
                                                    <p><a href="?page=tunggu_permohonan&amp;nik=<?php echo $rr['nik'];?>"><?php echo $rr['nama'];?></a> <small><span class="date pull pull-right"><?php echo $rr['tgl'];?></span></small>
                                                    <br><?php echo $rr['nmsurat'];?></p>
                                                    
                                                </div>
                                            </div><?php } ?>
                                            
                                            <div class="mess__footer">
                                                <a href="https://api.whatsapp.com/send?phone=6281219168380" target="_blank">Chat Adm/Staff</a>
                                            </div>
                                        </div>
                                    </div>
                             <?php 
                             $nik=$_SESSION['nik'];
                            $queryb = mysqli_query ($con, "SELECT count(*) AS jb FROM t_buatsendiri WHERE nik='$nik'");
                            while ($ry = mysqli_fetch_array($queryb)){
                            ?>
                                    <div class="noti__item js-item-menu">
                                        <i class="fa fa-files-o"></i>
                                        <span class="quantity"><?php echo $ry['jb'];?></span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>Ada <?php echo $ry['jb'];?> Surat yg dibuat sendiri</p>
                                            </div><?php } ?>
                                             <?php
                             $nik=$_SESSION['nik'];                 
                            $queryx = mysqli_query ($con, "SELECT * FROM t_buatsendiri WHERE nik='$nik'");
                            while ($rx = mysqli_fetch_array($queryx)){
                            ?>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p><a href="?page=tunggu&amp;kode=<?php echo $rx['kode_surat'];?>"><?php echo $rx['nama'];?></a> <span class="date pull pull-right"><?php echo $rx['tgl'];?></span><br><?php echo $rx['nmsurat'];?></p>
                                                    
                                                </div>
                                            </div><?php } ?>

                                            <div class="notifi__footer">
                                                <a href="https://api.whatsapp.com/send?phone=6281219168380" target="_blank">Chat Adm/Staff</a>
                                            </div>
                                        </div>
                                    </div>
                             <?php 
                            $nik=$_SESSION['nik'];
                            $queryw = mysqli_query ($con, "SELECT * FROM t_penduduk WHERE nik='$nik'");
                            while ($rp = mysqli_fetch_array($queryw)){
                            ?>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="fotowarga/<?php echo $rp['foto'];?>" alt="" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $rp['nama'];?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="fotowarga/<?php echo $rp['foto'];?>" alt="" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $rp['nama'];?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $rp['nik'];?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="?page=data_warga&amp;nik=<?php echo $rp['nik'];?>">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                            </div><?php } ?>
                                            <div class="account-dropdown__footer">
                                                <a href="logout_warga.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                            <div class="col-lg-12">
                                

                                        <?php 
                                        include 'load_file_warga.php';
                                        ?>

                                
                            </div>                   

                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2023 <b>Jawahir Ilham Ramadhan</b>. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <!-- <script src="vendor/jquery-3.2.1.min.js"></script>--><!-- Tabrakan dengan Jquery panggil data penduduk-->
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


    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</body>

</html>
<!-- end document-->
