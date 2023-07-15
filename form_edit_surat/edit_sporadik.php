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
                            <h1 class="title-5">EDIT PERNYATAAN PENGUASAAN FISIK BIDANG TANAH (SPORADIK)
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
                        <form action="update/u_sporadik.php" onsubmit="return validasi_input(this)" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-body card-block">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="kodesurat" class="form-control-label">Kode Surat</label></div>
                                    <div class="col-12 col-md-3"><input type="text" id="kodesurat" name="kodesurat" value="<?php echo $row ['kode']; ?>" readonly="readonly" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="kodesurat" class="form-control-label">Jenis / Nama Surat</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="nmsurat" name="nmsurat" value="<?php echo $row ['nmsurat']; ?>" readonly="readonly" class="form-control"></div>
                                </div>


                                <hr>
                                <h6 class="label">IDENTITAS PEMILIK TANAH</h6>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nik" name="nik" onkeyup="isinik()" class="form-control" maxlength="16"  value="<?php echo $row ['nik']; ?>"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nama" name="nama" value="<?php echo $row ['nama']; ?>" class="form-control"></div>
                                    </div>
                                <hr>
                                <h6 class="label">KETERANGAN TANAH</h6>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="luas" class=" form-control-label">Luas (M2)</label></div>
                                        <div class="col-12 col-md-2"><input type="number" id="luas" name="luas" value="<?php echo $dt[2]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="letak" class=" form-control-label">Letak Tanah</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="letak" name="letak" value="<?php echo $dt[3]; ?>" class="form-control"><small class="form-text text-muted">Contoh : Jl. P. Diponegoro No. 112</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="rtrw" class=" form-control-label">RT/RW</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="rtrw" name="rtrw" value="<?php echo $dt[4]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="deskel" class=" form-control-label">Desa/Kelurahan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="deskel" name="deskel" value="<?php echo $dt[5]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kab" class=" form-control-label">Kota Administrasi</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kab" name="kab" value="<?php echo $dt[6]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nib" class=" form-control-label">NIB</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nib" name="nib" value="<?php echo $dt[7]; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="stanah" class=" form-control-label">Status Tanah</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="stanah" name="stanah" value="<?php echo $dt[8]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="untuk" class=" form-control-label">Dipergunakan untuk</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="untuk" name="untuk" value="<?php echo $dt[9]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="asaltanah" class=" form-control-label">Asal Tanah</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="asaltanah" name="asaltanah" value="<?php echo $dt[10]; ?>"  class="form-control"><small class="form-text text-muted">Contoh : Hasil Pembelian dari Bpk. Anu atau Warisan orang tua</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="sejak" class=" form-control-label">Diperoleh Sejak </label></div>
                                        <div class="col-12 col-md-3"><input type="text" id="sejak" name="sejak"   class="form-control" value="<?php echo $dt[11]; ?>" ><small class="form-text text-muted">Contoh : 2000</small></div>
                                    </div>
                                <hr>
                                <h6 class="label">BATAS - BATAS TANAH</h6>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="barat" class=" form-control-label">Batas Barat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="barat" name="barat" value="<?php echo $dt[12]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="utara" class=" form-control-label">Batas Utara</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="utara" name="utara" value="<?php echo $dt[13]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="timur" class=" form-control-label">Batas Timur</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="timur" name="timur" value="<?php echo $dt[14]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="selatan" class=" form-control-label">Batas Selatan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="selatan" name="selatan" value="<?php echo $dt[15]; ?>"  class="form-control"></div>
                                    </div>
                                    <hr>
                                <h6 class="label">SAKSI - SAKSI</h6>
                                <hr>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="nmsaksi1" class=" form-control-label">Nama Saksi 1</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="nmsaksi1" name="nmsaksi1" value="<?php echo $dt[16]; ?>"  class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="umursaksi1" class=" form-control-label">Umur Saksi 1</label></div>
                                    <div class="col-12 col-md-2"><input type="number" id="umursaksi1" name="umursaksi1" value="<?php echo $dt[17]; ?>"  class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="kerjaansaksi1" class=" form-control-label">Pekerjaan Saksi 1</label></div>
                                        <div class="col-12 col-md-6">
                                            <select name="kerjaansaksi1" id="kerjaansaksi1" class="form-control">
                                                <option value="<?php echo $dt[18]; ?>"><?php echo $dt[18]; ?></option>
                                    <?php 
                                    $querypkjn = mysqli_query ($con, "SELECT * FROM t_pekerjaan ORDER BY id ASC ");
                                    while ($bcpkjn = mysqli_fetch_array($querypkjn)){
                                    ?>
                                                <option value="<?php echo $bcpkjn['pekerjaan'];?>"><?php echo $bcpkjn['pekerjaan'];?></option><?php } ?>
                                    
                                            </select>
                                        </div>
                                    </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="almtsaksi1" class=" form-control-label">Alamat Saksi 1</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="almtsaksi1" name="almtsaksi1" value="<?php echo $dt[19]; ?>"  class="form-control"></div>
                                </div>
                                <hr>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="nmsaksi2" class=" form-control-label">Nama Saksi 2</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="nmsaksi2" name="nmsaksi2" value="<?php echo $dt[20]; ?>"  class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="umursaksi2" class=" form-control-label">Umur Saksi 2</label></div>
                                    <div class="col-12 col-md-2"><input type="number" id="umursaksi2" name="umursaksi2" value="<?php echo $dt[21]; ?>"  class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="kerjaansaksi2" class=" form-control-label">Pekerjaan Saksi 2</label></div>
                                        <div class="col-12 col-md-6">
                                            <select name="kerjaansaksi2" id="kerjaansaksi2" class="form-control">
                                                <option value="<?php echo $dt[22]; ?>"><?php echo $dt[22]; ?></option>
                                    <?php 
                                    $querypkjn = mysqli_query ($con, "SELECT * FROM t_pekerjaan ORDER BY id ASC ");
                                    while ($bcpkjn = mysqli_fetch_array($querypkjn)){
                                    ?>
                                                <option value="<?php echo $bcpkjn['pekerjaan'];?>"><?php echo $bcpkjn['pekerjaan'];?></option><?php } ?>
                                    
                                            </select>
                                        </div>
                                    </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="almtsaksi2" class=" form-control-label">Alamat Saksi 2</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="almtsaksi2" name="almtsaksi2" value="<?php echo $dt[23]; ?>"  class="form-control"></div>
                                </div>

                                <div class="modal-footer">
                                     <div class="col col-md-6"><button type="reset" class="btn btn-primary btn-sm pull pull-left">Reset</button></div>
                                    <div class="col col-md-6"><button type="submit" name="update" class="btn btn-primary btn-sm pull pull-right">Update</button></div>
                                </div>
                            </div>
                        </form><?php } ?>
</div>
<!-- END MODAL SUKET UMUM -->

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
