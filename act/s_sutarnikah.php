<?php
include '../koneksi.php';
$kodejenis  = $_POST['kodejenis'];
$kode		= $_POST['kodesurat'];
$kode_klasi	= $_POST['kode_klasi'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];
$idstf      = $_POST['idstf'];

$nika       = $_POST['nika'];
$namaa      = $_POST['namaa'];
$nmayaha    = $_POST['nmayaha'];
$jka        = $_POST['jka'];
$tmp_lahira = $_POST['tmp_lahira'];
$tgl_lahira = $_POST['tgl_lahira'];
$kwnga      = $_POST['kwnga'];
$agamaa     = $_POST['agamaa'];
$pkjna      = $_POST['pkjna'];
    $desaa           = $_POST['desaa'];
    $keca            = $_POST['keca'];
    $kaba            = $_POST['kaba'];
    $prova           = $_POST['prova'];
$almtca        = $_POST['almta'];
$statusa    = $_POST['statusa'];
$nna        = $_POST['statusna'];

$nikb       = $_POST['nikb'];
$namab      = $_POST['namab'];
$nmayahb    = $_POST['nmayahb'];
$jkb        = $_POST['jkb'];
$tmp_lahirb = $_POST['tmp_lahirb'];
$tgl_lahirb = $_POST['tgl_lahirb'];
$kwngb      = $_POST['kwngb'];
$agamab     = $_POST['agamab'];
$pkjnb      = $_POST['pkjnb'];
    $desab           = $_POST['desab'];
    $kecb            = $_POST['kecb'];
    $kabb           = $_POST['kabb'];
    $provb           = $_POST['provb'];
$almtcb        = $_POST['almtb'];
$statusb    = $_POST['statusb'];
$nnb        = $_POST['statusnb'];

$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];
$bin       = $_POST['bin'];
$jk 		= $_POST['jk'];
$tmp_lahir 	= $_POST['tmp_lahir'];
$tgl_lahir	= $_POST['tgl_lahir'];
$kwng       = $_POST['kwng'];
$agama 		= $_POST['agama'];
$pkjn       = $_POST['pkjn'];
$almtay 		= $_POST['almt'];
    $desa           = $_POST['desa'];
    $kec            = $_POST['kec'];
    $kab            = $_POST['kab'];
    $prov           = $_POST['prov'];
$status     = $_POST['status'];

$nik1       = $_POST['nik1'];
$nama1      = $_POST['nama1'];
$bin1      = $_POST['bin1'];
$jk1        = $_POST['jk1'];
$tmp_lahir1 = $_POST['tmp_lahir1'];
$tgl_lahir1 = $_POST['tgl_lahir1'];
$kwng1      = $_POST['kwng1'];
$agama1     = $_POST['agama1'];
$pkjn1      = $_POST['pkjn1'];
$almtibu        = $_POST['almt1'];
    $desa1           = $_POST['desa1'];
    $kec1            = $_POST['kec1'];
    $kab1            = $_POST['kab1'];
    $prov1           = $_POST['prov1'];
$status1    = $_POST['status1'];

$hari       = $_POST['hari'];
$tgl        = $_POST['tgl'];
$wkt        = $_POST['waktu'];
$tmpt       = $_POST['tmpt'];
$maskawin   = $_POST['maskawin'];

$blnr       = $_POST['blnr'];
$kades      = $_POST['kades'];
$thn        = date('Y');

$detail     =$nika.';'.$namaa.';'.$nmayaha.';'.$jka.';'.$tmp_lahira.';'.$tgl_lahira.';'.$kwnga.';'.$agamaa.';'.$pkjna.';'.$desaa.';'.$keca.';'.$kaba.';'.$prova.';'.$almtca.';'.$statusa.';'.$nna.';'.$nikb.';'.$namab.';'.$nmayahb.';'.$jkb.';'.$tmp_lahirb.';'.$tgl_lahirb.';'.$kwngb.';'.$agamab.';'.$pkjnb.';'.$desab.';'.$kecb.';'.$kabb.';'.$provb.';'.$almtcb.';'.$statusb.';'.$nnb.';'.$nik.';'.$nama.';'.$bin.';'.$jk.';'.$tmp_lahir.';'.$tgl_lahir.';'.$kwng.';'.$agama.';'.$pkjn.';'.$desa.';'.$kec.';'.$kab.';'.$prov.';'.$almtay.';'.$status.';'.$nik1.';'.$nama1.';'.$bin1.';'.$jk1.';'.$tmp_lahir1.';'.$tgl_lahir1.';'.$kwng1.';'.$agama1.';'.$pkjn1.';'.$desa1.';'.$kec1.';'.$kab1.';'.$prov1.';'.$almtibu.';'.$status1.';'.$hari.';'.$tgl.';'.$wkt.';'.$tmpt.';'.$maskawin;                                  
$slash      = '/';
$nosur = $kode_klasi.$slash.$no.$slash.$blnr.$slash.$thn;
        if(isset($_POST['cetak'])){

            // isi qrcode yang ingin dibuat. akan muncul saat di scan
            $isi = $nosur.'Suami:'.$namaa.'Istri:'.$namab;
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

    mysqli_query($con, "INSERT INTO t_datacalon (kode, nik, nama, binbinti, jk, tmp_lahir, tgl_lahir, kwng, agama, pkjn, prov, kab, kec, desa, alamat, status, status_na) values('$kode','$nika','$namaa','$nmayaha','$jka','$tmp_lahira','$tgl_lahira','$kwnga','$agamaa','$pkjna','$prova','$kaba','$keca','$desaa','$almtca', '$statusa','$nna')");
    mysqli_query($con, "INSERT INTO t_datacalon (kode, nik, nama, binbinti, jk, tmp_lahir, tgl_lahir, kwng, agama, pkjn, prov, kab, kec, desa, alamat, status, status_na) values('$kode','$nikb','$namab','$nmayahb','$jkb','$tmp_lahirb','$tgl_lahirb','$kwngb','$agamab','$pkjnb', '$provb','$kabb','$kecb','$desab','$almtcb', '$statusb','$nnb')");

   mysqli_query($con, "INSERT INTO t_detailsurat (kode, kodejenis, nmsurat, no, nik, nama, detail, tanggal, ttd, qrcode, id_ptg) values('$kode','$kodejenis','$nmsurat','$nosur','$nika','$namaa', '$detail','".date('Y-m-d')."','$kades','".$nama_qr.".png','$idstf')");


echo "<script>alert('Surat Pengantar Nikah berhasil dibuat!'); window.location = '../admin.php?page=cetak_n1-n6&kode=$kode'</script>"; 
}
?>


