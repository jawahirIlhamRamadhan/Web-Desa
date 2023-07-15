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
                            <h1 class="title-5">EDIT PERNYATAAN KESEPAKATAN JUAL BELI TANAH
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
<?php
            $KodeEdit= isset($_GET['page']) ?  $_GET['kode'] : $_POST['kodesurat'];
            $data=mysqli_query($con, "SELECT t_detailsurat.*, t_penduduk.* FROM t_detailsurat, t_penduduk  where t_detailsurat.kode='$KodeEdit' AND t_detailsurat.nik=t_penduduk.nik ");
            $no=1;
            while($row =mysqli_fetch_array($data)){ 
            $dt=explode(';', $row['detail']);
            ?>
                                <form action="update/u_jualbelitanah.php" onsubmit="return validasi_input(this)" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-body card-block">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="kodesurat" class="form-control-label">Kode Surat</label></div>
                                    <div class="col-12 col-md-3"><input type="text" id="kodesurat" name="kodesurat" value="<?php echo $row['kode']; ?>" readonly="readonly" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="nmsurat" class=" form-control-label">Jenis / Nama Surat</label></div>
                                        <div class="col-12 col-md-8"><input type="text" id="nmsurat" name="nmsurat" value="<?php echo $row['nmsurat']; ?>" readonly="readonly" class="form-control"></div>
                                    </div>

                                <hr>
                                <h6 class="label">IDENTITAS PIHAK I (YANG MENYEWAKAN)</h6>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik1" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nik1" name="nik1" onkeyup="isinik1()" class="form-control" maxlength="16"  value="<?php echo $dt[0]; ?>"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama1" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nama1" name="nama1" value="<?php echo $dt[1]; ?>" class="form-control"></div>
                                    </div>
                                     <div class="row form-group">
                                        <div class="col col-md-3"><label for="jk1" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-4"><select id="jk1" name="jk1" class="form-control">
                                            <option value="<?php echo $dt[2]; ?>"><?php echo $dt[2]; ?></option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmplahir1" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tmplahir1" name="tmplahir1" value="<?php echo $dt[3]; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgllahir1" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="tgllahir1" name="tgllahir1" value="<?php echo $dt[4]; ?>" class="form-control"></div>
                                    </div>
                                     <div class="row form-group">
                                        <div class="col col-md-3"><label for="almt1" class=" form-control-label">Alamat Lengkap</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almt1" name="almt1" value="<?php echo $dt[5]; ?>" class="form-control"></div>
                                    </div>
                                <hr>
                                <hr>
                                <h6 class="label">IDENTITAS PIHAK II (YANG MENERIMA SEWA)</h6>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik2" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nik2" name="nik2" onkeyup="isinik2()" class="form-control" maxlength="16"  value="<?php echo $dt[6];?>" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama2" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nama2" name="nama2" value="<?php echo $dt[7];?>" class="form-control"></div>
                                    </div>
                                     <div class="row form-group">
                                        <div class="col col-md-3"><label for="jk2" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-4"><select id="jk2" name="jk2" class="form-control">
                                            <option value="<?php echo $dt[8]; ?>"><?php echo $dt[8]; ?></option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmplahir2" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tmplahir2" name="tmplahir2" value="<?php echo $dt[9]; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgllahir2" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="tgllahir2" name="tgllahir2" value="<?php echo $dt[10]; ?>" class="form-control"></div>
                                    </div>

                                     <div class="row form-group">
                                        <div class="col col-md-3"><label for="almt2" class=" form-control-label">Alamat Lengkap</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almt2" name="almt2" value="<?php echo $dt[11]; ?>" class="form-control"></div>
                                    </div>
                                <hr>
                                <h6 class="label">KETERANGAN TANAH</h6>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="luas" class=" form-control-label">Luas (M2)</label></div>
                                        <div class="col-12 col-md-2"><input type="number" id="luas" name="luas" value="<?php echo $dt[12];?>" required class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="letak" class=" form-control-label">Letak Tanah</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="letak" name="letak" value="<?php echo $dt[13]; ?>" required class="form-control"><small class="form-text text-muted">Contoh : Jl. P. Diponegoro No. 112</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="harga" class=" form-control-label">Harga Tanah</label></div>
                                        <div class="col-12 col-md-3"><input type="number" id="harga" name="harga" value="<?php echo $dt[14]; ?>" required class="form-control"></div>
                                    </div>
                                <hr>
                                <h6 class="label">BATAS - BATAS TANAH</h6>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="barat" class=" form-control-label">Batas Barat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="barat" name="barat" value="<?php echo $dt[15]; ?>" required class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="utara" class=" form-control-label">Batas Utara</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="utara" name="utara" value="<?php echo $dt[16]; ?>" required class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="timur" class=" form-control-label">Batas Timur</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="timur" name="timur" value="<?php echo $dt[17]; ?>" required class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="selatan" class=" form-control-label">Batas Selatan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="selatan" name="selatan" value="<?php echo $dt[18]; ?>" required class="form-control"></div>
                                    </div>
                                    <hr>
                                <h6 class="label">SAKSI - SAKSI</h6>
                                <hr>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="nmsaksi1" class=" form-control-label">Nama Saksi 1</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="nmsaksi1" name="nmsaksi1" value="<?php echo $dt[19]; ?>" required class="form-control"></div>
                                </div>
                                 <hr>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="nmsaksi2" class=" form-control-label">Nama Saksi 2</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="nmsaksi2" name="nmsaksi2" value="<?php echo $dt[20]; ?>" required class="form-control"></div>
                                </div>
                                <div class="modal-footer">
                                    <div class="col col-md-6"><button type="reset" class="btn btn-primary btn-sm pull pull-left">Reset</button></div>
                                    <div class="col col-md-6"><button type="submit" name="update" class="btn btn-primary btn-sm pull pull-right">Update</button></div>
                                </div>
                            </div>
                        </form><?php } ?>
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

 
 
        <script type="text/javascript">
            function isinik1(){
                var nik = $("#nik1").val();
                $.ajax({
                    url: 'data/panggildatawarga.php',
                    data:"nik="+nik ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#nama1').val(obj.nama);
                    $('#jk1').val(obj.jk);
                    $('#tmplahir1').val(obj.tmp_lahir);
                    $('#tgllahir1').val(obj.tgl_lahir);
                    $('#kwng1').val(obj.kwng);
                    $('#agama1').val(obj.agama);
                    $('#pkjn1').val(obj.kerjaan);
                    $('#status1').val(obj.status);
                    $('#pend1').val(obj.pend);
                    $('#kerjaan1').val(obj.kerjaan);
                    $('#rt1').val(obj.rt);
                    $('#dusun1').val(obj.dusun);
                });
            }
        </script>

  <script type="text/javascript">
            function isinik2(){
                var nik = $("#nik2").val();
                $.ajax({
                    url: 'data/panggildatawarga.php',
                    data:"nik="+nik ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#nama2').val(obj.nama);
                    $('#jk2').val(obj.jk);
                    $('#tmplahir2').val(obj.tmp_lahir);
                    $('#tgllahir2').val(obj.tgl_lahir);
                    $('#kwng2').val(obj.kwng);
                    $('#agama2').val(obj.agama);
                    $('#pkjn2').val(obj.kerjaan);
                    $('#status2').val(obj.status);
                    $('#pend2').val(obj.pend);
                    $('#kerjaan2').val(obj.kerjaan);
                    $('#rt2').val(obj.rt);
                    $('#dusun2').val(obj.dusun);
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
    }else if(form.almt1.value=="") {
      alert('Alamat Pihak I harus di isi !');
      form.almt1.focus();
      return false;
    }else if(form.almt2.value=="") {
      alert('Alamat Pihak II harus di isi !');
      form.almt2.focus();
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
