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
                            <h1 class="title-5">EDIT DATA PENDUDUK
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
                        <div class="card-body card-block"> 
            <?php
            $data=mysqli_query($con, "SELECT * FROM t_penduduk  where nik='$_GET[nik]' ");
            $no=1;
            while($row =mysqli_fetch_array($data)){ 
            ?>  
                    <form action="update/u_penduduk.php"  method="POST" enctype="multipart/form-data" class="form-horizontal">
                                      <div class="row form-group">
                                        <div class="col col-md-3"><label for="nkk" class=" form-control-label">No. KK</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="nkk" name="nkk" maxlength="16" class="form-control" value="<?php echo $row['nkk'];?>" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="nik" name="nik" maxlength="16" class="form-control" value="<?php echo $row['nik'];?>" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nama" name="nama" value="<?php echo $row['nama'];?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jk" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="jk" id="jk" class="form-control">
                                                <option value="<?php echo $row['jk'];?>" selected="selected"><?php echo $row['jk'];?></option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahir" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="tmp_lahir" name="tmp_lahir" value="<?php echo $row['tmp_lahir'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahir" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="tgl_lahir" name="tgl_lahir" value="<?php echo $row['tgl_lahir'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kwng" class=" form-control-label">Kewarganegaraan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kwng" name="kwng" value="<?php echo $row['kwng'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agama" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="agama" id="agama"  class="form-control">
                                                <option value="<?php echo $row['agama'];?>" selected="selected"><?php echo $row['agama'];?></option>
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
                                        <div class="col col-md-3"><label for="status" class=" form-control-label">Status Perkawinan</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="status" id="status" class="form-control">
                                                <option value="<?php echo $row['status'];?>" selected="selected"><?php echo $row['status'];?></option>
                                                <option value="Kawin">Kawin</option>
                                                <option value="Belum Kawin">Belum Kawin</option>
                                                <option value="Cerai Hidup">Cerai Hidup</option>
                                                <option value="Cerai Mati">Cerai Mati</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="pend" class=" form-control-label">Pendidikan</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="pend" id="pend"  class="form-control">
                                                <option value="<?php echo $row['pend'];?>" selected="selected"><?php echo $row['pend'];?></option>
                                                <option value="SD">SD</option>
                                                <option value="SLTP">SLTP</option>
                                                <option value="SLTA">SLTA</option>
                                                <option value="D1">D1</option>
                                                <option value="D2">D2</option>
                                                <option value="D3">D3</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                                <option value="T/B. Sekolah">T/B. Sekolah</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kerjaan" class=" form-control-label">Pekerjaan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kerjaan" name="kerjaan"  value="<?php echo $row['kerjaan'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="prov" class=" form-control-label">Provinsi</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="prov" name="prov"  value="<?php echo $row['prov'];?>" class="form-control"><small class="form-text text-muted">Contoh : Banten</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kab" class=" form-control-label">Kabupaten/Kota</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kab" name="kab"  value="<?php echo $row['kab'];?>" class="form-control"><small class="form-text text-muted">Contoh : Tangerang</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kec" class=" form-control-label">Kecamatan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kec" name="kec"  value="<?php echo $row['kec'];?>" class="form-control"><small class="form-text text-muted">Contoh : Cikupa</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desa" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="desa" name="desa"  value="<?php echo $row['desa'];?>" class="form-control"><small class="form-text text-muted">Contoh : Bitung Jaya</small></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="almt" class=" form-control-label">Alamat/Rt./Rw.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almt" name="almt"  value="<?php echo $row['alamat'];?>" class="form-control"><small class="form-text text-muted">Contoh : Kp. Pulo, RT/RW.011/005</small></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="hp" class=" form-control-label">No. HP</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="hp" name="hp"  value="<?php echo $row['hp'];?>" class="form-control"><small class="form-text text-muted">Contoh : 081219168380</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="shdk" class=" form-control-label">SHDK</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="shdk" id="shdk"  class="form-control">
                                                <option value="<?php echo $row['shdk'];?>" selected="selected"><?php echo $row['shdk'];?></option>
                                                <option value="Kepala keluarga">Kepala keluarga</option>
                                                <option value="Suami">Suami</option>
                                                <option value="Istri">Istri</option>
                                                <option value="Anak">Anak</option>
                                                <option value="Ayah">Ayah</option>
                                                <option value="Ibu">Ibu</option>
                                                <option value="Famili lain">Famili lain</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file" class=" form-control-label">Foto</label></div>
                                        <div class="col-12 col-md-6"><input type="file" id="file" name="file" class="form-control"><small class="form-text text-muted">Ukuran : 3x4 cm, Max 500 KB</small>
                                            <input type="hidden" id="x" name="x"  value="<?php echo $row['foto'];?>" class="form-control"></div>
                                        <div class="col-12 col-md-3"><img src="fotowarga/<?php echo $row['foto'];?>" class="user-avatar rounded-circle pull pull-right " style="border: 1px solid white; width: 80px; height: 80px;"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="ket" class=" form-control-label">Keterangan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="ket" name="ket" value="<?php echo $row['ket'];?>" class="form-control"></div>
                                    </div>


<hr>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><button type="reset" class="btn btn-primary btn-sm pull pull-left">Reset</button></div>
                                        <div class="col col-md-6"><button type="submit" name="update" id="update" class="btn btn-primary btn-sm pull pull-right">Update</button></div>
                                        
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
<!-- Ini merupakan script yang terpenting -->

<script type="text/javascript">
    
    $(document).ready(function(){
        $('#modalview').on('show.bs.modal', function (e) {
            var nik = $(e.relatedTarget).data('nik');
            /* fungsi AJAX untuk melakukan fetch data */
            $.ajax({
                type : 'post',
                url : 'views/viewsp.php',
                /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
                data :'nik='+ nik,
                /* memanggil fungsi getDetail dan mengirimkannya */
                success : function(data){
                $('.fetch-data').html(data);
                /* menampilkan data dalam bentuk dokumen HTML */
                }
            });
         });
    });
  </script>   

 -->

<script type="text/javascript">
  function validasi(form) {  
    if (form.nkk.value=="") {
      alert('NKK / Nomor Kartu Keluarga  harus di isi !');
      form.nkk.focus();
      return false;
    }else if(form.nik.value=="") {
      alert('NIK / Nomor Induk Kependudukan harus di isi !');
      form.nik.focus();
      return false;
    }else if(form.nama.value=="") {
      alert('Nama harus di isi !');
      form.nama.focus();
      return false;
    }else if(form.jk.value=="") {
      alert('Jenis Kelamin harus di dipilih !');
      form.jk.focus();
      return false;
    }else if(form.tmp_lahir.value=="") {
      alert('Tempat Lahir harus di isi !');
      form.tmp_lahir.focus();
      return false;
    }else if(form.tgl_lahir.value=="") {
      alert('Tanggal Lahir harus di isi !');
      form.tgl_lahir.focus();
      return false;
    }else if(form.agama.value=="") {
      alert('Agama harus di pilih !');
      form.agama.focus();
      return false;
    }else if(form.status.value=="") {
      alert('Status harus di pilih !');
      form.status.focus();
      return false;
    }else if(form.pend.value=="") {
      alert('Pendidikan harus di pilih !');
      form.pend.focus();
      return false;
    }else if(form.kerjaan.value=="") {
      alert('Pekerjaan harus di isi !');
      form.kerjaan.focus();
      return false;
    }else if(form.almt.value=="") {
      alert('Alamat Rt./Rw. harus di isi !');
      form.almt.focus();
      return false;
    }else if(form.dusun.value=="") {
      alert('Dusun harus di isi !');
      form.dusun.focus();
      return false;
    }

  }
</script>

<script>
$(document).ready(function() {
$('.datatab').DataTable();
} );
</script>
</body>

</html>
