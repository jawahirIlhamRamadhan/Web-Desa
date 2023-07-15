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
                        <div class="col-md-9">
                            <h1 class="title-5">EDIT SURAT KETERANGAN KEPEMILIKAN TANAH
                            </h1>
                        </div>
                            <hr class="line-seprate">
                    </div>
                </div>
            </section>
<div class="card-body card-block">
<?php
            $KodeEdit= isset($_GET['page']) ?  $_GET['kode'] : $_POST['kodesurat'];
            $data=mysqli_query($con, "SELECT t_detailsurat.*, t_penduduk.* FROM t_detailsurat, t_penduduk  where t_detailsurat.kode='$KodeEdit' AND t_detailsurat.nik=t_penduduk.nik ");
            $no=1;
            while($row =mysqli_fetch_array($data)){ 
            $dt=explode(';', $row['detail']);
            ?>      
            <form action="update/u_sukettanah.php"  method="POST" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="kodesurat" class="form-control-label">Kode Surat</label></div>
                                    <div class="col-12 col-md-3"><input type="text" id="kodesurat" name="kodesurat" value="<?php echo $row ['kode']; ?>" readonly="readonly" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="kodesurat" class="form-control-label">Jenis / Nama Surat</label></div>
                                    <div class="col-12 col-md-6"><input type="text" id="nmsurat" name="nmsurat" value="<?php echo $row ['nmsurat']; ?>" readonly="readonly" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="nosurat" class=" form-control-label">No. Surat</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="nosurat" name="nosurat" class="form-control" value="<?php echo $row ['no']; ?>" ></div>
                                </div>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="nik" name="nik" class="form-control" maxlength="16"  value="<?php echo $row ['nik']; ?>"  ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nama" name="nama" value="<?php echo $row ['nama']; ?>" class="form-control"></div>
                                    </div>

<hr>
                                <h6 class="label">KETERANGAN TANAH</h6>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="luas" class=" form-control-label">Luas (M2)</label></div>
                                        <div class="col-12 col-md-3"><input type="number" id="luas" name="luas" value="<?php echo $dt[2]; ?>"   class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="letak" class=" form-control-label">Letak Tanah</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="letak" name="letak" value="<?php echo $dt[3]; ?>"   class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="asaltanah" class=" form-control-label">Asal Tanah</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="asaltanah" name="asaltanah" value="<?php echo $dt[4]; ?>"  class="form-control"><small class="form-text text-muted">Contoh : Pembelian dari Bpk. Anu</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="barat" class=" form-control-label">Batas Barat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="barat" name="barat" value="<?php echo $dt[5]; ?>"   class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="utara" class=" form-control-label">Batas Utara</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="utara" name="utara" value="<?php echo $dt[6]; ?>"   class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="timur" class=" form-control-label">Batas Timur</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="timur" name="timur" value="<?php echo $dt[7]; ?>"   class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="selatan" class=" form-control-label">Batas Selatan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="selatan" name="selatan" value="<?php echo $dt[8]; ?>"   class="form-control"></div>
                                    </div>                                    
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

 
        <script type="text/javascript">
            function isinik(){
                var nik = $("#nik").val();
                $.ajax({
                    url: 'data/panggildatawarga.php',
                    data:"nik="+nik ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#nama').val(obj.nama);
                    $('#jk').val(obj.jk);
                    $('#tmp_lahir').val(obj.tmp_lahir);
                    $('#tgl_lahir').val(obj.tgl_lahir);
                    $('#kwng').val(obj.kwng);
                    $('#agama').val(obj.agama);
                    $('#pkjn').val(obj.kerjaan);
                    $('#status').val(obj.status);
                    $('#pend').val(obj.pend);
                    $('#kerjaan').val(obj.kerjaan);
                    $('#rt').val(obj.rt);
                    $('#dusun').val(obj.dusun);
                });
            }
        </script>


        <script type="text/javascript">
            function isiredaksi(){
                var nmsurat = $("#nmsurat").val();
                $.ajax({
                    url: 'data/panggiljenissurat.php',
                    data:"nmsurat="+nmsurat ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#kode_klasi').val(obj.kode_klasi);
                    $('#rdawal').val(obj.rdawal);
                    $('#rdtengah').val(obj.rdtengah);
                    $('#rdakhir').val(obj.rdakhir);
                });
            }
        </script>



<script type="text/javascript">
function validasi_input(form){
  var mincar = 16;
  var minruf = 3;
  if (form.nmsurat.value=="") {
      alert('Jenis Surat harus dipilih!');
      form.nmsurat.focus();
      return false;
    }else if(form.nosurat.value=="") {
      alert('Nomor Surat harus di isi !');
      form.nosurat.focus();
      return false;
    }else if (form.nik.value.length < mincar){
    alert("Panjang NIK Minimal 16 Karater!");
    form.nik.focus();
    return (false);
  }else if (form.nosurat.value.length < minruf){
    alert("Panjang Nomor Surat Minimal 3 Angka!");
    form.nosurat.focus();
    return (false);
  }
   return (true);
}
</script>


</body>

</html>
