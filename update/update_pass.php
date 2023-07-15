<?php
include '../koneksi.php';

$id      = $_POST['id'];
$pass1   = $_POST['pass1'];
$pass2   = $_POST['pass2'];
$p1      = md5($pass1);
$p2      = md5($pass2);
if($pass1==$pass2){

    mysqli_query($con, "UPDATE t_admin SET pass='$p2' WHERE id='$id'")or die (Error.mysqli_error($con));
      
echo "<script>alert('Password berhasil diganti dengan $pass2 !'); window.location = '../admin.php?page=edit_staff&id=$id'</script>"; 

} else {
   echo "<script>alert('Password $pass1 tidak sama dengan $pass2, Ulangi lagi  !'); window.location = '../admin.php?page=edit_staff&id=$id'</script>";
}

?>


