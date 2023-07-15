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
    <td colspan="3" align="center"><strong><font size=3 color="black">FORMULIR SURAT IZIN ORANG TUA</font>
    </strong></td>
  </tr>
    <tr>
    <td></td><td></td><td align="right">Model N5 &nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center"><strong><font size=3 color="black"><u>SURAT IZIN ORANG TUA</u></font>
    </strong></td>
  </tr>
    <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>

<table align="center" class="table-list" width="97%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
    <tr>
    <td colspan="5">Yang bertanda tangan dibawah ini:</td>
  </tr>
  <tr>
    <td>A.</td><td>1. </td><td>Nama</td><td>:</td><td><?php echo $dt[33];?></td>
  </tr>
      <tr>
    <td></td><td>2. </td><td>Bin</td><td>:</td><td><?php echo $dt[34];?></td>
  </tr>
  <tr>
    <td></td><td>3. </td><td>NIK</td><td>:</td><td><?php echo $dt[32];?></td>
  </tr>
  <tr>
    <td></td><td>4. </td><td>Tmp. & Tgl. Lahir </td><td>:</td><td><?php echo $dt[36];?>, <?php echo $dt[37];?></td>
  </tr>
  <tr>
    <td></td><td>5. </td><td>Kewarganegaraan</td><td>:</td><td><?php echo $dt[38];?></td>
  </tr>
    <tr>
    <td></td><td>6. </td><td>Agama</td><td>:</td><td><?php echo $dt[39];?></td>
  </tr>
  <tr>
    <td></td><td>7. </td><td>Pekerjaan</td><td>:</td><td><?php echo $dt[40];?></td>
  </tr>
    <tr>
    <td></td><td valign="top">8. </td><td valign="top">Alamat</td><td valign="top">:</td><td><?php echo $dt[45];?>  Desa <?php echo $dt[41];?> <br>Kec. <?php echo $dt[42];?> Kab. <?php echo $dt[43];?> Prov. <?php echo $dt[44];?></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td>B. </td><td>1. </td><td>Nama</td><td>:</td><td><?php echo $dt[48];?></td>
  </tr>
      <tr>
    <td></td><td>2. </td><td>Binti</td><td>:</td><td><?php echo $dt[49];?></td>
  </tr>
  <tr>
    <td></td><td>3. </td><td>NIK</td><td>:</td><td><?php echo $dt[47];?></td>
  </tr>

  <tr>
    <td></td><td>4. </td><td>Tmp. & Tgl. Lahir </td><td>:</td><td><?php echo $dt[51];?>, <?php echo $dt[52];?></td>
  </tr>
  <tr>
    <td></td><td>5. </td><td>Kewarganegaraan</td><td>:</td><td><?php echo $dt[53];?></td>
  </tr>
    <tr>
    <td></td><td>6. </td><td>Agama</td><td>:</td><td><?php echo $dt[54];?></td>
  </tr>
  <tr>
    <td></td><td>7. </td><td>Pekerjaan</td><td>:</td><td><?php echo $dt[55];?></td>
  </tr>
    <tr>
    <td></td><td valign="top">8. </td><td valign="top">Alamat</td><td valign="top">:</td><td><?php echo $dt[60];?> Desa <?php echo $dt[56];?> <br>Kec. <?php echo $dt[57];?> Kab. <?php echo $dt[58];?> Prov. <?php echo $dt[59];?></td>
  </tr>
    <tr>
    <td colspan="5">Adalah ayah dan Ibu Kandung / wali / pengampu dari :</td>
  </tr>

  <?php
  $querycalon = mysqli_query ($con, "SELECT t_detailsurat.*, t_datacalon.* from  t_detailsurat, t_datacalon 
WHERE t_datacalon.status_na='Tidak Numpang' AND t_detailsurat.kode=t_datacalon.kode AND t_datacalon.kode='$_GET[kode]'");
while ($rc = mysqli_fetch_array($querycalon)){
?>

  <tr>
    <td></td><td>1.</td><td> Nama</td><td>:</td><td><?php echo $rc['nama'];?></td>
  </tr>
    <tr>
    <td></td><td>2.</td><td> Bin</td><td>:</td><td><?php echo $rc['binbinti'];?></td>
  </tr>
  <tr>
  <tr>
    <td></td><td>3.</td><td> NIK</td><td>:</td><td><?php echo $rc['nik'];?></td>
  </tr>

    <td></td><td>4.</td><td> Tmp. & Tgl. Lahir </td><td>:</td><td><?php echo $rc['tmp_lahir'];?>, <?php echo $rc['tgl_lahir'];?></td>
  </tr>
  <tr>
    <td></td><td>5.</td><td> Kewarganegaraan</td><td>:</td><td><?php echo $rc['kwng'];?></td>
  </tr>
    <tr>
    <td></td><td>6.</td><td> Agama</td><td>:</td><td><?php echo $rc['agama'];?></td>
  </tr>
  <tr>
    <td></td><td>7.</td><td> Pekerjaan</td><td>:</td><td><?php echo $rc['pkjn'];?></td>
  </tr>
    <tr>
    <td></td><td valign="top">8.</td><td valign="top"> Alamat</td><td valign="top">:</td><td><?php echo $rc['alamat'];?> Desa <?php echo $rc['desa'];?> <br>Kec. <?php echo $rc['kec'];?> Kab. <?php echo $rc['kab'];?> Prov. <?php echo $rc['prov'];?></td>
  </tr>
<?php }?>


    <?php
  $querycalon = mysqli_query ($con, "SELECT t_detailsurat.*, t_datacalon.* from  t_detailsurat, t_datacalon 
WHERE t_datacalon.status_na='Numpang Nikah' AND t_detailsurat.kode=t_datacalon.kode AND t_datacalon.kode='$_GET[kode]'");
while ($rc = mysqli_fetch_array($querycalon)){
?>


  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
<td colspan="5">Memberikan izin kepada anak kami untuk melakukan pernikahan dengan : </td> 
    <tr>
    <td></td><td>1.</td><td> Nama</td><td>:</td><td><?php echo $rc['nama'];?></td>
  </tr>
  <tr>
    <td></td><td>2.</td><td> Bin</td><td>:</td><td><?php echo $rc['binbinti'];?></td>
  </tr>
  <tr>
    <td></td><td>3.</td><td> NIK</td><td>:</td><td><?php echo $rc['nik'];?></td>
  </tr>
  <tr>
    <td></td><td>4.</td><td> Tmp. & Tgl. Lahir </td><td>:</td><td><?php echo $rc['tmp_lahir'];?>, <?php echo $rc['tgl_lahir'];?></td>
  </tr>
  <tr>
    <td></td><td>5.</td><td> Kewarganegaraan</td><td>:</td><td><?php echo $rc['kwng'];?></td>
  </tr>
    <tr>
    <td></td><td>6.</td><td> Agama</td><td>:</td><td><?php echo $rc['agama'];?></td>
  </tr>
  <tr>
    <td></td><td>7.</td><td> Pekerjaan</td><td>:</td><td><?php echo $rc['pkjn'];?></td>
  </tr>
    <tr>
    <td></td><td valign="top">8.</td><td valign="top"> Alamat</td><td valign="top">:</td><td><?php echo $rc['alamat'];?> Desa <?php echo $rc['desa'];?> <br>Kec. <?php echo $rc['kec'];?> Kab. <?php echo $rc['kab'];?> Prov. <?php echo $rc['prov'];?></td>
  </tr>
<?php }?>

    <tr>
    <td colspan="5">Demikian Surat izin ini di buat dengan kesadaran tanpa ada paksaan dari siapapun dan untuk digunakan seperlunya..</td>
  </tr>
</table>
<tr><td colspan="3">
<table width="100%" align="right" border="0" cellspacing="1" cellpadding="0" class="table-print">
  <tr>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td></td><td></td><td align="center" class="pull pull-right"> <?php echo $rd['desa'];?>, <?php echo $bulan;?></td>
  </tr>    <tr>
    <td align="center">Ayah,</td><td></td><td align="center" class="pull pull-right">Ibu,</td>
  </tr>
    <tr>
    <td></td><td rowspan="4" align="center"><img src="../qrcode/<?php echo $r['qrcode'];?>" style="border: 1px solid white; width: 5em; height: 5em; margin-right: 0em; margin-top: -2em;"></td> <td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><u><?php echo $dt[33];?></u></td><td align="center" class="pull pull-right"><u><?php echo $dt[48];?></u></td>
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