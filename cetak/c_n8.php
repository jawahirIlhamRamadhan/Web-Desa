    <link rel="stylesheet" href="../assets/css/style.css">
<?php
include_once "../koneksi.php";
include_once "../assets/inc.php";

# Baca variabel URL
$kodesurat = $_GET['kode'];

# Perintah untuk mendapatkan data dari tabel Surat lain
$query = mysqli_query ($con, "SELECT t_wali.*, t_sutarnikah.*, t_n8.* from t_wali, t_sutarnikah, t_n8 WHERE t_sutarnikah.kode=t_n8.kode AND t_wali.kode=t_n8.kode AND t_n8.kode='$kodesurat'");
while ($r = mysqli_fetch_array($query)){
?>
<?php 
$query = mysqli_query ($con, "SELECT * from t_kua WHERE id='1'");
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
    <td colspan="4" align="left"><font size=2>Lampiran XII <br>Keputusan Dirjen Bimas Islam No. 473 Tahun 2020</font>
    <br></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
<tr>
    <td colspan="4" align="center"><strong><font size=4 color="black">FORMULIR PEMERIKSAAN NIKAH</font>
    </strong><br></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td><td align="right">Model N8</td>
  </tr>
  <tr>
    <td colspan="4" align="center"><strong><font size=4 color="black"><u>PEMERIKSAAN NIKAH </u></font>
    </strong><br><?php echo $r['nokua'];?></td>
  </tr>
</table>
<br>
<table align="center" class="table-list" width="95%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td colspan="4" align="justify">Pada hari ini : <?php echo strtoupper($r['hr']);?> tanggal : <?php echo strtoupper(kekata($r['tgl']));?> bulan : <?php echo strtoupper(kekata($r['bln']));?>, tahun : <?php echo strtoupper(kekata($r['thn']));?>, bertempat di KUA Kecamatan <?php echo $rd['kec'];?> Kabupaten <?php echo $rd['kab'];?> Provinsi <?php echo $rd['prov'];?>, telah dilakukan pemeriksaan Nikah terhadap :</td>
  </tr>
      <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td>1. </td><td width="30%">Nama Calon Suami</td><td>:</td><td><?php echo $r['namaca'];?></td>
  </tr>
  <tr>
    <td>2. </td><td>Nama Calon Istri</td><td>:</td><td><?php echo $r['namacb'];?></td>
  </tr>
  <tr>
    <td>3. </td><td>Nama Wali</td><td>:</td><td><?php echo $r['wali'];?></td>
  </tr>
  <tr>
    <td>4. </td><td>Rencana Akad Perkawinan</td><td>:</td>
  </tr>
  <tr>
    <td></td><td>a. Hari/Tanggal</td><td>:</td><td><?php echo $r['hari'];?> / <?php echo $r['tgl_akad'];?></td>
  </tr>
  <tr>
    <td></td><td>b. Waktu</td><td>:</td><td><?php echo $r['waktu'];?></td>
  </tr>
  <tr>
    <td></td><td>c. Tempat Akad Nikah</td><td>:</td><td><?php echo $r['tmpt'];?></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>

  <tr>
    <td>5. </td><td>Nama Petugas Pemeriksa</td><td>:</td><td><?php echo $r['petugas'];?></td>
  </tr>
  <tr>
    <td></td><td>NIP</td><td>:</td><td><?php echo $r['nip'];?></td>
  </tr>
  <tr>
    <td></td><td>Jabatan</td><td>:</td><td><?php echo $r['jab'];?></td>
  </tr>

<tr><td colspan="4">
<table width="100%" align="right" border="0" cellspacing="1" cellpadding="0" class="table-print">
  <tr>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td width="50%"></td><td></td><td align="center">Petugas</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"></td><td></td><td align="center" class="pull pull-right"><u><?php echo $r['petugas'];?></u></td>
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