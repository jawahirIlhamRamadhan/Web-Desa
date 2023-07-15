<?php

//membuat koneksi ke database
include '../koneksi.php';
//variabel nim yang dikirimkan form.php
$nmsurat = $_GET['nmsurat'];

//mengambil data
$query = mysqli_query($con, "SELECT * FROM t_jenissurat where nmsurat='$nmsurat'");
$w = mysqli_fetch_array($query);
$data = array(
            'kode'          =>  $w['kode'],
            'page'          =>  $w['page'],
			'kode_klasi'    =>  $w['kode_klasi'],
            'rdawal'      	=>  $w['awal'],
            'rdtengah'    	=>  $w['tengah'],
            'rdakhir'  	    =>  $w['akhir'],);


//tampil data
echo json_encode($data);
?>
