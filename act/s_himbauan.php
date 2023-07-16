<?php
include '../koneksi.php';


$kodejenis  = $_POST['kodejenis'];
$kode		= $_POST['kodesurat'];
$kode_klasi	= $_POST['kode_klasi'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];
$idstf      = $_POST['idstf'];

$hal 		= $_POST['perihal'];
$lam		= $_POST['lampiran'];
$tujuan 	= $_POST['tujuan'];
$almt	    = $_POST['almt'];
$dt     	= $_POST['detail'];
$detail		=$hal.';'.$lam.';'.$tujuan.';'.$almt.';'.$dt;

$blnr	= $_POST['blnr'];
$kades	 	= $_POST['kades'];
$thn = date('Y');
                                                            
$slash	= '/';
$nosur = $kode_klasi.$slash.$no.$slash.$blnr.$slash.$thn;
mysqli_query($con, "INSERT INTO t_datasurat(kode, kodejenis, nmsurat, no, id_stf, tanggal, status) VALUES ('$kode','$kodejenis','$nmsurat','$nosur','$idstf','".date('Y-m-d')."','acc')");

    mysqli_query($con, "INSERT INTO t_detailsurat (kode, kodejenis, nmsurat, no, nik, nama, detail, tanggal, ttd, qrcode, id_ptg) values('$kode','$kodejenis','$nmsurat','$nosur','-','$hal', '$detail','".date('Y-m-d')."','$kades','-','$idstf')");


		
echo "<script>alert('Surat Himbauan berhasil dibuat!'); window.location = '../cetak/c_himbauan.php?kode=$kode'</script>"; 



?>


