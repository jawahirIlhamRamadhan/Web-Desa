<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];
$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];
$untuk 		= $_POST['untuk'];

$detail     =$nik.';'.$nama.';'.$untuk; 
mysqli_query($con, "UPDATE t_detailsurat SET no='$no', nik='$nik', nama='$nama', detail='$detail' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Tidak Mampu berhasil diupdate!'); window.location = '../cetak/c_sukettmampu.php?kode=$kode'</script>"; 

?>

