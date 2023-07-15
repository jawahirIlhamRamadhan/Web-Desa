<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];

$nik 		= $_POST['nika'];
$nama 		= $_POST['namaa'];
$bin        = $_POST['bina'];
$jk 		= $_POST['jka'];
$tmp_lahir 	= $_POST['tmp_lahira'];
$tgl_lahir	= $_POST['tgl_lahira'];
$kwng       = $_POST['kwnga'];
$agama 		= $_POST['agamaa'];
$pkjn       = $_POST['pkjna'];
$almt 	    = $_POST['alamata'];

$nik1        = $_POST['nik1'];
$nama1       = $_POST['nama1'];
$jk1         = $_POST['jk1'];
$tmp_lahir1  = $_POST['tmp_lahir1'];
$tgl_lahir1  = $_POST['tgl_lahir1'];
$agama1      = $_POST['agama1'];
$pkjn1       = $_POST['pkjn1'];
$almt1       = $_POST['alamat1'];
$shdk        = $_POST['shdk'];

$sebab      = $_POST['sebab'];
$hari       = $_POST['hari'];
$tanggal    = $_POST['tanggal'];
$waktu      = $_POST['waktu'];
$tempat     = $_POST['tempat'];

$detail     =$nik.';'.$nama.';'.$bin.';'.$jk.';'.$tmp_lahir.';'.$tgl_lahir.';'.$kwng.';'.$agama.';'.$pkjn.';'.$almt.';'.$nik1.';'.$nama1.';'.$jk1.';'.$tmp_lahir1.';'.$tgl_lahir1.';'.$agama1.';'.$pkjn1.';'.$almt1.';'.$shdk.';'.$sebab.';'.$hari.';'.$tanggal.';'.$waktu.';'.$tempat;

mysqli_query($con, "UPDATE t_detailsurat SET no='$no', nik='$nik1', nama='$nama1', detail='$detail' WHERE kode='$kode'");


echo "<script>alert('Surat Keterangan Kematian berhasil diupdate!'); window.location = '../cetak/c_suketmati.php?kode=$kode'</script>"; 

?>


