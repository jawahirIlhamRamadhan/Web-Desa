<?php 
session_start();
include('koneksi.php');
session_destroy();
$nik=$_SESSION['nik'];
mysqli_query($con, "UPDATE t_penduduk SET ket='off' WHERE nik='$nik'");
header("location:index.php");
?>