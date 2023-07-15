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
                            <h1 class="title-5">EDIT SURAT KETERANGAN PERNAH MENIKAH
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
                    <form action="update/u_suketpmenikah.php"  method="POST" enctype="multipart/form-data" class="form-horizontal">


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
                                        <div class="col-12 col-md-4"><input type="text" id="nosurat" name="nosurat"  class="form-control" value="<?php echo $row ['no']; ?>" ></div>
                                </div>
                                <h6>IDENTITAS PEMOHON :</h6>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="nik" name="nik" onkeyup="isinik()" class="form-control" maxlength="16"  value="<?php echo $dt[0];?>" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nama" name="nama" value="<?php echo $dt[1];?>"class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jk" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="jk" id="jk"  class="form-control">
                                                <option value="<?php echo $dt[2];?>" ><?php echo $dt[2];?></option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahir" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="tmp_lahir" name="tmp_lahir" value="<?php echo $dt[3];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahir" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="tgl_lahir" name="tgl_lahir" value="<?php echo $dt[4];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kwng" class=" form-control-label">Kewarganegaraan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kwng" name="kwng" value="<?php echo $dt[5];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agama" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="agama" id="agama"  class="form-control">
                                                <option value="<?php echo $dt[6];?>" ><?php echo $dt[6];?></option>
                                                <option value="Islam">Islam</option>
                                                <option value="Katholik">Katholik</option>
                                                <option value="Protestan">Protestan</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                     <div class="row form-group">
                                        <div class="col col-md-3"><label for="pkjn" class=" form-control-label">Pekerjaan</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="pkjn" name="pkjn" value="<?php echo $dt[7];?>" class="form-control"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="prov" class=" form-control-label">Provinsi</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="prov" name="prov" value="<?php echo $dt[9];?>" class="form-control"><small class="form-text text-muted">Contoh : Banten</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kab" class=" form-control-label">Kabupaten/Kota</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kab" name="kab" value="<?php echo $dt[10];?>" class="form-control"><small class="form-text text-muted">Contoh : Tangerang</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kec" class=" form-control-label">Kecamatan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kec" name="kec" value="<?php echo $dt[11];?>" class="form-control"><small class="form-text text-muted">Contoh : Cikupa</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desa" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="desa" name="desa" value="<?php echo $dt[12];?>" class="form-control"><small class="form-text text-muted">Contoh : Bitung Jaya</small></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="alamat" class=" form-control-label">Alamat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="alamat" name="alamat"  value="<?php echo $dt[8];?>"class="form-control"><small class="form-text text-muted">Contoh : Rt. 001/Rw. 002</small></div>
                                    </div>

                                    <!-- ISTRI -->
                                           <h6>DATA SUAMI / ISTRI SEBELUMNYA:</h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik1" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="nik1" name="nik1" onkeyup="isinik1()" class="form-control" maxlength="16"  value="<?php echo $dt[13];?>"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama1" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nama1" name="nama1" value="<?php echo $dt[14];?>"class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jk1" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="jk1" id="jk1" class="form-control">
                                                <option value="<?php echo $dt[15];?>"><?php echo $dt[15];?></option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahir1" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="tmp_lahir1" name="tmp_lahir1" value="<?php echo $dt[16];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahir1" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="tgl_lahir1" name="tgl_lahir1" value="<?php echo $dt[17];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kwng1" class=" form-control-label">Kewarganegaraan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kwng1" name="kwng1" value="<?php echo $dt[18];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agamai" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="agama1" id="agama1" class="form-control">
                                                <option value="<?php echo $dt[19];?>" ><?php echo $dt[19];?></option>
                                                <option value="Islam">Islam</option>
                                                <option value="Katholik">Katholik</option>
                                                <option value="Protestan">Protestan</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="pkjn1" class=" form-control-label">Pekerjaan</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="pkjn1" name="pkjn1" value="<?php echo $dt[20];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="prov1" class=" form-control-label">Provinsi</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="prov1" name="prov1" value="<?php echo $dt[22];?>" class="form-control"><small class="form-text text-muted">Contoh : Banten</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kab1" class=" form-control-label">Kabupaten/Kota</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kab1" name="kab1" value="<?php echo $dt[23];?>" class="form-control"><small class="form-text text-muted">Contoh : Tangerang</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kec1" class=" form-control-label">Kecamatan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kec1" name="kec1" value="<?php echo $dt[24];?>" class="form-control"><small class="form-text text-muted">Contoh : Cikupa</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desa1" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="desa1" name="desa1" value="<?php echo $dt[25];?>" class="form-control"><small class="form-text text-muted">Contoh : Bitung Jaya</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="alamat1" class=" form-control-label">Alamat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="alamat1" name="alamat1"  value="<?php echo $dt[21];?>" class="form-control"><small class="form-text text-muted">Contoh : Rt. 001/Rw. 002</small></div>
                                    </div>


                                    <hr>
                                    <h6>KETERANGAN PERNIKAHAN </h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_nikah" class=" form-control-label">Tanggal Pernikahan</label></div>
                                        <div class="col-12 col-md-4"><input type="date" id="tgl_nikah" name="tgl_nikah" class="form-control"  value="<?php echo $dt[26];?>" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="secara" class=" form-control-label">Menikah Secara</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="secara" name="secara" class="form-control" value="<?php echo $dt[27];?>" ></div>
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
                    $('#agama').val(obj.agama);
                    $('#status').val(obj.status);
                    $('#pend').val(obj.pend);
                    $('#kerjaan').val(obj.kerjaan);
                    $('#prov').val(obj.prov);
                    $('#kab').val(obj.kab);
                    $('#kec').val(obj.kec);
                    $('#desa').val(obj.desa);
                    $('#almt').val(obj.rt);
                    $('#dusun').val(obj.dusun);
                });
            }
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
                    $('#tmp_lahir1').val(obj.tmp_lahir);
                    $('#tgl_lahir1').val(obj.tgl_lahir);
                    $('#agama1').val(obj.agama);
                    $('#status1').val(obj.status);
                    $('#pend1').val(obj.pend);
                    $('#kerjaan1').val(obj.kerjaan);
                    $('#prov1').val(obj.prov);
                    $('#kab1').val(obj.kab);
                    $('#kec1').val(obj.kec);
                    $('#desa1').val(obj.desa);
                    $('#almt1').val(obj.rt);
                    $('#dusun1').val(obj.dusun);
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
