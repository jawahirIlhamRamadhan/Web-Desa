<?php
include '../koneksi.php';



$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];


$nik2       = $_POST['nik2'];
$nama2      = $_POST['nama2'];
$jk2        = $_POST['jk2'];
$tmp_lahir2 = $_POST['tmp_lahir2'];
$tgl_lahir2 = $_POST['tgl_lahir2'];
$agama2     = $_POST['agama2'];
$almt2    = $_POST['alamat2'];

$nik 		   = $_POST['nik'];
$nama 		= $_POST['nama'];
$jk 		   = $_POST['jk'];
$tmp_lahir 	= $_POST['tmp_lahir'];
$tgl_lahir	= $_POST['tgl_lahir'];
$agama 		= $_POST['agama'];
$almt 	   = $_POST['alamat'];


$nik1       = $_POST['nik1'];
$nama1      = $_POST['nama1'];
$jk1        = $_POST['jk1'];
$tmp_lahir1 = $_POST['tmp_lahir1'];
$tgl_lahir1 = $_POST['tgl_lahir1'];
$agama1     = $_POST['agama1'];
$almt1    = $_POST['alamat1'];


$detail     =$nik.';'.$nama.';'.$jk.';'.$tmp_lahir.';'.$tgl_lahir.';'.$agama.';'.$almt.';'.$nik1.';'.$nama1.';'.$jk1.';'.$tmp_lahir1.';'.$tgl_lahir1.';'.$agama1.';'.$almt1.';'.$nik2.';'.$nama2.';'.$jk2.';'.$tmp_lahir2.';'.$tgl_lahir2.';'.$agama2.';'.$almt2;

mysqli_query($con, "UPDATE t_detailsurat SET no='$no', nik='$nik', nama='$nama', detail='$detail' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Anak berhasil diupdate!'); window.location = '../cetak/c_suketanak.php?kode=$kode'</script>"; 

?>



