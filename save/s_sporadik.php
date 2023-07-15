<?php
include '../koneksi.php';
$kodejenis	= $_POST['kodejenis'];
$kode		= $_POST['kodesurat'];
$kode_klasi	= $_POST['kode_klasi'];
$nmsurat	= $_POST['nmsurat'];
$idstf      = $_POST['idstf'];
$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];

$luas 		= $_POST['luas'];
$letak 		= $_POST['letak'];
$rtrw       = $_POST['rtrw'];
$desa       = $_POST['deskel'];
$kab        = $_POST['kab'];
$nib        = $_POST['nib'];
$status     = $_POST['stanah'];
$untuk      = $_POST['untuk'];

$asal 		= $_POST['asaltanah'];
$sejak      = $_POST['sejak'];
$b 			= $_POST['barat'];
$u 			= $_POST['utara'];
$t 			= $_POST['timur'];
$s 			= $_POST['selatan'];
$nms1       = $_POST['nmsaksi1'];
$ums1       = $_POST['umursaksi1'];
$kerjaans1  = $_POST['kerjaansaksi1'];
$almts1     = $_POST['almtsaksi1'];
$nms2       = $_POST['nmsaksi2'];
$ums2       = $_POST['umursaksi2'];
$kerjaans2  = $_POST['kerjaansaksi2'];
$almts2     = $_POST['almtsaksi2'];

$blnr		= $_POST['blnr'];
$kades	 	= $_POST['kades'];
$thn 		= date('Y');
$detail     =$nik.';'.$nama.';'.$luas.';'.$letak.';'.$rtrw.';'.$desa.';'.$kab.';'.$nib.';'.$status.';'.$untuk.';'.$asal.';'.$sejak.';'.$b.';'.$u.';'.$t.';'.$s.';'.$nms1.';'.$ums1.';'.$kerjaans1.';'.$almts1.';'.$nms2.';'.$ums2.';'.$kerjaans2.';'.$almts2;                                                              
$slash		= '/';
$nosur = $kode_klasi.$slash.$blnr.$slash.$thn;
        if(isset($_POST['cetak'])){

            // isi qrcode yang ingin dibuat. akan muncul saat di scan
            $isi = $nmsurat.'nik:'.$nik.'nama:'.$nama;
            $nama_qr =md5($isi);
            // memanggil library php qrcode
            include "../phpqrcode/qrlib.php"; 

            // nama folder tempat penyimpanan file qrcode
            $penyimpanan = "../qrcode/";

            // membuat folder dengan nama "temp"
            if (!file_exists($penyimpanan))
             mkdir($penyimpanan);

            // perintah untuk membuat qrcode dan menyimpannya dalam folder temp
            // atur level pemulihan datanya dengan QR_ECLEVEL_L | QR_ECLEVEL_M | QR_ECLEVEL_Q | QR_ECLEVEL_H
            // atur pixel qrcode pada parameter ke 4
            // atur jarak frame pada parameter ke 5
            QRcode::png($isi, $penyimpanan.$nama_qr.'.png', QR_ECLEVEL_L, 10, 5); 
         
            // menampilkan qrcode 
            echo '<img src="'.$penyimpanan.$nama_qr.'.png">';
mysqli_query($con, "INSERT INTO t_buatsendiri (nik, nama, kode_surat, kode_jenis, no_surat, nmsurat, tgl, status) VALUES ('$nik','$nama','$kode','$kodejenis','$nosur','$nmsurat','".date('Y-m-d')."','onprocess')");
mysqli_query($con, "INSERT INTO t_datasurat(kode, kodejenis, nmsurat, no, id_stf, tanggal, status) VALUES ('$kode','$kodejenis','$nmsurat','$nosur','$idstf','".date('Y-m-d')."','onprocess')");
    
mysqli_query($con, "INSERT INTO t_detailsurat (kode, kodejenis, nmsurat, no, nik, nama, detail, tanggal, ttd, qrcode, id_ptg) values('$kode','$kodejenis','$nmsurat','$nik','$nik','$nama', '$detail','".date('Y-m-d')."','$kades','".$nama_qr.".png','$idstf')");

echo "<script>alert('Surat berhasil dibuat!'); window.location = '../buat_sendiri.php?page=tunggu&kode=$kode'</script>";
}
?>

