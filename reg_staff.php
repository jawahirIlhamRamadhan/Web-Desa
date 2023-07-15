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
                                    <a class="js-acc-btn" href="#"></a>
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
                            <img src="images/icon/logo-blc2.png" alt="E-Surdes" />
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
                            <a class="js-acc-btn" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
            <!-- BREADCRUMB-->
 <div class="page-content--bgf7">
            <section class="au-breadcrumb2" style="padding: 40px 0px;background: url(assets/pattern/dark_brick_wall.png) repeat;">
        <div class="col-lg-12 text-center">
            <h1 style="color: white; padding: 20px;text-shadow: -2px 2px rgb(110,112,145);">LAYANAN SURAT DESA ONLINE</h1>
            <h3 style="color: white; padding: 20px; text-align: center;text-shadow: -2px 2px rgb(110,112,145);">Lengkapi form dibawah</h3>
        </div>
        <hr>
    <div class="container">
                <div class="wrap" align="center">
                    <div class="content" style="color: white; padding: 20px; box-shadow: 2px 1px 4px; width: 70%;">
                        <div class="login-form">
                             <div class="card-body card-block"> 
                                    <form action="act/s_register_depan.php"  method="POST" enctype="multipart/form-data" class="form-horizontal">
                                      <div class="row form-group">
                                        <div class="col col-md-3"><label for="uname" class=" form-control-label">Username</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="uname" name="uname" placeholder="Username" class="form-control"></div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email" class=" form-control-label">E-mail</label></div>
                                        <div class="col-12 col-md-6"><input type="email" id="email" name="email" placeholder="E-mail" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="hp" class=" form-control-label">HP</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="hp" name="hp" placeholder="No. Hp." class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desa" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="desa" name="desa" placeholder="Desa/Kelurahan" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="pass" class=" form-control-label">Password</label></div>
                                        <div class="col-12 col-md-6"><input type="password" id="pass" name="pass" placeholder="Password" class="form-control"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="level" class=" form-control-label">Level</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="level" id="level" class="form-control">
                                                <option value="">--Pilih Level --</option>
                                                <option value="admin">admin</option>
                                                <option value="staff">staff</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="foto" class=" form-control-label">Foto</label></div>
                                        <div class="col-12 col-md-6"><input type="file" id="foto" name="foto" onchange="return fileValidation()" class="form-control"><small class="form-text text-muted">Ukuran : 3x4 cm, Max 500 KB</small>
                                        </div>
                                        
                                    </div>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><button type="reset" class="btn btn-primary btn-sm pull pull-left">Reset</button></div>
                                        <div class="col col-md-6"><button type="submit" name="reg" id="reg" class="btn btn-primary btn-sm pull pull-right">Simpan</button></div>
                                        
                                    </div>
                            </div>

     
                        </form>

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
<!-- jQuery 3 -->
<script src="assets/js/jquery.min.js"></script> <!-- untuk Pemanggilan data penduduk -->
<script type="text/javascript">
         function fileValidation() {
             var fileInput = document.getElementById('foto');         
             var filePath = fileInput.value;
             // Allowing file type
             var allowedExtensions =/(\.jpg|\.jpeg)$/i;
             if (!allowedExtensions.exec(filePath)) {
                 alert('Extensi file harus jpg/jpeg');
                 fileInput.value = '';
                 return false;
             }
             if(fileInput.files[0].size > 500000){ // ini untuk ukuran 800KB, 1000000 untuk 1 MB.
       alert("Maaf. Foto Terlalu Besar ! Maksimal Upload 500 KB");
       fileInput.value = "";
       return false;
    }
         }
     </script> 
<script type="text/javascript">
  function validasi(form) {  
    if (form.nkk.value=="") {
      alert('NKK / Nomor Kartu Keluarga  harus di isi !');
      form.nkk.focus();
      return false;
    }else if(form.nik.value=="") {
      alert('NIK / Nomor Induk Kependudukan harus di isi !');
      form.nik.focus();
      return false;
    }else if(form.nama.value=="") {
      alert('Nama harus di isi !');
      form.nama.focus();
      return false;
    }else if(form.jk.value=="") {
      alert('Jenis Kelamin harus di dipilih !');
      form.jk.focus();
      return false;
    }else if(form.tmp_lahir.value=="") {
      alert('Tempat Lahir harus di isi !');
      form.tmp_lahir.focus();
      return false;
    }else if(form.tgl_lahir.value=="") {
      alert('Tanggal Lahir harus di isi !');
      form.tgl_lahir.focus();
      return false;
    }else if(form.agama.value=="") {
      alert('Agama harus di pilih !');
      form.agama.focus();
      return false;
    }else if(form.status.value=="") {
      alert('Status harus di pilih !');
      form.status.focus();
      return false;
    }else if(form.pend.value=="") {
      alert('Pendidikan harus di pilih !');
      form.pend.focus();
      return false;
    }else if(form.kerjaan.value=="") {
      alert('Pekerjaan harus di isi !');
      form.kerjaan.focus();
      return false;
    }else if(form.almt.value=="") {
      alert('Alamat Rt./Rw. harus di isi !');
      form.almt.focus();
      return false;
    }else if(form.dusun.value=="") {
      alert('Dusun harus di isi !');
      form.dusun.focus();
      return false;
    }

  }
</script>
</body>

</html>
<!-- end document-->
