<?php
include 'koneksi.php';
include_once "assets/inc.php";
?>
<body>
    <div class="au-card recent-report">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">DATA STAFF</strong>
                            </div>

                            <div class="card-body scroll" style="overflow: scroll;">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Petugas/user</th>
                                                        <th>Email</th>
                                                        <th>Hp</th>
                                                        <th>Foto</th>
                                                        <th>Opsi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
           // $use=$_SESSION['username'];
            $qdu=mysqli_query($con, "SELECT * FROM t_admin  ORDER BY t_admin.id ASC ");
            $no=1;
            while($bb=mysqli_fetch_array($qdu)){
                ?>
                                                    <tr>
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?php echo $bb['uname']; ?> (<?php echo $bb['level']; ?>)</td>
                                                        <td><?php echo $bb['email']; ?></td>
                                                        <td><?php echo $bb['hp']; ?></td>
                                                        <td><img src="foto/<?php echo $bb['foto']; ?>" style="width: 55px; height: 60px;"></td>
                                                        <td><a href="?page=edit_staff&amp;id=<?php echo $bb['id'];?>" class="btn"><i class="fa fa-edit"></i></a>
                                                <a href="hapus/h_staff.php?id=<?php echo $bb['id'];?>" class="btn"><i class="fa fa-trash"></i></a></td>
                                                    </tr><?php } ?>
                                                
                                                    
                                                </tbody>
                                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->

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
