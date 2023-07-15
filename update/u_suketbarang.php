<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];
$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];
$nmbrg 		= $_POST['nmbrg'];
$jnbrg 		= $_POST['jnbrg'];
$jmlbrg 	= $_POST['jmlbrg'];
$asalbrg 	= $_POST['asalbrg'];
$tujuanbrg 	= $_POST['tujuanbrg'];

$detail     = $nmbrg.';'.$jnbrg.';'.$jmlbrg.';'.$nama.';'.$asalbrg.';'.$tujuanbrg;

mysqli_query($con, "UPDATE t_detailsurat SET no='$no', nik='$nik', nama='$nama', detail='$detail' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Pengantar Barang berhasil diupdate!'); window.location = '../cetak/c_suketbarang.php?kode=$kode'</script>"; 

?>

