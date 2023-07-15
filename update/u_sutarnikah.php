<?php
include '../koneksi.php';


$kode       = $_POST['kodesurat'];
$nmsurat    = $_POST['nmsurat'];
$no         = $_POST['nosurat'];

$nika       = $_POST['nika'];
$namaa      = $_POST['namaa'];
$nmayaha    = $_POST['nmayaha'];
$jka        = $_POST['jka'];
$tmp_lahira = $_POST['tmp_lahira'];
$tgl_lahira = $_POST['tgl_lahira'];
$kwnga      = $_POST['kwnga'];
$agamaa     = $_POST['agamaa'];
$pkjna      = $_POST['pkjna'];
    $desaa           = $_POST['desaa'];
    $keca            = $_POST['keca'];
    $kaba            = $_POST['kaba'];
    $prova           = $_POST['prova'];
$almta        = $_POST['almta'];
$statusa    = $_POST['statusa'];
$nna        = $_POST['statusna'];

$nikb       = $_POST['nikb'];
$namab      = $_POST['namab'];
$nmayahb    = $_POST['nmayahb'];
$jkb        = $_POST['jkb'];
$tmp_lahirb = $_POST['tmp_lahirb'];
$tgl_lahirb = $_POST['tgl_lahirb'];
$kwngb      = $_POST['kwngb'];
$agamab     = $_POST['agamab'];
$pkjnb      = $_POST['pkjnb'];
    $desab           = $_POST['desab'];
    $kecb            = $_POST['kecb'];
    $kabb           = $_POST['kabb'];
    $provb           = $_POST['provb'];
$almtb        = $_POST['almtb'];
$statusb    = $_POST['statusb'];
$nnb        = $_POST['statusnb'];

$nik        = $_POST['nik'];
$nama       = $_POST['nama'];
$bin       = $_POST['bin'];
$jk         = $_POST['jk'];
$tmp_lahir  = $_POST['tmp_lahir'];
$tgl_lahir  = $_POST['tgl_lahir'];
$kwng       = $_POST['kwng'];
$agama      = $_POST['agama'];
$pkjn       = $_POST['pkjn'];
$almt         = $_POST['almt'];
    $desa           = $_POST['desa'];
    $kec            = $_POST['kec'];
    $kab            = $_POST['kab'];
    $prov           = $_POST['prov'];
$status     = $_POST['status'];

$nik1       = $_POST['nik1'];
$nama1      = $_POST['nama1'];
$bin1       = $_POST['bin1'];
$jk1        = $_POST['jk1'];
$tmp_lahir1 = $_POST['tmp_lahir1'];
$tgl_lahir1 = $_POST['tgl_lahir1'];
$kwng1      = $_POST['kwng1'];
$agama1     = $_POST['agama1'];
$pkjn1      = $_POST['pkjn1'];
$almt1        = $_POST['almt1'];
    $desa1           = $_POST['desa1'];
    $kec1            = $_POST['kec1'];
    $kab1            = $_POST['kab1'];
    $prov1           = $_POST['prov1'];
$status1    = $_POST['status1'];

$hari       = $_POST['hari'];
$tgl        = $_POST['tgl'];
$wkt        = $_POST['waktu'];
$tmpt       = $_POST['tmpt'];
$maskawin   = $_POST['maskawin'];


$detail     =$nika.';'.$namaa.';'.$nmayaha.';'.$jka.';'.$tmp_lahira.';'.$tgl_lahira.';'.$kwnga.';'.$agamaa.';'.$pkjna.';'.$desaa.';'.$keca.';'.$kaba.';'.$prova.';'.$almta.';'.$statusa.';'.$nna.';'.$nikb.';'.$namab.';'.$nmayahb.';'.$jkb.';'.$tmp_lahirb.';'.$tgl_lahirb.';'.$kwngb.';'.$agamab.';'.$pkjnb.';'.$desab.';'.$kecb.';'.$kabb.';'.$provb.';'.$almtb.';'.$statusb.';'.$nnb.';'.$nik.';'.$nama.';'.$bin.';'.$jk.';'.$tmp_lahir.';'.$tgl_lahir.';'.$kwng.';'.$agama.';'.$pkjn.';'.$desa.';'.$kec.';'.$kab.';'.$prov.';'.$almt.';'.$status.';'.$nik1.';'.$nama1.';'.$bin1.';'.$jk1.';'.$tmp_lahir1.';'.$tgl_lahir1.';'.$kwng1.';'.$agama1.';'.$pkjn1.';'.$desa1.';'.$kec1.';'.$kab1.';'.$prov1.';'.$almt1.';'.$status1.';'.$hari.';'.$tgl.';'.$wkt.';'.$tmpt.';'.$maskawin;   

mysqli_query($con, "UPDATE t_datacalon SET  nik='$nika', nama='$namaa', binbinti='$nmayaha', jk='$jka', tmp_lahir='$tmp_lahira', tgl_lahir='$tgl_lahira', kwng='$kwnga', agama='$agamaa', pkjn='$pkjna', prov='$prova', kab='$kaba', kec='$keca', desa='$desaa', alamat='$almta', status='$statusa', status_na='$nna' WHERE kode='$kode' AND nik='$nika'");

mysqli_query($con, "UPDATE t_datacalon SET  nik='$nikb', nama='$namab', binbinti='$nmayahb', jk='$jkb', tmp_lahir='$tmp_lahirb', tgl_lahir='$tgl_lahirb', kwng='$kwngb', agama='$agamab', pkjn='$pkjnb', prov='$provb', kab='$kabb', kec='$kecb', desa='$desab', alamat='$almtb', status='$statusb', status_na='$nnb' WHERE kode='$kode' AND nik='$nikb'");

  mysqli_query($con, "UPDATE t_detailsurat SET no='$no', nik='$nika', nama='$namaa', detail='$detail' WHERE kode='$kode'");


echo "<script>alert('Surat Pengantar Nikah berhasil diupdate!'); window.location = '../admin.php?page=cetak_n1-n6&kode=$kode'</script>"; 

?>


