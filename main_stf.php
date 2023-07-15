<?php
//include '../sesi.php';
include 'koneksi.php';
include_once "assets/inc.php";
?>
<body>
    <div class="au-card recent-report">
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
                            <div class="card-body animated zoomIn scroll">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Surat</th>
                                            <th>No. Surat</th>
                                            <th>Nama Surat</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                        <?php 
                        $id=$_SESSION['id'];
                            $query = mysqli_query ($con, "SELECT * FROM t_datasurat WHERE status='acc' AND id_stf='$id' ORDER BY id ASC ");
                            $no=1;
                            while ($data = mysqli_fetch_assoc($query)){
                         ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['kode'];?></td>
                                            <td><?php echo $data['no'];?></td>
                                            <td><?php echo $data['nmsurat'];?></td>
                                            <td><?php echo $data['tanggal'];?></td>

                                        </tr>
    
                                     <?php }?>    

                                    </tbody>
                                </table>
                            </div>      
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
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>


</body>

</html>
