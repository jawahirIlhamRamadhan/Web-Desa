<?php
include '../koneksi.php';



$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];

$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];

    mysqli_query($con, "DELETE FROM t_ahliwaris WHERE kodeaw='$kode'");

   mysqli_query($con, "UPDATE t_detailsurat SET no='$no', nik='$nik', nama='$nama', detail='$detail' WHERE kode='$kode'");
   
if (isset($_POST['update'])){
$kodeaw		= $_POST['kodesurataw'];
$nm	 		= $_POST['nm'];
$lp		 	= $_POST['lp'];
$umur	 	= $_POST['umur'];
$shdk	 	= $_POST['shdk'];
var_dump($kodeaw);
var_dump($nm);
var_dump($lp);
var_dump($umur);
var_dump($shdk);

$kodeaw		= array_filter($kodeaw);
$nm			= array_filter($nm);
$lp			= array_filter($lp);
$umur		= array_filter($umur);
$shdk		= array_filter($shdk);



$jumlah_pilih = count($nm);
for ($i=0; $i<$jumlah_pilih;$i++){
        mysqli_query($con, "INSERT INTO t_ahliwaris SET
            kodeaw  = '$kodeaw[$i]',
            nm      = '$nm[$i]',
            lp      = '$lp[$i]',
            umur    = '$umur[$i]',
            shdk    = '$shdk[$i]'
        ");
    }
        

echo "<script>alert('Surat Keterangan Ahli Waris berhasil diupdate!'); window.location = '../cetak/c_suketaw.php?kode=$kode'</script>"; 		

}



?>


