<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];

$keg        = $_POST['keg'];
$hari       = $_POST['hari'];
$tgl        = $_POST['tgl'];
$wkt        = $_POST['wkt'];
$tmp        = $_POST['tmp'];

$detail     = $keg.';'.$hari.';'.$tgl.';'.$wkt.';'.$tmp;
mysqli_query($con, "DELETE FROM t_dataundangan WHERE kodeu='$kode'");

mysqli_query($con, "UPDATE t_detailsurat SET no='$no', nama='$keg', detail='$detail' WHERE kode='$kode'");

if (isset($_POST['update'])){
$kodeu		= $_POST['kodeu'];
$nm	 		= $_POST['nm'];

var_dump($kodeu);
var_dump($nm);


$kodeu		= array_filter($kodeu);
$nm			= array_filter($nm);




$jumlah_pilih = count($nm);
for ($i=0; $i<$jumlah_pilih;$i++){
        mysqli_query($con, "INSERT INTO t_dataundangan SET
            kodeu  = '$kodeu[$i]',
            nm      = '$nm[$i]'
        ");
    }
        

echo "<script>alert('Surat Undangan berhasil diupdate!'); window.location = '../cetak/c_undangan.php?kode=$kode'</script>"; 		

}


else {
	echo 'Gagal';
}
?>


