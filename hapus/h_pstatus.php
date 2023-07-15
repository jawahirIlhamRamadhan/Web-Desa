<?php
include '../koneksi.php';
$kode=$_GET['kode'];

$u=mysqli_query($con, "SELECT * FROM t_detailsurat where kode='$kode'");
$us=mysqli_fetch_array($u);
if(file_exists("../qrcode/".$us['qrcode'])){
	unlink("../qrcode/".$us['qrcode']);
	mysqli_query($con, "DELETE FROM t_detailsurat WHERE kode='$kode'");
	mysqli_query($con, "DELETE FROM t_datasurat WHERE kode='$kode'");
	echo "<script>alert('Data Berhasil dihapus!'); window.location = '../admin.php?page=pstatus'</script>"; 
}else{
	mysqli_query($con, "DELETE FROM t_detailsurat WHERE kode='$kode'");
	mysqli_query($con, "DELETE FROM t_datasurat WHERE kode='$kode'");
echo "<script>alert('Data Berhasil dihapus!'); window.location = '../admin.php?page=pstatus'</script>"; 
}
?>