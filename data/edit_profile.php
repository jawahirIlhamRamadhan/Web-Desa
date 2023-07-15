<?php 
//include '../sesi.php';
include 'koneksi.php';
?>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">EDIT DATA DESA</strong>
                            </div>

                            <div class="card-body">
                            <?php
                                $query = mysqli_query($con, "SELECT * FROM t_desa");
                                while ($data = mysqli_fetch_array($query)){
                                ?>

                                <form action="update/u_profile.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-body card-block col-md-12">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desa" class=" form-control-label">Kode Desa</label></div>
                                        <div class="col-12 col-md-9"><input type="hidden" id="id" name="id" value="<?php echo $data['id'];?>" class="form-control"><input type="text" id="kodedesa" name="kodedesa" value="<?php echo $data['kodedesa'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desa" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="desa" name="desa" value="<?php echo $data['desa'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kdekec" class=" form-control-label">Kode Kecamatan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kodekec" name="kodekec" value="<?php echo $data['kodekec'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desa" class=" form-control-label">Kecamatan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kec" name="kec" value="<?php echo $data['kec'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kodekab" class=" form-control-label">Kode Kabupaten</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kodekab" name="kodekab" value="<?php echo $data['kodekab'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kab" class=" form-control-label">Kabupaten</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kab" name="kab" value="<?php echo $data['kab'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kodeprov" class=" form-control-label">Kode Provinsi</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kodeprov" name="kodeprov" value="<?php echo $data['kodeprov'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="prov" class=" form-control-label">Provinsi</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="prov" name="prov" value="<?php echo $data['prov'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desa" class=" form-control-label">Alamat Kantor</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kantor" name="kantor" value="<?php echo $data['kantor'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="telp" class=" form-control-label">Telp</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="telp" name="telp" value="<?php echo $data['telp'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kades" class=" form-control-label">Nama Kepala Desa</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kades" name="kades" value="<?php echo $data['kades'];?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nipkades" class=" form-control-label">NIP Kepala Desa</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nipkades" name="nipkades" value="<?php echo $data['nipkades'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="sekdes" class=" form-control-label">Nama Sekdes</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="sekdes" name="sekdes" value="<?php echo $data['sekdes'];?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nipsekdes" class=" form-control-label">NIP Sekdes</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nipsekdes" name="nipsekdes" value="<?php echo $data['nipsekdes'];?>"class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="keu" class=" form-control-label">Kaur Keuangan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="keu" name="keu" value="<?php echo $data['bendahara'];?>" class="form-control"></div>
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
                                        <div class="col col-md-12" style="text-align-last: center;">
                                        <img src="images/<?php echo $data['logo'];?>" class="user-avatar rounded-circle" style="border: 1px solid white; width: 110px; height: 110px; text-align-last: center;">
                                        </div>
                                    </div>

                            </div>
                       
                            </div>
                            <div class="card-body">
                                    <div class="row form-group">
                                        <div class="col col-md-6"><a href="?page=profile" type="button" class="btn btn-primary btn-lg btn-block">Kembali</a></div>
                                        <div class="col col-md-6"><button type="submit" name="update" id="update" class="btn btn-primary btn-lg btn-block">Update</button></div>
                                    </div>
                            </div>
                        </div> </form><?php }?>
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
