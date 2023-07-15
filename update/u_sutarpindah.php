<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];
$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];

$tujuan 		= $_POST['tujuan'];
$jmlpindah 		= $_POST['jmlpindah'];

$detail     =$nik.';'.$nama.';'.$tujuan.';'.$jmlpindah;

mysqli_query($con, "UPDATE t_detailsurat SET no='$no', nik='$nik', nama='$nama', detail='$detail' WHERE kode='$kode'");

echo "<script>alert('Surat Pengantar Pindah berhasil diupdate!'); window.location = '../cetak/c_sutarpindah.php?kode=$kode'</script>"; 

?>

