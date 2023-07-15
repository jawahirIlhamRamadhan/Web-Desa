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
                            <h1 class="title-5">SURAT KETERANGAN BEDA IDENTITAS
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

                                <form action="act/s_suketbedaid.php" onsubmit="return validasi_input(this)" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                                    $query = mysqli_query ($con, "SELECT * FROM t_jenissurat WHERE kode='JS014' ORDER BY id ASC ");
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
                                <hr>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="id1" class=" form-control-label"><b>IDENTITAS 1</b></label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="id1" name="id1" placeholder="Jenis Identitas 1" required class="form-control "></div>
                                </div>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik1" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="nik1" name="nik1" onkeyup="isinik1()" class="form-control" maxlength="16"  placeholder="NIK yang tertera di Identitas 1" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama1" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nama1" name="nama1" placeholder="Nama yang tertera di Identitas 1" required class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jk1" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="jk1" id="jk1" class="form-control" required>
                                                <option value="-" readonly selected="selected">Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahir1" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="tmp_lahir1" name="tmp_lahir1" placeholder="Tempat Lahir yang tertera di Identitas 1"  class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahir1" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="tgl_lahir1" name="tgl_lahir1" placeholder="Tanggal Lahir yang tertera di Identitas 1"  class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agama1" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="agama1" id="agama1" class="form-control" required>
                                                <option value="-" readonly selected="selected">Agama</option>
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
                                        <div class="col col-md-3"><label for="almt1" class=" form-control-label">Alamat/Rt./Rw.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almt1" name="almt1" placeholder="xxx/xxx" class="form-control"><small class="form-text text-muted">Contoh : Kp. Pulo, RT/RW.011/005</small></div>
                                    </div>
                                <hr>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="id2" class=" form-control-label"><b>IDENTITAS 2</b></label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="id2" name="id2" placeholder="Isi dengan Jenis Identitas 2" required class="form-control "></div>
                                </div>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik2" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="nik2" name="nik2" onkeyup="isinik2()" class="form-control" maxlength="16"  placeholder="Isi dengan NIK yang tertera di Identitas 2" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama2" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nama2" name="nama2" placeholder="Nama yang tertera di Identitas 2" required class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jk2" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="jk2" id="jk2" class="form-control" required>
                                                <option value="-" readonly selected="selected">Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahir2" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="tmp_lahir2" name="tmp_lahir2" placeholder="Tempat Lahir  yang tertera di Identitas 2"  class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahir2" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="tgl_lahir2" name="tgl_lahir2" placeholder="Tanggal Lahir yang tertera di Identitas 2" class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agama2" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="agama2" id="agama2" class="form-control" required>
                                                <option value="-" readonly selected="selected">Agama</option>
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
                                        <div class="col col-md-3"><label for="almt2" class=" form-control-label">Alamat/Rt./Rw.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almt2" name="almt2" placeholder="xxx/xxx" class="form-control"><small class="form-text text-muted">Contoh : Kp. Pulo, RT/RW.011/005</small></div>
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
                                            <th>Nama</th>
                                            <th>Identitas</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                        <?php 
                            $query = mysqli_query ($con, "SELECT * FROM t_detailsurat WHERE kodejenis='JS014' ORDER BY id ASC ");
                            $no=1;
                            while ($data = mysqli_fetch_assoc($query)){
                                $dt=explode(';', $data['detail']);
                         ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['no'];?></td>
                                            <td><?php echo $data['tanggal'];?></td>
                                            <td><?php echo $dt[1];?></td>
                                            <td><?php echo $dt[7];?> = <?php echo $dt[15];?></td>
                                            <td><?php echo $dt[6];?></td>
                                            <td>
                                                <a href="cetak/c_suketbedaid.php?kode=<?php echo $data['kode'];?>" target="_BLANK" class="btn"><i class="fa fa-print"></i></a>
                                                <a href="?page=edit_suketbedaid&amp;kode=<?php echo "$data[kode]"; ?>" class="btn"><i class="fa fa-edit"></i></a>
                                                <a href="hapus/h_suketbedaid.php?kode=<?php echo $data['kode'];?>" class="btn"><i class="fa fa-trash"></i></a>
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
                    $('#tmp_lahir2').val(obj.tmp_lahir);
                    $('#tgl_lahir2').val(obj.tgl_lahir);
                    $('#agama2').val(obj.agama);
                    $('#status2').val(obj.status);
                    $('#pend2').val(obj.pend);
                    $('#kerjaan2').val(obj.kerjaan);
                    $('#almt2').val(obj.alamat);
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


<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });

      // saat tombol remove dklik control group akan dihapus 
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>


</body>

</html>
