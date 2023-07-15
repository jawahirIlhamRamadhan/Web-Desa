<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];

$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];

$tujuan 	= $_POST['tujuan'];
$keg 		= $_POST['keg'];
$tgl 		= $_POST['tgl'];
$brg 		= $_POST['brg'];
$detail     = $tujuan.';'.$keg.';'.$tgl.';'.$brg;

mysqli_query($con, "UPDATE t_detailsurat SET no='$no', nik='$nik', nama='$nama', detail='$detail' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Bepergian berhasil diupdate!'); window.location = '../cetak/c_suketbepergian.php?kode=$kode'</script>"; 

?>

