<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];

$nmusaha 	= $_POST['nmusaha'];
$bdgusaha 	= $_POST['bdgusaha'];
$thnberdiri = $_POST['thnberdiri'];
$jmlpekerja = $_POST['jmlpekerja'];
$izinusaha 	= $_POST['izinusaha'];
$alamatusaha= $_POST['alamatusaha'];

$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];
$detail     = $nmusaha.';'.$bdgusaha.';'.$thnberdiri.';'.$nama.';'.$jmlpekerja.';'.$izinusaha.';'.$alamatusaha;
mysqli_query($con, "UPDATE t_detailsurat SET no='$no', nik='$nik', nama='$nama', detail='$detail' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Tempat Usaha berhasil diupdate!'); window.location = '../cetak/c_sukettmpusaha.php?kode=$kode'</script>"; 

?>

