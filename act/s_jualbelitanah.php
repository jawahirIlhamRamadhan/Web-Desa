<?php
include '../koneksi.php';
$kodejenis	= $_POST['kodejenis'];
$kode		= $_POST['kodesurat'];
$kode_klasi	= $_POST['kode_klasi'];
$nmsurat	= $_POST['nmsurat'];
$idstf      = $_POST['idstf'];

$nik1 		= $_POST['nik1'];
$nama1 		= $_POST['nama1'];
$jk1 		= $_POST['jk1'];
$tmpl1 		= $_POST['tmplahir1'];
$tgll1      = $_POST['tgllahir1'];
$almt1      = $_POST['almt1'];
$nik2       = $_POST['nik2'];
$nama2      = $_POST['nama2'];
$jk2        = $_POST['jk2'];
$tmpl2      = $_POST['tmplahir2'];
$tgll2      = $_POST['tgllahir2'];
$almt2      = $_POST['almt2'];
$luas       = $_POST['luas'];
$letak      = $_POST['letak'];
$ht         = $_POST['harga'];

$b 			= $_POST['barat'];
$u 			= $_POST['utara'];
$t 			= $_POST['timur'];
$s 			= $_POST['selatan'];
$nms1       = $_POST['nmsaksi1'];
$nms2       = $_POST['nmsaksi2'];

$kades	 	= $_POST['kades'];
$detail     =$nik1.';'.$nama1.';'.$jk1.';'.$tmpl1.';'.$tgll1.';'.$almt1.';'.$nik2.';'.$nama2.';'.$jk2.';'.$tmpl2.';'.$tgll2.';'.$almt2.';'.$luas.';'.$letak.';'.$ht.';'.$b.';'.$u.';'.$t.';'.$s.';'.$nms1.';'.$nms2;
                                                              

        if(isset($_POST['cetak'])){

            // isi qrcode yang ingin dibuat. akan muncul saat di scan
            $isi = $nmsurat.'nama:'.$nama1.'antara nama:'.$nama2;
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
mysqli_query($con, "INSERT INTO t_datasurat(kode, kodejenis, nmsurat, no, id_stf, tanggal, status) VALUES ('$kode','$kodejenis','$nmsurat','$nosur','$idstf','".date('Y-m-d')."','acc')");

mysqli_query($con, "INSERT INTO t_detailsurat (kode, kodejenis, nmsurat, no, nik, nama, detail, tanggal, ttd, qrcode, id_ptg) values('$kode','$kodejenis','$nmsurat','$nosur','$nik1','$nama1', '$detail','".date('Y-m-d')."','$kades','".$nama_qr.".png','$idstf')");

echo "<script>alert('Pernyataan Kesepakatan Jual Beli Tanah berhasil dibuat!'); window.location = '../cetak/c_jualbelitanah.php?kode=$kode'</script>"; 
}
?>

