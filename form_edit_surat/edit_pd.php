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
                            <h1 class="title-5">EDIT SURAT PERJALANAN DINAS
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <?php
            $data=mysqli_query($con, "SELECT t_detailsurat.*, t_datapdinas.*  FROM t_detailsurat, t_datapdinas  WHERE t_detailsurat.kode=t_datapdinas.kodepd AND t_detailsurat.kode='$_GET[kode]' ");
            $no=1;
            while($row =mysqli_fetch_array($data)){ 
                $dt=explode(';', $row['detail']);
            ?>  
                    <form action="update/u_pd.php"  method="POST" enctype="multipart/form-data" class="form-horizontal">

                            <div class="card-body card-block">
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
                                    <hr>
                                    <h6 class="label">PEJABAT BERWENANG YG MEMBERI TUGAS PERJALANAN DINAS:</h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama Pejabat / Kepala Desa</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nama" name="nama" value="<?php echo $dt[0]; ?>"  readonly="readonly" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nip" class=" form-control-label">NIP</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nip" name="nip" value="<?php echo $dt[1]; ?>" readonly="readonly" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="pang" class=" form-control-label">Pangkat</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="pang" name="pang" value="<?php echo $dt[2]; ?>" class="form-control"><small class="form-text text-muted">Opsional *)</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jab" class=" form-control-label">Jabatan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="jab" name="jab" value="<?php echo $dt[3]; ?>" readonly="readonly" class="form-control"></div>
                                    </div>
                                                                                                       <hr>
                                    <h6 class="label">PEJABAT YG DIBERI TUGAS PERJALANAN DINAS:</h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama1" class=" form-control-label">Nama </label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nama1" name="nama1" value="<?php echo $dt[4]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nip1" class=" form-control-label">NIP</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nip1" name="nip1" value="<?php echo $dt[5]; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="pang1" class=" form-control-label">Pangkat</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="pang1" name="pang1" value="<?php echo $dt[6]; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jab1" class=" form-control-label">Jabatan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="jab1" name="jab1" value="<?php echo $dt[7]; ?>" class="form-control"></div>
                                    </div>

                                                                                                        <hr>
                                    <h6 class="label">KETERANGAN TUGAS PERJALANAN DINAS:</h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tugas" class=" form-control-label">Uraian Tugas</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tugas" name="tugas" value="<?php echo $dt[8]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp" class=" form-control-label">Tempat Tujuan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tmp" name="tmp" value="<?php echo $dt[9]; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="berangkat" class=" form-control-label">Tanggal Berangkat</label></div>
                                        <div class="col-12 col-md-4"><input type="date" id="berangkat" name="berangkat" value="<?php echo $dt[10]; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kembali" class=" form-control-label">Tanggal Kembali</label></div>
                                        <div class="col-12 col-md-4"><input type="date" id="kembali" name="kembali" value="<?php echo $dt[11]; ?>" class="form-control"></div>
                                    </div>

                                    <hr>
                                    <h6 class="label">KETERANGAN BIAYA PERJALANAN DINAS :</h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tingkat" class=" form-control-label">Tingkat Biaya</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="tingkat" id="tingkat" class="form-control" data-toggle="tooltip" data-placement="left" title="Sesuaikan tingkatan biaya sesuai PMK : 07/PMK.05/2008">
                                                <option value="<?php echo $dt[12]; ?>" selected="selected"><?php echo $dt[12]; ?></option>
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
                                        <div class="col-12 col-md-4"><input type="text" id="uh" name="uh" value="<?php echo $dt[13]; ?>" class="form-control"><small class="form-text text-muted">Berupa : Uang Makan, Uang Saku dan Tranfort Lokal</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="trans" class=" form-control-label">Transfort</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="trans" name="trans"value="<?php echo $dt[14]; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="inap" class=" form-control-label">Penginapan</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="inap" name="inap" value="<?php echo $dt[15]; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="rep" class=" form-control-label">Representatif</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="rep" name="rep" value="<?php echo $dt[16]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="sewa" class=" form-control-label">Sewa Kendaraan</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="sewa" name="sewa" value="<?php echo $dt[17]; ?>" class="form-control">
                                    </div>
                                    </div>

                                <div class="panel-body">
                                    <hr>
                                    <h5 class="label">PENGIKUT :</h5>
                                    <hr>       
                                  <div class="control-group ">
                                    <table class="">
                                    <tr>
                                        <td width="300">Nama</td>
                                        <td width="150">Tanggal Lahir</td>
                                        <td width="150">Keterangan</td>
                                        <td></td>
                                    </tr>
                                    <?php
                                    $data=mysqli_query($con, "SELECT *  FROM  t_datapdinas  WHERE kodepd='$_GET[kode]' ");
                                    $no=1;
                                    while($row2 =mysqli_fetch_array($data)){ 
                                    ?> 
                                    <tr>
                                        <input type="hidden" name="kodesuratpd[]" value="<?php echo $row2['kodepd']; ?>" class="form-control">
                                            <td width="300"><input type="text" name="nm[]" value="<?php echo $row2['nm']; ?>" class="form-control"></td>
                                            <td width="150"><input type="text" name="tgl_lahir[]" value="<?php echo $row2['tgl_lahir']; ?>"class="form-control"></td>
                                            <td width="150"><input type="text" name="ket[]" value="<?php echo $row2['ket']; ?>" class="form-control"></td>
                                            <td><button data-toggle="tooltip" data-placement="left" title="Tambah data satu per satu lalu klik Update, dst." class="btn btn-success" type="button"><i class="fa fa-plus"></i>
                                    </button></td>
                                    </tr>
                                    <?php } ?>
                                    </table>
                                  </div>
                     
                                <div class="copy">
                                    <div class="control-group after-add-more">
                                        <table class="">
                                    <?php
                                    $data=mysqli_query($con, "SELECT * FROM t_detailsurat WHERE kode='$_GET[kode]' ");
                                    $no=1;
                                    while($row3 =mysqli_fetch_array($data)){ 
                                    ?> 
                                        <tr>
                                        <input type="hidden" name="kodesuratpd[]" value="<?php echo $row3['kode'] ;?>" class="form-control" >
                                        <td width="300"><input type="text" name="nm[]" class="form-control"></td>
                                        <td width="150"><input type="text" name="tgl_lahir[]" class="form-control"></td>
                                        <td width="150"><input type="text" name="ket[]" class="form-control"></td>
                                        <td><button class="btn btn-danger remove" type="button"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                    <?php } ?>
                                        </table>
                                    </div>
                              </div>
                                    <br>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><button type="reset" class="btn btn-primary btn-sm pull pull-left">Reset</button></div>
                                        <div class="col col-md-6"><button type="submit" name="update" class="btn btn-primary btn-sm pull pull-right">Update</button></div>
                                        
                                    </div>
                    </form>   
                    </div>
                </div>
                     <?php 
                        }
                                                //mysql_close($host);
                        ?>
 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>


<script>
    $(document).ready(function(){
      $("#tooltip").click(function(){
        $('#tooltip').tooltip("toggle");
      });
    });
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
