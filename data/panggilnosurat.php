<?php

//membuat koneksi ke database
include '../koneksi.php';
//variabel  yang dikirimkan form.php
$kodesurat = $_GET['kodesurat'];

//mengambil data
$query = mysqli_query($con, "SELECT * FROM t_sutarnikah where kode='$kodesurat'");
$w = mysqli_fetch_array($query);
$data = array(
			'no'     =>  $w['no'],);

//tampil data
echo json_encode($data);
?>
