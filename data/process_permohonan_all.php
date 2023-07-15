<?php
//include '../sesi.php';
include 'koneksi.php';
include_once "assets/inc.php";
?>
<!doctype html>
<html class="no-js" lang="en">
<!--<![endif]-->

<body>
    <div class="au-card recent-report">
    <!-- Left Panel -->
            <section class="welcome p-t-1s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-5">DATA PERMOHONAN SURAT 
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>


        <!-- Header-->


<!-- END MODAL SUKET UMUM --> 


                        <div class="card ">
                            <div class="card-body animated zoomIn" style="overflow-x: scroll;">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Surat</th>
                                            <th>Hp</th>
                                            <th>Tanggal</th>
                                            <th>Lamp</th>
                                            <th>Foto</th>
                                            <th>Ubah Status</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                        <?php

                            $query = mysqli_query ($con, "SELECT * FROM t_permohonan ORDER BY id DESC");
                            $no=1;
                            while ($data = mysqli_fetch_assoc($query)){
                         ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['nmsurat'];?></td>
                                            <td><?php echo $data['hp'];?></td>
                                            <td><?php echo IndonesiaTgl($data['tgl']);?></td>
                                            <td><a href="ktp/<?php echo $data['ktp'];?>" target="_BLANK"><img src="ktp/<?php echo $data['ktp'];?>" style=" width: 150px; height:  100px; border-color: white; box-shadow: 2px 1px 4px ;"></a></td>
                                            <td><a href="fotowarga/<?php echo $data['foto'];?>" target="_BLANK"><img src="fotowarga/<?php echo $data['foto'];?>" style=" width: 80px; height:  100px; border-color: white; box-shadow: 2px 1px 4px ;"></a></td>
                                            <td><a href="?page=acc_permohonan&amp;id=<?php echo $data['id'];?>"><i class="fa fa-refresh"></i> <?php echo $data['status'];?></a></td>
                                            <td><a href="?page=<?php echo $data['page'];?>">Buatkan</a></td>

                                        </tr>
    
                                     <?php }?>    

                                    </tbody>
                                </table>
                            </div>      
                        </div>
 
</div>

              <!-- /.row -->


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
