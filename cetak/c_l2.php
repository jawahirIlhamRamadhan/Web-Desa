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

<table align="center" class="table-list" width="800" border="0" cellspacing="1" cellpadding="2">
    <tr>
    <td colspan="5" align="center"><font size=4><b><u>RINCIAN BIAYA PERJALANAN DINAS</u></b></font></td>
  </tr>
    <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td width="25%">Lampiran SPPD Nomor</td><td>: <?php echo $rs['no']; ?></td>
  </tr>
    <tr>
    <td>Tanggal</td><td>: <?php echo $bulan; ?></td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
</table>
<table align="center" class="table-list" width="800" border="1" cellspacing="0" cellpadding="4">
    <tr>
    <td align="center">NO</td><td width="50%">PERINCIAN BIAYA</td><td align="center">JUMLAH</td><td>KETERANGAN</td>
  </tr>
  <tr>
    <td align="center">1.</td><td width="50%">Uang harian, Uang saku, Uang makan & Transfort lokal</td><td align="right">Rp. <?php echo format_angka($dt[13]);?></td><td>-</td>
  </tr>
  <tr>
    <td align="center">2.</td><td width="50%">Biaya Transfort</td><td align="right">Rp. <?php echo format_angka($dt[14]);?></td><td>-</td>
  </tr>
    <tr>
    <td align="center">3.</td><td width="50%">Biaya Penginapan</td><td align="right">Rp. <?php echo format_angka($dt[15]);?></td><td>-</td>
  </tr>
    <tr>
    <td align="center">4.</td><td width="50%">Uang Representatif</td><td align="right">Rp. <?php echo format_angka($dt[16]);?></td><td>-</td>
  </tr>
    <tr>
    <td align="center">5.</td><td width="50%">Sewa Kendaraan dalam Kota</td><td align="right">Rp. <?php echo format_angka($dt[17]);?></td><td>-</td>
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
    <td align="center"></td><td width="50%"><b>JUMLAH</b></td><td align="right"><b>Rp. <?php echo format_angka($jumlah);?></b></td><td>-</td>
  </tr>
<?php } ?>
      <tr>
    <td align="center"></td><td width="50%" colspan="2">Terbilang : <b><?php echo kekata($jumlah);?> Rupiah</b></td><td>-</td>
  </tr>

  </table>

<table align="center" class="table-list" width="800" border="0" cellspacing="1" cellpadding="2">
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
    <td align="center">Telah dibayar sejumlah <br>Rp. <?php echo format_angka($jumlah);?></td><td align="center" class="pull pull-right">Telah menerima jumlah uang sebesar <br> Rp. <?php echo format_angka($jumlah);?></td>
  </tr>
  <tr>
    <td align="center">Bendahara Pengeluaran</td><td align="center" class="pull pull-right">Yang Menerima,</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><u><b><?php echo $rd['bendahara'];?></b></u></td><td align="center" class="pull pull-right"><u><b><?php echo $dt[4];?></b></u></td>
  </tr>
    <tr>
    <td align="center" colspan="2"><hr></td>
  </tr>
  <tr>
    <td align="center" colspan="2">PERHITUNGAN SPPD RAMPUNG</td>
  </tr>
  <tr>
    <td>Ditetapkan sejumlah</td><td>: Rp. <?php echo format_angka($jumlah);?></td>
  </tr>
    <tr>
    <td>Yang telah dibayar semula</td><td>: Rp. <?php echo format_angka($jumlah);?></td>
  </tr>
    <tr>
    <td>Sisa Kurang / Lebih</td><td>: Rp. _______________</td>
  </tr>
  <tr>
    <td></td><td align="center" class="pull pull-right">Kepala SKP/KPA,</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td></td><td align="center" class="pull pull-right"><u><b><?php echo $dt[0];?></b></u></td>
  </tr>
    <tr>
    <td></td><td align="center" class="pull pull-right">NIP. <?php echo $dt[1];?></td>
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