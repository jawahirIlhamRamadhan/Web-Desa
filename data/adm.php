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
                            <div class="card-body card-block">
                            <?php 
            $use=$_SESSION['uname'];
            $qdu=mysqli_query($con, "SELECT * FROM t_admin WHERE uname='$use' ");
            $no=1;
            while($bb=mysqli_fetch_array($qdu)){
                ?>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="uname" class=" form-control-label">Username</label></div>
                            <div class="col-12 col-md-6"><label for="uname" class=" form-control-label">: <b><?php echo $bb['uname'];?></b></label>
                            </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="uname" class=" form-control-label">E-mail</label></div>
                            <div class="col-12 col-md-6"><label for="uname" class=" form-control-label">: <b><?php echo $bb['email'];?></b></label>
                            </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="uname" class=" form-control-label">No. HP</label></div>
                            <div class="col-12 col-md-6"><label for="uname" class=" form-control-label">: <b><?php echo $bb['hp'];?></b></label>
                            </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="uname" class=" form-control-label">Password</label></div>
                            <div class="col-12 col-md-6"><label for="uname" class=" form-control-label">: <b><?php echo $bb['pass'];?></b></label>
                            </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="uname" class=" form-control-label">Foto</label></div>
                            <div class="col-12 col-md-6"><label for="uname" class=" form-control-label"> <img src="foto/<?php echo $bb['foto']; ?>" style="width: 55px; height: 60px;"></label>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col col-md-6"></div>
                        <div class="col col-md-6"><a href="?page=edit_staff&amp;id=<?php echo $bb['id'];?>" class="btn btn-primary btn-sm pull pull-right">EDIT</a></div>
                    </div>
<?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
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
