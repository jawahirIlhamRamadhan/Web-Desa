<?php
//include '../sesi.php';
include 'koneksi.php';
include_once "assets/inc.php";
?>
<body>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>SURAT PENGANTAR PERNIKAHAN (N1-n6)</h4>
            </div>
        <div class="card-body">
            <div class="custom-tab">


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

                                <form action="act/s_sutarnikah.php" onsubmit="return validasi_input(this)" method="post" enctype="multipart/form-data" class="form-horizontal">

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
                                    $query = mysqli_query ($con, "SELECT * FROM t_jenissurat WHERE kode='JS019' ORDER BY id ASC ");
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
			<nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#Cs" role="tab" aria-controls="custom-nav-home" aria-selected="true"><b>CALON SUAMI</b></a>
                    <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#Ci" role="tab" aria-controls="custom-nav-profile" aria-selected="false"><b>CALON ISTRI</b></a>
                    <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#Ayah" role="tab" aria-controls="custom-nav-contact" aria-selected="false"><b>AYAH</b></a>
                    <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#Ibu" role="tab" aria-controls="custom-nav-contact" aria-selected="false"><b>IBU</b></a>
                    <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#Akad" role="tab" aria-controls="custom-nav-contact" aria-selected="false"><b>AKAD NIKAH</b></a>
                </div>
                </nav>
                <br>
        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
            <div class="tab-pane fade show active" id="Cs" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                    <h6 class="label">IDENTITAS CALON SUAMI :</h6>
                                    <hr>       
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nika" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="nika" name="nika" onkeyup="isinika()" class="form-control" maxlength="16"  placeholder="Ketikan NIK " ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="namaa" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="namaa" name="namaa" placeholder="Nama " class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nmayaha" class=" form-control-label">Bin</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nmayaha" name="nmayaha" placeholder="Nama Ayah Kandung" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                    <div class="col col-md-3"><label for="jka" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="jka" id="jka" class="form-control">
                                                <option value="-" selected="selected">Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahira" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="tmp_lahira" name="tmp_lahira" placeholder="Tempat Lahir " class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahira" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="tgl_lahira" name="tgl_lahira" placeholder="Tanggal Lahir " class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kwnga" class=" form-control-label">Kewarga Negaraan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kwnga" name="kwnga" placeholder="Kewarga Negaraan" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agamaa" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="agamaa" id="agamaa" class="form-control">
                                                <option value="-" selected="selected">Agama</option>
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
                                        <div class="col-12 col-md-6"><input type="text" id="pkjna" name="pkjna" placeholder="Pekerjaan"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="prova" class=" form-control-label">Provinsi</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="prova" name="prova"  placeholder="Provinsi" class="form-control"><small class="form-text text-muted">Contoh : Banten</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kaba" class=" form-control-label">Kabupaten/Kota</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kaba" name="kaba"  placeholder="Kabupaten/Kota" class="form-control"><small class="form-text text-muted">Contoh : Tangerang</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="keca" class=" form-control-label">Kecamatan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="keca" name="keca"  placeholder="Kecamatan" class="form-control"><small class="form-text text-muted">Contoh : Cikupa</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desaa" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="desaa" name="desaa"  placeholder="Desa" class="form-control"><small class="form-text text-muted">Contoh : Bitung Jaya</small></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="almta" class=" form-control-label">Alamat/Rt./Rw.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almta" name="almta"  placeholder="xxx/xxx" class="form-control"><small class="form-text text-muted">Contoh : Kp. Pulo, RT/RW.011/005</small></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="statusa" class=" form-control-label">Status </label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="statusa" name="statusa" placeholder="Status Pernikahan" class="form-control"><small class="form-text text-muted">Contoh : Perjaka atau Duda</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="statusna" class=" form-control-label">Status NA</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="statusna" id="statusna" onchange="if(this.value=='Numpang Nikah'){document.getElementById('statusnb').value='Tidak Numpang'} else {document.getElementById('statusnb').value='Numpang Nikah' };" required class="form-control">
                                                <option value="-" selected="selected">Status NA</option>
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
                                        <div class="col-12 col-md-4"><input type="text" id="nikb" name="nikb" onkeyup="isinikb()" class="form-control" maxlength="16"  placeholder="Ketikan NIK " ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="namab" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="namab" name="namab" placeholder="Nama "  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nmayahb" class=" form-control-label">Binti</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nmayahb" name="nmayahb" placeholder="Nama Ayah Kandung" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                    <div class="col col-md-3"><label for="jkb" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="jkb" id="jkb" class="form-control">
                                                <option value="-" selected="selected">Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahirb" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="tmp_lahirb" name="tmp_lahirb" placeholder="Tempat Lahir "  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahirb" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="tgl_lahirb" name="tgl_lahirb" placeholder="Tanggal Lahir"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kwngb" class=" form-control-label">Kewarga negaraan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kwngb" name="kwngb" placeholder="Kewarga negaraan"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agamab" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="agamab" id="agamab" class="form-control">
                                                <option value="-" selected="selected">Agama</option>
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
                                        <div class="col-12 col-md-6"><input type="text" id="pkjnb" name="pkjnb" placeholder="Pekerjaan" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="provb" class=" form-control-label">Provinsi</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="provb" name="provb"  placeholder="Provinsi" class="form-control"><small class="form-text text-muted">Contoh : Banten</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kabb" class=" form-control-label">Kabupaten/Kota</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kabb" name="kabb"  placeholder="Kabupaten/Kota" class="form-control"><small class="form-text text-muted">Contoh : Tangerang</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kecb" class=" form-control-label">Kecamatan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kecb" name="kecb"  placeholder="Kecamatan" class="form-control"><small class="form-text text-muted">Contoh : Cikupa</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desab" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="desab" name="desab"  placeholder="Desa" class="form-control"><small class="form-text text-muted">Contoh : Bitung Jaya</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="almtb" class=" form-control-label">Alamat/Rt./Rw.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almtb" name="almtb"  placeholder="xxx/xxx" class="form-control"><small class="form-text text-muted">Contoh : Kp. Pulo, RT/RW.011/005</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="statusb" class=" form-control-label">Status </label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="statusb" name="statusb" placeholder="Status Pernikahan" class="form-control"><small class="form-text text-muted">Contoh : Gadis atau Janda</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="statusnb" class=" form-control-label">Status NA</label></div>
                                        <div class="col-12 col-md-4">
                                            <input type="text" name="statusnb" id="statusnb" readonly required class="form-control">
                                        </div>
                                    </div>
                                </div>
         <div class="tab-pane fade" id="Ayah" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                    <h6 class="label">IDENTITAS AYAH : <small class="form-text text-muted">Ayah dari Calon yang tidak Numpang NA</small></h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="nik" name="nik" onkeyup="isinik()" class="form-control" maxlength="16"  placeholder="Ketikan NIK Ayah" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nama" name="nama" placeholder="Nama Ayah" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="bin" class=" form-control-label">Bin</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="bin" name="bin" placeholder="Nama Ayah" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jk" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="jk" id="jk" class="form-control">
                                                <option value="-" selected="selected">Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahir" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="tmp_lahir" name="tmp_lahir" placeholder="Tempat Lahir Ayah" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahir" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir Ayah" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kwng" class=" form-control-label">Kewarga Negaraan </label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kwng" name="kwng"  placeholder="Kewarga Negaraan" class="form-control"></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agama" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="agama" id="agama" class="form-control">
                                                <option value="-" selected="selected">Agama</option>
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
                                        <div class="col-12 col-md-6"><input type="text" id="pkjn" name="pkjn" placeholder="Pekerjaan" class="form-control"></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="prov" class=" form-control-label">Provinsi</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="prov" name="prov"  placeholder="Provinsi" class="form-control"><small class="form-text text-muted">Contoh : Banten</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kab" class=" form-control-label">Kabupaten/Kota</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kab" name="kab"  placeholder="Kabupaten/Kota" class="form-control"><small class="form-text text-muted">Contoh : Tangerang</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kec" class=" form-control-label">Kecamatan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kec" name="kec"  placeholder="Kecamatan" class="form-control"><small class="form-text text-muted">Contoh : Cikupa</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desa" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="desa" name="desa"  placeholder="Desa" class="form-control"><small class="form-text text-muted">Contoh : Bitung Jaya</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="almt" class=" form-control-label">Alamat/Rt./Rw.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almt" name="almt"  placeholder="xxx/xxx" class="form-control"><small class="form-text text-muted">Contoh : Kp. Pulo, RT/RW.011/005</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="status" class=" form-control-label">Status </label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="status" name="status" placeholder="Status" class="form-control"></div>
                                    </div>
                                    </div>
         <div class="tab-pane fade" id="Ibu" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                    <h6 class="label">IDENTITAS IBU : <small class="form-text text-muted">Ibu dari Calon yang tidak Numpang NA</small></h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="nik1" name="nik1" onkeyup="isinik1()" class="form-control" maxlength="16"  placeholder="Ketikan NIK Ibu" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="nama1" name="nama1" placeholder="Nama Ibu" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="bin1" class=" form-control-label">Binti</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="bin1" name="bin1" placeholder="Nama Ayah" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jk1" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="jk1" id="jk1" class="form-control">
                                                <option value="-" selected="selected">Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahir" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="tmp_lahir1" name="tmp_lahir1" placeholder="Tempat Lahir Ibu" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahir" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="tgl_lahir1" name="tgl_lahir1" placeholder="Tanggal Lahir Ibu" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kwng1" class=" form-control-label">Kewarga Negaraan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kwng1" name="kwng1" placeholder="Kewarga Negaraan" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agama" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="agama1" id="agama1" class="form-control">
                                                <option value="-" selected="selected">Agama</option>
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
                                        <div class="col-12 col-md-6"><input type="text" id="pkjn1" name="pkjn1" placeholder="Pekerjaan" class="form-control"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="prov1" class=" form-control-label">Provinsi</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="prov1" name="prov1"  placeholder="Provinsi" class="form-control"><small class="form-text text-muted">Contoh : Banten</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kab1" class=" form-control-label">Kabupaten/Kota</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kab1" name="kab1"  placeholder="Kabupaten/Kota" class="form-control"><small class="form-text text-muted">Contoh : Tangerang</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kec1" class=" form-control-label">Kecamatan</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="kec1" name="kec1"  placeholder="Kecamatan" class="form-control"><small class="form-text text-muted">Contoh : Cikupa</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desa1" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="desa1" name="desa1"  placeholder="Desa" class="form-control"><small class="form-text text-muted">Contoh : Bitung Jaya</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="almt1" class=" form-control-label">Alamat/Rt./Rw.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almt1" name="almt1"  placeholder="xxx/xxx" class="form-control"><small class="form-text text-muted">Contoh : Kp. Pulo, RT/RW.011/005</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="status1" class=" form-control-label">Status</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="status1" name="status1"  placeholder="Status" class="form-control"></div>
                                    </div>
                            </div>
            <div class="tab-pane fade" id="Akad" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                    <h6 class="label">PELAKSANAAN AKAD NIKAH:</h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="hari" class=" form-control-label">Hari</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="hari" id="hari" class="form-control">
                                                <option value="-" selected="selected">--Pilih Hari--</option>
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
                                        <div class="col-12 col-md-4"><input type="date" id="tgl" name="tgl" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="waktu" class=" form-control-label">Waktu</label></div>
                                        <div class="col-12 col-md-4"><input type="time" id="waktu" name="waktu" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmpt" class=" form-control-label">Tempat</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="tmpt" name="tmpt" placeholder="Tempat Pelaksanaan Akad Nikah" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="maskawin" class=" form-control-label">Maskawin</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="maskawin" name="maskawin" class="form-control" placeholder="Maskawin" ></div>
                                    </div>

                                   <hr>
                                     <div class="row form-group">
                                        <div class="col col-md-6"><button type="reset" class="btn btn-primary btn-sm pull pull-left">Reset</button></div>
                                        <div class="col col-md-6"><button type="submit" name="cetak" class="btn btn-primary btn-sm pull pull-right">Cetak</button></div>
                                        
                                    </div>
                                </div>
                            </div>
                                
                    </div>
                </div>
            </div>
    </div>
</form>
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
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                        <?php 
                            $query = mysqli_query ($con, "SELECT * FROM t_detailsurat WHERE kodejenis='JS019' ORDER BY id DESC ");
                            while ($r = mysqli_fetch_array($query)){
                                $dt=explode(';', $r['detail']);
                         ?>
                                        <tr>
                                            <td><?php echo $r['id'];?></td>
                                            <td><?php echo $r['no'];?></td>
                                            <td><?php echo $r['tanggal'];?></td>
                                            <td><?php echo $dt[1];?></td>
                                            <td><a href="?page=cetak_n1-n6&amp;kode=<?php echo $r['kode'];?>" class="btn"><i class="fa fa-print"></i></a><a href="?page=edit_n1-n6&amp;kode=<?php echo $r['kode'];?>" class="btn"><i class="fa fa-edit"></i></a>
                                            <a href="hapus/h_sutarnikah.php?kode=<?php echo $r['kode'];?>" class="btn"><i class="fa fa-trash"></i></a></td>
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
                    $('#pkjn').val(obj.kerjaan);
                    $('#prov').val(obj.prov);
                    $('#kab').val(obj.kab);
                    $('#kec').val(obj.kec);
                    $('#desa').val(obj.desa);
                    $('#almt').val(obj.alamat);
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
                    $('#pkjn1').val(obj.kerjaan);
                    $('#prov1').val(obj.prov);
                    $('#kab1').val(obj.kab);
                    $('#kec1').val(obj.kec);
                    $('#desa1').val(obj.desa);
                    $('#almt1').val(obj.alamat);
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
                    $('#pkjna').val(obj.kerjaan);
                    $('#prova').val(obj.prov);
                    $('#kaba').val(obj.kab);
                    $('#keca').val(obj.kec);
                    $('#desaa').val(obj.desa);
                    $('#almta').val(obj.alamat);
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
                    $('#pkjnb').val(obj.kerjaan);
                    $('#provb').val(obj.prov);
                    $('#kabb').val(obj.kab);
                    $('#kecb').val(obj.kec);
                    $('#desab').val(obj.desa);
                    $('#almtb').val(obj.alamat);
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
            function statusna(){
                var caripel = $("#statusna").val();
                $.ajax({
                    url: 'form/ambilpelanggan.php',
                    data:"pelanggan="+caripel ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#idpel').val(obj.idpel);
                    $('#almtpelanggan').val(obj.almtpel);
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
