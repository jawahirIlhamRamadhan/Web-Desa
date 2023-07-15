<?php
//include '../sesi.php';
include 'koneksi.php';
include_once "assets/inc.php";
?>
<body>
         <!-- STATISTIC-->
                        <div class="row m-t-15">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1" style="box-shadow: 2px 1px 4px;">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon" style="width: 65px;">
                                                <i class="fa fa-users"></i>
                                            </div>
                                            <?php 
                                            $queryw=mysqli_query($con, "SELECT COUNT(*) AS jw FROM t_penduduk");
                                            while($rw=mysqli_fetch_array($queryw)){
                                                ?>
                                            
                                            <div class="text">
                                                <h2><?php echo format_angka($rw['jw']); }?></h2>
                                                <span>Warga</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2" style="box-shadow: 2px 1px 4px;">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fa fa-list"></i>
                                            </div>
                                            <?php 
                                            $queryjs=mysqli_query($con, "SELECT COUNT(*) AS jjs FROM t_jenissurat");
                                            while($rjs=mysqli_fetch_array($queryjs)){
                                                ?>
                                            <div class="text">
                                                <h2><?php echo format_angka($rjs['jjs']); }?></h2>
                                                <span>Jenis Surat</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3" style="box-shadow: 2px 1px 4px;">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fa fa-archive"></i>
                                            </div>
                                            <?php 
                                            $queryas=mysqli_query($con, "SELECT COUNT(*) AS jas FROM t_datasurat");
                                            while($ras=mysqli_fetch_array($queryas)){
                                                ?>
                                            <div class="text">
                                                <h2><?php echo format_angka($ras['jas']); }?></h2>
                                                <span>Arsip Surat</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4" style="box-shadow: 2px 1px 4px;">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <?php 
                                            $queryptg=mysqli_query($con, "SELECT COUNT(*) AS jptg FROM t_admin");
                                            while($rptg=mysqli_fetch_array($queryptg)){
                                                ?>
                                            <div class="text">
                                                <h2><?php echo format_angka($rptg['jptg']); }?></h2>
                                                <span>Petugas</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

            <!-- END STATISTIC-->
             <!-- STATISTIC-->
            <section class="statistic">
                <div class="section__content section__content--p10">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item" style="box-shadow: 2px 1px 4px;">
                                    <?php 
                                    $queryptgo=mysqli_query($con, "SELECT COUNT(*) AS jptgo FROM t_admin WHERE status='on'");
                                    while($rptgo=mysqli_fetch_array($queryptgo)){
                                    ?>
                                    <h2 class="number"><?php echo format_angka($rptgo['jptgo']); }?></h2>
                                    <span class="desc">Petugas Online</span>
                                    <div class="icon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item" style="box-shadow: 2px 1px 4px;">
                                    <?php 
                                    $querywo=mysqli_query($con, "SELECT COUNT(*) AS jwo FROM t_penduduk WHERE ket='on'");
                                    while($rwo=mysqli_fetch_array($querywo)){
                                    ?>
                                    <h2 class="number"><?php echo format_angka($rwo['jwo']); }?></h2>
                                    <span class="desc">Warga Online</span>
                                    <div class="icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item" style="box-shadow: 2px 1px 4px;">
                                <?php 
                                $querysm=mysqli_query($con, "SELECT COUNT(*) AS sm FROM t_buatsendiri WHERE status='acc'");
                                while($rsm=mysqli_fetch_array($querysm)){
                                ?>
                                    <h2 class="number"><?php echo format_angka($rsm['sm']); }?></h2>
                                    <span class="desc">Surat Mandiri</span>
                                    <div class="icon">
                                        <i class="fa fa-files-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item" style="box-shadow: 2px 1px 4px;">
                                    <?php 
                                $querysp=mysqli_query($con, "SELECT COUNT(*) AS sp FROM t_permohonan WHERE status='acc'");
                                while($rsp=mysqli_fetch_array($querysp)){
                                ?>
                                    <h2 class="number"><?php echo format_angka($rsp['sp']); }?></h2>
                                    <span class="desc">Permohonan</span>
                                    <div class="icon">
                                        <i class="fa fa-files-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->
    <div class="au-card recent-report"  style="box-shadow: 2px 1px 4px;">
    <!-- Left Panel -->
            <section class="welcome p-t-1s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-5">DATA SURAT 
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>


        <!-- Header-->


<!-- END MODAL SUKET UMUM --> 


                        <div class="card ">
                            <div class="card-body animated zoomIn scroll" style="overflow-x: scroll;">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Surat</th>
                                            <th>No. Surat</th>
                                            <th>Nama Surat</th>
                                            <th>Tanggal</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                        <?php 
                            $query = mysqli_query ($con, "SELECT * FROM t_jenissurat, t_datasurat WHERE t_datasurat.kodejenis=t_jenissurat.kode  AND t_datasurat.status='acc' ORDER BY t_datasurat.id DESC ");
                            $no=1;
                            while ($data = mysqli_fetch_assoc($query)){
                         ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['kode'];?></td>
                                            <td><?php echo $data['no'];?></td>
                                            <td><?php echo $data['nmsurat'];?></td>
                                            <td><?php echo $data['tanggal'];?></td>
                                            <td>
                            <a href="admin.php?page=edit_<?php echo $data['page'];?>&kode=<?php echo $data['kode'];?>" class="btn"><i class="fa fa-edit"></i></a>
                            <a href="hapus/h_detailsurat.php?kode=<?php echo $data['kode'];?>" class="btn"><i class="fa fa-trash"></i></a></td>

                                        </tr>
    
                                     <?php }?>    

                                    </tbody>
                                </table>
                            </div>      
                        </div>
 </div>
              <div class="row" >
                <div class="col-md-12" align="center">
                    <div class="card">
                                <div class="card-header">
                                <strong class="card-title">Grafik Pelayanan Surat</strong>
                            </div>
                    <div class="chart"  style="padding: 45px;">
                    <!-- Sales Chart Canvas -->
                    <?php include 'grafik.php'; ?>
                  </div>
                  <!-- /.chart-responsive -->
                    </div>
                <!-- /.col -->
                
                <!-- /.col -->
              </div>
              <!-- /.row -->
          </div>


<!-- jQuery 3 -->
<script src="assets/js/jquery.min.js"></script> <!-- untuk Pemanggilan data penduduk -->



    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>

<script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 50,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>


</body>

</html>
