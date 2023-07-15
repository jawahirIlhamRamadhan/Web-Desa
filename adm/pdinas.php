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
                            <h1 class="title-5">SURAT PERJALANAN DINAS
                            </h1>
                            <hr class="line-seprate">
                        </div>
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

                        <form action="act/s_pd.php" onsubmit="return validasi_input(this)" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                                    $query = mysqli_query ($con, "SELECT * FROM t_jenissurat WHERE kode='JS029' ORDER BY id ASC ");
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

                                    <hr>
                                    <h6 class="label">PEJABAT BERWENANG YG MEMBERI TUGAS PERJALANAN DINAS:</h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama Pejabat / Kepala Desa</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nama" name="nama" value="<?php echo $rdes['kades']; ?>"  readonly="readonly" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nip" class=" form-control-label">NIP</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nip" name="nip" value="<?php echo $rdes['nipkades']; ?>" readonly="readonly" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="pang" class=" form-control-label">Pangkat</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="pang" name="pang" placeholder="Pangkat" class="form-control"><small class="form-text text-muted">Opsional *)</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jab" class=" form-control-label">Jabatan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="jab" name="jab" Value="Kepala Desa <?php echo $rdes['desa']; ?>" readonly="readonly" class="form-control"></div>
                                    </div>
                                      <?php }} ?>                                                                  <hr>
                                    <h6 class="label">PEJABAT YG DIBERI TUGAS PERJALANAN DINAS:</h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama1" class=" form-control-label">Nama </label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nama1" name="nama1" placeholder="Nama Lengkap"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nip1" class=" form-control-label">NIP</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nip1" name="nip1" placeholder="NIP (Nomor Induk Pegawai)" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="pang1" class=" form-control-label">Pangkat</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="pang1" name="pang1" placeholder="Pangkat" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jab1" class=" form-control-label">Jabatan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="jab1" name="jab1" placeholder="Jabatan" class="form-control"></div>
                                    </div>

                                    <hr>
                                    <h6 class="label">KETERANGAN TUGAS PERJALANAN DINAS:</h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tugas" class=" form-control-label">Uraian Tugas</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tugas" name="tugas" placeholder="Uraian Tugas yang diberikan"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp" class=" form-control-label">Tempat Tujuan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tmp" name="tmp" placeholder="Tempat Tujuan Tugas" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="berangkat" class=" form-control-label">Tanggal Berangkat</label></div>
                                        <div class="col-12 col-md-4"><input type="date" id="berangkat" name="berangkat" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kembali" class=" form-control-label">Tanggal Kembali</label></div>
                                        <div class="col-12 col-md-4"><input type="date" id="kembali" name="kembali" class="form-control"></div>
                                    </div>

                                    <hr>
                                    <h6 class="label">KETERANGAN BIAYA PERJALANAN DINAS :</h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tingkat" class=" form-control-label">Tingkat Biaya</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="tingkat" id="tingkat" class="form-control" data-toggle="tooltip" data-placement="left" title="Sesuaikan tingkatan biaya sesuai PMK : 07/PMK.05/2008">
                                                <option value="-" selected="selected">Pilih Tingkat Biaya</option>
                                                <option value="A">Tingkat A</option>
                                                <option value="B">Tingkat B</option>
                                                <option value="C">Tingkat C</option>
                                                <option value="D">Tingkat D</option>
                                                <option value="E">Tingkat E</option>
                                                <option value="F">Tingkat F</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="uh" class=" form-control-label">Uang Harian</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="uh" name="uh" placeholder="Jumlah uang harian" class="form-control"><small class="form-text text-muted">Berupa : Uang Makan, Uang Saku dan Tranfort Lokal</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="trans" class=" form-control-label">Transfort</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="trans" name="trans" placeholder="Jumlah uang transfort" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="inap" class=" form-control-label">Penginapan</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="inap" name="inap" placeholder="Jumlah uang penginapan" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="rep" class=" form-control-label">Representatif</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="rep" name="rep" placeholder="Jumlah uang Representatif"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="sewa" class=" form-control-label">Sewa Kendaraan</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="sewa" name="sewa" placeholder="Jumlah uang sewa dalam kota" class="form-control">
                                    </div>
                                    </div>


                                <div class="panel-body">
                                    <hr>
                                    <h6 class="label">PENGIKUT :</h6>
                                    <hr>       
                                  <div class="control-group after-add-more">
                                    <table class="">
                                    <tr>
                                        <td width="300">Nama</td>
                                        <td width="150">Tanggal Lahir</td>
                                        <td width="150">Keterangan</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <input type="hidden" name="kodesuratpd[]" value="<?php echo $kodesurat ?>" class="form-control">
                                            <td width="300"><input type="text" name="nm[]" class="form-control"></td>
                                            <td width="150"><input type="text" name="tgl_lahir[]" class="form-control"></td>
                                            <td width="150"><input type="text" name="ket[]" class="form-control"></td>
                                            <td><button class="btn btn-success add-more" type="button"><i class="fa fa-plus"></i>
                                    </button></td>
                                    </tr>

                                    </table>
                                  </div>
                                <div class="copy invisible">
                                <div class="control-group">
                                <table class="">
                                        <tr>
                                        <input type="hidden" name="kodesuratpd[]" value="<?php echo $kodesurat ?>" class="form-control" >
                                        <td width="300"><input type="text" name="nm[]" class="form-control"></td>
                                        <td width="150"><input type="text" name="tgl_lahir[]" class="form-control"></td>
                                        <td width="150"><input type="text" name="ket[]" class="form-control"></td>
                                        <td><button class="btn btn-danger remove" type="button"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                </table>
                                </div>
                              </div>
                                  <br>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><button type="reset" class="btn btn-primary btn-sm pull pull-left">Reset</button></div>
                                        <div class="col col-md-6"><button type="submit" name="cetak" class="btn btn-primary btn-sm pull pull-right">Cetak</button></div>
                                        
                                    </div>
                                </form>                        

                        </div>
                    </div>
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
                                            <th>Nama </th>
                                            <th>Tugas </th>
                                            <th>Tempat </th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                        <?php 
                            $query = mysqli_query ($con, "SELECT * FROM t_detailsurat WHERE kodejenis='JS029' ORDER BY id DESC ");
                            while ($r = mysqli_fetch_array($query)){
                                $dt=explode(';', $r['detail'])
                         ?>
                                        <tr>
                                            <td><?php echo $r['id'];?></td>
                                            <td><?php echo $r['no'];?></td>
                                            <td><?php echo $r['tanggal'];?></td>
                                            <td><?php echo $dt[4];?></td>
                                            <td><?php echo $dt[8];?></td>
                                            <td><?php echo $dt[9];?></td>
                                            <td><a href="?page=cetak_pdinas&amp;kode=<?php echo $r['kode'];?>" class="btn"><i class="fa fa-print"></i></a>
                                            <a href="?page=edit_pdinas&amp;kode=<?php echo $r['kode'];?>" class="btn"><i class="fa fa-edit"></i></a>
                                            <a href="hapus/h_pd.php?kode=<?php echo $r['kode'];?>" class="btn"><i class="fa fa-trash"></i></a></td>
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
		$(document).ready(function(){
			$('#buatSurat').click(function(){
				$('#modalSurat , #bg').fadeIn("slow");
			});
			$('#tombol-tutup').click(function(){
				$('#modalSurat , #bg').fadeOut("slow");
			});
		});
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
