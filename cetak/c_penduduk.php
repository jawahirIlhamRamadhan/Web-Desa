
    <div class="au-card recent-report">
        <a class="popup-close pull-right" href="?page=penduduk"><span aria-hidden="true">&times;</span></a>                              
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">DATA PENDUDUK</h5>
 
                            </div>
        <div class="input-group ">
                <div class="col-md-12">
            <?php
            $data=mysqli_query($con, "SELECT * FROM t_penduduk  where nik='$_GET[nik]' ");
            $no=1;
            while($row =mysqli_fetch_array($data)){ 
            ?>  
                    <form action="../update/u_penduduk.php"  method="POST" enctype="multipart/form-data" class="form-horizontal">
                                      <div class="row form-group">
                                        <div class="col col-md-3"><label for="nkk" class=" form-control-label">No. KK</label></div>
                                        <div class="col-12 col-md-9"><label for="nkk" class=" form-control-label">: <?php echo $row['nkk'];?></label></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-9"><label for="nik" class=" form-control-label">: <?php echo $row['nik'];?></label></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9"><label for="nama" class=" form-control-label">: <?php echo $row['nama'];?></label></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jk" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-9">
                                            <label for="jk" class=" form-control-label">: <?php echo $row['jk'];?></label>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahir" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-9"><label for="tmp_lahir" class=" form-control-label">: <?php echo $row['tmp_lahir'];?></label></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahir" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-9"><label for="tgl_lahir" class=" form-control-label">: <?php echo $row['tgl_lahir'];?></label></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kwng" class=" form-control-label">Kewarganegaraan</label></div>
                                        <div class="col-12 col-md-9"><label for="kwng" class=" form-control-label">: <?php echo $row['kwng'];?></label></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agama" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-9">
                                            <label for="agama" class=" form-control-label">: <?php echo $row['agama'];?></label>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="status" class=" form-control-label">Status Perkawinan</label></div>
                                        <div class="col-12 col-md-9">
                                            <label for="status" class=" form-control-label">: <?php echo $row['status'];?></label>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="pend" class=" form-control-label">Pendidikan</label></div>
                                        <div class="col-12 col-md-9">
                                            <label for="pend" class=" form-control-label">: <?php echo $row['pend'];?></label>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kerjaan" class=" form-control-label">Pekerjaan</label></div>
                                        <div class="col-12 col-md-9"><label for="kerjaan" class=" form-control-label">: <?php echo $row['kerjaan'];?></label></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="prov" class=" form-control-label">Provinsi</label></div>
                                        <div class="col-12 col-md-9"><label for="prov" class=" form-control-label">: <?php echo $row['prov'];?></label></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kab" class=" form-control-label">Kabupaten/Kota</label></div>
                                        <div class="col-12 col-md-9"><label for="kab" class=" form-control-label">: <?php echo $row['kab'];?></label></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kec" class=" form-control-label">Kecamatan</label></div>
                                        <div class="col-12 col-md-9"><label for="kec" class=" form-control-label">: <?php echo $row['kec'];?></label></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desa" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-9"><label for="desa" class=" form-control-label">: <?php echo $row['desa'];?></label></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="almt" class=" form-control-label">Alamat/Rt./Rw.</label></div>
                                        <div class="col-12 col-md-9"><label for="almt" class=" form-control-label">: <?php echo $row['alamat'];?></label></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="hp" class=" form-control-label">No. HP</label></div>
                                        <div class="col-12 col-md-9"><label for="hp" class=" form-control-label">: <?php echo $row['hp'];?></label></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="shdk" class=" form-control-label">SHDK</label></div>
                                        <div class="col-12 col-md-9">
                                            <label for="shdk" class=" form-control-label">: <?php echo $row['shdk'];?></label>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file" class=" form-control-label">Foto</label></div>
                                        <div class="col-12 col-md-3">
                                        <div class="col-12 col-md-6"><img src="foto/<?php echo $row['foto'];?>" class="user-avatar rounded-circle pull pull-right " style="border: 1px solid white; width: 200px; height: auto; box-shadow: 2px 1px 3px;"></div>
                                    </div>
                                </div>



     
                            </div>

     
                        </form>

                    </div>
                     <?php 
                        }
                                                //mysql_close($host);
                        ?>
   