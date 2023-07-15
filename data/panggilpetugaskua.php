<?php

//membuat koneksi ke database
include '../koneksi.php';
//variabel  yang dikirimkan form.php
$ptg = $_GET['ptg'];

//mengambil data
$query = mysqli_query($con, "SELECT * FROM t_petugaskua where nm_petugas='$ptg'");
$w = mysqli_fetch_array($query);
$data = array(
			'nip'     =>  $w['nip_petugas'],
			'jab'     =>  $w['jab_petugas'],
		);

//tampil data
echo json_encode($data);
?>
