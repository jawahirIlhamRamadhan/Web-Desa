<?php

//membuat koneksi ke database
include '../koneksi.php';
//variabel  yang dikirimkan form.php
$no = $_GET['no'];

//mengambil data
$query = mysqli_query($con, "SELECT * FROM t_sutarnikah where no='$no'");
$w = mysqli_fetch_array($query);
$data = array(
			'kode'     =>  $w['kode'],);

//tampil data
echo json_encode($data);
?>
