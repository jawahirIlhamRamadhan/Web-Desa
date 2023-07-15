<?php
include '../koneksi.php';
$nik=$_GET['nik'];

$u=mysqli_query($con, "SELECT * FROM t_penduduk where nik='$nik'");
$us=mysqli_fetch_array($u);
if(file_exists("../fotowarga/".$us['foto'])){
	unlink("../fotowarga/".$us['foto']);
	mysqli_query($con, "DELETE FROM t_penduduk WHERE nik='$nik'");
	echo "<script>alert('Data Penduduk berhasil dihapus!'); window.location = '../admin.php?page=penduduk'</script>"; 
}else{
	mysqli_query($con, "DELETE FROM t_penduduk WHERE nik='$nik'");

echo "<script>alert('Data Penduduk berhasil dihapus!'); window.location = '../admin.php?page=penduduk'</script>"; 
}
?>
