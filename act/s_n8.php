<?php
include '../koneksi.php';

$kode       = $_POST['kodesurat'];
$nokua      = $_POST['nosuratkua'];
$ptg        = $_POST['ptg'];
$nip        = $_POST['nip'];
$jab        = $_POST['jab'];
$hari       = $_POST['hari'];
$tglp       = $_POST['tglp'];
$tgl        = substr($tglp,0,2);
$bln        = substr($tglp,3,2);
$thn        = substr($tglp,6,4);

mysqli_query($con, "INSERT INTO t_n8 values('','$kode','$nokua','$hari','$tglp','$tgl','$bln','$thn','$ptg','$nip','$jab')");
    
echo "<script>alert('Formulir Pemeriksaan Nikah berhasil dibuat!'); window.location = '../cetak/c_n8.php?kode=$kode'</script>"; 

?>


