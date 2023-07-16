<?php
include '../koneksi.php';

$kode       = $_POST['kodesurat'];
$no         = $_POST['nosurat'];
$nokua      = $_POST['nosuratkua'];
$status     = $_POST['status'];
$syarat     = implode(",", $_POST['syarat']);
$ptg        = $_POST['ptg'];
$nip        = $_POST['nip'];
$jab        = $_POST['jab'];

 mysqli_query($con, "INSERT INTO t_n7 values('','$kode','$no','$nokua','$status','".$syarat."','".date('Y-m-d')."','$ptg','$nip','$jab','&checkmark;')");
    
echo "<script>alert('Formulir N7 berhasil dibuat!'); window.location = '../cetak/c_n7.php?kode=$kode'</script>"; 

?>


