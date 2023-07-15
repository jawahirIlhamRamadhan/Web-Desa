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
                            <h1 class="title-5">EDIT DATA STAFF
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
                    <div class="card-body card-block"> 
            <?php
            $data=mysqli_query($con, "SELECT * FROM t_admin  where id='$_GET[id]' ");
            $no=1;
            while($row =mysqli_fetch_array($data)){ 
            ?>  
                    <form action="update/u_staff_stf.php"  method="POST" enctype="multipart/form-data" class="form-horizontal">
                                      <div class="row form-group">
                                        <div class="col col-md-3"><label for="uname" class=" form-control-label">Username</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="uname" name="uname" class="form-control" value="<?php echo $row['uname'];?>" >
                                            <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $row['id'];?>" ></div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email" class=" form-control-label">E-mail</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="email" name="email" value="<?php echo $row['email'];?>"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="hp" class=" form-control-label">HP</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="hp" name="hp" value="<?php echo $row['hp'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desa" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="desa" name="desa" value="<?php echo $row['desa'];?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="pass" class=" form-control-label">Password (MD5)</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="pass" name="pass" value="<?php echo $row['pass'];?>" readonly class="form-control"></div>
                                        <div class="col-12 col-md-3"><a href="?page=edit_pass&amp;edtpssssdhdh882h3hhshdsdhgshs88272373hhhdfshaasaj_hfhhhds0ajhshshu237651414267283823sdere4543=<?php echo $row['id'];?>" class="btn btn-primary btn-sm pull pull-left">Edit Password</a></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="level" class=" form-control-label">Level</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="level" id="level" class="form-control">
                                                <option value="<?php echo $row['level'];?>" selected="selected"><?php echo $row['level'];?></option>
                                                <option value="admin">admin</option>
                                                <option value="staff">staff</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file" class=" form-control-label">Foto</label></div>
                                        <div class="col-12 col-md-6"><input type="file" id="file" name="file" class="form-control"><small class="form-text text-muted">Ukuran : 3x4 cm, Max 500 KB</small>
                                            <input type="hidden" id="x" name="x"  value="<?php echo $row['foto'];?>" class="form-control"></div>
                                        <div class="col-12 col-md-3"><img src="foto/<?php echo $row['foto'];?>" class="user-avatar rounded-circle pull pull-right " style="border: 1px solid white; width: 80px; height: 80px;"></div>
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




</body>

</html>
