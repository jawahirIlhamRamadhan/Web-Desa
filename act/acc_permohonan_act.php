<?php
include '../koneksi.php';
$id		= $_POST['id'];
$ns		= $_POST['nmsurat'];
$nik	= $_POST['nik'];
$nm		= $_POST['nama'];

$terima=(isset($_POST['terima'])); 
$tolak=(isset($_POST['tolak']));

if ($terima){
		mysqli_query($con, "UPDATE t_permohonan SET status='acc' WHERE id='$id'");

		echo "<script>alert('Permohonan sudah di acc..!'); window.location = '../admin.php?page=process_permohonan_all'</script>"; 

	}else if($tolak){

	mysqli_query($con, "DELETE FROM t_permohonan WHERE id='$id'");
	echo "<script>alert('Permohonan sudah ditolak..!'); window.location = '../admin.php?page=process_permohonan_all'</script>"; 
}

?>

