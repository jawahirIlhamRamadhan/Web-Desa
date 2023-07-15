<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_detailsurat WHERE kode='$kode'");
echo "<script>alert('Surat Jawaban berhasil dihapus!'); window.location = '../admin.php?page=jawaban'</script>"; 

?>

