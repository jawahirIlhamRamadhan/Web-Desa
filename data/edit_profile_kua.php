<!doctype html>
<?php 
include '../sesi.php';
include '../koneksi.php';
?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ABS||Aplikasi Buat Surat||</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="../assets/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../vendors/chosen/chosen.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <?php include "../navigasi.php"; ?>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>
          <?php 
            $use=$_SESSION['uname'];
            $fo=mysqli_query($con, "SELECT id, foto FROM t_admin WHERE uname='$use'");
            while($f=mysqli_fetch_array($fo)){
                ?>
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../foto/<?php echo $f['foto'];  ?> " class="user-avatar rounded-circle" style="border: 1px solid white;">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="../petugas.php?id=<?php echo $f['id'];?>"><i class="fa fa-user"></i> My Profile</a>
                            <a class="nav-link" href="../logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                </div>
            <?php } ?>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Data</a></li>
                            <li><a href="#">Profile</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">DATA KANTOR URUSAN AGAMA</strong>
                            </div>

                            <div class="card-body">
                            <?php
                                $query = mysqli_query($con, "SELECT * FROM t_kua");
                                while ($data = mysqli_fetch_array($query)){
                                ?>

                             <form action="../update/u_kua.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-body card-block col-md-6">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nm" class=" form-control-label">Nama Kepala KUA</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nm" name="nm" value="<?php echo $data['nm_kepala'];?>" class="form-control"><input type="hidden" id="id" name="id" value="<?php echo $data['id'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nip" class=" form-control-label">NIP</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nip" name="nip" value="<?php echo $data['nip_kepala'];?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="pang" class=" form-control-label">Pangkat & Jabatan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="pang" name="pang" value="<?php echo $data['pangjab_kepala'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="almt" class=" form-control-label">Alamat Kantor</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almt" name="almt" value="<?php echo $data['almt_kantor'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desa" class=" form-control-label">Kecamatan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kec" name="kec" value="<?php echo $data['kec'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kab" class=" form-control-label">Kabupaten</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kab" name="kab" value="<?php echo $data['kab'];?>" class="form-control"></div>
                                    </div>
                                        <div class="row form-group">
                                        <div class="col col-md-3"><label for="kab" class=" form-control-label">Provinsi</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="prov" name="prov" value="<?php echo $data['prov'];?>" class="form-control"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="telp" class=" form-control-label">Telp</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="telp" name="telp" value="<?php echo $data['telp'];?>" class="form-control"></div>
                                    </div>
                                </div>
                               
                                   
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email" class=" form-control-label">E-mail Desa</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="email" name="email" value="<?php echo $data['email'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="logo" class=" form-control-label">Logo</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="logo" name="logo" class="form-control">
                                            <input type="hidden" id="x" name="x" value="<?php echo $data['logo'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"></div>
                                        <div class="col-12 col-md-3"></div><div class="col-12 col-md-3"><img src="../images/<?php echo $data['logo'];?>" class="user-avatar rounded-circle" style="border: 1px solid white; width: 80px; height: 80px;"></div><div class="col-12 col-md-3"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                    <div class="row form-group">
                                        <div class="col col-md-6"><a href="profile_kua.php" type="button" class="btn btn-primary btn-lg btn-block">Kembali</a></div>
                                        <div class="col col-md-6"><button type="submit" name="update" id="update" class="btn btn-primary btn-lg btn-block">Update</button></div>
                                    </div>
                            </div>
                        </div> </form><?php }?>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

    </div><!-- /#right-panel -->

    <!-- Right Panel -->



    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="../vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>


    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="../assets/js/init-scripts/data-table/datatables-init.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>

<script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>



</body>

</html>
