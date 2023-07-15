<?php
include '../koneksi.php';
$kode       = $_POST['kodesurat'];
$nik1       = $_POST['nik1'];
$nama1      = $_POST['nama1'];
$jk1        = $_POST['jk1'];
$tmpl1      = $_POST['tmplahir1'];
$tgll1      = $_POST['tgllahir1'];
$almt1      = $_POST['almt1'];
$nik2       = $_POST['nik2'];
$nama2      = $_POST['nama2'];
$jk2        = $_POST['jk2'];
$tmpl2      = $_POST['tmplahir2'];
$tgll2      = $_POST['tgllahir2'];
$almt2      = $_POST['almt2'];
$luas       = $_POST['luas'];
$letak      = $_POST['letak'];

$hg         = $_POST['harga_gadai'];

$b          = $_POST['barat'];
$u          = $_POST['utara'];
$t          = $_POST['timur'];
$s          = $_POST['selatan'];
$nms1       = $_POST['nmsaksi1'];
$nms2       = $_POST['nmsaksi2'];

$detail		=$nik1.';'.$nama1.';'.$jk1.';'.$tmpl1.';'.$tgll1.';'.$almt1.';'.$nik2.';'.$nama2.';'.$jk2.';'.$tmpl2.';'.$tgll2.';'.$almt2.';'.$luas.';'.$letak.';'.$hg.';'.$b.';'.$u.';'.$t.';'.$s.';'.$nms1.';'.$nms2;

if(isset($_POST['update'])){

mysqli_query($con, "UPDATE t_detailsurat SET no='-', nik='$nik1', nama='$nama1', detail='$detail' WHERE kode='$kode'");

echo "<script>alert('Pernyataan Kesepakatan Gadai Tanah berhasil diupdate!'); window.location = '../cetak/c_gadai.php?kode=$kode'</script>"; 
}
?>

