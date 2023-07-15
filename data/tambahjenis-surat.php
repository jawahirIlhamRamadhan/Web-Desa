<?php
//include '../sesi.php';
include 'koneksi.php';
include_once "assets/inc.php";
?>
<!doctype html>

<html class="no-js" lang="en">
<!--<![endif]-->

<body>
            <section class="welcome p-t-1s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-5">TAMBAH JENIS SURAT
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
                                <?php
                                $query = mysqli_query($con, "SELECT max(kode) as kodeTerbesar FROM t_jenissurat");
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
                                $huruf = "JS";
                                $kodesurat = $huruf . sprintf("%03s", $urutan);
                                ?>
                        <form action="act/s_jsurat.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kodesurat" class=" form-control-label">Kode Surat</label></div>
                                        <div class="col-12 col-md-3"><input type="text" id="kodesurat" name="kodesurat" value="<?php echo $kodesurat ?>" class="form-control" readonly="readonly"></div>
                                    </div>

                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="klasifikasi" class=" form-control-label">Klasifikasi Surat</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="klasifikasi" id="klasifikasi" class="form-control">
                                                <option value="0">Pilih Klasifikasi Surat</option>
                                    <?php 
                                    $query = mysqli_query ($con, "SELECT * FROM t_klasifikasi ORDER BY id ASC ");
                                    while ($r = mysqli_fetch_array($query)){
                                    ?>
                                                <option value="<?php echo $r['kode'];?>"><?php echo $r['kode'];?> --> <?php echo substr($r['klasifikasi'],0,50);?>***</option>
                                    <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jenis" class=" form-control-label">Jenis Surat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="jenis" name="jenis" placeholder="Masukan Jenis Surat" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nmsurat" class=" form-control-label">Nama Surat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nmsurat" name="nmsurat" placeholder="Masukan Nama Surat" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                    <div class="col col-md-3"><label for="rdtengah" class=" form-control-label">Redaksi Awal</label></div>
                                        <div class="col-12 col-md-9"><textarea name="rdawal" id="rdawal" rows="3" placeholder="Redaksi Awal" class="form-control"></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="rdtengah" class=" form-control-label">Redaksi Tengah</label></div>
                                        <div class="col-12 col-md-9"><textarea name="rdtengah" id="rdtengah" rows="3" placeholder="Redaksi Tengah" class="form-control"></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="rdtengah" class=" form-control-label">Redaksi Akhir</label></div>
                                        <div class="col-12 col-md-9"><textarea name="rdakhir" id="rdakhir" rows="3" placeholder="Redaksi Akhir"  class="form-control"></textarea></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-6"><button type="reset" class="btn btn-primary btn-sm pull pull-left">Reset</button></div>
                                        <div class="col col-md-6"><button type="submit" class="btn btn-primary btn-sm pull pull-right">Simpan</button></div>
                                        
                                    </div>
                            </div>
                        </form>
                        </div>
                    </div>

<!-- jQuery 3 -->
<script src="assets/js/jquery.min.js"></script> <!-- untuk Pemanggilan data penduduk -->
