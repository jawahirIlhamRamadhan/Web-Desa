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




    mysqli_query($con, "UPDATE t_n8 SET nokua='$nokua', hr='$hari', tglp='$tglp', tgl='$tgl', bln='$bln', thn='$thn', petugas='$ptg', nip='$nip', jab='$jab' WHERE kode='$kode'");
    

   
echo "<script>alert('Formulir Pemeriksaan Nikah berhasil diupdate!'); window.location = '../cetak/c_n8.php?kode=$kode'</script>"; 

?>


