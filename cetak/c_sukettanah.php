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
    <td colspan="3" align="center"><strong><font size=4 color="black"><u><?php echo strtoupper($r['nmsurat']); ?> </u></font></a>
    </strong><br><font size=2 color="black">Nomor : <?php echo $r['no']; ?></font></td>
  </tr>
</table>
<br>
<table align="center" class="table-list" width="800" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td colspan="4">Yang bertanda tangan dibawah ini Kepala Desa <?php echo $rd['desa'];?> Kecamatan <?php echo $rd['kec'];?> Kabupaten <?php echo $rd['kab'];?>, menerangkan bahwa : </td>
  </tr>
      <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td>1.</td><td>Nama</td><td>:</td><td><?php echo $r['nama'];?></td>
  </tr>
  <tr>
    <td>2.</td><td>NIK</td><td>:</td><td><?php echo $r['nik'];?></td>
  </tr>
    <tr>
    <td>3.</td><td>Jenis Kelamin</td><td>:</td><td><?php echo $r['jk'];?></td>
  </tr>
      <tr>
    <td>4.</td><td>Tmp. & Tgl. Lahir</td><td>:</td><td><?php echo $r['tmp_lahir'];?>, <?php echo $r['tgl_lahir'];?></td>
  </tr>
      <tr>
    <td>5.</td><td>Kewarganegaraan</td><td>:</td><td><?php echo $r['kwng'];?></td>
  </tr>
    <tr>
    <td>6.</td><td>Agama</td><td>:</td><td><?php echo $r['agama'];?></td>
  </tr>
      <tr>
    <td>7.</td><td>Pekerjaan</td><td>:</td><td><?php echo $r['kerjaan'];?></td>
  </tr>
    <tr>
    <td>8.</td><td>Alamat</td><td>:</td><td><?php echo $r['alamat'];?> Desa <?php echo $r['desa'];?></td>
  </tr>
  <tr>
    <td></td><td></td><td></td><td>Kec. <?php echo $r['kec'];?> Kab. <?php echo $r['kab'];?></td>
  </tr>

      <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
    <tr>
    <td colspan="4">Warga tersebut diatas memiliki Tanah yang diperoleh dari <?php echo $dt[4];?> seluas <?php echo format_angka($dt[2]);?> M2 <b><i>(<?php echo ucwords(terbilang($dt[2]));?> Meter Persegi)</i></b> yang terletak di <?php echo $dt[3];?>, dengan batas - batas sebagai berikut :</td>
  </tr>
    <tr>
    <td>1.</td><td>Barat berbatasan dengan</td><td>:</td><td><?php echo $dt[5];?></td>
  </tr>
      <tr>
    <td>2.</td><td>Utara berbatasan dengan</td><td>:</td><td><?php echo $dt[6];?></td>
  </tr>
      <tr>
    <td>3.</td><td>Timur berbatasan dengan</td><td>:</td><td><?php echo $dt[7];?></td>
  </tr>
      <tr>
    <td>4.</td><td>Selatan berbatasan dengan</td><td>:</td><td><?php echo $dt[8];?></td>
  </tr>
    <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
    <tr>
    <td colspan="4">Demikian keterangan ini dibuat, untuk dapat dipergunakan sebagaimana mestinya. </td>
  </tr>

<tr><td colspan="4">
<table width="90%" align="right" border="0" cellspacing="1" cellpadding="4" class="table-print">
    <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
    <tr>
    <td></td><td align="center" class="pull pull-right"><?php echo $rd['desa'];?>,&nbsp;<?php echo $bulan;?></td>
  </tr>
  <tr>
    <td rowspan="3"><img src="../qrcode/<?php echo $r['qrcode'];?>" style="border: 1px solid white; width: 5em; height: 5em; margin-right: 10em; margin-top: 0em;"></td><td align="center" valign="top" class="pull pull-right">Kepala Desa <?php echo $rd['desa'];?></td>
  </tr>
  <tr>
    <td align="center" class="pull pull-right"></td>
  </tr>
  <tr>
    <td align="center" class="pull pull-right"><br><br><br><u><b><?php echo $r['ttd'];?></b></u><br>NIP. <?php echo $rd['nipkades'];?></td>
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