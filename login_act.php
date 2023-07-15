<?php
session_start();
include('koneksi.php');
//protect dari mysql injection
$uname = mysqli_real_escape_string($con, $_POST['uname']);
$pass = mysqli_real_escape_string($con, $_POST['pass']);
$query="SELECT * FROM t_admin WHERE uname='$uname' and pass=md5('$pass')";
$sql= mysqli_query($con, $query);
$cek= mysqli_num_rows($sql);
$row = mysqli_fetch_array($sql);
$last_login = gmdate("d-m-Y G:i", time()+60*60*7);
$_SESSION['level']=$row['level'];
$_SESSION['uname']=$row['uname'];
$_SESSION['id']=$row['id'];

if ($_SESSION['level']=='admin'){
    mysqli_query($con, "UPDATE t_admin SET last_login='$last_login', status='on' WHERE uname='$uname'");
 header('location:admin.php?page=home');
//ubah sesuai keinginan
} else if($_SESSION['level']=='staff'){
    mysqli_query($con, "UPDATE t_admin SET last_login='$last_login', status='on' WHERE uname='$uname'");
 header('location:staff.php?page=staff');
} else{
 session_destroy();

 echo "<script>alert('Username atau Password salah !'); window.location = 'index.php'</script>"; 
}
 ?>
 
