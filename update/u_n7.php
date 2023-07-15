<?php
include '../koneksi.php';

$kode       = $_POST['kodesurat'];
$nokua      = $_POST['nosuratkua'];
$status     = $_POST['status'];
$syarat     = implode(",", $_POST['syarat']);
$ptg        = $_POST['ptg'];
$nip        = $_POST['nip'];
$jab        = $_POST['jab'];

 mysqli_query($con, "UPDATE t_n7 set nokua='$nokua', status='$status', syarat='".$syarat."', tgl='".date('Y-m-d')."', petugas='$ptg', nip='$nip', jab='$jab' WHERE kode='$kode'");
    
echo "<script>alert('Formulir N7 berhasil diupdate!'); window.location = '../cetak/c_n7.php?kode=$kode'</script>"; 

?>


