<?php
include '../koneksi.php';
$kodejenis	= $_POST['kodejenis'];
$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$idstf      = $_POST['idstf'];
$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];

$kades	 	= $_POST['kades'];

$thn = date('Y');

mysqli_query($con, "INSERT INTO t_datasurat(kode, kodejenis, nmsurat, no, id_stf, tanggal, status) VALUES ('$kode','$kodejenis','$nmsurat','$nik','$idstf','".date('Y-m-d')."','acc')");

mysqli_query($con, "INSERT INTO t_detailsurat (kode, kodejenis, nmsurat, no, nik, nama, detail, tanggal, ttd, qrcode, id_ptg) values('$kode','$kodejenis','$nmsurat','$nik','$nik','$nama', '-','".date('Y-m-d')."','$kades','-','$idstf')");

echo "<script>alert('Surat Pernyataan Status berhasil dibuat!'); window.location = '../cetak/c_pstatus.php?kode=$kode'</script>"; 

?>

