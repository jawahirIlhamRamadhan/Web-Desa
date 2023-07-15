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
<table width="97%" align="center" border="0" cellspacing="1" cellpadding="1" class="table-print">
  <tr>
    <td colspan="3"><small>LAMPIRAN IV
<br>KEPUTUSAN DIREKTUR JENDERAL BIMBINGAN MASYARAKAT ISLAM
<br>NOMOR 473 TAHUN 2020
<br>TENTANG
<br>PETUNJUK TEKNIS PELAKSANAAN PENCATATAN PERNIKAHAN</small></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center"><strong><font size=3 color="black">FORMULIR <?php echo strtoupper($r['nmsurat']); ?>
      
    </font>
    </strong></td>
  </tr>
    <tr>
    <td></td><td></td><td align="right">Model N6 &nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td width="25%"><font size=3>DESA / KELURAHAN </td><td>:</td><td><?php echo strtoupper($rd['desa']);?></font></td>
  </tr>
  <tr>
    <td width="25%"><font size=3>KECAMATAN </td><td>:</td><td><?php echo strtoupper($rd['kec']);?></font></td>
  </tr>
  <tr>
    <td width="25%"><font size=3>KABUPATEN </td><td>:</td><td><?php echo strtoupper($rd['kab']);?></font></a>
    </td>
  </tr>
    <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center"><strong><font size=3 color="black">SURAT KETERANGAN KEMATIAN SUAMI/ISTRI
      </font>
    </strong><br><small><?php echo $r['no'];?></small></td>
  </tr>
</table>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
<table align="center" class="table-list" width="97%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3">Yang bertanda tangan dibawah ini Kepala Desa <?php echo $rd['desa'];?> Kecamatan <?php echo $rd['kec'];?> Kabupaten <?php echo $rd['kab'];?>, menerangkan dengan sesungguhnya bahwa :</td>
  </tr>
    <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
</table>
<table align="center" class="table-list" width="97%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>1.</td><td> Nama</td><td>:</td><td><?php echo $dt[1];?></td>
  </tr>
    <tr>
    <td>2.</td><td> Bin / Binti</td><td>:</td><td><?php echo $dt[2];?></td>
  </tr>
  <tr>
    <td>3.</td><td> NIK</td><td>:</td><td><?php echo $dt[0];?></td>
  </tr>
    <tr>
    <td>4.</td><td> Jenis Kelamin</td><td>:</td><td><?php echo $dt[3];?></td>
  </tr>
  <tr>
    <td>5.</td><td> Tmp. & Tgl. Lahir </td><td>:</td><td><?php echo $dt[4];?>, <?php echo $dt[5];?></td>
  </tr>
  <tr>
    <td>6.</td><td> Kewarganegaraan</td><td>:</td><td><?php echo $dt[6];?></td>
  </tr>
    <tr>
    <td>7.</td><td> Agama</td><td>:</td><td><?php echo $dt[7];?></td>
  </tr>
    <tr>
    <td>8.</td><td> Alamat</td><td>:</td><td><?php echo $dt[8];?></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  </table>
<table align="center" class="table-list" width="97%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td width="36%">Telah meninggal dunia pada tanggal </td><td>:</td><td><?php echo IndonesiaTgl($dt[21]);?></td>
  </tr>
    <tr>
    <td>Di </td><td>:</td><td><?php echo $dt[23];?></td>
  </tr>
    <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
    <tr>
    <td colspan="3">yang bersangkutan adalah <b><?php echo $dt[18];?></b> dari :</td>
  </tr>
  </table>
<table align="center" class="table-list" width="97%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>1. </td><td>Nama</td><td>:</td><td><?php echo $dt[10];?></td>
  </tr>
    <tr>
    <td>2.</td><td> Bin / Binti </td><td>:</td><td><?php echo $dt[11];?></td>
  </tr>
  <tr>
    <td>3. </td><td>NIK</td><td>:</td><td><?php echo $dt[9];?></td>
  </tr>
    <tr>
    <td>4. </td><td>Jenis Kelamin</td><td>:</td><td><?php echo $dt[12];?></td>
  </tr>
  <tr>
    <td>5. </td><td>Tmp. & Tgl. Lahir </td><td>:</td><td><?php echo $dt[13];?>, <?php echo $dt[14];?></td>
  </tr>
  <tr>
    <td>6. </td><td>Kewarganegaraan</td><td>:</td><td><?php echo $dt[15];?></td>
  </tr>
    <tr>
    <td>7. </td><td>Agama</td><td>:</td><td><?php echo $dt[16];?></td>
  </tr>
    <tr>
    <td>9. </td><td>Alamat</td><td>:</td><td><?php echo $dt[17];?></td>
  </tr>
  </table>

<table align="center" class="table-list" width="97%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
    <tr>
    <td colspan="3">Demikian surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya.</td>
  </tr>

<tr><td></td><td></td><td></td></tr>
</table>
<table width="90%" align="right" border="0" cellspacing="1" cellpadding="0" class="table-print">
  <tr>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
    <tr>
    <td></td><td></td><td align="center" class="pull pull-right"><?php echo $rd['desa'];?>, &nbsp;<?php echo $bulan;?></td>
  </tr>    <tr>
    <td></td><td></td><td align="center" class="pull pull-right">Kepala Desa,</td>
  </tr>
        <tr>
    <td rowspan="4" align="left"><img src="../qrcode/<?php echo $r['qrcode'];?>" style="border: 1px solid white; width: 5em; height: 5em; margin-right: 0em; margin-top: -2em;"></td> <td></td>
  </tr>
      <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td></td><td align="center" class="pull pull-right"><br><br><u><b><?php echo $r['ttd'];?></b></u></td>
  </tr>
  <tr>
    <td></td><td align="center" class="pull pull-right">NIP. <?php echo $rd['nipkades'];?></td>
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