<?php
//include '../sesi.php';
include 'koneksi.php';
// Load file autoload.php
require 'vendor/autoload.php';
// Include librari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
?>
<body>
    <!-- Left Panel -->
            <section class="welcome p-t-1s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-5">IMPORT DATA PENDUDUK
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>



    <form method="post" action="import_phpspreadsheet/lihatpenduduk_ptg.php" enctype="multipart/form-data">
        <a href="import_phpspreadsheet/formatdatapenduduk.xls">Download Format</a> &nbsp;|&nbsp;
        <a href="?page=penduduk">Kembali</a>
        <br><br>
        <div class="row form-group">
        <div class="col col-md-6"><input type="file" name="file" class="form-control"></div>
        <div class="col col-md-6"><button type="submit" name="preview" class="btn btn-primary">Lihat Data</button></div>
        </div>
    </form>
    <hr>
	
                            </div>      
                        </div>
                    </div>






<!-- jQuery 3 -->
<script src="assets/js/jquery.min.js"></script> <!-- untuk Pemanggilan data penduduk -->


</body>

</html>
