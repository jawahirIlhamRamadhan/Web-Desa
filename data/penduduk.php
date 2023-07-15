<body>
    <div class="au-card recent-report">

                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Data Penduduk</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                    </div>
                                    <div class="table-data__tool-right">
                                        <a href="?page=tambahpenduduk" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>Tambah Data</a>
                                        <a href="data/datapenduduk.php" type="button" class="au-btn au-btn-icon au-btn--blue au-btn--small"><i class="fa fa-download"></i>&nbsp; Unduh</a>
                                        <a href="?page=importpenduduk" type="button" class="au-btn au-btn-icon au-btn--blue au-btn--small"><i class="fa fa-upload"></i>&nbsp; Import Data</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Penduduk</th>
                                                <th>Tmp./Tgl. Lahir</th>
                                                <th>Status</th>
                                                <th>Alamat</th>
                                                <th>HP</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                        <?php 
                            $query = mysqli_query ($con, "SELECT * FROM t_penduduk ORDER BY id ASC");
                            while ($r = mysqli_fetch_array($query)){
                         ?>
                                        <tr>
                                            <td><?php echo $r['id'];?></td>
                                            <td><?php echo $r['nama'];?>(<?php echo substr($r['jk'],0,1);?>)<br><small><?php echo $r['nik'];?></small></td>
                                            <td><?php echo $r['tmp_lahir'];?>,&nbsp;
                                            <?php echo $r['tgl_lahir'];?></td>
                                            <td><?php echo $r['status'];?></td>
                                            <td><?php echo $r['alamat'];?></td>
                                            <td><a href="https://api.whatsapp.com/send?phone=62<?php echo $r['hp'];?>"><?php echo substr($r['hp'],0,6);?>***</a>
                                            </td>
                                            <td><a href="?page=cetak_penduduk&amp;nik=<?php echo $r['nik'];?>" class="btn"><i class="fa fa-search"></i></a>
                                            &nbsp;<a href="?page=edit_penduduk&amp;nik=<?php echo $r['nik'];?>"><i class="fa fa-edit"></i></a>&nbsp;<a href="hapus/h_penduduk.php?nik=<?php echo $r['nik'];?>"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendors/jquery/jquery.min.js"></script>
