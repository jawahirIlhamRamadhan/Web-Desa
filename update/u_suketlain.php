<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];
$ns 		= $_POST['ns'];
$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];
$jk 		= $_POST['jk'];
$tmp_lahir 	= $_POST['tmp_lahir'];
$tgl_lahir	= $_POST['tgl_lahir'];
$agama 		= $_POST['agama'];
$almt		= $_POST['alamat'];
$rdtengah	= $_POST['rdtengah'];
$detail     =$ns.';'.$nik.';'.$nama.';'.$jk.';'.$tmp_lahir.';'.$tgl_lahir.';'.$agama.';'.$almt.';'.$rdtengah;
mysqli_query($con, "UPDATE t_detailsurat SET no='$no', nik='$nik', nama='$nama', detail='$detail' WHERE kode='$kode'");

echo "<script>alert('$ns BERHASIL DI UPDATE!'); window.location = '../cetak/c_suketlain.php?kode=$kode'</script>"; 

?>

