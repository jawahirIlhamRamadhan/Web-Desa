<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];
$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];

$detail     = $nik.';'.$nama; 
mysqli_query($con, "UPDATE t_detailsurat SET no='$no', nik='$nik', nama='$nama', detail='$detail' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Belum Pernah Menikah berhasil diupdate!'); window.location = '../cetak/c_suketbmenikah.php?kode=$kode'</script>"; 

?>

