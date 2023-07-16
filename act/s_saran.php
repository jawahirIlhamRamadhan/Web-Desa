<?php
include '../koneksi.php';


$nama 		= $_POST['nama'];
$email		= $_POST['email'];
$saran      = $_POST['saran'];

    mysqli_query($con, "INSERT INTO t_saran values('','$nama','$email','$saran','".date('Y-m-d')."')");


		
echo "<script>alert('Terimakasih sudah memberikan saran kepada kami !'); window.location = '../index.php'</script>"; 



?>


