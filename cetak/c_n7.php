<link rel="stylesheet" href="../assets/css/style.css">
<?php
include_once "../koneksi.php";
include_once "../assets/inc.php";

# Baca variabel URL
$kodesurat = $_GET['kode'];

# Perintah untuk mendapatkan data dari tabel Surat lain
$query = mysqli_query ($con, "SELECT t_wali.*, t_sutarnikah.*, t_n7.* from t_wali, t_sutarnikah, t_n7 WHERE t_sutarnikah.kode=t_n7.kode AND t_wali.kode=t_n7.kode AND t_n7.kode='$kodesurat'");
while ($r = mysqli_fetch_array($query)){
  $tgl = $r['tgl'];
  $bl=format_hari_tanggal($tgl);
  $bln=explode(',',$bl);
  $bulan=$bln['1'];
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
    <td colspan="4" align="left"><font size=2>Lampiran XI <br>Keputusan Dirjen Bimas Islam No. 473 Tahun 2020</font>
    <br></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="center"><strong><font size=3 color="black">FORMULIR PEMBERITAHUAN</font></a>
    </strong><br></td>
  </tr>
  <tr>
    <td colspan="4" align="center"><strong><font size=3 color="black">KEKURANGAN SYARAT / PENOLAKAN PERKAWINAN / RUJUK<br></font>
    </strong><br></td>
  </tr>
<tr>
    <td colspan="4" align="right">Model N7</td>
  </tr>
  <tr>
    <td colspan="4" align="center"><strong><font size=3 color="black">KANTOR URUSAN AGAMA <br>KECAMATAN <?php echo strtoupper($rd['kec']);?> <br>KABUPATEN <?php echo strtoupper($rd['kab']);?></font></a>
    </strong></td>
  </tr>
</table>
<br>
<table align="center" class="table-list" width="95%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td width="20%" colspan="2">Nomor</td><td>:</td><td><?php echo $r['nokua'];?></td>
  </tr>
  <tr>
    <td width="20%" colspan="2">Lampiran</td><td>:</td><td>________________</td>
  </tr>
  <tr>
    <td width="20%" colspan="2">Perihal</td><td>:</td><td><b>Pemberitahuan Kekurangan Syarat / Penolakan Perkawinan / Rujuk *)</b><br></td>
  </tr>
  <tr>
    <td colspan="4"><br></td>
  </tr>
  <tr>
    <td width="20%" colspan="4">Kepada Yth.</td>
  </tr>
  <tr>
    <td width="20%" colspan="4">Calon Pengantin / Wali</td>
  </tr>
  <tr>
    <td width="20%" colspan="4"><?php echo $r['namaca'];?> / <?php echo $r['namacb'];?></td>
  <tr><tr>
    <td width="20%" colspan="4">di - <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>TEMPAT</u></td>
  <tr>
    <td colspan="4"><br></td>
  </tr>
  <tr>
    <td colspan="4">Dengan hormat, setelah dilakukan pemeriksaan terhadap persyaratan pendaftaran perkawinan / rujuk yang diatur dalam peraturan perundang - undangan bahwa permohonan pendaftaran perkawinan atau rujuk saudara <?php echo $r['namaca'];?> dengan saudari <?php echo $r['namacb'];?> diberitahukan sebagai berikut : </td>
  </tr>
      <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr><?php 
    $query = mysqli_query ($con, "SELECT * from t_n7 WHERE kode='$kodesurat' AND status='Kurang syarat'");
while ($re = mysqli_fetch_array($query)){
  ?>
    <td colspan="4">[<?php echo $re['cek'];?>] Perkawinan dapat dilaksanakan dengan melengkapi persyaratan :</td>
  </tr>
  <?php
  $sy = explode(',', $re['syarat']);
  for($i=0; $i < count($sy); $i++){
?>
  <tr>
    
    <td colspan="4">&nbsp;&nbsp;&nbsp;- <?php echo $sy[$i]. "<br>";}}?>
  </tr>
  <tr><?php 
    $query = mysqli_query ($con, "SELECT * from t_n7 WHERE kode='$kodesurat' AND status='Ditolak'");
while ($rf = mysqli_fetch_array($query)){
  ?>
    <td colspan="4">[<?php echo $rf['cek'];?>] Tidak dapat dilaksanakan (ditolak) karena tidak melengkapi persyaratan berupa : </td>
  </tr>
  <?php
  $sy = explode(',', $rf['syarat']);
  for($i=0; $i < count($sy); $i++){
?>
  <tr>
    <td colspan="4">&nbsp;&nbsp;&nbsp;- <?php echo $sy[$i]. "<br>";}}?></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">Demikian agar menjadi maklum.</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
<tr><td colspan="4">
<table width="100%" align="right" border="0" cellspacing="1" cellpadding="0" class="table-print">
  <tr>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td width="50%"></td><td></td><td align="center">Wasalam,<br> Kepala / Penghulu</td>
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
    <td align="center"></td><td></td><td align="center" class="pull pull-right">_______________</td>
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