<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$klasifikasi= $_POST['klasifikasi'];
$jenis 		= $_POST['jenis'];
$nmsurat	= $_POST['nmsurat'];
$rdawal 	= $_POST['rdawal'];
$rdtengah	= $_POST['rdtengah'];
$rdakhir 	= $_POST['rdakhir'];



mysqli_query($con, "INSERT INTO t_jenissurat values('','$kode','$kodejenis','$klasifikasi','$jenis','$nmsurat','$rdawal','$rdtengah','$rdakhir')");
echo "<script>alert('Jenis Surat berhasil ditambahkan..!'); window.location = '../admin.pgp?page=jenissurat'</script>"; 

?>

