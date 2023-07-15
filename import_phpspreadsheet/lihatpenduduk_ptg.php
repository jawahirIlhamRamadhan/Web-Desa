<?php
include '../sesi.php';
include '../koneksi.php';
// Load file autoload.php
require 'vendor/autoload.php';
// Include librari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
?>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>E-Surdes</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">
    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                            <img src="../images/icon/logo-blc.png" alt="Coolstaff" />
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
                        <a class="js-arrow" href="#"><i class="fas fa-laptop"></i>Tata Usaha</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li><a href='../staff.php?page=undangan' title='Surat Undangan'>Undangan</a></li>
                        <li><a href='../staff.php?page=pengantar' title='Surat Pengantar'>Pengantar</a></li>
                        <li><a href='../staff.php?page=pemberitahuan' title='Surat Pemberitahuan'>Pemberitahuan</a></li>
                        <li><a href='../staff.php?page=himbauan' title='Surat Himbauan'>Himbauan</a></li>
                        <li><a href='../staff.php?page=pdinas' title='Surat Perjalanan Dinas'>Perjalanan Dinas</a></li>
                        <li><a href='../staff.php?page=jawaban' title='Surat Jawaban'>Jawaban</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-folder"></i>Umum</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li><a href='../staff.php?page=suketusaha' title='Suket Usaha'>Usaha</a></li>
                        <li><a href='../staff.php?page=sukettmpusaha' title='Suket Tempat Usaha'>Tempat Usaha</a></li>
                        <li><a href='../staff.php?page=suketpbarang' title='Suket Pengantar Barang'>Pengantar Barang</a></li>
                        <li><a href='../staff.php?page=suketpternak' title='Suket Pengantar Ternak'>Pengantar Ternak</a></li>
                        <li><a href='../staff.php?page=sukettmampuv1' title='Suket Keterangan Tidak Mampu Personal'>Tdk. Mampu V1</a></li>
                        <li><a href='../staff.php?page=sukettmampuv2' title='Suket Keterangan Tidak Mampu Keluarga'>Tdk. Mampu V2</a></li>
                        <li><a href='../staff.php?page=suketrtm' title='Suket Keterangan Rumah Tangga Miskin'>RTM</a></li>
                        <li><a href='../staff.php?page=suketpenghasilan' title='Suket Keterangan Penghasilan'>Penghasilan</a></li>
                        <li><a href='../staff.php?page=suketortu' title='Suket Keterangan Orang Tua'>Orang Tua</a></li>
                        <li><a href='../staff.php?page=suketanak' title='Suket Keterangan Anak'>Anak</a></li>
                        <li><a href='../staff.php?page=suketmenikah' title='Suket Keterangan Menikah'>Menikah</a></li>
                        <li><a href='../staff.php?page=suketkematian' title='Suket Keterangan Kematian'>Kematian</a></li>
                        <li><a href='../staff.php?page=suketbepergian' title='Suket Keterangan Bepergian'>Bepergian</a></li>
                        <li><a href='../staff.php?page=suketbedaid' title='Suket Keterangan Beda Identitas'>Beda Id</a></li>
                        <li><a href='../staff.php?page=suketdomisililbg' title='Suket Keterangan Domilisi Lembaga'>Domisili Lembaga</a></li>
                        <li><a href='../staff.php?page=suketaw' title='Suket Ahli Waris'>Ahli Waris</a></li>
                        <li><a href='../staff.php?page=skkb' title='Surat Keterangan Kelakuan Baik'>SKKB</a></li>
                        <li><a href='../staff.php?page=suketlain2' title='Suket Keterangan Lain2'>Lainnya</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-users"></i>Kependudukan</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li><a href='../staff.php?page=suketdomisili' title='Suket Domisili'>Domisili</a></li>
                        <li><a href='../staff.php?page=sutarpindah' title='Sutar Pindah'>Pengantar Pindah</a></li>
                        <li><a href='../staff.php?page=suketkelahiran' title='Suket Kelahiran'>Kelahiran</a></li>
                        <li><a href='../staff.php?page=suketpenguburan' title='Suket Penguburan'>Penguburan</a></li>
                        <li><a href='../staff.php?page=f121' title='Suket Permohonan KTP'>Permohonan KTP</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-heart"></i>Pernikahan</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li><a href='../staff.php?page=n1-n6' title='Pengantar Pernikahan'>N1-N6</a></li>
                        <li><a href='../staff.php?page=pernahnikah' title='Suket Pernah Menikah'>Pernah Nikah</a></li>
                        <li><a href='../staff.php?page=belumnikah' title='Suket Belum Menikah'>Belum Nikah</a></li>
                        <li><a href='../staff.php?page=dudajanda' title='Suket Duda atau Janda'>Duda/Janda</a></li>
                        <li><a href='../staff.php?page=pstatus' title='Pernyataan Status Perkawinan'>Status</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-map"></i>Pertanahan</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li><a href='../staff.php?page=sukettanah' title='Suket Kepemilikan Tanah'>Tanah</a></li>
                        <li><a href='../staff.php?page=sporadik' title='Pernyataan Penguasaan Fisik Bidang Tanah'>Sporadik</a></li>
                        <li><a href='../staff.php?page=sewatanah' title='Perjanjian Sewa Tanah'>Sewa Tanah</a></li>
                        <li><a href='../staff.php?page=jualbelitanah' title='Suket Jual Beli Tanah'>Jual/Beli Tanah</a></li>
                        <li><a href='../staff.php?page=gadai' title='Perjanjian Jal Beli Sanda'>Jual Beli Sanda</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-list"></i>Data</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li><a href='../staff.php?page=penduduk' title='Data Penduduk'>Penduduk</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>Staff</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="../logout.php">Keluar</a>
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
                <a href='?page=staff'>
                    <img src="../images/icon/logo-blc.png" alt="Cool staff" />
                </a>
            </div>

            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                        <a class="js-arrow" href="#"><i class="fas fa-laptop"></i>Tata Usaha</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li><a href='../staff.php?page=undangan' title='Surat Undangan'>Undangan</a></li>
                        <li><a href='../staff.php?page=pengantar' title='Surat Pengantar'>Pengantar</a></li>
                        <li><a href='../staff.php?page=pemberitahuan' title='Surat Pemberitahuan'>Pemberitahuan</a></li>
                        <li><a href='../staff.php?page=himbauan' title='Surat Himbauan'>Himbauan</a></li>
                        <li><a href='../staff.php?page=pdinas' title='Surat Perjalanan Dinas'>Perjalanan Dinas</a></li>
                        <li><a href='../staff.php?page=jawaban' title='Surat Jawaban'>Jawaban</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-folder"></i>Umum</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li><a href='../staff.php?page=suketusaha' title='Suket Usaha'>Usaha</a></li>
                        <li><a href='../staff.php?page=sukettmpusaha' title='Suket Tempat Usaha'>Tempat Usaha</a></li>
                        <li><a href='../staff.php?page=suketpbarang' title='Suket Pengantar Barang'>Pengantar Barang</a></li>
                        <li><a href='../staff.php?page=suketpternak' title='Suket Pengantar Ternak'>Pengantar Ternak</a></li>
                        <li><a href='../staff.php?page=sukettmampuv1' title='Suket Keterangan Tidak Mampu Personal'>Tdk. Mampu V1</a></li>
                        <li><a href='../staff.php?page=sukettmampuv2' title='Suket Keterangan Tidak Mampu Keluarga'>Tdk. Mampu V2</a></li>
                        <li><a href='../staff.php?page=suketrtm' title='Suket Keterangan Rumah Tangga Miskin'>RTM</a></li>
                        <li><a href='../staff.php?page=suketpenghasilan' title='Suket Keterangan Penghasilan'>Penghasilan</a></li>
                        <li><a href='../staff.php?page=suketortu' title='Suket Keterangan Orang Tua'>Orang Tua</a></li>
                        <li><a href='../staff.php?page=suketanak' title='Suket Keterangan Anak'>Anak</a></li>
                        <li><a href='../staff.php?page=suketmenikah' title='Suket Keterangan Menikah'>Menikah</a></li>
                        <li><a href='../staff.php?page=suketkematian' title='Suket Keterangan Kematian'>Kematian</a></li>
                        <li><a href='../staff.php?page=suketbepergian' title='Suket Keterangan Bepergian'>Bepergian</a></li>
                        <li><a href='../staff.php?page=suketbedaid' title='Suket Keterangan Beda Identitas'>Beda Id</a></li>
                        <li><a href='../staff.php?page=suketdomisililbg' title='Suket Keterangan Domilisi Lembaga'>Domisili Lembaga</a></li>
                        <li><a href='../staff.php?page=suketaw' title='Suket Ahli Waris'>Ahli Waris</a></li>
                        <li><a href='../staff.php?page=skkb' title='Surat Keterangan Kelakuan Baik'>SKKB</a></li>
                        <li><a href='../staff.php?page=suketlain2' title='Suket Keterangan Lain2'>Lainnya</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-users"></i>Kependudukan</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li><a href='../staff.php?page=suketdomisili' title='Suket Domisili'>Domisili</a></li>
                        <li><a href='../staff.php?page=sutarpindah' title='Sutar Pindah'>Pengantar Pindah</a></li>
                        <li><a href='../staff.php?page=suketkelahiran' title='Suket Kelahiran'>Kelahiran</a></li>
                        <li><a href='../staff.php?page=suketpenguburan' title='Suket Penguburan'>Penguburan</a></li>
                        <li><a href='../staff.php?page=f121' title='Suket Permohonan KTP'>Permohonan KTP</a></li>
                            </ul>
                        </li>
                       <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-heart"></i>Pernikahan</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li><a href='../staff.php?page=n1-n6' title='Pengantar Pernikahan'>N1-N6</a></li>
                        <li><a href='../staff.php?page=pernahnikah' title='Suket Pernah Menikah'>Pernah Nikah</a></li>
                        <li><a href='../staff.php?page=belumnikah' title='Suket Belum Menikah'>Belum Nikah</a></li>
                        <li><a href='../staff.php?page=dudajanda' title='Suket Duda atau Janda'>Duda/Janda</a></li>
                        <li><a href='../staff.php?page=pstatus' title='Pernyataan Status Perkawinan'>Status</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-map"></i>Pertanahan</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li><a href='../staff.php?page=sukettanah' title='Suket Kepemilikan Tanah'>Tanah</a></li>
                        <li><a href='../staff.php?page=sporadik' title='Pernyataan Penguasaan Fisik Bidang Tanah'>Sporadik</a></li>
                        <li><a href='../staff.php?page=sewatanah' title='Perjanjian Sewa Tanah'>Sewa Tanah</a></li>
                        <li><a href='../staff.php?page=jualbelitanah' title='Suket Jual Beli Tanah'>Jual/Beli Tanah</a></li>
                        <li><a href='../staff.php?page=gadai' title='Perjanjian Jal Beli Sanda'>Jual Beli Sanda</a></li>
                            </ul>
                        </li>
                         <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-list"></i>Data</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li><a href='../staff.php?page=penduduk' title='Data Penduduk'>Penduduk</a></li>
                             </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>Staff</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="../logout.php">Keluar</a>
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
                            $query = mysqli_query ($con, "SELECT count(*) AS jp FROM t_permohonan WHERE status='onprocess' ORDER BY id ASC");
                            while ($r = mysqli_fetch_array($query)){
                            ?>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity"><?php echo $r['jp'];?></span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>Ada <?php echo $r['jp'];?> permohonan surat</p>
                                            </div><?php } ?>
                            <?php 
                            $queryy = mysqli_query ($con, "SELECT * FROM t_permohonan WHERE status='onprocess' ORDER BY id ASC limit 4");
                            while ($rr = mysqli_fetch_array($queryy)){
                            ?>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="../fotowarga/<?php echo $rr['foto'];?>" alt="nopic" />
                                                </div>
                                                <div class="content">
                                                    <p><a href="?page=<?php echo $rr['page'];?>"><?php echo $rr['nama'];?></a> <small><span class="date pull pull-right"><?php echo $rr['tgl'];?></span></small>
                                                    <br><?php echo $rr['nmsurat'];?></p>
                                                    
                                                </div>
                                            </div><?php } ?>
                                            
                                            <div class="mess__footer">
                                                <a href="?page=process_permohonan_all">Lihat semua permohonan</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                            $queryb = mysqli_query ($con, "SELECT count(*) AS jb FROM t_buatsendiri WHERE status='onprocess' ORDER BY id ASC");
                            while ($ry = mysqli_fetch_array($queryb)){
                            ?>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity"><?php echo $ry['jb'];?></span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>Ada <?php echo $ry['jb'];?> Surat yg dibuat sendiri</p>
                                            </div><?php } ?>
                                             <?php 
                            $queryx = mysqli_query ($con, "SELECT * FROM t_buatsendiri WHERE status='onprocess' ORDER BY id ASC limit 4");
                            while ($rx = mysqli_fetch_array($queryx)){
                            ?>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p><a href="?page=acc&amp;id=<?php echo $rx['id'];?>"><?php echo $rx['nama'];?></a> <span class="date pull pull-right"><?php echo $rx['tgl'];?></span><br><?php echo $rx['nmsurat'];?></p>
                                                    
                                                </div>
                                            </div><?php } ?>

                                            <div class="notifi__footer">
                                                <a href="?page=buat_sendiri_all">Semua surat dibuat Warga</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                            $adm=$_SESSION['uname'];
                            $queryadm = mysqli_query ($con, "SELECT * FROM t_admin WHERE uname='$adm'");
                            while ($radm = mysqli_fetch_array($queryadm)){
                            ?>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../foto/<?php echo $radm['foto'];?>" alt="nopic" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $radm['uname'];?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../foto/<?php echo $radm['foto'];?>" alt="nopic" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $radm['uname'];?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $radm['email'];?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="?page=adm&amp;uname=<?php echo $radm['uname'];?>">
                                                        <i class="zmdi zmdi-account"></i>Akun</a>
                                                </div>
                                            </div><?php } ?>
                                            <div class="account-dropdown__footer">
                                                <a href="../logout.php">
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
                                <div class="au-card recent-report">
                <section class="welcome p-t-1s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-5">LIHAT DATA PENDUDUK YANG AKAN DI IMPORT
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
    <?php
    // Jika user telah mengklik tombol Preview
    if (isset($_POST['preview'])) {
        $tgl_sekarang = date('YmdHis'); // Ini akan mengambil waktu sekarang dengan format yyyymmddHHiiss
        $nama_file_baru = 'data' . $tgl_sekarang . '.xls';

        // Cek apakah terdapat file data.xls pada folder tmp
        if (is_file('tmp/' . $nama_file_baru)) // Jika file tersebut ada
            unlink('tmp/' . $nama_file_baru); // Hapus file tersebut

        $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // Ambil ekstensi filenya apa
        $tmp_file = $_FILES['file']['tmp_name'];

        // Cek apakah file yang diupload adalah file Excel (.xls)
        if ($ext == "xls") {
            // Upload file yang dipilih ke folder tmp
            // dan rename file tersebut menjadi data{tglsekarang}.xls
            // {tglsekarang} diganti jadi tanggal sekarang dengan format yyyymmddHHiiss
            // Contoh nama file setelah di rename : data20210814192500.xls
            move_uploaded_file($tmp_file, 'tmp/' . $nama_file_baru);

            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
            $spreadsheet = $reader->load('tmp/' . $nama_file_baru); // Load file yang tadi diupload ke folder tmp
            $sheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

            // Buat sebuah tag form untuk proses import data ke database
            echo "<form method='post' action='import_ptg.php'>";

            // Disini kita buat input type hidden yg isinya adalah nama file excel yg diupload
            // ini tujuannya agar ketika import, kita memilih file yang tepat (sesuai yg diupload)
            echo "<input type='hidden' name='namafile' value='" . $nama_file_baru . "'>";



            echo "<div class='table-responsive'>
                                <table class='table table-bordered' id='dataTable' width='100%'' cellspacing='0'>

                    <tr>
                        <th>Nkk</th>
                        <th>Nik</th>
                        <th>Nama</th>
                        <th>Jk</th>
                        <th>Tmp. Lahir</th>
                        <th>Tgl. Lahir</th>
                        <th>Warga negara</th>
                        <th>Agama</th>
                        <th>Status</th>
                        <th>Pend</th>
                        <th>Kerjaan</th>
                        <th>Alamat</th>
                        <th>Desa</th>
                        <th>Kec</th>
                        <th>Kab</th>
                        <th>Prov</th>
                        <th>HP</th>
                        <th>SHDK</th>
                        <th>Foto</th>
                    </tr>";

            $numrow = 1;
            $kosong = 0;
            foreach ($sheet as $row) { // Lakukan perulangan dari data yang ada di excel
                // Ambil data pada excel sesuai Kolom
                $nkk = $row['A']; // Ambil data nkk
                $nik = $row['B']; // Ambil data nik
                $nama = $row['C']; // Ambil data nama
                $jk = $row['D']; // Ambil data jk
                $tmp_lahir = $row['E']; // Ambil data tmp lahir
                $tgl_lahir = $row['F']; // Ambil data tgl lahir
                $kwng = $row['G']; // Ambil data kwng
                $agama = $row['H']; // Ambil data agama
                $status = $row['I']; // Ambil data status
                $pend = $row['J']; // Ambil data alamat
                $kerjaan = $row['K']; // Ambil data kerjaan
                $alamat = $row['L']; // Ambil data alamat
                $desa = $row['M']; // Ambil data desa
                $kec = $row['N']; // Ambil data kec
                $kab = $row['O']; // Ambil data kab
                $prov = $row['P']; // Ambil data prov
                $hp = $row['Q']; // Ambil data hp
                $shdk = $row['R']; // Ambil data shdk
                $foto = $row['S']; // Ambil data foto
                $ket = $row['T']; // Ambil data ket

                // Cek jika semua data tidak diisi
                if ($nkk != "" && $nik != "" && $nama != "" && $jk != "" && $tmp_lahir != "" && $tgl_lahir != "" 
    && $kwng != "" && $agama != "" && $status != "" && $pend != "" && $kerjaan != "" && $alamat != "" && $desa != "" && $kec != ""&& $kab != ""&& $prov != "" && $hp != "" && $shdk != "" && $foto != "" && $ket != "")
                    continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

                // Cek $numrow apakah lebih dari 1
                // Artinya karena baris pertama adalah nama-nama kolom
                // Jadi dilewat saja, tidak usah diimport
                if ($numrow = 1) {
                    // Validasi apakah semua data telah diisi
                    $nkk_td = (!empty($nkk)) ? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
                    $nik_td = (!empty($nik)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $nama_td = (!empty($nama)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $jk_td = (!empty($jk)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $tmp_lahir_td = (!empty($tmp_lahir)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $tgl_lahir_td = (!empty($tgl_lahir)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $kwng_td = (!empty($kwng)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $agama_td = (!empty($agama)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $status_td = (!empty($status)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $pend_td = (!empty($pend)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $kerjaan_td = (!empty($kerjaan)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $alamat_td = (!empty($alamat)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $desa_td = (!empty($desa)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $kec_td = (!empty($kec)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $kab_td = (!empty($kab)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $prov_td = (!empty($prov)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $hp_td = (!empty($hp)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $shdk_td = (!empty($shdk)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $foto_td = (!empty($foto)) ? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
                   


                    // Jika salah satu data ada yang kosong
                    if ($nkk == "" or $nik == "" or $nama == "" or $jk == "" or $tmp_lahir == "" or $tgl_lahir == ""  or $kwng == "" or $agama == "" or $status == "" or $pend == "" or $kerjaan == "" or $alamat == "" or $desa == ""or $kec == ""or $kab == ""or $prov == "" or $hp == ""  or $shdk == "" or $foto == "" ) {
                        $kosong++; // Tambah 1 variabel $kosong
                    }

                    echo "<tr>";
                    echo "<td" . $nkk_td . ">" . $nkk . "</td>";
                    echo "<td" . $nik_td . ">" . $nik . "</td>";
                    echo "<td" . $nama_td . ">" . $nama . "</td>";
                    echo "<td" . $jk_td . ">" . $jk . "</td>";
                    echo "<td" . $tmp_lahir_td . ">" . $tmp_lahir . "</td>";
                    echo "<td" . $tgl_lahir_td . ">" . $tgl_lahir . "</td>";
                    echo "<td" . $kwng_td . ">" . $kwng . "</td>";
                    echo "<td" . $agama_td . ">" . $agama . "</td>";
                    echo "<td" . $status_td . ">" . $status . "</td>";
                    echo "<td" . $pend_td . ">" . $pend . "</td>";
                    echo "<td" . $kerjaan_td . ">" . $kerjaan . "</td>";
                    echo "<td" . $alamat_td . ">" . $alamat . "</td>";
                    echo "<td" . $desa_td . ">" . $desa . "</td>";
                    echo "<td" . $kec_td . ">" . $kec . "</td>";
                    echo "<td" . $kab_td . ">" . $kab . "</td>";
                    echo "<td" . $prov_td . ">" . $prov . "</td>";
                    echo "<td" . $hp_td . ">" . $hp . "</td>";
                    echo "<td" . $shdk_td . ">" . $shdk . "</td>";
                    echo "<td" . $foto_td . ">" . $foto . "</td>";

                    echo "</tr>";
                }

                $numrow++; // Tambah 1 setiap kali looping
            }

            echo "</table></div>";
            // Buat sebuah div untuk alert validasi kosong
            echo "<div id='kosong' style='color: red;margin-bottom: 10px;'>
                    Ada <span id='jumlah_kosong'></span> data yang belum diisi.
                </div>";
            // Cek apakah variabel kosong lebih dari 0
            // Jika lebih dari 0, berarti ada data yang masih kosong
            if ($kosong > 0) {
    ?>
                <script>
                    $(document).ready(function() {
                        // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
                        $("#jumlah_kosong").html('<?php echo $kosong; ?>');

                        $("#kosong").show(); // Munculkan alert validasi kosong
                    });
                </script>
    <?php
            } else { // Jika semua data sudah diisi
                echo "<hr>";

                // Buat sebuah tombol untuk mengimport data ke database
                echo "<button type='submit' name='import' class='btn btn-primary'>Import Data</button>";
            }

            echo "</form>";
        } else { // Jika file yang diupload bukan File Excel 2007 (.xlsx)
            // Munculkan pesan validasi
            echo "<div style='color: red;margin-bottom: 10px;'>
                    Hanya File Excel (.xls) yang diperbolehkan
                </div>";
        }
    }
    ?>		

                                </div>
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
<!-- jQuery 3 -->
<script src="../assets/js/jquery.min.js"></script> <!-- untuk Pemanggilan data penduduk -->

    <!-- Jquery JS-->
    <!-- <script src="vendor/jquery-3.2.1.min.js"></script>--><!-- Tabrakan dengan Jquery panggil data penduduk-->
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>


    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>
</body>
