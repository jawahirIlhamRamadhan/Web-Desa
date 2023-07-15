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
                            <h1 class="title-5">EDIT SURAT UNDANGAN
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <?php
            $KodeEdit= isset($_GET['page']) ?  $_GET['kode'] : $_POST['kodesurat'];
            $data=mysqli_query($con, "SELECT * FROM t_detailsurat  where t_detailsurat.kode='$KodeEdit'");
            $no=1;
            while($row =mysqli_fetch_array($data)){ 
            $dt=explode(';', $row['detail']);
            ?>   
                    <form action="update/u_undangan.php"  method="POST" enctype="multipart/form-data" class="form-horizontal">

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
                                        <div class="col-12 col-md-4"><input type="text" id="nosurat" name="nosurat" class="form-control" value="<?php echo $row ['no']; ?>" ></div>
                                </div>

                           <hr>
                                    <h6 class="label">KEGIATAN / ACARA :</h6>
                                    <hr> 
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="keg" class=" form-control-label">Kegiatan / Acara</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="keg" name="keg" value="<?php echo $dt[0]; ?>"  class="form-control"><small class="form-text text-muted">Contoh : Musyawarah Penyusunan RKPDesa Tahun 2023</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="hari" class=" form-control-label">Hari</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="hari" id="hari" class="form-control">
                                                <option value="<?php echo $dt[1]; ?>"  selected="selected"><?php echo $dt[1]; ?></option>
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
                                        <div class="col col-md-3"><label for="tgl" class=" form-control-label">Tanggal</label></div>
                                        <div class="col-12 col-md-4"><input type="date" id="tgl" name="tgl" value="<?php echo $dt[2]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="wkt" class=" form-control-label">Waktu</label></div>
                                        <div class="col-12 col-md-4"><input type="time" id="wkt" name="wkt" value="<?php echo $dt[3]; ?>"   class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp" class=" form-control-label">Tempat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tmp" name="tmp"  value="<?php echo $dt[4]; ?>"  class="form-control"><small class="form-text text-muted">Contoh : Aula Desa Dagelan</small></div>
                                    </div>

                                <div class="panel-body">
                                    <hr>
                                    <h6 class="label">NAMA / LEMBAGA YANG DIUNDANG :</h6>
                                    <hr>       
                                  <div class="control-group">
                                    <table class="" width="100%" align="center" border="0">
                                    <tr>
                                        <td>Nama / Lembaga</td>
                                        <td width="5%"></td>
                                    </tr>
                                    <?php
                                    $data=mysqli_query($con, "SELECT *  FROM  t_dataundangan WHERE kodeu='$_GET[kode]' ");
                                    $no=1;
                                    while($row2 =mysqli_fetch_array($data)){ 
                                    ?> 
                                    <tr>
                                        <input type="hidden" name="kodeu[]" value="<?php echo $row2['kodeu'];?>" class="form-control">
                                            <td width="80%"><input type="text" name="nm[]" value="<?php echo $row2 ['nm']; ?>" class="form-control"></td>
                                            <td width="5%"><button data-toggle="tooltip" data-placement="left" title="Tambah data satu per satu lalu klik Update, dst." class="btn btn-success" type="button"><i class="fa fa-plus"></i>
                                    </button></td>
                                    </tr>
                                    <?php } ?>
                                    </table>
                                  </div>


                                <div class="copy">
                                <div class="control-group after-add-more">
                                <table class="" width="100%" align="center" border="0">
                                <?php
                                    $data=mysqli_query($con, "SELECT *  FROM  t_detailsurat WHERE kode='$_GET[kode]' ");
                                    $no=1;
                                    while($row3 =mysqli_fetch_array($data)){ 
                                    ?> 
                                        <tr>
                                        <input type="hidden" name="kodeu[]" value="<?php echo $row3['kode'];?>" class="form-control" >
                                        <td width="80%"><input type="text" name="nm[]" class="form-control"></td>
                                        <td width="5%"><button class="btn btn-danger remove" type="button"><i class="fa fa-trash"></i></button></td>
                                        </tr> <?php } ?>
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
