    <link rel="stylesheet" href="../assets/css/style.css">
<?php
include_once "../koneksi.php";
include '../assets/inc.php';

# Baca variabel URL
$kodesurat = $_GET['kode'];

# Perintah untuk mendapatkan data dari tabel 
$query = mysqli_query ($con, "SELECT t_jenissurat.*, t_datasurat.*, t_detailsurat.* from t_jenissurat, t_datasurat, t_detailsurat 
WHERE t_detailsurat.kode='$kodesurat'");
while ($rs = mysqli_fetch_array($query)){
  $tgl = $rs['tanggal'];
  $bl=format_hari_tanggal($tgl);
  $bln=explode(',',$bl);
  $bulan=$bln['1'];
  $dt=explode(';',$rs['detail']);
?>
<?php 
$query = mysqli_query ($con, "SELECT * from t_desa");
while ($rd = mysqli_fetch_array($query)){
?>
<html>
<head>
<title></title>
<link href="styles/style.css" rel="stylesheet" type="text/css">
</head>
<body onLoad="window.print()" >
<h1 align="center">
<table width="800" align="center" border="0" cellspacing="1" cellpadding="4" class="table-print">
  <tr>
    <td rowspan="3" width="70"><img src="../images/<?php echo $rd['logo'];?>" width="60" height="60"></td>
    <td colspan="" align="center"><strong><font size=2 color="black">PEMERINTAH KABUPATEN <?php echo strtoupper($rd['kab']);?></font></a>
    </strong></td><td></td>
  </tr>
    <tr>
    <td colspan="" align="center"><strong><font size=3 color="black">KECAMATAN <?php echo strtoupper($rd['kec']);?></font></a>
    </strong></td><td width="70"></td>
  </tr>
    <tr>
    <td colspan="" align="center"><strong><font size=5 color="black">DESA <?php echo strtoupper($rd['desa']);?></font></strong></td>
    <td width="70"></td>
  </tr>
    <tr>
   <td colspan="3" align="center"><hr><font size=2 color="black"><i>Sekretariat : <?php echo $rd['kantor'];?></i><hr size="3"></td>
  </tr>
    <tr>
    <td colspan="3" align="center"><strong><font size=4 color="black"><u>DAFTAR PENGELUARAN RIL</u></font></a>
    </strong></td>
  </tr>
</table>
<table align="center" class="table-list" width="800" border="0" cellspacing="1" cellpadding="2">
    <tr>
    <td colspan="5">Yang bertanda tangan dibawah ini :</td>
  </tr>
  <tr>
    <td width="25%">Nama</td><td>: <?php echo $dt[0]; ?></td>
  </tr>
    <tr>
    <td>NIP</td><td>: <?php echo $dt[1]; ?></td>
  </tr>
      <tr>
    <td>Jabatan</td><td>: <?php echo $dt[2]; ?></td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" align="justify">Berdasarkan Surat Perjalanan Dinas Nomor : <?php echo $rs['no']; ?>, Tanggal : <?php echo $bulan; ?>, dengan ini Kami menyatakan dengan sesungguhnya bahwa :</td>
  </tr>
   <tr>
    <td colspan="5" align="justify">1. Biaya Transfort pegawai dan/atau biaya penginapan di bawah ini yang tidak dapat diperoleh bukti - bukti pengeluarannya, meliputi :</td>
  </tr>
</table>
<table align="center" class="table-list" width="95%" border="1" cellspacing="0" cellpadding="4">
    <tr>
    <td align="center">NO</td><td width="50%">URAIAN</td><td align="center">JUMLAH</td>
  </tr>
  <tr>
    <td align="center">1.</td><td width="50%">Uang harian, Uang saku, Uang makan & Transfort lokal</td><td align="right">Rp. <?php echo format_angka($dt[13]);?></td>
  </tr>
  <tr>
    <td align="center">2.</td><td width="50%">Biaya Transfort</td><td align="right">Rp. <?php echo format_angka($dt[14]);?></td>
  </tr>
    <tr>
    <td align="center">3.</td><td width="50%">Biaya Penginapan</td><td align="right">Rp. <?php echo format_angka($dt[15]);?></td>
  </tr>
    <tr>
    <td align="center">4.</td><td width="50%">Uang Representatif</td><td align="right">Rp. <?php echo format_angka($dt[16]);?></td>
  </tr>
    <tr>
    <td align="center">5.</td><td width="50%">Sewa Kendaraan dalam Kota</td><td align="right">Rp. <?php echo format_angka($dt[17]);?></td>
  </tr>
  <?php 

$query = mysqli_query ($con, "SELECT * from t_detailsurat WHERE kode='$kodesurat'");
while ($rp = mysqli_fetch_array($query)){
  $dtl=explode(';',$rp['detail']);
  $u=$dtl[13];
  $t=$dtl[14];
  $i=$dtl[15];
  $r=$dtl[16];
  $s=$dtl[17];
  $jumlah=$u+$t+$i+$r+$s;
?>


      <tr>
    <td align="center"></td><td width="50%"><b>JUMLAH</b></td><td align="right"><b>Rp. <?php echo format_angka($jumlah);?></b></td>
  </tr>
<?php } ?>
      <tr>
    <td align="center"></td><td width="50%" colspan="2">Terbilang : <b><?php echo kekata($jumlah);?> Rupiah</b></td>
  </tr>

  </table>

<table align="center" class="table-list" width="800" border="0" cellspacing="1" cellpadding="2">
   <tr>
    <td colspan="5" align="justify">2. Jumlah uang tersebut pada angka 1 di atas benar - benar dikeluarkan untuk pelaksanaan Perjalanan Dinas dimaksud dan apabila dikemudian hari terdapat kelebihan atas pembayaran, kami bersedia untuk menyetorkan kelebihan tersebut ke kas Negara.</td>
  </tr>
     <tr>
    <td colspan="5" align="justify">Demikian pernyataan ini kami buat dengan sebenarnya, untuk dipergunakan sebagaimana mestinya.</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>

<tr><td></td><td></td><td>
<table width="98%" align="right" border="0" cellspacing="1" cellpadding="4" class="table-print">
          <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td></td><td align="center" class="pull pull-right"><?php echo $rd['desa'];?>, &nbsp;<?php echo $bulan;?></td>
  </tr>
  <tr>
    <td align="center">Kepala SKPD/KPA</td><td align="center" class="pull pull-right">Pelaksana SPD,</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><u><b><?php echo $dt[0];?></b></u></td><td align="center" class="pull pull-right"><u><b><?php echo $dt[4];?></b></u></td>
  </tr>
    <tr>
    <td align="center">NIP. <?php echo $dt[1];?></td><td align="center" class="pull pull-right">NIP. <?php echo $dt[5];?></td>
  </tr>
</table>
</td>
</tr>
</table>
  <?php }} ?>
</body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
</html>