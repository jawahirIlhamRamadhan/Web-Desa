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
                            <h1 class="title-5">SURAT KETERANGAN PERNAH MENIKAH
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>

                            <?php
                                $query = mysqli_query($con, "SELECT max(kode) as kodeTerbesar FROM t_datasurat");
                                $data = mysqli_fetch_array($query);
                                $kodesurat = $data['kodeTerbesar'];
                                 
                                // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
                                // dan diubah ke integer dengan (int)
                                $urutan = (int) substr($kodesurat, 2, 3);
                                 
                                // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
                                $urutan++;
                                 
                                // membentuk kode surat baru
                                // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
                                // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
                                // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
                                $huruf = "SR";
                                $kodesurat = $huruf . sprintf("%03s", $urutan);
                                $nourut = sprintf("%03s", $urutan);
                                ?>

                                <form action="act/s_suketpmenikah.php" onsubmit="return validasi_input(this)" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-body card-block">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="kodesurat" class="form-control-label">Kode Surat</label></div>
                                    <div class="col-12 col-md-3"><input type="text" id="kodesurat" name="kodesurat" value="<?php echo $kodesurat ?>" readonly="readonly" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="nmsurat" class=" form-control-label">Jenis / Nama Surat</label></div>
                                        <div class="col-12 col-md-8">
                                            <select name="nmsurat" id="nmsurat" onchange="isiredaksi()" class="form-control">
                                                <option value="">Pilih Jenis atau Nama Surat</option>
                                    <?php 
                                    $query = mysqli_query ($con, "SELECT * FROM t_jenissurat WHERE kode='JS020' ORDER BY id ASC ");
                                    while ($r = mysqli_fetch_array($query)){
                                    ?>
                                                <option value="<?php echo $r['nmsurat'];?>"><?php echo $r['kode'];?>--><?php echo $r['nmsurat'];?></option>
                                    
                                            </select>
                                        </div>
                                    </div>
                                    <?php
                                    $query = mysqli_query ($con, "SELECT * FROM t_desa WHERE id='1'");
                                    while ($rdes = mysqli_fetch_array($query)){
                                    ?>
   

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nosurat" class=" form-control-label">No. Surat</label></div>
                                        <?php $idstf=$_SESSION['id']; ?>
                                        <input type="hidden" id="idstf" name="idstf" value="<?php echo $idstf; ?>">
                                        <input type="hidden" id="kode_klasi" name="kode_klasi">
                                        <input type="hidden" id="blnr" name="blnr" value="<?php echo getRomawi(date('m'));?>" >
                                        <input type="hidden" id="kades" name="kades" value="<?php echo $rdes['kades']; ?>" >
                                        <input type="hidden" id="kodejenis" name="kodejenis" value="<?php echo $r['kode']; ?>" >
                                        <div class="col-12 col-md-3"><input type="text" id="nosurat" name="nosurat" maxlength="3" class="form-control" value="<?php echo $nourut ?>"></div>
                                    </div>
                                <?php }}?>
                                <h6>IDENTITAS PEMOHON :</h6>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="nik" name="nik" onkeyup="isinik()" class="form-control" maxlength="16"  placeholder="NIK" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nama" name="nama" placeholder="Nama Lengkap" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jk" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="jk" id="jk" class="form-control">
                                                <option value="-" selected="selected">Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahir" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="tmp_lahir" name="tmp_lahir" placeholder="Tempat Lahir " class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahir" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir " class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kwng" class=" form-control-label">Kewarganegaraan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kwng" name="kwng" placeholder="Kewarganegaraan"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agama" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="agama" id="agama" class="form-control">
                                                <option value="-" selected="selected">Agama</option>
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
                                        <div class="col-12 col-md-6"><input type="text" id="pkjn" name="pkjn" placeholder="Pekerjaan" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="prov" class=" form-control-label">Provinsi</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="prov" name="prov"  placeholder="Provinsi" class="form-control"><small class="form-text text-muted">Contoh : Banten</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kab" class=" form-control-label">Kabupaten/Kota</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kab" name="kab" placeholder="Kabupaten/Kota" class="form-control"><small class="form-text text-muted">Contoh : Tangerang</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kec" class=" form-control-label">Kecamatan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kec" name="kec" placeholder="Kecamatan" class="form-control"><small class="form-text text-muted">Contoh : Cikupa</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desa" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="desa" name="desa" placeholder="Desa" class="form-control"><small class="form-text text-muted">Contoh : Bitung Jaya</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="almt" class=" form-control-label">Alamat/Rt./Rw.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almt" name="almt" placeholder="xxx/xxx" class="form-control"><small class="form-text text-muted">Contoh : Kp. Pulo, RT/RW.011/005</small></div>
                                    </div>
                                    <!-- ISTRI -->
                                    <h6>DATA SUAMI / ISTRI SEBELUMNYA:</h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik1" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="nik1" name="nik1" onkeyup="isinik1()" class="form-control" maxlength="16"  placeholder=" NIK Suami/Istri" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama1" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nama1" name="nama1" placeholder="Nama" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jk1" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="jk1" id="jk1" class="form-control">
                                                <option value="-" selected="selected">Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahir1" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="tmp_lahir1" name="tmp_lahir1" placeholder="Tempat Lahir"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahir1" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="tgl_lahir1" name="tgl_lahir1" placeholder="Tanggal Lahir"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kwng1" class=" form-control-label">Kewarganegaraan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kwng1" name="kwng1" placeholder="Kewarganegaraan" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agama1" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="agama1" id="agama1"  class="form-control">
                                                <option value="-" selected="selected">Agama</option>
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
                                        <div class="col-12 col-md-6"><input type="text" id="pkjn1" name="pkjn1" placeholder="Pekerjaan"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="prov1" class=" form-control-label">Provinsi</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="prov1" name="prov1" placeholder="Provinsi" class="form-control"><small class="form-text text-muted">Contoh : Banten</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kab1" class=" form-control-label">Kabupaten/Kota</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kab1" name="kab1" placeholder="Kabupaten/Kota" class="form-control"><small class="form-text text-muted">Contoh : Tangerang</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kec1" class=" form-control-label">Kecamatan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kec1" name="kec1" placeholder="Kecamatan" class="form-control"><small class="form-text text-muted">Contoh : Cikupa</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desa1" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="desa1" name="desa1" placeholder="Desa" class="form-control"><small class="form-text text-muted">Contoh : Bitung Jaya</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="almt1" class=" form-control-label">Alamat/Rt./Rw.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almt1" name="almt1" placeholder="xxx/xxx" class="form-control"><small class="form-text text-muted">Contoh : Kp. Pulo, RT/RW.011/005</small></div>
                                    </div>
                                    <hr>
                                    <h6>KETERANGAN PERNIKAHAN </h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_nikah" class=" form-control-label">Tanggal Pernikahan</label></div>
                                        <div class="col-12 col-md-4"><input type="date" id="tgl_nikah" name="tgl_nikah" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="secara" class=" form-control-label">Menikah Secara</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="secara" name="secara" class="form-control" placeholder="Isi dengan cara Pernikahan Misalnya : Menikah Siri" ></div>
                                    </div>

                                    <div class="modal-footer">
                                        <div class="col col-md-6"><button type="reset" class="btn btn-primary btn-sm pull pull-left">Reset</button></div>
                                        <div class="col col-md-6"><button type="submit" name="cetak" class="btn btn-primary btn-sm pull pull-right">Cetak</button></div>
                                        
                                    </div>
                            </div>
                        </form>
                    </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Surat</strong>
                            </div>

                            <div class="card-body scroll">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No. Surat</th>
                                            <th>Tanggal</th>
                                            <th>Nama Suami</th>
                                            <th>Nama Istri</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                        <?php 
                            $query = mysqli_query ($con, "SELECT * FROM t_detailsurat WHERE kodejenis='JS020' ORDER BY id ASC ");
                            $no=1;
                            while ($data = mysqli_fetch_assoc($query)){
                                $dt=explode(';', $data['detail']);
                         ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['no'];?></td>
                                            <td><?php echo $data['tanggal'];?></td>
                                            <td><?php echo $dt[1];?></td>
                                            <td><?php echo $dt[14];?></td>
                                            <td>
                                                <a href="cetak/c_suketpmenikah.php?kode=<?php echo $data['kode'];?>" target="_BLANK" class="btn"><i class="fa fa-print"></i></a>
                                                <a href="?page=edit_pernahnikah&amp;kode=<?php echo "$data[kode]"; ?>" class="btn"><i class="fa fa-edit"></i></a>
                                                <a href="hapus/h_suketpmenikah.php?kode=<?php echo $data['kode'];?>" class="btn"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
    
                                     <?php }?>    

                                    </tbody>
                                </table>
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
                    $('#status').val(obj.status);
                    $('#pend').val(obj.pend);
                    $('#pkjn').val(obj.kerjaan);
                    $('#prov').val(obj.prov);
                    $('#kab').val(obj.kab);
                    $('#kec').val(obj.kec);
                    $('#desa').val(obj.desa);
                    $('#almt').val(obj.alamat);
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
                    $('#kwng1').val(obj.kwng);
                    $('#agama1').val(obj.agama);
                    $('#status1').val(obj.status);
                    $('#pend1').val(obj.pend);
                    $('#pkjn1').val(obj.kerjaan);
                    $('#prov1').val(obj.prov);
                    $('#kab1').val(obj.kab);
                    $('#kec1').val(obj.kec);
                    $('#desa1').val(obj.desa);
                    $('#almt1').val(obj.alamat);
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
