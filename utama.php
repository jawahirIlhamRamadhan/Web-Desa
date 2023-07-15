<?php
include 'koneksi.php';
include_once "assets/inc.php";
?>
<body>

        <div class="col-lg-12 text-center"  style="box-shadow: 2px 1px 4px;padding: 20px 0px; background: url(images/Welcome.png) no-repeat; text-shadow: -2px -1px -2px;">
            <h2 style="color: white; padding: 20px;text-shadow: -2px 2px rgb(110,112,145);">SELAMAT DATANG DI LAYANAN SURAT DESA ONLINE</h2>
            <?php 
            $nm=$_SESSION['nama'];
            ?>
            <h2 style="color: white; padding: 20px;text-shadow: -2px 2px rgb(110,112,145);">Bapak/Ibu <?php echo $nm;?></h2>
            <h4 style="color: white; padding: 20px; text-align: center;text-shadow: -2px 2px rgb(110,112,145);">Silahkan pilih surat yang ingin dibuat pada menu yang tersedia</h4>
        </div>

   
    <!-- Left Panel -->
            <section class="welcome p-t-30">
                <div class="au-card recent-report"  style="box-shadow: 2px 1px 4px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-5">DATA SURAT 
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            


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
                                            <th>Status</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                        <?php 
                            $query = mysqli_query ($con, "SELECT * FROM t_jenissurat, t_buatsendiri WHERE t_buatsendiri.kode_jenis=t_jenissurat.kode  AND t_buatsendiri.nik='$nik' ORDER BY t_buatsendiri.id DESC ");
                            $no=1;
                            while ($data = mysqli_fetch_assoc($query)){
                         ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['kode'];?></td>
                                            <td><?php echo $data['no_surat'];?></td>
                                            <td><?php echo $data['nmsurat'];?></td>
                                            <td><?php echo $data['status'];?></td>
                                            <td><?php echo IndonesiaTgl($data['tgl']);?></td>
                                            <td>
                            <a href="buat_sendiri.php?page=edit_<?php echo $data['page'];?>&kode=<?php echo $data['kode_surat'];?>" class="btn"><i class="fa fa-edit"></i></a>
                            <a href="del/h_detailsurat.php?kode=<?php echo $data['kode_surat'];?>" class="btn"><i class="fa fa-trash"></i></a></td>

                                        </tr>
    
                                     <?php }?>    

                                    </tbody>
                                </table>
                            </div>      
                        </div>
 </div>
 </section>
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
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>


</body>

</html>
