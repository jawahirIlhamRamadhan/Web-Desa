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
                            <h1 class="title-5">SURAT PERNYATAAN STATUS
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
                                $nosurat = sprintf("%03s", $urutan);
                                ?>

                                <form action="save/s_pstatus.php" onsubmit="return validasi_input(this)" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-body card-block">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="kodesurat" class="form-control-label">Kode Surat</label></div>
                                    <div class="col-12 col-md-3"><input type="text" id="kodesurat" name="kodesurat" value="<?php echo $kodesurat ?>" readonly="readonly" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="nmsurat" class=" form-control-label">Jenis / Nama Surat</label></div>
                                        <div class="col-12 col-md-6">
                                            <select name="nmsurat" id="nmsurat" onchange="isiredaksi()" class="form-control">
                                                <option value="">Pilih Jenis atau Nama Surat</option>
                                    <?php 
                                    $query = mysqli_query ($con, "SELECT * FROM t_jenissurat WHERE kode='JS098' ORDER BY id ASC ");
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
                                        <div class="col-12 col-md-9"><input type="hidden" id="nosurat" name="nosurat" class="form-control" value="<?php echo $nosurat ?>"></div>
                                        <?php $nik=$_SESSION['nik']; ?>
                                        <input type="hidden" id="idstf" name="idstf" value="<?php echo $nik; ?>">
                                        <input type="hidden" id="kode_klasi" name="kode_klasi">
                                        <input type="hidden" id="kades" name="kades" value="<?php echo $rdes['kades']; ?>" >
                                        <input type="hidden" id="kodejenis" name="kodejenis" value="<?php echo $r['kode']; ?>" >
                                        
                                    </div>
                                <?php }}?>
                                <h6>IDENTITAS PEMBUAT PERNYATAAN :</h6>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="nik" name="nik" onkeyup="isinik()" class="form-control" maxlength="16"  placeholder="NIK" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nama" name="nama" placeholder="Nama Lengkap" class="form-control"></div>
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
                                            <th>Kode Surat</th>
                                            <th>Tanggal</th>
                                            <th>Nama Pembuat Pernyataan</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                        <?php 
                        $query = mysqli_query ($con, "SELECT * FROM t_detailsurat, t_penduduk, t_buatsendiri WHERE t_detailsurat.kodejenis='JS098' AND t_detailsurat.nik='$nik' AND t_buatsendiri.nik=t_penduduk.nik AND t_detailsurat.kode=t_buatsendiri.kode_surat ORDER BY t_detailsurat.id DESC ");
                        $no=1;
                        while ($data = mysqli_fetch_assoc($query)){
                         ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['no_surat'];?></td>
                                            <td><?php echo $data['tgl'];?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['alamat'];?></td>
                                            <td>
                                                <a href="cetak/c_pstatus.php?kode=<?php echo $data['kode'];?>" target="_BLANK" class="btn"><i class="fa fa-print"></i></a>
                                                <a href="?page=edit_pstatus&amp;kode=<?php echo "$data[kode]"; ?>" class="btn"><i class="fa fa-edit"></i></a>
                                                <a href="del/h_detailsurat.php?kode=<?php echo $data['kode'];?>" class="btn"><i class="fa fa-trash"></i></a>
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
                    $('#pkjn').val(obj.kerjaan);
                    $('#status').val(obj.status);
                    $('#pend').val(obj.pend);
                    $('#kerjaan').val(obj.kerjaan);
                    $('#almt').val(obj.alamat);
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
