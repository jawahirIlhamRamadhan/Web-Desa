<?php
include '../koneksi.php';

$ks		= $_POST['kodesurat'];
$kj		= $_POST['kodejenis'];
$ns		= $_POST['nosur'];
$nm		= $_POST['nmsurat'];

$terima=(isset($_POST['terima'])); 
$tolak=(isset($_POST['tolak']));
$query=mysqli_query($con, "SELECT count(*) AS js FROM t_datasurat WHERE kode='$ks'");
$hasil=mysqli_fetch_array($query);
$adasurat=$hasil['js'];
if ($terima){
	 if ($adasurat==0){
mysqli_query($con, "INSERT INTO t_datasurat (kode, kodejenis, nmsurat, no, tanggal, status) VALUES('$ks','$kj','$nm','$ns','".date('Y-m-d')."','acc')");
mysqli_query($con, "UPDATE t_buatsendiri SET status='acc' WHERE kode_surat='$ks'");

echo "<script>alert('Surat sudah di acc..!'); window.location = '../admin.php?page=buat_sendiri_all'</script>"; 
}
mysqli_query($con, "UPDATE t_datasurat SET status='acc' WHERE kode='$ks'");
mysqli_query($con, "UPDATE t_buatsendiri SET status='acc' WHERE kode_surat='$ks'");

echo "<script>alert('Surat sudah di acc..!'); window.location = '../admin.php?page=buat_sendiri_all'</script>"; 
}else if($tolak){
	$u=mysqli_query($con, "SELECT * FROM t_detailsurat where kode='$ks'");
	$us=mysqli_fetch_array($u);
	if(file_exists("../qrcode/".$us['qrcode'])){
	unlink("../qrcode/".$us['qrcode']);
	mysqli_query($con, "DELETE FROM t_detailsurat WHERE kode='$ks'");
	mysqli_query($con, "DELETE FROM t_datasurat WHERE kode='$ks'");
	mysqli_query($con, "DELETE FROM t_buatsendiri WHERE kode_surat='$ks'");
	echo "<script>alert('Status surat anda ditolak..!'); window.location = '../admin.php?page=buat_sendiri_all'</script>"; 
	}else{
	mysqli_query($con, "DELETE FROM t_detailsurat WHERE kode='$ks'");
	mysqli_query($con, "DELETE FROM t_datasurat WHERE kode='$ks'");
	mysqli_query($con, "DELETE FROM t_buatsendiri WHERE kode_surat='$ks'");
	echo "<script>alert('Status surat anda ditolak..!'); window.location = '../admin.php?page=buat_sendiri_all'</script>"; 
}
}
?>

