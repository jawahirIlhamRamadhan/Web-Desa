<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];

$nmternak 	= $_POST['nmternak'];
$jnternak 	= $_POST['jnternak'];
$ciriternak = $_POST['ciriternak'];
$asalternak = $_POST['asalternak'];
$tujuanternak 	= $_POST['tujuanternak'];

$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];
$detail = $nmternak.';'.$jnternak.';'.$ciriternak.';'.$nama.';'.$asalternak.';'.$tujuanternak;

mysqli_query($con, "UPDATE t_detailsurat SET no='$no', nik='$nik', nama='$nama', detail='$detail' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Pengantar Ternak berhasil diupdate!'); window.location = '../cetak/c_suketternak.php?kode=$kode'</script>"; 

?>

