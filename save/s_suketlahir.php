<?php
include '../koneksi.php';


$kodejenis      = $_POST['kodejenis'];
$kode		= $_POST['kodesurat'];
$kode_klasi	= $_POST['kode_klasi'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];
$idstf      = $_POST['idstf'];
$nik2       = $_POST['nik2'];
$nama2      = $_POST['nama2'];
$jk2        = $_POST['jk2'];
$tmp_lahir2 = $_POST['tmp_lahir2'];
$tgl_lahir2 = $_POST['tgl_lahir2'];
$agama2     = $_POST['agama2'];
$almt2      = $_POST['almt2'];

$anake      = $_POST['anake'];

$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];
$jk 		= $_POST['jk'];
$tmp_lahir 	= $_POST['tmp_lahir'];
$tgl_lahir	= $_POST['tgl_lahir'];
$agama 		= $_POST['agama'];
$almt 		= $_POST['almt'];

$nik1       = $_POST['nik1'];
$nama1      = $_POST['nama1'];
$jk1        = $_POST['jk1'];
$tmp_lahir1 = $_POST['tmp_lahir1'];
$tgl_lahir1 = $_POST['tgl_lahir1'];
$agama1     = $_POST['agama1'];
$almt1      = $_POST['almt1'];
 
$blnr       = $_POST['blnr'];
$kades      = $_POST['kades'];
$thn        = date('Y');
$detail     =$nik.';'.$nama.';'.$jk.';'.$tmp_lahir.';'.$tgl_lahir.';'.$agama.';'.$almt.';'.$nik1.';'.$nama1.';'.$jk1.';'.$tmp_lahir1.';'.$tgl_lahir1.';'.$agama1.';'.$almt1.';'.$nik2.';'.$nama2.';'.$jk2.';'.$tmp_lahir2.';'.$tgl_lahir2.';'.$agama2.';'.$almt2.';'.$anake;                                                                                                                            
$slash      = '/';
$nosur = $kode_klasi.$slash.$no.$slash.$blnr.$slash.$thn;
        if(isset($_POST['cetak'])){

            // isi qrcode yang ingin dibuat. akan muncul saat di scan
            $isi = $nosur.'nik:'.$nik.'nama:'.$nama;
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

   mysqli_query($con, "INSERT INTO t_detailsurat (kode, kodejenis, nmsurat, no, nik, nama, detail, tanggal, ttd, qrcode, id_ptg) values('$kode','$kodejenis','$nmsurat','$nosur','$nik','$nama', '$detail','".date('Y-m-d')."','$kades','".$nama_qr.".png','$idstf')");

echo "<script>alert('Surat berhasil dibuat!'); window.location = '../buat_sendiri.php?page=tunggu&kode=$kode'</script>";
}
?>


