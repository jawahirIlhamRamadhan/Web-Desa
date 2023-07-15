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
                            <h1 class="title-5">PERNYATAAN PENGUASAAN FISIK BIDANG TANAH (SPORADIK)
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

                                <form action="act/s_sporadik.php" onsubmit="return validasi_input(this)" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                                    $query = mysqli_query ($con, "SELECT * FROM t_jenissurat WHERE kode='JS033' ORDER BY id ASC ");
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
                                        <div class="col col-md-3"></div>
                                        <?php $idstf=$_SESSION['id']; ?>
                                        <input type="hidden" id="idstf" name="idstf" value="<?php echo $idstf; ?>">
                                        <input type="hidden" id="kode_klasi" name="kode_klasi">
                                        <input type="hidden" id="blnr" name="blnr" value="<?php echo getRomawi(date('m'));?>" >
                                        <input type="hidden" id="kades" name="kades" value="<?php echo $rdes['kades']; ?>" >
                                        <input type="hidden" id="kodejenis" name="kodejenis" value="<?php echo $r['kode']; ?>" >
                                        
                                    </div>
                                <?php }}?>
                                <hr>
                                <h6 class="label">IDENTITAS PEMILIK TANAH</h6>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nik" name="nik" onkeyup="isinik()" class="form-control" maxlength="16"  placeholder="NIK Pemeilik Tanah" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nama" name="nama" placeholder="Nama Pemilik Tanah" readonly="readonly" class="form-control"></div>
                                    </div>
                                <hr>
                                <h6 class="label">KETERANGAN TANAH</h6>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="luas" class=" form-control-label">Luas (M2)</label></div>
                                        <div class="col-12 col-md-2"><input type="number" id="luas" name="luas" placeholder="0" required class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="letak" class=" form-control-label">Letak Tanah</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="letak" name="letak" placeholder="Isi Lokasi / Alamat Tanah" required class="form-control"><small class="form-text text-muted">Contoh : Jl. P. Diponegoro No. 112</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="rtrw" class=" form-control-label">RT/RW</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="rtrw" name="rtrw" placeholder="RT. 001/RW. 002" required class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="deskel" class=" form-control-label">Desa/Kelurahan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="deskel" name="deskel" placeholder="Desa/Kelurahan" required class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kab" class=" form-control-label">Kota Administrasi</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kab" name="kab" placeholder="Kab/Kota Administrasi" required class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nib" class=" form-control-label">NIB</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nib" name="nib" placeholder="NIB" required class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="stanah" class=" form-control-label">Status Tanah</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="stanah" name="stanah" placeholder="Status Tanah" required class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="untuk" class=" form-control-label">Dipergunakan untuk</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="untuk" name="untuk" placeholder="Tanah dipergunakan untuk" required class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="asaltanah" class=" form-control-label">Asal Tanah</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="asaltanah" name="asaltanah" placeholder="Asal muasal perolehan tanah" class="form-control" required><small class="form-text text-muted">Contoh : Hasil Pembelian dari Bpk. Anu atau Warisan orang tua</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="sejak" class=" form-control-label">Diperoleh Sejak </label></div>
                                        <div class="col-12 col-md-3"><input type="text" id="sejak" name="sejak"   class="form-control" placeholder="2000" required><small class="form-text text-muted">Contoh : 2000</small></div>
                                    </div>
                                <hr>
                                <h6 class="label">BATAS - BATAS TANAH</h6>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="barat" class=" form-control-label">Batas Barat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="barat" name="barat" placeholder="Barat berbatasan dengan ?" required class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="utara" class=" form-control-label">Batas Utara</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="utara" name="utara" placeholder="Utara berbatasan dengan ?" required class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="timur" class=" form-control-label">Batas Timur</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="timur" name="timur" placeholder="Timur berbatasan dengan ?" required class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="selatan" class=" form-control-label">Batas Selatan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="selatan" name="selatan" placeholder="Selatan berbatasan dengan ?" required class="form-control"></div>
                                    </div>
                                    <hr>
                                <h6 class="label">SAKSI - SAKSI</h6>
                                <hr>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="nmsaksi1" class=" form-control-label">Nama Saksi 1</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="nmsaksi1" name="nmsaksi1" placeholder="Nama Saksi 1" required class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="umursaksi1" class=" form-control-label">Umur Saksi 1</label></div>
                                    <div class="col-12 col-md-2"><input type="number" id="umursaksi1" name="umursaksi1" placeholder="0" required class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="kerjaansaksi1" class=" form-control-label">Pekerjaan Saksi 1</label></div>
                                        <div class="col-12 col-md-6">
                                            <select name="kerjaansaksi1" id="kerjaansaksi1" class="form-control" required>
                                                <option value="">--Pilih Pekerjaan--</option>
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
                                    <div class="col-12 col-md-9"><input type="text" id="almtsaksi1" name="almtsaksi1" placeholder="Alamat Saksi 1" required class="form-control"></div>
                                </div>
                                <hr>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="nmsaksi2" class=" form-control-label">Nama Saksi 2</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="nmsaksi2" name="nmsaksi2" placeholder="Nama Saksi 2" required class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="umursaksi2" class=" form-control-label">Umur Saksi 2</label></div>
                                    <div class="col-12 col-md-2"><input type="number" id="umursaksi2" name="umursaksi2" placeholder="0" required class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="kerjaansaksi2" class=" form-control-label">Pekerjaan Saksi 2</label></div>
                                        <div class="col-12 col-md-6">
                                            <select name="kerjaansaksi2" id="kerjaansaksi2" class="form-control" required>
                                                <option value="">--Pilih Pekerjaan--</option>
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
                                    <div class="col-12 col-md-9"><input type="text" id="almtsaksi2" name="almtsaksi2" placeholder="Alamat Saksi 2" required class="form-control"></div>
                                </div>

                                <div class="modal-footer">
                                    <div class="col col-md-6"><button type="reset" class="btn btn-primary btn-sm pull pull-left">Reset</button></div>
                                    <div class="col col-md-6"><button type="submit" name="cetak" class="btn btn-primary btn-sm pull pull-right">Cetak</button></div>
                                </div>
                            </div>
                        </form>
                    </div>

<!-- END MODAL SUKET UMUM -->




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
                                            <th>Tanggal</th>
                                            <th>Nama Pemohon</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                        <?php 
                            $query = mysqli_query ($con, "SELECT t_detailsurat.*, t_penduduk.* FROM t_detailsurat, t_penduduk WHERE t_detailsurat.kodejenis='JS033' AND t_detailsurat.nik=t_penduduk.nik AND t_detailsurat.id_ptg='$idstf' ORDER BY t_detailsurat.id DESC ");
                            $no=1;
                            while ($data = mysqli_fetch_assoc($query)){
                         ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['tanggal'];?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['alamat'];?> </td>
                                            <td>
                                                <a href="cetak/c_sporadik.php?kode=<?php echo $data['kode'];?>" target="_BLANK" class="btn"><i class="fa fa-print"></i></a>
                                                <a href="?page=edit_sporadik&amp;kode=<?php echo "$data[kode]"; ?>" class="btn"><i class="fa fa-edit"></i></a>
                                                <a href="hapus/h_sporadik.php?kode=<?php echo $data['kode'];?>" class="btn"><i class="fa fa-trash"></i></a>
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
