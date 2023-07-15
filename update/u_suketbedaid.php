<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];

$nik1 		= $_POST['nik1'];
$nama1 		= $_POST['nama1'];
$jk1 		= $_POST['jk1'];
$tmp_lahir1 	= $_POST['tmp_lahir1'];
$tgl_lahir1	= $_POST['tgl_lahir1'];
$agama1 		= $_POST['agama1'];
$almt1		= $_POST['alamat1'];

$nik2 		= $_POST['nik2'];
$nama2 		= $_POST['nama2'];
$jk2 		= $_POST['jk2'];
$tmp_lahir2 = $_POST['tmp_lahir2'];
$tgl_lahir2	= $_POST['tgl_lahir2'];
$agama2 	= $_POST['agama2'];
$almt2		= $_POST['alamat2'];

$id1 		= $_POST['id1'];
$id2 		= $_POST['id2'];

$detail     =$nik1.';'.$nama1.';'.$jk1.';'.$tmp_lahir1.';'.$tgl_lahir1.';'.$agama1.';'.$almt1.';'.$id1.';'.$nik2.';'.$nama2.';'.$jk2.';'.$tmp_lahir2.';'.$tgl_lahir2.';'.$agama2.';'.$almt2.';'.$id2;

mysqli_query($con, "UPDATE t_detailsurat SET no='$no', nik='$nik1', nama='$nama1', detail='$detail' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Perbedaan Identitas berhasil diupdate!'); window.location = '../cetak/c_suketbedaid.php?kode=$kode'</script>"; 

?>

