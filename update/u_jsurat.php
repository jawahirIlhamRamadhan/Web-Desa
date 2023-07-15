<?php
include '../koneksi.php';


$kode       = $_POST['kodesurat'];
$kl         = $_POST['klasifikasi'];
$jenis      = $_POST['jenis'];
$nmsurat    = $_POST['nmsurat'];
$rdawal     = $_POST['rdawal'];
$rdtengah   = $_POST['rdtengah'];
$rdakhir    = $_POST['rdakhir'];

    mysqli_query($con, "UPDATE t_jenissurat SET 
        kode        ='$kode', 
        kode_klasi  ='$kl', 
        jenis       ='$jenis', 
        nmsurat     ='$nmsurat', 
        awal        ='$rdawal', 
        tengah      ='$rdtengah', 
        akhir       ='$rdakhir' 
        WHERE kode='$kode'") or die (mysqli_error());

        

echo "<script>alert('Surat Jenis Surat berhasil diupdate!'); window.location = '../admin.php.php?page=jenissurat'</script>"; 		

?>


