<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];
$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];
$jnusaha 	= $_POST['jnusaha'];
$mulaiusaha = $_POST['mulaiusaha'];
$lokusaha 	= $_POST['lokusaha'];

$detail     = $jnusaha.';'.$mulaiusaha.';'.$lokusaha;


mysqli_query($con, "UPDATE t_detailsurat SET no='$no', nik='$nik', nama='$nama', detail='$detail' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Usaha berhasil diupdate!'); window.location = '../cetak/c_suketusaha.php?kode=$kode'</script>"; 

?>

