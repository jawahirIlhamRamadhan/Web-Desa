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
                            <h1 class="title-5" align="center">INFO !
                            </h1>
                        </div>
                            <hr class="line-seprate">
                    </div>
                </div>
            </section>
<div class="card-body card-block">
  
                        <form action=""  method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-body card-block">
                                <div class="row form-group">
            <?php
            $data=mysqli_query($con, "SELECT COUNT(t_permohonan.nik) AS nik, t_permohonan.* FROM t_permohonan WHERE t_permohonan.nik='$_GET[nik]'ORDER BY t_permohonan.id DESC LIMIT 1 ");
            $no=1;
            while($row =mysqli_fetch_array($data)){ 
            ?>  
                <?php if ($row['status'] == 'onprocess'): ?> 
                                    <div class="col-md-12"><h4 align="center">Mohon tunggu ...<br> Permohonan <strong><?php echo $row['nmsurat'];?></strong><br> sedang diperiksa.</h4> </div>
       


                <?php elseif ($row['status'] == 'acc'): ?>
                    <hr>
                    <div class="col-md-12" style="justify-content: center; text-align: center; border: none;"><img src="assets/terima-kasih.gif" style="text-decoration: none"></i><h4 align="center"><br>Silahkan ambil surat kamu dikantor Desa !</h4> 
<!-- /# card --></div>
                                                <?php elseif(empty($row['kds'])) : ?>
                    <div class="col-md-12"><h4 align="center">Mohon Ma'af, Surat anda belum dapat Kami proses.!</h4> </div>
                                <?php endif; ?>
                            </div>
                        </form>

                    </div>
                     <?php 
                        }
                                                //mysql_close($host);
                        ?>
                    </div>
                </div>
 
 <script src="assets/js/jquery.min.js"></script> <!-- untuk Pemanggilan data penduduk -->



</body>

</html>