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
$prov       = $_POST['prov'];
$kab       = $_POST['kab'];
$kec       = $_POST['kec'];
$desa       = $_POST['desa'];
$almt		= $_POST['alamat'];

$niki 		= $_POST['niki'];
$namai 		= $_POST['namai'];
$jki 		= $_POST['jki'];
$tmp_lahiri = $_POST['tmp_lahiri'];
$tgl_lahiri	= $_POST['tgl_lahiri'];
$agamai 	= $_POST['agamai'];
$provi       = $_POST['provi'];
$kabi       = $_POST['kabi'];
$keci       = $_POST['keci'];
$desai       = $_POST['desai'];
$almti		= $_POST['alamati'];

$tgl_nikah 		= $_POST['tgl_nikah'];
$secara 		= $_POST['secara'];
$mahar 			= $_POST['mahar'];
$saksi1 		= $_POST['saksi1'];
$saksi2 		= $_POST['saksi2'];
$alasan 		= $_POST['alasan'];

$detail     =$nik.';'.$nama.';'.$jk.';'.$tmp_lahir.';'.$tgl_lahir.';'.$agama.';'.$almt.';'.$prov.';'.$kab.';'.$kec.';'.$desa.';'.$niki.';'.$namai.';'.$jki.';'.$tmp_lahiri.';'.$tgl_lahiri.';'.$agamai.';'.$almti.';'.$provi.';'.$kabi.';'.$keci.';'.$desai.';'.$tgl_nikah.';'.$secara.';'.$mahar.';'.$saksi1.';'.$saksi2.';'.$alasan;

mysqli_query($con, "UPDATE t_detailsurat SET no='$no', nik='$nik', nama='$nama', detail='$detail' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Menikah berhasil diupdate!'); window.location = '../cetak/c_suketmenikah.php?kode=$kode'</script>"; 

?>

