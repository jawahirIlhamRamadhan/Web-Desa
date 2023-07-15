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
            <section class="au-breadcrumb2" style="padding: 40px 0px;background: url(assets/pattern/purty_wood.png) repeat;">
        <div class="col-lg-12 text-center">
            <h1 style="color: white; padding: 20px;text-shadow: -2px 2px rgb(110,112,145);">LAYANAN SURAT DESA ONLINE</h1>
            <h3 style="color: white; padding: 20px; text-align: center;text-shadow: -2px 2px rgb(110,112,145);">Lengkapi form dibawah</h3>
        </div>
        <hr>
    <div class="container;">
                <div class="wrap" align="center">
                    <div class="content" style="padding: 20px; box-shadow: 2px 1px 4px; width: 70%;">
                        <div class="login-form" style="background: url(assets/pattern/dark_brick_wall.png)">
                            <div class="modal-body">
                                <form action="s_penduduk.php" method="post" name="form" id="form" onSubmit="return validasi(this)" enctype="multipart/form-data" class="form-horizontal">
                            
                                    <div class="row form-group">
                                        <div style="font-weight: bold; color: white;" class="col col-md-4"><label for="nkk" class="form-control-label">No. KK</label></div>
                                        <div class="col-12 col-md-7"><input type="text" id="nkk" name="nkk" maxlength="16" class="form-control" placeholder="Nomor Kartu Keluarga" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div style="font-weight: bold; color: white;" class="col col-md-4"><label for="nik" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-7"><input type="text" id="nik" name="nik" maxlength="16" class="form-control" placeholder="Nomor Induk Kependudukan" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div style="font-weight: bold; color: white;" class="col col-md-4"><label for="nama" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-8"><input type="text" id="nama" name="nama" placeholder="Nama lengkap"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div style="font-weight: bold; color: white;" class="col col-md-4"><label for="jk" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-6">
                                            <select name="jk" id="jk" class="form-control">
                                                <option value="" selected="selected">Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div style="font-weight: bold; color: white;" class="col col-md-4"><label for="tmp_lahir" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="tmp_lahir" name="tmp_lahir" placeholder="Tempat Lahir" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div style="font-weight: bold; color: white;" class="col col-md-4"><label for="tgl_lahir" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-4"><input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div style="font-weight: bold; color: white;" class="col col-md-4"><label for="kwng" class=" form-control-label">Kewarganegaraan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kwng" name="kwng" placeholder="Kewarganegaraan" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div style="font-weight: bold; color: white;" class="col col-md-4"><label for="agama" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-6">
                                            <select name="agama" id="agama"  class="form-control">
                                                <option value="" selected="selected">Agama</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Katholik">Katholik</option>
                                                <option value="Protestan">Protestan</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div style="font-weight: bold; color: white;" class="col col-md-4"><label for="status" class=" form-control-label">Status Perkawinan</label></div>
                                        <div class="col-12 col-md-6">
                                            <select name="status" id="status" class="form-control">
                                                <option value="" selected="selected">Status Perkawinan</option>
                                                <option value="Kawin">Kawin</option>
                                                <option value="Belum Kawin">Belum Kawin</option>
                                                <option value="Cerai Hidup">Cerai Hidup</option>
                                                <option value="Cerai Mati">Cerai Mati</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div style="font-weight: bold; color: white;" class="col col-md-4"><label for="pend" class=" form-control-label">Pendidikan</label></div>
                                        <div class="col-12 col-md-6">
                                            <select name="pend" id="pend"  class="form-control">
                                                <option value="" selected="selected">Pendidikan</option>
                                                <option value="SD">SD</option>
                                                <option value="SLTP">SLTP</option>
                                                <option value="SLTA">SLTA</option>
                                                <option value="D1">D1</option>
                                                <option value="D2">D2</option>
                                                <option value="D3">D3</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                                <option value="T/B. Sekolah">T/B. Sekolah</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div style="font-weight: bold; color: white;" class="col col-md-4"><label for="kerjaan" class=" form-control-label">Pekerjaan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kerjaan" name="kerjaan"  placeholder="Pekerjaan" class="form-control"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div style="font-weight: bold; color: white;" class="col col-md-4"><label for="prov" class=" form-control-label">Provinsi</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="prov" name="prov"  placeholder="Provinsi" class="form-control"><small style="font-weight: bold; color: white;" class="form-text text-muted">Contoh : Banten</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div style="font-weight: bold; color: white;" class="col col-md-4"><label for="kab" class=" form-control-label">Kabupaten/Kota</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kab" name="kab"  placeholder="Kabupaten/Kota" class="form-control"><small style="font-weight: bold; color: white;" class="form-text text-muted">Contoh : Tangerang</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div style="font-weight: bold; color: white;" class="col col-md-4"><label for="kec" class=" form-control-label">Kecamatan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kec" name="kec"  placeholder="Kecamatan" class="form-control"><small style="font-weight: bold; color: white;" class="form-text text-muted">Contoh : Cikupa</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div style="font-weight: bold; color: white;" class="col col-md-4"><label for="desa" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="desa" name="desa"  placeholder="Desa" class="form-control"><small style="font-weight: bold; color: white;" class="form-text text-muted">Contoh : Bitung Jaya</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div style="font-weight: bold; color: white;" class="col col-md-4"><label for="almt" class=" form-control-label">Alamat/Rt./Rw.</label></div>
                                        <div class="col-12 col-md-8"><input type="text" id="almt" name="almt"  placeholder="Alamat" class="form-control"><small style="font-weight: bold; color: white;" class="form-text text-muted">Contoh : Kp. Pulo, RT/RW.011/005</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div style="font-weight: bold; color: white;" class="col col-md-4"><label for="hp" class=" form-control-label">No. HP</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="hp" name="hp"  placeholder="No. HP" class="form-control"><small style="font-weight: bold; color: white;" class="form-text text-muted">Contoh : 081219168380</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div style="font-weight: bold; color: white;" class="col col-md-4"><label for="shdk" class=" form-control-label">SHDK</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="shdk" id="shdk"  class="form-control">
                                                <option value="" selected="selected">SHDK</option>
                                                <option value="Kepala keluarga">Kepala keluarga</option>
                                                <option value="Suami">Suami</option>
                                                <option value="Istri">Istri</option>
                                                <option value="Anak">Anak</option>
                                                <option value="Ayah">Ayah</option>
                                                <option value="Ibu">Ibu</option>
                                                <option value="Famili lain">Famili lain</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div style="font-weight: bold; color: white;" class="col col-md-4"><label for="file" class=" form-control-label">Foto</label></div>
                                        <div class="col-12 col-md-8"><input type="file" id="file" name="file" id="file" placeholder="Pas photo" onchange="return fileValidation()" class="form-control"><small style="font-weight: bold; color: white;" class="form-text text-muted">Ukuran : 3x4 cm, Max 500 KB</small></div>
                                    </div>

                                    <div class="row form-group">
                                        <div style="font-weight: bold; color: white;" class="col col-md-4"><label for="ket" class=" form-control-label">Keterangan</label></div>
                                        <div class="col-12 col-md-8"><input type="text" id="ket" name="ket"  placeholder="Keterangan tambahan" class="form-control"></div>
                                    </div>
<hr>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><button type="reset" class="btn btn-primary btn-lg pull pull-left">Reset</button></div>
                                        <div class="col col-md-6"><button type="submit" name="simpan" in="simpan" class="btn btn-primary btn-lg pull pull-right">Simpan</button></div>
                                        
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
             var fileInput = document.getElementById('file');         
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
