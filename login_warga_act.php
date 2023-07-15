<?php
session_start();
include('koneksi.php');
//protect dari mysql injection
$nik = mysqli_real_escape_string($con, $_POST['nik']);
$nama = mysqli_real_escape_string($con, $_POST['nama']);
$query="SELECT * FROM t_penduduk WHERE nik='$nik' and nama='$nama'";
$sql= mysqli_query($con, $query);
$cek= mysqli_num_rows($sql);
$row = mysqli_fetch_array($sql);

$last_login = gmdate("d-m-Y G:i", time()+60*60*7);
$_SESSION['nik']=$row['nik'];
$_SESSION['nama']=$row['nama'];
$_SESSION['id']=$row['id'];

if ($_SESSION['nik']==$nik){
    mysqli_query($con, "UPDATE t_penduduk SET ket='on' WHERE nik='$nik'");
 header('location:buat_sendiri.php?page=warga');
//ubah sesuai keinginan
}else{
 session_destroy();
 echo "<script>alert('NIK atau Nama Tidak Terdaftar !'); window.location = 'index.php'</script>"; 
}
 ?>
 
