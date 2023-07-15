<?php
//include '../sesi.php';
include 'koneksi.php';
include_once "assets/inc.php";
?>
    <body>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>EDIT PENGANTAR PERNIKAHAN (N1-n6)</h4>
            </div>
        <div class="card-body">
            <div class="custom-tab">
<div class="card-body card-block">
<?php
            $KodeEdit= isset($_GET['page']) ?  $_GET['kode'] : $_POST['kodesurat'];
            $data=mysqli_query($con, "SELECT t_detailsurat.*, t_penduduk.* FROM t_detailsurat, t_penduduk  where t_detailsurat.kode='$KodeEdit' AND t_detailsurat.nik=t_penduduk.nik ");
            $no=1;
            while($row =mysqli_fetch_array($data)){ 
            $dt=explode(';', $row['detail']);
            ?>
                        <form action="update/u_sutarnikah.php"  method="post" onsubmit="return validasi_input(this)"  enctype="multipart/form-data" class="form-horizontal">

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
<nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#Cs" role="tab" aria-controls="custom-nav-home" aria-selected="true">CALON SUAMI</a>
                    <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#Ci" role="tab" aria-controls="custom-nav-profile" aria-selected="false">CALON ISTRI</a>
                    <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#Ayah" role="tab" aria-controls="custom-nav-contact" aria-selected="false">AYAH</a>
                    <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#Ibu" role="tab" aria-controls="custom-nav-contact" aria-selected="false">IBU</a>
                    <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#Akad" role="tab" aria-controls="custom-nav-contact" aria-selected="false">AKAD NIKAH</a>
                </div>
                </nav>
                <br>
        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
            <div class="tab-pane fade show active" id="Cs" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                    <h6 class="label">IDENTITAS CALON SUAMI :</h6>
                                    <hr>       
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nika" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="nika" name="nika" onkeyup="isinika()" class="form-control" maxlength="16"  value="<?php echo $dt[0]; ?>"  ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="namaa" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="namaa" name="namaa" value="<?php echo $dt[1]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nmayaha" class=" form-control-label">Bin / Binti</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nmayaha" name="nmayaha" value="<?php echo $dt[2]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                    <div class="col col-md-3"><label for="jka" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="jka" id="jka" class="form-control">
                                                <option value="<?php echo $dt[3]; ?>" selected="selected"><?php echo $dt[3]; ?></option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahira" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="tmp_lahira" name="tmp_lahira"value="<?php echo $dt[4]; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahira" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="tgl_lahira" name="tgl_lahira" value="<?php echo $dt[5]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kwnga" class=" form-control-label">Kewarga Negaraan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kwnga" name="kwnga" value="<?php echo $dt[6]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agamaa" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="agamaa" id="agamaa" class="form-control">
                                                <option value="<?php echo $dt[7]; ?>"  selected="selected"><?php echo $dt[7]; ?></option>
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
                                        <div class="col col-md-3"><label for="pkjna" class=" form-control-label">Pekerjaan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="pkjna" name="pkjna" value="<?php echo $dt[8]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="prova" class=" form-control-label">Provinsi</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="prova" name="prova"  value="<?php echo $dt[12]; ?>" class="form-control"><small class="form-text text-muted">Contoh : Banten</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kaba" class=" form-control-label">Kabupaten/Kota</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kaba" name="kaba" value="<?php echo $dt[11]; ?>" class="form-control"><small class="form-text text-muted">Contoh : Tangerang</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="keca" class=" form-control-label">Kecamatan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="keca" name="keca"  value="<?php echo $dt[10]; ?>" class="form-control"><small class="form-text text-muted">Contoh : Cikupa</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desaa" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="desaa" name="desaa"  value="<?php echo $dt[9]; ?>" class="form-control"><small class="form-text text-muted">Contoh : Bitung Jaya</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="alamata" class=" form-control-label">Alamat/Rt./Rw.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almta" name="almta"  value="<?php echo $dt[13]; ?>" class="form-control"><small class="form-text text-muted">Contoh : Kp. Pulo, RT/RW.011/005</small></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="statusa" class=" form-control-label">Status </label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="statusa" name="statusa" value="<?php echo $dt[14]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="statusna" class=" form-control-label">Status NA</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="statusna" id="statusna" class="form-control">
                                                <option value="<?php echo $dt[15]; ?>" selected="selected"><?php echo $dt[15]; ?></option>
                                                <option value="Tidak Numpang">Tidak Numpang</option>
                                                <option value="Numpang Nikah">Numpang Nikah</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
             <div class="tab-pane fade" id="Ci" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                    <h6 class="label">IDENTITAS CALON ISTRI :</h6>
                                    <hr>          
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nikb" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="nikb" name="nikb" onkeyup="isinikb()" class="form-control" maxlength="16"  value="<?php echo $dt[16]; ?>"  ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="namab" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="namab" name="namab" value="<?php echo $dt[17]; ?>"   class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nmayahb" class=" form-control-label">Bin / Binti</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nmayahb" name="nmayahb" value="<?php echo $dt[18]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                    <div class="col col-md-3"><label for="jkb" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="jkb" id="jkb" class="form-control">
                                                <option value="<?php echo $dt[19]; ?>" selected="selected"><?php echo $dt[19]; ?></option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahirb" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="tmp_lahirb" name="tmp_lahirb" value="<?php echo $dt[20]; ?>"   class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahirb" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="tgl_lahirb" name="tgl_lahirb" value="<?php echo $dt[21]; ?>"   class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kwngb" class=" form-control-label">Kewarga negaraan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kwngb" name="kwngb" value="<?php echo $dt[22]; ?>"   class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agamab" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="agamab" id="agamab" class="form-control">
                                                <option value="<?php echo $dt[23]; ?>"  selected="selected"><?php echo $dt[23]; ?></option>
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
                                        <div class="col col-md-3"><label for="pkjnb" class=" form-control-label">Pekerjaan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="pkjnb" name="pkjnb" value="<?php echo $dt[24]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="provb" class=" form-control-label">Provinsi</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="provb" name="provb"  value="<?php echo $dt[28]; ?>" class="form-control"><small class="form-text text-muted">Contoh : Banten</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kabb" class=" form-control-label">Kabupaten/Kota</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kabb" name="kabb"  value="<?php echo $dt[27]; ?>" class="form-control"><small class="form-text text-muted">Contoh : Tangerang</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kecb" class=" form-control-label">Kecamatan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kecb" name="kecb"  value="<?php echo $dt[26]; ?>" class="form-control"><small class="form-text text-muted">Contoh : Cikupa</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desab" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="desab" name="desab" value="<?php echo $dt[25]; ?>" class="form-control"><small class="form-text text-muted">Contoh : Bitung Jaya</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="alamatb" class=" form-control-label">Alamat/Rt./Rw.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almtb" name="almtb"  value="<?php echo $dt[29]; ?>" class="form-control"><small class="form-text text-muted">Contoh : Kp. Pulo, RT/RW.011/005</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="statusb" class=" form-control-label">Status </label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="statusb" name="statusb" value="<?php echo $dt[30]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="statusnb" class=" form-control-label">Status NA</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="statusnb" id="statusnb" class="form-control">
                                                <option value="<?php echo $dt[31]; ?>" selected="selected"><?php echo $dt[31]; ?></option>
                                                <option value="Tidak Numpang">Tidak Numpang</option>
                                                <option value="Numpang Nikah">Numpang Nikah</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
             <div class="tab-pane fade" id="Ayah" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                    <h6 class="label">IDENTITAS AYAH : <small class="form-text text-muted">Ibu dari Calon yang tidak Numpang NA</small></h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="nik" name="nik" onkeyup="isinik()" class="form-control" maxlength="16"  value="<?php echo $dt[32]; ?>"  ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nama" name="nama" value="<?php echo $dt[33]; ?>"  class="form-control"></div>
                                    </div>
                                     <div class="row form-group">
                                        <div class="col col-md-3"><label for="binayah" class=" form-control-label">Bin</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="bin" name="bin"value="<?php echo $dt[34]; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                    <div class="col col-md-3"><label for="jk" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="jk" id="jk" class="form-control">
                                                <option value="<?php echo $dt[35]; ?>" selected="selected"><?php echo $dt[35]; ?></option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahir" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="tmp_lahir" name="tmp_lahir" value="<?php echo $dt[36]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahir" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="tgl_lahir" name="tgl_lahir" value="<?php echo $dt[37]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kwng" class=" form-control-label">Kewarga Negaraan </label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kwng" name="kwng"  value="<?php echo $dt[38]; ?>"  class="form-control"></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agama" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="agama" id="agama" class="form-control">
                                                <option value="<?php echo $dt[39]; ?>"  selected="selected"><?php echo $dt[39]; ?></option>
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
                                        <div class="col col-md-3"><label for="pkjn" class=" form-control-label">Pekerjaan </label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="pkjn" name="pkjn"  value="<?php echo $dt[40]; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="prov" class=" form-control-label">Provinsi</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="prov" name="prov" value="<?php echo $dt[44]; ?>" class="form-control"><small class="form-text text-muted">Contoh : Banten</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kab" class=" form-control-label">Kabupaten/Kota</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kab" name="kab" value="<?php echo $dt[43]; ?>"class="form-control"><small class="form-text text-muted">Contoh : Tangerang</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kec" class=" form-control-label">Kecamatan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kec" name="kec" value="<?php echo $dt[42]; ?>" class="form-control"><small class="form-text text-muted">Contoh : Cikupa</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desa" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="desa" name="desa" value="<?php echo $dt[41]; ?>"class="form-control"><small class="form-text text-muted">Contoh : Bitung Jaya</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="alamat" class=" form-control-label">Alamat/Rt./Rw.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almt" name="almt"value="<?php echo $dt[45]; ?>" class="form-control"><small class="form-text text-muted">Contoh : Kp. Pulo, RT/RW.011/005</small></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="status" class=" form-control-label">Status </label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="status" name="status"  value="<?php echo $dt[46]; ?>"  class="form-control"></div>
                                    </div>
                                </div>
             <div class="tab-pane fade" id="Ibu" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                    <h6 class="label">IDENTITAS IBU : <small class="form-text text-muted">Ibu dari Calon yang tidak Numpang NA</small></h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="nik1" name="nik1" onkeyup="isinik1()" class="form-control" maxlength="16"  value="<?php echo $dt[47]; ?>"  ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nama1" name="nama1"value="<?php echo $dt[48]; ?>" class="form-control"></div>
                                    </div>
                                     <div class="row form-group">
                                        <div class="col col-md-3"><label for="binibu" class=" form-control-label">Binti</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="bin1" name="bin1"value="<?php echo $dt[49]; ?>" class="form-control"></div>
                                    </div>
                                                                        <div class="row form-group">
                                    <div class="col col-md-3"><label for="jk1" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="jk1" id="jk1" class="form-control">
                                                <option value="<?php echo $dt[50]; ?>" selected="selected"><?php echo $dt[50]; ?></option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahir" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="tmp_lahir1" name="tmp_lahir1" value="<?php echo $dt[51]; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahir" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="tgl_lahir1" name="tgl_lahir1" value="<?php echo $dt[52]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kwng1" class=" form-control-label">Kewarga Negaraan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kwng1" name="kwng1" value="<?php echo $dt[53]; ?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agama" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="agama1" id="agama1"  class="form-control">
                                                <option value="<?php echo $dt[54]; ?>"  selected="selected"><?php echo $dt[54]; ?></option>
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
                                        <div class="col-12 col-md-6"><input type="text" id="pkjn1" name="pkjn1"  value="<?php echo $dt[55]; ?>" class="form-control"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="prov1" class=" form-control-label">Provinsi</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="prov1" name="prov1" value="<?php echo $dt[59]; ?>"class="form-control"><small class="form-text text-muted">Contoh : Banten</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kab1" class=" form-control-label">Kabupaten/Kota</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kab1" name="kab1"  value="<?php echo $dt[58]; ?>" class="form-control"><small class="form-text text-muted">Contoh : Tangerang</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kec1" class=" form-control-label">Kecamatan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kec1" name="kec1" value="<?php echo $dt[57]; ?>" class="form-control"><small class="form-text text-muted">Contoh : Cikupa</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desa1" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="desa1" name="desa1" value="<?php echo $dt[56]; ?>" class="form-control"><small class="form-text text-muted">Contoh : Bitung Jaya</small></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="alamat1" class=" form-control-label">Alamat/Rt./Rw.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almt1" name="almt1"  value="<?php echo $dt[60]; ?>" class="form-control"><small class="form-text text-muted">Contoh : Kp. Pulo, RT/RW.011/005</small></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="status1" class=" form-control-label">Status</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="status1" name="status1"  value="<?php echo $dt[61]; ?>"  class="form-control"></div>
                                    </div>
                                </div>
             <div class="tab-pane fade" id="Akad" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                    <h6 class="label">PELAKSANAAN AKAD NIKAH:</h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="hari" class=" form-control-label">Hari</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="hari" id="hari" class="form-control">
                                                <option value="<?php echo $dt[62]; ?>"  selected="selected"><?php echo $dt[62]; ?></option>
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
                                        <div class="col-12 col-md-4"><input type="text" id="tgl" name="tgl" class="form-control" value="<?php echo $dt[63]; ?>" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="waktu" class=" form-control-label">Waktu</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="waktu" name="waktu" value="<?php echo $dt[64]; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmpt" class=" form-control-label">Tempat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tmpt" name="tmpt" value="<?php echo $dt[65]; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="maskawin" class=" form-control-label">Maskawin</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="maskawin" name="maskawin" class="form-control"value="<?php echo $dt[66]; ?>" ></div>
                                    </div>

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
                </div>
            </div>
        </div>


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

 <script src="assets/js/jquery.min.js"></script> <!-- untuk Pemanggilan data penduduk -->
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
                    $('#kwgn1').val(obj.kwgn);
                    $('#agama1').val(obj.agama);
                    $('#status1').val(obj.status);
                    $('#pend1').val(obj.pend);
                    $('#kerjaan1').val(obj.kerjaan);
                    $('#rt1').val(obj.rt);
                    $('#dusun1').val(obj.dusun);
                });
            }

        </script>
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
                    $('#kwgna').val(obj.kwgn);
                    $('#agamaa').val(obj.agama);
                    $('#statusa').val(obj.status);
                    $('#penda').val(obj.pend);
                    $('#kerjaana').val(obj.kerjaan);
                    $('#rta').val(obj.rt);
                    $('#dusuna').val(obj.dusun);
                });
            }
        </script>

        <script type="text/javascript">
            function isinikb(){
                var nik = $("#nikb").val();
                $.ajax({
                    url: 'data/panggildatawarga.php',
                    data:"nik="+nik ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#namab').val(obj.nama);
                    $('#jkb').val(obj.jk);
                    $('#tmp_lahirb').val(obj.tmp_lahir);
                    $('#tgl_lahirb').val(obj.tgl_lahir);
                    $('#kwgnb').val(obj.kwgn);
                    $('#agamab').val(obj.agama);
                    $('#statusb').val(obj.status);
                    $('#pendb').val(obj.pend);
                    $('#kerjaanb').val(obj.kerjaan);
                    $('#rtb').val(obj.rt);
                    $('#dusunb').val(obj.dusun);
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
            function isikode(){
                var no = $("#no").val();
                $.ajax({
                    url: 'data/panggilkodesurat.php',
                    data:"no="+no ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#kodesuratw').val(obj.kode);

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
