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
            $data=mysqli_query($con, "SELECT COUNT(t_buatsendiri.kode_surat) AS kds, t_jenissurat.*, t_buatsendiri.* FROM t_jenissurat, t_buatsendiri WHERE t_jenissurat.kode=t_buatsendiri.kode_jenis AND  t_buatsendiri.kode_surat='$_GET[kode]'ORDER BY t_buatsendiri.id DESC LIMIT 1 ");
            $no=1;
            while($row =mysqli_fetch_array($data)){ 
            ?>  
                <?php if ($row['status'] == 'onprocess'): ?> 
                                    <div class="col-md-12"><h4 align="center">Mohon tunggu ...<br><strong><?php echo $row['nmsurat'];?></strong><br> sedang diperiksa.</h4> </div>
       


                <?php elseif ($row['status'] == 'acc'): ?>
                    <hr>
                    <div class="col-md-12" style="justify-content: center; text-align: center; border: none;"><h4 align="center">Silahkan Cetak surat kamu !</h4> 
                                <div class="card" style="justify-content: center; text-align: center; border: none;">
                                <div class="card-body" >
                                        <a href="cetak/c_<?php echo $row['page'];?>.php?kode=<?php echo $row['kode_surat'];?>" target="_BLANK" class="btn"><img src="assets/animasiprint.gif" style="text-decoration: none"></i><br><?php echo $row['nmsurat'];?></a>                                    
                                    </div>
                                </div><!-- /# card --></div>
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