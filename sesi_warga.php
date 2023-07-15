<?php
session_start();
if(empty($_SESSION)){
  session_destroy();
  echo "<script>alert('Anda belum login!'); window.location = 'index.php'</script>"; 
}
?>