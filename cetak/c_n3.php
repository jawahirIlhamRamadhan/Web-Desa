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
<table width="100%" align="center" border="0" cellspacing="1" cellpadding="1" class="table-print">
  <tr>
    <td colspan="3">LAMPIRAN IV
<br>KEPUTUSAN DIREKTUR JENDERAL BIMBINGAN MASYARAKAT ISLAM
<br>NOMOR 473 TAHUN 2020
<br>TENTANG
<br>PETUNJUK TEKNIS PELAKSANAAN PENCATATAN PERNIKAHAN</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center"><strong><font size=4 color="black">FORMULIR PERMOHONAN PENCATATAN ISBAT</font></a>
    </strong></td>
  </tr>
    <tr>
    <td></td><td></td><td align="right">Model N3 &nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td>Perihal : <b>Permohonan Pencatatan Isbat</b></td><td></td><td align="right"><?php echo $rd['desa'];?>, &nbsp;<?php echo $bulan;?>&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr><?php 
$query = mysqli_query ($con, "SELECT * from t_kua");
while ($re = mysqli_fetch_array($query)){
?>
    <td colspan="3">Kepada Yth, <br> Kepala KUA Kecamatan / PPN LN <br> Di  <br>&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $re['kec'];?></u></td>
  </tr>
</table>
<br>
<table align="center" class="table-list" width="100%" border="0" cellspacing="1" cellpadding="2">

  <tr>
    <td colspan="3">Dengan hormat, kami mengajukan permohonan pencatatan isbat untuk atas nama :</td>
  </tr>
</table>
<table align="center" class="table-list" width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td>Calon Suami</td><td>:</td><td><?php echo $dt[1];?></td>
  </tr>
    <tr>
    <td>Calon Istri</td><td>:</td><td><?php echo $dt[17];?></td>
  </tr>
  <tr>
    <td>Tanggal Penetapan</td><td>:</td><td>___________________________</td>
  </tr>
    <tr>
    <td>Pengadilan Agama</td><td>:</td><td>___________________________</td>
  </tr>
    <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">Bersama ini kami sampaikan surat-surat yang diperlukan untuk diperiksa sebagai berikut:
    <br>1. Surat pengantar nikah dari Desa/Kelurahan
    <br>2. Persetujuan calon mempelai
    <br>3. Fotokopi KTP
    <br>4. Fotokopi akte kelahiran
    <br>5. Fotokopi kartu keluarga
    <br>6. Paspoto 2x3 = 3 lembar berlatar belakang biru
    <br>7. ________________________________
    <br>8. ________________________________
    </td>
  </tr>
  </table>


<table align="center" class="table-list" width="800" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
    <tr>
    <td colspan="3">Demikian permohonan ini kami sampaikan, kiranya dapat diperiksa, dihadiri, dan dicatat sesuai dengan ketentuan peraturan perundang - undangan.</td>
  </tr>

<tr><td></td><td></td><td></td></tr>
</table>
<table width="100%" align="right" border="0" cellspacing="1" cellpadding="0" class="table-print">
  <tr>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td width="35%">Diterima tanggal _________________</td><td align="center" class="pull pull-right"></td>
  </tr>    <tr>
    <td>Yang Menerima, <br>Kepala KUA / PPN LN</td><td></td><td align="center" class="pull pull-right">Pemohon,</td>
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
    <td><u><?php echo $re['nm_kepala']; }?></u></td><td align="center" class="pull pull-right"><u><?php echo $dt[1];?></u></td>
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