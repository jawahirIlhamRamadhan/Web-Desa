<?php
//include '../sesi.php';
include 'koneksi.php';
include_once "assets/inc.php";
?>
<!doctype html>
<html class="no-js" lang="en">
<body>
<div class="au-card recent-report">
            <section class="welcome p-t-1s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <h1 class="title-5">EDIT SURAT KETERANGAN AHLI WARIS
                            </h1>
                        </div>
                            <hr class="line-seprate">
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
                    <form action="update/u_suketaw.php"  method="POST" enctype="multipart/form-data" class="form-horizontal">

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
                                    <h5 class="label">PEWARIS :</h5>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="nik" name="nik" onkeyup="isinik()" class="form-control" maxlength="16"  value="<?php echo $row['nik'];?>" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nama" name="nama" value="<?php echo $row['nama'];?>" class="form-control"></div>
                                    </div>


                                <div class="panel-body">
                                    <hr>
                                    <h5 class="label">AHLI WARIS :</h5>
                                    <hr>       
                                  <div class="control-group ">
                                    <table class="">
                                    <tr>
                                        <td width="400">Nama</td>
                                        <td width="80">L/P</td>
                                        <td width="135">Umur</td>
                                        <td width="135">shdk</td>
                                        <td></td>
                                    </tr>
                                    <?php
                                    $data=mysqli_query($con, "SELECT *  FROM  t_ahliwaris  WHERE kodeaw='$_GET[kode]' ");
                                    $no=1;
                                    while($row2 =mysqli_fetch_array($data)){ 
                                    ?> 
                                    <tr>
                                            <input type="hidden" name="kodesurataw[]" value="<?php echo $row2['kodeaw'];?>" class="form-control">
                                            <td width="400"><input type="text" name="nm[]" value="<?php echo $row2['nm'];?>" class="form-control"></td>
                                            <td width="80"><input type="text" name="lp[]" value="<?php echo $row2['lp'];?>"class="form-control"></td>
                                            <td width="135"><input type="text" name="umur[]" value="<?php echo $row2['umur'];?>"class="form-control"></td>
                                            <td width="145"><input type="text" name="shdk[]" value="<?php echo $row2['shdk'];?>" class="form-control"></td>
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
                                        <input type="hidden" name="kodesurataw[]" value="<?php echo $row3['kode'];?>" class="form-control">
                                        <td width="400"><input type="text" name="nm[]" class="form-control"></td>
                                        <td width="80"><input type="text" name="lp[]" class="form-control"></td>
                                        <td width="135"><input type="text" name="umur[]" class="form-control"></td>
                                        <td width="145"><input type="text" name="shdk[]" class="form-control"></td>
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
                     <?php 
                        }
                                                //mysql_close($host);
                        ?>
                    </div>


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
