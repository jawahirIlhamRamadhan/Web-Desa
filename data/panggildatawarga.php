<?php
//membuat koneksi ke database
include '../koneksi.php';
//variabel nim yang dikirimkan form.php
$nik = $_GET['nik'];

//mengambil data
$query = mysqli_query($con, "SELECT * FROM t_penduduk where nik like '%".$nik."%'");
$w = mysqli_fetch_array($query);
$data = array(
            'nkk'           =>  $w['nkk'],
            'nama'      	=>  $w['nama'],
            'jk'            =>  $w['jk'],
            'tmp_lahir'    	=>  $w['tmp_lahir'],
            'tgl_lahir'  	=>  $w['tgl_lahir'],
            'kwng'          =>  $w['kwng'],
            'agama'     	=>  $w['agama'],
            'status'    	=>  $w['status'],
            'pend'      	=>  $w['pend'],
            'kerjaan'     	=>  $w['kerjaan'],
            'prov'          =>  $w['prov'],
            'kab'           =>  $w['kab'],
            'kec'           =>  $w['kec'],
            'desa'          =>  $w['desa'],
            'alamat'      	=>  $w['alamat'],);

//tampil data
echo json_encode($data);
?>
