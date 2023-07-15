<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];
$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];
$tmp_lahir 	= $_POST['tmp_lahir'];
$tgl_lahir	= $_POST['tgl_lahir'];
$agama 		= $_POST['agama'];
$almt		= $_POST['alamat'];

$niki 		= $_POST['niki'];
$namai 		= $_POST['namai'];
$tmp_lahiri = $_POST['tmp_lahiri'];
$tgl_lahiri	= $_POST['tgl_lahiri'];
$agamai 	= $_POST['agamai'];
$almti		= $_POST['alamati'];

$detail     =$nik.';'.$nama.';'.$tmp_lahir.';'.$tgl_lahir.';'.$agama.';'.$almt.';'.$niki.';'.$namai.';'.$tmp_lahiri.';'.$tgl_lahiri.';'.$agamai.';'.$almti;

mysqli_query($con, "UPDATE t_detailsurat SET no='$no', nik='$nik', nama='$nama', detail='$detail' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Rumah Tangga Miskin berhasil diupdate!'); window.location = '../cetak/c_suketrtms.php?kode=$kode'</script>"; 

?>

