<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];
$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];
$luas 		= $_POST['luas'];
$letak 		= $_POST['letak'];
$asal 		= $_POST['asaltanah'];
$b 			= $_POST['barat'];
$u 			= $_POST['utara'];
$t 			= $_POST['timur'];
$s 			= $_POST['selatan'];

$detail     =$nik.';'.$nama.';'.$luas.';'.$letak.';'.$asal.';'.$b.';'.$u.';'.$t.';'.$s;

mysqli_query($con, "UPDATE t_detailsurat SET no='$no', nik='$nik', nama='$nama', detail='$detail' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Kepemilikan Tanah berhasil diupdate!'); window.location = '../cetak/c_sukettanah.php?kode=$kode'</script>"; 

?>

