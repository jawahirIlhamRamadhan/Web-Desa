<?php
//include '../sesi.php';
include 'koneksi.php';
include_once "assets/inc.php";
?>
<body>
    <div class="au-card recent-report">
            <section class="welcome p-t-1s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-5">EDIT JENIS SURAT
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>

            <?php
            $data=mysqli_query($con, "SELECT * FROM t_jenissurat  where kode='$_GET[kode]' ");
            $no=1;
            while($row =mysqli_fetch_array($data)){ 

            ?> 
            <div class="card-body card-block"> 
                    <form action="update/u_jsurat.php"  method="POST" enctype="multipart/form-data" class="form-horizontal">

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="kodesurat" class=" form-control-label">Kode Surat</label></div>
                                        <div class="col-12 col-md-3"><input type="text" id="kodesurat" name="kodesurat" value="<?php echo $row['kode']; ?>" class="form-control" readonly="readonly"></div>
                                    </div>

                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="klasifikasi" class=" form-control-label">Klasifikasi Surat</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="klasifikasi" id="klasifikasi" class="form-control">
                                                <option value="<?php echo $row['kode_klasi']; ?>"><?php echo $row['kode_klasi']; ?></option>
                                    <?php 
                                    $query = mysqli_query ($con, "SELECT * FROM t_klasifikasi ORDER BY id ASC ");
                                    while ($r = mysqli_fetch_array($query)){
                                    ?>
                                                <option value="<?php echo $r['kode'];?>"><?php echo $r['kode'];?> --> <?php echo substr($r['klasifikasi'],0,50);?>***</option>
                                    <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jenis" class=" form-control-label">Jenis Surat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="jenis" name="jenis" value="<?php echo $row['jenis']; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nmsurat" class=" form-control-label">Nama Surat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nmsurat" name="nmsurat" value="<?php echo $row['nmsurat']; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                    <div class="col col-md-3"><label for="rdtengah" class=" form-control-label">Redaksi Awal</label></div>
                                        <div class="col-12 col-md-9"><textarea name="rdawal" id="rdawal" rows="3" class="form-control"><?php echo $row['awal']; ?></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="rdtengah" class=" form-control-label">Redaksi Tengah</label></div>
                                        <div class="col-12 col-md-9"><textarea name="rdtengah" id="rdtengah" rows="3" class="form-control"><?php echo $row['tengah']; ?></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="rdtengah" class=" form-control-label">Redaksi Akhir</label></div>
                                        <div class="col-12 col-md-9"><textarea name="rdakhir" id="rdakhir" rows="3" class="form-control"><?php echo $row['akhir']; ?></textarea></div>
                                    </div>
<hr>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><button type="reset" class="btn btn-primary btn-sm pull pull-left">Reset</button></div>
                                        <div class="col col-md-6"><button type="submit" name="update" class="btn btn-primary btn-sm pull pull-right">Update</button></div>
                                        
                                    </div>
                            </div>
                          </form>
                    </div>
                     <?php 
                        }
                                                //mysql_close($host);
                        ?>


    <!-- Right Panel -->
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
