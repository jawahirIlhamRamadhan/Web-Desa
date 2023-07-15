<?php
include '../koneksi.php';
$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];

$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];

$luas 		= $_POST['luas'];
$letak 		= $_POST['letak'];
$rtrw       = $_POST['rtrw'];
$desa       = $_POST['deskel'];
$kab        = $_POST['kab'];
$nib        = $_POST['nib'];
$status     = $_POST['stanah'];
$untuk      = $_POST['untuk'];

$asal 		= $_POST['asaltanah'];
$sejak      = $_POST['sejak'];
$b 			= $_POST['barat'];
$u 			= $_POST['utara'];
$t 			= $_POST['timur'];
$s 			= $_POST['selatan'];
$nms1       = $_POST['nmsaksi1'];
$ums1       = $_POST['umursaksi1'];
$kerjaans1  = $_POST['kerjaansaksi1'];
$almts1     = $_POST['almtsaksi1'];
$nms2       = $_POST['nmsaksi2'];
$ums2       = $_POST['umursaksi2'];
$kerjaans2  = $_POST['kerjaansaksi2'];
$almts2     = $_POST['almtsaksi2'];

$detail     =$nik.';'.$nama.';'.$luas.';'.$letak.';'.$rtrw.';'.$desa.';'.$kab.';'.$nib.';'.$status.';'.$untuk.';'.$asal.';'.$sejak.';'.$b.';'.$u.';'.$t.';'.$s.';'.$nms1.';'.$ums1.';'.$kerjaans1.';'.$almts1.';'.$nms2.';'.$ums2.';'.$kerjaans2.';'.$almts2;

if(isset($_POST['update'])){

mysqli_query($con, "UPDATE t_detailsurat SET no='-', nik='$nik', nama='$nama', detail='$detail' WHERE kode='$kode'");

echo "<script>alert('Sporadik berhasil diupdate!'); window.location = '../cetak/c_sporadik.php?kode=$kode'</script>"; 
}
?>

