<?php
include 'koneksi.php';
include_once "assets/inc.php";
?>
<body>
    <div class="au-card recent-report">
             <section class="welcome p-t-1s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-5">TAMBAH DATA STAFF
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
                    <div class="card-body card-block"> 
      <form action="act/s_register.php"  method="POST" enctype="multipart/form-data" class="form-horizontal">
                                      <div class="row form-group">
                                        <div class="col col-md-3"><label for="uname" class=" form-control-label">Username</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="uname" name="uname" placeholder="Username" class="form-control"></div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email" class=" form-control-label">E-mail</label></div>
                                        <div class="col-12 col-md-6"><input type="email" id="email" name="email" placeholder="E-mail" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="hp" class=" form-control-label">HP</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="hp" name="hp" placeholder="No. Hp." class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desa" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="desa" name="desa" placeholder="Desa/Kelurahan" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="pass" class=" form-control-label">Password</label></div>
                                        <div class="col-12 col-md-6"><input type="password" id="pass" name="pass" placeholder="Password" class="form-control"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="level" class=" form-control-label">Level</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="level" id="level" class="form-control">
                                                <option value="">--Pilih Level --</option>
                                                <option value="admin">admin</option>
                                                <option value="staff">staff</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="foto" class=" form-control-label">Foto</label></div>
                                        <div class="col-12 col-md-6"><input type="file" id="foto" name="foto" onchange="return fileValidation()" class="form-control"><small class="form-text text-muted">Ukuran : 3x4 cm, Max 500 KB</small>
                                        </div>
                                        
                                    </div>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><button type="reset" class="btn btn-primary btn-sm pull pull-left">Reset</button></div>
                                        <div class="col col-md-6"><button type="submit" name="reg" id="reg" class="btn btn-primary btn-sm pull pull-right">Simpan</button></div>
                                        
                                    </div>
                            </div>

     
                        </form>

                    </div>
<!-- jQuery 3 -->
<script src="assets/js/jquery.min.js"></script> <!-- untuk Pemanggilan data penduduk -->

<script type="text/javascript">
         function fileValidation() {
             var fileInput = document.getElementById('foto');         
             var filePath = fileInput.value;
             // Allowing file type
             var allowedExtensions =/(\.jpg|\.jpeg)$/i;
             if (!allowedExtensions.exec(filePath)) {
                 alert('Extensi file harus jpg/jpeg');
                 fileInput.value = '';
                 return false;
             }
             if(fileInput.files[0].size > 500000){ // ini untuk ukuran 800KB, 1000000 untuk 1 MB.
       alert("Maaf. Foto Terlalu Besar ! Maksimal Upload 500 KB");
       fileInput.value = "";
       return false;
    }
         }
     </script> 


</body>

</html>
