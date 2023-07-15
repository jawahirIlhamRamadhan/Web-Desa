<?php
include '../koneksi.php';

$kode		 = $_POST['kodesurat'];
$nmsurat	 = $_POST['nmsurat'];
$no 		 = $_POST['nosurat'];
$nik 		 = $_POST['nik'];
$nama 		 = $_POST['nama'];
$jmlhasil 	 = $_POST['jmlhasil'];
$sumberhasil = $_POST['sumberhasil'];

$detail     =$jmlhasil.';'.$sumberhasil;

mysqli_query($con, "UPDATE t_detailsurat SET no='$no', nik='$nik', nama='$nama', detail='$detail' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Penghasilan berhasil diupdate!'); window.location = '../cetak/c_suketpenghasilan.php?kode=$kode'</script>"; 

?>

