<?php
include '../koneksi.php';


$kodejenis      = $_POST['kodejenis'];
$kode		= $_POST['kodesurat'];
$kode_klasi	= $_POST['kode_klasi'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];
$idstf      = $_POST['idstf'];

$keg 		= $_POST['keg'];
$hari 		= $_POST['hari'];
$tgl 		= $_POST['tgl'];
$wkt 	    = $_POST['wkt'];
$tmp	    = $_POST['tmp'];
$detail     = $keg.';'.$hari.';'.$tgl.';'.$wkt.';'.$tmp;

$blnr	  = $_POST['blnr'];
$kades	 	= $_POST['kades'];

$thn = date('Y');
                                                                    
   $slash	= '/';
   $nosur = $kode_klasi.$slash.$no.$slash.$blnr.$slash.$thn;
mysqli_query($con, "INSERT INTO t_datasurat(kode, kodejenis, nmsurat, no, id_stf, tanggal, status) VALUES ('$kode','$kodejenis','$nmsurat','$nosur','$idstf','".date('Y-m-d')."','acc')");
    
    mysqli_query($con, "INSERT INTO t_detailsurat (kode, kodejenis, nmsurat, no, nik, nama, detail, tanggal, ttd, qrcode, id_ptg) values('$kode','$kodejenis','$nmsurat','$nosur','-','$keg', '$detail','".date('Y-m-d')."','$kades','-','$idstf')");

if (isset($_POST['cetak'])){
$kodeu		= $_POST['kodesuratu'];
$nm	 		= $_POST['nm'];

var_dump($kodeu);
var_dump($nm);


$kodeu		= array_filter($kodeu);
$nm			= array_filter($nm);


$jumlah_pilih = count($nm);
for ($i=0; $i<$jumlah_pilih;$i++){
        mysqli_query($con, "INSERT INTO t_dataundangan SET
        	kodeu 	= '$kodeu[$i]',
            nm    	= '$nm[$i]'
        ");
	}
		
echo "<script>alert('Surat Undangan berhasil dibuat!'); window.location = '../cetak/c_undangan.php?kode=$kode'</script>"; 
}


else {
	echo 'Gagal';
}
?>


