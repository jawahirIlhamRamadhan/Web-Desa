<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];

$objek 		= $_POST['objek'];
$banyak		= $_POST['banyak'];
$dasar 		= $_POST['dasar'];
$lbg 	     = $_POST['lbg'];
$almt	   = $_POST['almt'];


$detail		=$objek.';'.$banyak.';'.$dasar.';'.$lbg.';'.$almt;

mysqli_query($con, "UPDATE t_detailsurat SET no='$no', nama='$objek', detail='$detail' WHERE kode='$kode'");

echo "<script>alert('Surat Pengantar berhasil diupdate!'); window.location = '../cetak/c_pengantar.php?kode=$kode'</script>"; 

?>

