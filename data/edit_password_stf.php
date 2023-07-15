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
                            <h1 class="title-5">EDIT PASSWORD
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
                    <div class="card-body card-block"> 
                <?php 
                $id=$_GET['edtpssssdhdh882h3hhshdsdhgshs88272373hhhdfshaasaj_hfhhhds0ajhshshu237651414267283823sdere4543'];
                $queryup = mysqli_query ($con, "SELECT * FROM t_admin WHERE id='$id'");
                        while ($up = mysqli_fetch_array($queryup)){
                ?>

                                            <form action="update/update_pass_stf.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="control-group span12">
                                                    <label for="pass1'" class="control-label">Password Baru</label>
                                                    <div class="controls controls-row with-tooltip">
                                                         <input type="hidden" id="id" name="id" value="<?php echo $up['id'];?>"/>
                                                        <input type="password" id="pass1" name="pass1" class="span6 input-tooltip" placeholder="***********" data-placement="bottom" required />
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label for="pass2'" class="control-label">Ulangi Password</label>
                                                    <div class="controls controls-row with-tooltip">
                                                        <input type="password" id="pass2" name="pass2" class="span6 input-tooltip" placeholder="***********" data-placement="bottom" required />
                                                    </div>
                                                </div>
                                                <div class="control-group span12">
                                                    <p class="span4"></p>
                            <button class="btn btn-large btn-primary btn-block span4" type="submit" name="update">Update Password</button>
                            <p class="span4"></p>
                                                </div>

                                            </form><?php }?>
                                        </div>
                                    </div>
                                </div>

                            <!--END TEXT INPUT FIELD-->
                            
<!-- jQuery 3 -->
<script src="assets/js/jquery.min.js"></script> <!-- untuk Pemanggilan data penduduk -->




</body>

</html>