    <link rel="stylesheet" href="../assets/css/style.css">
<?php
include_once "../koneksi.php";
include_once "../assets/inc.php";

# Baca variabel URL
$kodesurat = $_GET['kode'];

# Perintah untuk mendapatkan data dari tabel Surat 
$query = mysqli_query ($con, "SELECT t_jenissurat.*, t_datasurat.*, t_detailsurat.*, t_penduduk.* from t_jenissurat, t_datasurat, t_detailsurat, t_penduduk WHERE t_detailsurat.kode='$kodesurat' AND t_detailsurat.nik=t_penduduk.nik");
while ($r = mysqli_fetch_array($query)){
  $dt=explode(';',$r['detail']);
  $tgl = $r['tanggal'];
  $bl=format_hari_tanggal($tgl);
  $bln=explode(',',$bl);
  $bulan=$bln['1'];
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
    <td colspan="3" align="center"><strong><font size=4 color="black"><u><?php echo strtoupper($r['nmsurat']); ?> </u></font></td>
  </tr>
</table>
<br>
<table align="center" class="table-list" width="90%" border="0" cellspacing="0" cellpadding="1">
  <tr>
    <td colspan="5">Yang bertanda tangan dibawah ini : </td>
  </tr>
      <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td>1.</td><td width="25%">Nama</td><td>:</td><td colspan="2"><?php echo $r['nama'];?></td>
  </tr>
  <tr>
    <td>2.</td><td>NIK</td><td>:</td><td colspan="2"><?php echo $r['nik'];?></td>
  </tr>
    <tr>
    <td>3.</td><td>Jenis Kelamin</td><td>:</td><td colspan="2"><?php echo $r['jk'];?></td>
  </tr>
      <tr>
    <td>4.</td><td>Tmp. & Tgl. Lahir</td><td>:</td><td colspan="2"><?php echo $r['tmp_lahir'];?>, <?php echo $r['tgl_lahir'];?></td>
  </tr>
      <tr>
    <td>5.</td><td>Kewarganegaraan</td><td>:</td><td colspan="2"><?php echo $r['kwng'];?></td>
  </tr>
    <tr>
    <td>6.</td><td>Agama</td><td>:</td><td colspan="2"><?php echo $r['agama'];?></td>
  </tr>
      <tr>
    <td>7.</td><td>Pekerjaan</td><td>:</td><td colspan="2"><?php echo $r['kerjaan'];?></td>
  </tr>
    <tr>
    <td>8.</td><td>Alamat</td><td>:</td><td colspan="2"><?php echo $r['alamat'];?> Desa <?php echo $r['desa'];?></td>
  </tr>
  <tr>
    <td></td><td></td><td></td><td colspan="2">Kec. <?php echo $r['kec'];?> Kab. <?php echo $r['kab'];?></td>
  </tr>

      <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
    <tr>
    <td colspan="5">Demikian ini menyatakan bahwa saya dengan itikad baik telah menguasai sebidang tanah seluas <?php echo format_angka($dt[2]);?> Ha./m2 *) yang terletak di :</td>
  </tr>
  <tr>
    <td>1.</td><td>Jalan</td><td>:</td><td colspan="2"><?php echo $dt[3];?></td>
  </tr>
  <tr>
    <td>2.</td><td>RT/RW</td><td>:</td><td colspan="2"><?php echo $dt[4];?></td>
  </tr>
  <tr>
    <td>3.</td><td>Desa/Kelurahan</td><td>:</td><td colspan="2"><?php echo $dt[5];?></td>
  </tr>
  <tr>
    <td>4.</td><td>Kota Administrasi</td><td>:</td><td colspan="2"><?php echo $dt[6];?></td>
  </tr>
  <tr>
    <td>5.</td><td>NIB</td><td>:</td><td colspan="2"><?php echo $dt[7];?></td>
  </tr>
<tr>
    <td>6.</td><td>Status Tanah</td><td>:</td><td colspan="2"><?php echo $dt[8];?></td>
  </tr>
<tr>
    <td>7.</td><td>Dipergunakan untuk</td><td>:</td><td colspan="2"><?php echo $dt[9];?></td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td><td></td>
  </tr>
  <tr>
    <td colspan="5">Batas - batas tanah :</td>
  </tr>

  <tr>
    <td>1.</td><td>Barat berbatasan dengan</td><td>:</td><td colspan="2"><?php echo $dt[12];?></td>
  </tr>
      <tr>
    <td>2.</td><td>Utara berbatasan dengan</td><td>:</td><td colspan="2"><?php echo $dt[13];?></td>
  </tr>
      <tr>
    <td>3.</td><td>Timur berbatasan dengan</td><td>:</td><td colspan="2"><?php echo $dt[14];?></td>
  </tr>
      <tr>
    <td>4.</td><td>Selatan berbatasan dengan</td><td>:</td><td colspan="2"><?php echo $dt[15];?></td>
  </tr>
    <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
    <tr>
    <td colspan="5" align="justify">Bahwa bidang tanah tersebut saya kuasai/miliki <?php echo $dt[10];?> sejak tahun <?php echo $dt[11];?> yang sampai saat ini saya kuasai terus menerus, tidak dijadikan / menjadi jaminan sesuatu hutang dan tidak dalam sengketa.<br>Surat pernyataan ini saya buat dengan penuh tanggung jawab dan saya bersedia mengangkat sumpah bila diperlukan. Apabila ternyata permintaan ini tidak benar saya bersedia dituntut dihadapan pihak yang berwenang</td>
  </tr>
<tr>
    <td>1.</td><td>Nama</td><td>:</td><td colspan="2"><?php echo $dt[16];?></td>
  </tr>
      <tr>
    <td></td><td>Umur</td><td>:</td><td colspan="2"><?php echo $dt[17];?> Tahun</td>
  </tr>
      <tr>
    <td></td><td>Pekerjaan</td><td>:</td><td colspan="2"><?php echo $dt[18];?></td>
  </tr>
      <tr>
    <td></td><td>Alamat</td><td>:</td><td colspan="2"><?php echo $dt[19];?></td>
  </tr>
  <tr>
    <td>2.</td><td>Nama</td><td>:</td><td colspan="2"><?php echo $dt[20];?></td>
  </tr>
      <tr>
    <td></td><td>Umur</td><td>:</td><td colspan="2"><?php echo $dt[21];?> Tahun</td>
  </tr>
      <tr>
    <td></td><td>Pekerjaan</td><td>:</td><td colspan="2"><?php echo $dt[22];?></td>
  </tr>
      <tr>
    <td></td><td>Alamat</td><td>:</td><td colspan="2"><?php echo $dt[23];?></td>
  </tr>
 <tr>
    <td colspan="4">Saksi - saksi :</td><td width="30%" align="center"><?php echo $rd['desa'];?>,&nbsp;<?php echo $bulan;?><br>Yang membuat pernyataan</td>
  </tr>
   <tr>
    <td>1.</td><td><?php echo $dt[16];?></td><td></td><td>(_______________)</td>
  </tr>
   <tr>
    <td colspan="4">&nbsp;<br></td><td><small style="color: grey;">Materai</small></td>
  </tr>
   <tr>
    <td>2.</td><td><?php echo $dt[20];?></td><td></td><td>(_______________)</td>
  </tr>
  <tr>
    <td></td><td></td><td></td><td></td><td align="center"><b><u><?php echo $dt[1];?></u></b></td>
  </tr>
<tr><td colspan="4">
<table width="90%" align="right" border="0" cellspacing="1" cellpadding="2" class="table-print">
  <tr>
    <td></td><td align="center" class="pull pull-right">Mengetahui</td>
  </tr>
  <tr>
    <td rowspan="3"><img src="../qrcode/<?php echo $r['qrcode'];?>" style="border: 0px solid white; width: 5em; height: 5em; margin-right: 2em; margin-top: 0em;"></td><td align="center" valign="top" class="pull pull-right">Kepala Desa <?php echo $rd['desa'];?></td>
  </tr>
  <tr>
    <td align="center" class="pull pull-right"></td>
  </tr>
  <tr>
    <td align="center" class="pull pull-right" width="45%"><br><br><br><u><b><?php echo $r['ttd'];?></b></u><br>NIP. <?php echo $rd['nipkades'];?></td>
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