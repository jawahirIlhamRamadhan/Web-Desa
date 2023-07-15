<?php
session_start();
if(empty($_SESSION)){
  session_destroy();
  echo "<script>alert('Anda belum login!'); window.location = 'index.php'</script>"; 
}else if($_SESSION['level']=='staff'){
  session_destroy();
  echo "<script>alert('Hanya Administrator yang boleh mengakses!'); window.location = 'index.php'</script>"; 
}
?>