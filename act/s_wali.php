<?php
include '../koneksi.php';
error_reporting(0);
ini_set('display_errors', 0);
$kode       = $_POST['kodesuratw'];
$no		    = $_POST['no'];

$wali       = $_POST['wali'];
$nikwali    = $_POST['nikwali'];
$sbbwali    = $_POST['sebabwalih'];
$hwali      = $_POST['hubwali'];
$jwali      = $_POST['jwali'];
$almt      = $_POST['walmtwali'];
$petugas    = $_POST['petugas'];
$hari       = $_POST['harib'];
$tglp       = $_POST['tglp'];
$tgl        = substr($tglp,0,2);
$bln        = substr($tglp,3,2);
$thn        = substr($tglp,6,4);

if(isset($_POST['simpanwali'])){
if(empty($hwali)) {
     mysqli_query($con, "INSERT INTO t_wali values('','$kode','$no','$wali','$nikwali','$sbbwali','Wali Hakim','$almt','$hari','$tglp','$tgl','$bln','$thn', '$petugas')");
    
}
 else {mysqli_query($con, "INSERT INTO t_wali values('','$kode','$no','$wali','$nikwali','$sbbwali','$hwali','$almt','$hari','$tglp','$tgl','$bln','$thn', '$petugas')");
    }
echo "<script>alert('Formulir Pemeriksaan Wali berhasil dibuat!'); window.location = '../cetak/c_walinikah.php?kode=$kode'</script>"; 
}
?>


