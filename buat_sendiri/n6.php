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
                            <h1 class="title-5">SURAT KETERANGAN KEMATIAN SUAMI/ISTRI (N6)
                            </h1>
                        </div>
                            <hr class="line-seprate">
                    </div>
                </div>
            </section>
<div class="card-body card-block">
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
                                <form action="save/s_n6.php" onsubmit="return validasi_input(this)" method="post" enctype="multipart/form-data" class="form-horizontal">
                            
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
                                    $query = mysqli_query ($con, "SELECT * FROM t_jenissurat WHERE kode='JS038' ORDER BY id ASC ");
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
                                        <?php $nik=$_SESSION['nik']; ?>
                                        <input type="hidden" id="idstf" name="idstf" value="<?php echo $nik; ?>">
                                        <input type="hidden" id="kode_klasi" name="kode_klasi">
                                        <input type="hidden" id="blnr" name="blnr" value="<?php echo getRomawi(date('m'));?>" >
                                        <input type="hidden" id="kades" name="kades" value="<?php echo $rdes['kades']; ?>" >
                                        <input type="hidden" id="kodejenis" name="kodejenis" value="<?php echo $r['kode']; ?>" >
                                        <div class="col-12 col-md-3"><input type="text" id="nosurat" name="nosurat" maxlength="3" class="form-control" value="<?php echo $nourut ?>" readonly></div>
                                    </div>
                                <?php }}?>
                                                                    <hr>
                                    <h6 class="label">IDENTITAS YANG MATI/MENINGGAL:</h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nika" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nika" name="nika" onkeyup="isinika()" class="form-control" maxlength="16"  placeholder="Ketikan NIK" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="namaa" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="namaa" name="namaa" placeholder="Nama Alm/Almh." class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="bina" class=" form-control-label">Bin / Bnti</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="bina" name="bina" placeholder="Nama Ayah" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                    <div class="col col-md-3"><label for="jka" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="jka" id="jka" class="form-control">
                                                <option value="-" selected="selected">Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahira" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="tmp_lahira" name="tmp_lahira" placeholder="Tempat Lahir" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahira" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="tgl_lahira" name="tgl_lahira" placeholder="Tanggal Lahir" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kwnga" class=" form-control-label">Kewarga Negaraan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kwnga" name="kwnga" placeholder="Kewarga Negaraan" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agamaa" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="agamaa" id="agamaa" class="form-control">
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
                                        <div class="col col-md-3"><label for="almta" class=" form-control-label">Alamat/Rt./Rw.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almta" name="almta" placeholder="xxx/xxx" class="form-control"><small class="form-text text-muted">Contoh : Kp. Pulo, RT/RW.011/005</small></div>
                                    </div>

                                    <hr>
                                    <h6 class="label">KETERANGAN TEMPAT/WAKTU & TEMPAT KEMATIAN :</h6>
                                    <hr>       

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="sebab" class=" form-control-label">Sebab Kematian</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="sebab" name="sebab" placeholder="Sebab Kematian" required class="form-control"><small class="form-text text-muted">Contoh : Sakit Hati</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="hari" class=" form-control-label">Hari</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="hari" id="hari" class="form-control" required>
                                                <option value="-"  selected="selected">--Pilih Hari--</option>
                                                <option value="Senin">Senin</option>
                                                <option value="Selasa">Selasa</option>
                                                <option value="Rabu">Rabu</option>
                                                <option value="Kamis">Kamis</option>
                                                <option value="Jum\'at">Jum'at</option>
                                                <option value="Sabtu">Sabtu</option>
                                                <option value="Minggu">Minggu</option>
                                            </select>
                                        </div>
                                    </div>      
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tanggal" class=" form-control-label">Tanggal</label></div>
                                        <div class="col-12 col-md-4"><input type="date" id="tanggal" name="tanggal" class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="waktu" class=" form-control-label">Waktu</label></div>
                                        <div class="col-12 col-md-4"><input type="time" id="waktu" name="waktu" class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tempat" class=" form-control-label">Tempat</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="tempat" name="tempat"  placeholder="Tempat Kematian " class="form-control" required><small class="form-text text-muted">Contoh : Rumah Sakit</small></div>
                                    </div>
                                    <hr>
                                    <h6 class="label">IDENTITAS PELAPOR:</h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik1" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="nik1" name="nik1" onkeyup="isinik1()" class="form-control" maxlength="16"  placeholder="NIK Pelapor" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama1" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nama1" name="nama1" placeholder="Nama Pelapor" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="bin1" class=" form-control-label">Bin / Bnti</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="bin1" name="bin1" placeholder="Nama Ayah" required class="form-control"></div>
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
                                        <div class="col-12 col-md-6"><input type="text" id="tmp_lahir1" name="tmp_lahir1" placeholder="Tempat Lahir" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahir1" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="tgl_lahir1" name="tgl_lahir1" placeholder="Tanggal Lahir" class="form-control"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kwng1" class=" form-control-label">Kewarga Negaraan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kwng1" name="kwng1" placeholder="Kewarga Negaraan" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agama1" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="agama1" id="agama1" class="form-control">
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
                                        <div class="col-12 col-md-6"><input type="text" id="pkjn1" name="pkjn1" placeholder="Pekerjaan" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="almt1" class=" form-control-label">Alamat/Rt./Rw.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almt1" name="almt1" placeholder="xxx/xxx" class="form-control"><small class="form-text text-muted">Contoh : Kp. Pulo, RT/RW.011/005</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="shdk" class=" form-control-label">Hubungan dgn Alm./Almh.</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="shdk" name="shdk"  placeholder="Hubungan dengan Alm./Almh." class="form-control" required><small class="form-text text-muted">Contoh : Suami, Istri atau Anak</small></div>
                                    </div>

                                  <br>
                                  <hr>
                                    <div class="row form-group">
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
                                            <th>Nama Alm./Almh. </th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                       <?php 
                        $query = mysqli_query ($con, "SELECT * FROM t_detailsurat, t_penduduk, t_buatsendiri WHERE t_detailsurat.kodejenis='JS038' AND t_detailsurat.nik='$nik' AND t_buatsendiri.nik=t_penduduk.nik AND t_detailsurat.kode=t_buatsendiri.kode_surat AND t_buatsendiri.status='acc' ORDER BY t_detailsurat.id DESC ");
                        $no=1;
                        while ($data = mysqli_fetch_assoc($query)){
                         ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['no_surat'];?></td>
                                            <td><?php echo IndonesiaTgl($data['tgl']);?></td>
                                            <td><?php echo $dt[1];?></td>
                                            <td><a href="cetak/c_n6.php?kode=<?php echo $r['kode'];?>" target="_BLANK" class="btn"><i class="fa fa-print"></i></a><a href="?page=edit_n6&amp;kode=<?php echo $r['kode'];?>" class="btn"><i class="fa fa-edit"></i></a><a href="del/h_detailsurat.php?kode=<?php echo $r['kode'];?>" class="btn"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                       <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div><!-- .animated -->
        </div><!-- .content -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

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

 <script src="assets/js/jquery.min.js"></script>
        <script type="text/javascript">
            function isinika(){
                var nik = $("#nika").val();
                $.ajax({
                    url: 'data/panggildatawarga.php',
                    data:"nik="+nik ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#namaa').val(obj.nama);
                    $('#jka').val(obj.jk);
                    $('#tmp_lahira').val(obj.tmp_lahir);
                    $('#tgl_lahira').val(obj.tgl_lahir);
                    $('#agamaa').val(obj.agama);
                    $('#statusa').val(obj.status);
                    $('#penda').val(obj.pend);
                    $('#kerjaana').val(obj.kerjaan);
                    $('#almta').val(obj.alamat);
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

    }else if (form.nika.value.length < mincar){
    alert("Panjang NIK Almh./Almh. Minimal 16 Karater!");
    form.nika.focus();
    return (false);

    }else if (form.nik1.value.length < mincar){
    alert("Panjang NIK  Pelapor Minimal 16 Karater!");
    form.nik1.focus();
    return (false);

    }else if (form.shdk.value==""){
    alert('Hubungan dengan Alm./Almh. Wajib diisi');
    form.shdk.focus();
    return (false);
  }else if (form.sebab.value==""){
    alert('Sebab Kematian Wajib diisi');
    form.sebab.focus();
    return (false);
  
  }else if (form.hari.value==""){
    alert('Hari Kematian Wajib diisi');
    form.hari.focus();
    return (false);
  
  }else if (form.tanggal.value==""){
    alert('Tanggal Kematian Wajib diisi');
    form.tanggal.focus();
    return (false);
  
  }else if (form.waktu.value==""){
    alert('Waktu Kematian Wajib diisi');
    form.waktu.focus();
    return (false);
  
  }else if (form.tempat.value==""){
    alert('Tempat Kematian Wajib diisi');
    form.tempat.focus();
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
