<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];

$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];
$jk 		= $_POST['jk'];
$tmp_lahir 	= $_POST['tmp_lahir'];
$tgl_lahir	= $_POST['tgl_lahir'];
$agama 		= $_POST['agama'];
$almt		= $_POST['alamat'];
$untuk		= $_POST['untuk'];
$detail		=$nik.';'.$nama.';'.$jk.';'.$tmp_lahir.';'.$tgl_lahir.';'.$agama.';'.$almt.';'.$untuk;

mysqli_query($con, "UPDATE t_detailsurat SET no='$no', nik='$nik', nama='$nama', detail='$detail' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Kelakuan Baik berhasil di update !'); window.location = '../cetak/c_skkb.php?kode=$kode'</script>"; 

?>

